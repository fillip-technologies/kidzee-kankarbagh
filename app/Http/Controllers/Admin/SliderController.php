<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }

    public function fetch_slider_img()
    {
        $sliders = Slider::all();
        return response()->json([
            'success' => true,
            'data' => $sliders
        ]);
    }

    // Show create form
    public function create()
    {
        return view('admin.slider.create');
    }

    // Store new slider
    public function store(Request $request)
    {
        $request->validate([
            'slider_img'  => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $path = null;

        if ($request->hasFile('slider_img')) {
            $image = $request->file('slider_img');
            $name = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image/Home Page/'), $name);
            $path = 'image/Home Page/' . $name;
        }

        Slider::create([
            'slider_img'  => $path,
            'title'       => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.slider.index')->with('success', 'Slider uploaded successfully.');
    }

    // Show edit form
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    // Update existing slider
    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'slider_img'  => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('slider_img')) {
            // Delete old image if exists
            if (File::exists(public_path($slider->slider_img))) {
                File::delete(public_path($slider->slider_img));
            }

            $image = $request->file('slider_img');
            $name = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('image/Home Page/'), $name);
            $slider->slider_img = 'image/Home Page/' . $name;
        }

        $slider->update([
            'title'       => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.slider.index')->with('success', 'Slider updated successfully!');
    }

    // Delete slider
    public function destroy(Slider $slider)
    {
        if (File::exists(public_path($slider->slider_img))) {
            File::delete(public_path($slider->slider_img));
        }

        $slider->delete();

        return redirect()->route('admin.slider.index')->with('success', 'Image deleted successfully.');
    }
}
