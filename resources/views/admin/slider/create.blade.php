@extends('admin.include.layout')

@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper min-h-screen bg-gray-100 py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-semibold mb-6">Upload Slider Image</h2>

        <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md space-y-6">
            @csrf

            <!-- Slider Image -->
            <div>
                <label for="slider_img" class="block text-gray-700 font-medium mb-2">Slider Image</label>
                <input type="file" name="slider_img" id="slider_img" required class="block w-full border border-gray-300 rounded-md p-2 text-gray-700 focus:ring-2 focus:ring-pink-300 focus:outline-none">
            </div>

            <!-- Title -->
            <div>
                <label for="title" class="block text-gray-700 font-medium mb-2">Title</label>
                <input type="text" name="title" id="title" placeholder="Enter title" required class="block w-full border border-gray-300 rounded-md p-2 text-gray-700 focus:ring-2 focus:ring-pink-300 focus:outline-none">
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                <textarea name="description" id="description" rows="3" placeholder="Enter description" required class="block w-full border border-gray-300 rounded-md p-2 text-gray-700 focus:ring-2 focus:ring-pink-300 focus:outline-none"></textarea>
            </div>

            <!-- Buttons -->
            <div class="flex space-x-4">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition">Upload</button>
                <a href="{{ route('admin.slider.index') }}" class="bg-gray-300 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-400 transition">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection
