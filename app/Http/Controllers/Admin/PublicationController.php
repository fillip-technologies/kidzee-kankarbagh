<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::latest()->paginate(10);
        return view('admin.publications.index', compact('publications'));
    }

    public function create()
    {
        return view('admin.publications.create');
    }

    public function edit(Publication $publication)
    {
        return view('admin.publications.edit', compact('publication'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:LITERATI,CAMPUS CHRONICLE,BLISS,NEWSLETTER',
            'year' => 'required|digits:4|integer',
            'month' => 'required|string|max:50',
            'pdf' => 'required|mimes:pdf|max:5120',
        ]);

        if ($request->hasFile('pdf')) {
            $filename = time() . '_' . $request->file('pdf')->getClientOriginalName();
            $request->file('pdf')->move(public_path('publications'), $filename);
            $pdfPath = 'publications/' . $filename;
        }

        Publication::create([
            'type' => $request->type,
            'year' => $request->year,
            'month' => $request->month,
            'pdf_path' => $pdfPath,
        ]);

        return redirect()->route('admin.publications.index')->with('success', 'Publication uploaded successfully.');
    }


    
    public function update(Request $request, Publication $publication)
    {
        $request->validate([
            'type' => 'required|in:LITERATI,CAMPUS CHRONICLE,BLISS,NEWSLETTER',
            'year' => 'required|digits:4|integer',
            'month' => 'required|string|max:50',
            'pdf' => 'nullable|mimes:pdf|max:5120',
        ]);

        $data = $request->only(['type', 'year', 'month']);

        if ($request->hasFile('pdf')) {
            // delete old file if exists
            $oldFile = public_path($publication->pdf_path);
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }

            $filename = time() . '_' . $request->file('pdf')->getClientOriginalName();
            $request->file('pdf')->move(public_path('publications'), $filename);
            $data['pdf_path'] = 'publications/' . $filename;
        }

        $publication->update($data);

        return redirect()->route('admin.publications.index')->with('success', 'Publication updated successfully.');
    }

    public function destroy(Publication $publication)
    {
        if ($publication->pdf_path) {
            $file = public_path($publication->pdf_path);
            if (file_exists($file)) {
                unlink($file);
            }
        }

        $publication->delete();

        return redirect()->route('admin.publications.index')->with('success', 'Publication deleted successfully.');
    }
}
