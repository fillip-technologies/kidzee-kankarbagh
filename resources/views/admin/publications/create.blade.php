@extends('admin.include.layout')

@section('title', 'Upload Publication')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Upload Publication</h1>

    <form action="{{ route('admin.publications.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label class="block mb-1 font-medium">Type</label>
            <select name="type" class="w-full border rounded p-2">
                <option value="">-- Select --</option>
                <option value="LITERATI">LITERATI</option>
                <option value="CAMPUS CHRONICLE">CAMPUS CHRONICLE</option>
                <option value="BLISS">BLISS</option>
                <option value="NEWSLETTER">NEWSLETTER</option>
            </select>
            @error('type') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block mb-1 font-medium">Year</label>
            <input type="number" name="year" class="w-full border rounded p-2" value="{{ old('year') }}">
            @error('year') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block mb-1 font-medium">Month / Edition</label>
            <input type="text" name="month" class="w-full border rounded p-2" value="{{ old('month') }}">
            @error('month') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block mb-1 font-medium">Upload PDF</label>
            <input type="file" name="pdf" class="w-full border rounded p-2">
            @error('pdf') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
            Upload
        </button>
    </form>
</div>
@endsection
