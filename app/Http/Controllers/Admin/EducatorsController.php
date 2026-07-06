<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class EducatorsController extends Controller
{


    public function indexteacher()
    {
        return view('admin.educatorse.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png',
            'bio' => 'nullable|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('teacher_photos'), $filename);
            $data['photo'] = 'teacher_photos/' . $filename;
        }

        Teacher::create($data);

        return redirect('/teachers/list')->with('success', 'Teacher Added Successfully!');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
              'position' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png',
            'bio' => 'nullable|string',
        ]);

        $teacher = Teacher::findOrFail($id);

        if ($request->hasFile('photo')) {
            if ($teacher->photo && file_exists(public_path($teacher->photo))) {
                unlink(public_path($teacher->photo));
            }

            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('teacher_photos'), $filename);
            $teacher->photo = 'teacher_photos/' . $filename;
        }

        $teacher->name = $request->name;
         $teacher->position = $request->position;
        $teacher->department = $request->department;
        $teacher->bio = $request->bio;
        $teacher->save();

        return redirect('/teachers/list')->with('success', 'Teacher Updated Successfully!');
    }


    public function edit_teacher($id)
    {
        $teacher = Teacher::where('id', $id)->first();
        return view('admin.educatorse.edit', compact('teacher'));
    }


    public function teacher_delete($id)
    {
        $teacher = Teacher::where('id', $id)->first()->delete();
        if ($teacher) {
            return back()->with('success', 'Teacher Deleted SuccessFully !');
        }
    }


    public function listTeacher()
    {
        $teachers = Teacher::all();
        return view('admin.educatorse.index', compact('teachers'));
    }
}
