@extends('admin.include.layout')

@section('title', 'Gallery')

@section('content')
<div class="content-wrapper">
    <div class="container mx-auto px-6 py-6">
        <div class="flex justify-between items-center mb-6">
            <h4 class="text-xl font-semibold text-gray-800">All Galleries</h4>
            <a href="{{ route('admin.gallery.create') }}" 
               class="px-4 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700 transition">
               Add New Gallery
            </a>
        </div>



        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($galleries as $gallery)
                <div class="bg-white shadow rounded-lg overflow-hidden">
                    <img src="{{ asset($gallery->image_path[0]) }}" 
                         alt="{{ $gallery->alt_text }}" 
                         class="h-40 w-full object-cover">
                    <div class="p-4">
                        <h5 class="text-lg font-semibold text-gray-800">{{ $gallery->title }}</h5>
                        <p class="text-sm text-gray-600">{{ Str::limit($gallery->description, 50) }}</p>
                        <div class="flex justify-between items-center mt-3">
                            <a href="{{ route('admin.gallery.edit', $gallery->id) }}" 
                               class="text-blue-600 hover:underline text-sm">Edit</a>
                            <form action="{{ route('admin.gallery.destroy', $gallery->id) }}" method="POST" 
                                  onsubmit="return confirm('Are you sure?')">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline text-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
