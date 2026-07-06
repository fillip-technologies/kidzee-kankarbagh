<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchoolEvent;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $sliders = SchoolEvent::all();
        return view('admin.event.index', compact('sliders'));
    }
    
    public function fetch_slider_img()
    {
        $sliders = SchoolEvent::all();
         return response()->json([
            'success' => true,
            'data' => $sliders
        ]);
    }

    public function create()
    {
        return view('admin.event.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'slider_img'  => 'required|image',
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'published_on'=>  'required',
        ]);

        if ($request->hasFile('slider_img')) {
            $image = $request->file('slider_img');
            $name = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image/Home Page/'), $name);

            SchoolEvent::create([
                'slider_img'  => url('image/Home Page/' . $name),
                'title'       => $request->title,
                'description' => $request->description,
                'published_on'=> $request->published_on,
            ]);
        }

        return redirect()->route('admin.event.index')->with('success', 'Event uploaded successfully.');
    }

    public function edit($id)
    {
        $slider = SchoolEvent::findOrFail($id);
        return view('admin.event.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = SchoolEvent::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'slider_img' => 'nullable|image',
            'published_on'=>  'required',
        ]);

        if ($request->hasFile('slider_img')) {
            $image = $request->file('slider_img');
            $name = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image/Home Page/'), $name);
            $slider->slider_img = url('image/Home Page/' . $name);
        }

        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->published_on = $request->published_on;
        $slider->save();

        return redirect()->route('admin.event.index')->with('success', 'Event updated successfully!');
    }



    public function destroy(SchoolEvent $slider)
    {
        $path = parse_url($slider->slider_img, PHP_URL_PATH);
        $filePath = public_path($path);

        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $slider->delete();

        return redirect()->route('admin.event.index')->with('success', 'Event deleted.');
    }
}

