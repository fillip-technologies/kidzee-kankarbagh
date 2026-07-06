@extends('admin.include.layout')

@section('title', 'School Event')

@section('content')
<div class="content-wrapper">
    <div class="container mx-auto px-6 py-6">
        <div class="flex justify-between items-center mb-6">
            <h4 class="text-xl font-semibold text-gray-800">All  Event </h4>
            <a href="{{ route('admin.event.create') }}" 
               class="px-4 py-2 bg-blue-600 text-white text-sm rounded-lg hover:bg-blue-700 transition">
               Upload New
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($sliders as $slider)
                <div class="bg-white rounded-xl shadow hover:shadow-lg overflow-hidden transition">
                    <img src="{{ $slider->slider_img }}" 
                         alt="Slider Image" 
                         class="w-full h-40 object-cover">

                    <div class="p-4">
                        <h6 class="font-semibold text-gray-800">{{ $slider->title }}</h6>
                        <p class="text-gray-600 text-sm mt-1">
                            {{ Str::limit($slider->description, 60) }}
                        </p>
                        <h6 class="font-semibold text-gray-800">{{ \Carbon\Carbon::parse($slider->published_on)->format('d-m-Y')  }}</h6>
                    </div>

                    <div class="px-4 pb-4 flex justify-between items-center">
                        <a href="{{ route('admin.event.edit', $slider->id) }}" 
                           class="px-3 py-1 bg-yellow-500 text-white text-xs rounded hover:bg-yellow-600 transition">
                           Edit
                        </a>
                        <form action="{{ route('admin.event.destroy', $slider->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="px-3 py-1 bg-red-500 text-white text-xs rounded hover:bg-red-600 transition"
                                    onclick="return confirm('Delete this Event?')">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
