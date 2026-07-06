@extends('admin.include.layout')

@section('title', 'Edit Gallery')

@section('content')
<div class="content-wrapper">
    <div class="container mx-auto px-6 py-6">
        <h4 class="text-xl font-semibold text-gray-800 mb-6">Edit Gallery</h4>

        <form action="{{ route('admin.gallery.update', $gallery->id) }}" 
              method="POST" enctype="multipart/form-data" 
              class="space-y-6 bg-white p-6 rounded-lg shadow">
            @csrf 
            @method('PUT')

            <!-- Title -->
            <!-- <div>
                <label class="block text-gray-700 mb-1">Title</label>
                <input type="text" name="title" value="{{ old('title', $gallery->title) }}" 
                       class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-300" required>
            </div> -->

            <!-- Gallery Type -->
            <div>
                <label class="block text-gray-700 mb-1">Gallery Type</label>
                <input type="text" name="gallery_type" value="{{ old('gallery_type', $gallery->gallery_type) }}" 
                       class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-300">
            </div>

            <!-- Description -->
            <!-- <div>
                <label class="block text-gray-700 mb-1">Description</label>
                <textarea name="description" rows="3" 
                          class="w-full border rounded-lg p-2 focus:ring focus:ring-blue-300">{{ old('description', $gallery->description) }}</textarea>
            </div> -->


            <!-- Upload New Images -->
            <div>
                <label class="block text-gray-700 mb-1">Upload New Images</label>
                <input type="file" name="images[]" multiple 
                       class="w-full border rounded-lg p-2">
            </div>

            <!-- Submit -->
            <div class="flex gap-4">
                <button type="submit" 
                        class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    Update
                </button>
                <a href="{{ route('admin.gallery.index') }}" 
                   class="px-6 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition">
                    Cancel
                </a>
            </div>
        </form>

        
            <!-- Existing Images -->
            <div>
                <label class="block text-gray-700 mb-2">Current Images</label>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                    @foreach($gallery->image_path ?? [] as $index => $img)
                        <div class="relative group">
                            <img src="{{ asset($img) }}" 
                                 class="w-full h-32 object-cover rounded shadow">
                            <form action="{{ route('admin.gallery.image.delete', [$gallery->id, $index]) }}" 
                                  method="POST" 
                                  class="absolute top-1 right-1 hidden group-hover:block">
                                @csrf @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-600 text-white text-xs px-2 py-1 rounded">
                                    X
                                </button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
    </div>
</div>
@endsection
