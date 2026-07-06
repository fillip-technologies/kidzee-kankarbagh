<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AlumniShow as Alumni;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AlumniController extends Controller
{
    public function index()
    {
        $alumni = Alumni::latest()->paginate(10);
        return view('admin.alumni.index', compact('alumni'));
    }

    public function create()
    {
        return view('admin.alumni.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:150',
            'designation' => 'nullable|string|max:200',
            'quote' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = time() . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('uploads/alumni'), $filename);
            $data['photo'] = url('uploads/alumni/' . $filename);
        }

        Alumni::create($data);

        return redirect()->route('admin.alumni.index')->with('success', 'Alumni created successfully.');
    }

    public function edit(Alumni $alumnus)
    {
        return view('admin.alumni.edit', compact('alumnus'));
    }

   public function update(Request $request, Alumni $alumnus)
    {
        $data = $request->validate([
            'name' => 'required|string|max:150',
            'designation' => 'nullable|string|max:200',
            'quote' => 'nullable|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        if ($request->hasFile('photo')) {
            // Delete old photo
            if ($alumnus->photo && file_exists(public_path($alumnus->photo))) {
                unlink(public_path($alumnus->photo));
            }

            $photo = $request->file('photo');
            $filename = time() . '_' . $photo->getClientOriginalName();
            $photo->move(public_path('uploads/alumni'), $filename);
            $data['photo'] = url('uploads/alumni/' . $filename);
        }

        $alumnus->update($data);

        return redirect()->route('admin.alumni.index')->with('success', 'Alumni updated successfully.');
    }

    public function destroy(Alumni $alumnus)
    {
        if ($alumnus->photo) {
            $filePath = $alumnus->photo;

            if (File::exists($filePath)) {
                File::delete($filePath);
            }
        }

        $alumnus->delete();

        return redirect()->route('admin.alumni.index')->with('success', 'Alumni deleted successfully.');
    }
}
