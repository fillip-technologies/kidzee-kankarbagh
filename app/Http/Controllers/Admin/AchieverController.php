<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achiever;
use Illuminate\Http\Request;

class AchieverController extends Controller
{
    public function index(Request $request)
    {
        $type = $request->get('type');
        $achievers = Achiever::when($type, fn($q) => $q->where('type', $type))
            ->latest()
            ->paginate(10);

        return view('admin.achievers.index', compact('achievers', 'type'));
    }

    public function create(Request $request)
    {
        $type = $request->get('type');
        return view('admin.achievers.create',compact('type'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:academic,star',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'class' => 'nullable|string|max:50',
            'session' => 'nullable|string|max:50',
            'description' => 'nullable|string',
            'event_details' => 'nullable|string|max:255',
            'rank' => 'nullable|string|max:50',
        ]);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/achievers'), $filename);
            $validated['photo'] = 'uploads/achievers/' . $filename;
        }

        Achiever::create($validated);

        return redirect()->route('admin.achievers.index')->with('success', 'Achiever created successfully.');
    }

    public function edit(Request $request, Achiever $achiever)
    {
        // $type = $request->get('type');
        $type = $achiever->type;
        return view('admin.achievers.edit', compact('achiever','type'));
    }

    public function update(Request $request, Achiever $achiever)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:academic,star',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'class' => 'nullable|string|max:50',
            'session' => 'nullable|string|max:50',
            'description' => 'nullable|string',
            'event_details' => 'nullable|string|max:255',
            'rank' => 'nullable|string|max:50',
        ]);

        if ($request->hasFile('photo')) {
            // delete old photo if exists
            if ($achiever->photo && file_exists(public_path($achiever->photo))) {
                unlink(public_path($achiever->photo));
            }

            $file = $request->file('photo');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('uploads/achievers'), $filename);
            $validated['photo'] = 'uploads/achievers/' . $filename;
        }

        $achiever->update($validated);

        return redirect()->route('admin.achievers.index')->with('success', 'Achiever updated successfully.');
    }

    public function destroy(Achiever $achiever)
    {
        if ($achiever->photo && file_exists(public_path($achiever->photo))) {
            unlink(public_path($achiever->photo));
        }
        $achiever->delete();

        return redirect()->route('admin.achievers.index')->with('success', 'Achiever deleted successfully.');
    }
}
