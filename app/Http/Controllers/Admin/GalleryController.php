<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

// app/Http/Controllers/GalleryController.php
class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $data = $request->only(['gallery_type', 'section_id', 'title', 'description', 'alt_text', 'order']);

        $images = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $filename = time().'_'.$file->getClientOriginalName();
                $file->move(public_path('gallery'), $filename);
                $images[] = 'gallery/'.$filename;
            }
        }


        $data['image_path'] = $images;
       
        Gallery::create($data);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery created successfully.');
    }


    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    // GalleryController.php

    public function update(Request $request, Gallery $gallery)
    {
        // Update text fields
        $data = $request->only(['gallery_type', 'section_id', 'title', 'description', 'alt_text', 'order']);

        // Keep existing images
        $images = $gallery->image_path ?? [];

        // Add new uploaded images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $filename = time().'_'.$file->getClientOriginalName();
                $file->move(public_path('gallery'), $filename); // save in public/gallery
                $images[] = 'gallery/'.$filename; // store relative path in DB
            }
        }

        $data['image_path'] = $images;

        $gallery->update($data);

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery updated successfully.');
    }

    // Delete a single image from a gallery
    public function deleteImage(Gallery $gallery, $index)
    {
        $images = $gallery->image_path ?? [];

        if(isset($images[$index])) {
            $filePath = public_path($images[$index]);
            if(file_exists($filePath)){
                unlink($filePath); // delete physical file
            }
            unset($images[$index]); // remove from array
            $gallery->image_path = array_values($images); // reindex array
            $gallery->save();
        }

        return back()->with('success', 'Image deleted successfully.');
    }


    public function destroy(Gallery $gallery)
    {
        if ($gallery->image_path) {
            foreach ($gallery->image_path as $img) {
                Storage::disk('public')->delete($img);
            }
        }
        $gallery->delete();

        return redirect()->route('admin.gallery.index')->with('success', 'Gallery deleted successfully.');
    }


}
