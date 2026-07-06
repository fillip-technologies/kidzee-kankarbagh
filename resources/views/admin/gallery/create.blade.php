@extends('admin.include.layout')

@section('title', 'Add Gallery')

@section('content')
<div class="content-wrapper">
    <div class="container mx-auto px-6 py-6">
        <h4 class="text-xl font-semibold text-gray-800 mb-6">Add New Gallery</h4>

        <form action="{{ route('admin.gallery.store') }}" 
              method="POST" enctype="multipart/form-data" 
              class="space-y-6 bg-white p-6 rounded-lg shadow">
            @csrf

            <!-- Title -->
            <!-- <div>
                <label class="block text-gray-700 mb-1">Title</label>
                <input type="text" name="title" value="{{ old('title') }}" 
                       class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-300" required>
            </div> -->

            <!-- Gallery Type -->
            <div>
                <label class="block text-gray-700 mb-1">Gallery Type</label>
                <input type="text" name="gallery_type" value="{{ old('gallery_type') }}" 
                       class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-300">
            </div>

            <!-- Section ID -->
            <!-- <div>
                <label class="block text-gray-700 mb-1">Section ID</label>
                <input type="text" name="section_id" value="{{ old('section_id') }}" 
                       class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-300">
            </div> -->

            <!-- Description -->
            <!-- <div>
                <label class="block text-gray-700 mb-1">Description</label>
                <textarea name="description" rows="3" 
                          class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-300">{{ old('description') }}</textarea>
            </div> -->

            <!-- Alt Text
            <div>
                <label class="block text-gray-700 mb-1">Alt Text</label>
                <input type="text" name="alt_text" value="{{ old('alt_text') }}" 
                       class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-300">
            </div> -->

            <!-- Order -->
            <!-- <div>
                <label class="block text-gray-700 mb-1">Order</label>
                <input type="number" name="order" value="{{ old('order') }}" 
                       class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-300">
            </div> -->

            <!-- Upload Images -->
            <div>
                <label class="block text-gray-700 mb-1">Upload Images</label>
                <input type="file" name="images[]" multiple 
                       class="w-full border rounded-lg p-2">
            </div>

            <!-- Submit -->
            <div class="flex gap-4">
                <button type="submit" 
                        class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    Save
                </button>
                <a href="{{ route('admin.gallery.index') }}" 
                   class="px-6 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
