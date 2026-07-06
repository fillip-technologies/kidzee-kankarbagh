@extends('admin.include.layout')

@section('title', 'Edit Publication')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Edit Publication</h1>

    <form action="{{ route('admin.publications.update', $publication) }}" 
          method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block mb-1 font-medium">Type</label>
            <select name="type" class="w-full border rounded p-2">
                <option value="">-- Select --</option>
                <option value="LITERATI" {{ $publication->type == 'LITERATI' ? 'selected' : '' }}>LITERATI</option>
                <option value="CAMPUS CHRONICLE" {{ $publication->type == 'CAMPUS CHRONICLE' ? 'selected' : '' }}>CAMPUS CHRONICLE</option>
                <option value="BLISS" {{ $publication->type == 'BLISS' ? 'selected' : '' }}>BLISS</option>
                <option value="NEWSLETTER" {{ $publication->type == 'NEWSLETTER' ? 'selected' : '' }}>NEWSLETTER</option>
            </select>
            @error('type') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block mb-1 font-medium">Year</label>
            <input type="number" name="year" class="w-full border rounded p-2" 
                   value="{{ old('year', $publication->year) }}">
            @error('year') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block mb-1 font-medium">Month / Edition</label>
            <input type="text" name="month" class="w-full border rounded p-2" 
                   value="{{ old('month', $publication->month) }}">
            @error('month') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block mb-1 font-medium">Replace PDF (optional)</label>
            <input type="file" name="pdf" class="w-full border rounded p-2">
            @if ($publication->pdf_path)
                <p class="text-sm mt-1">
                    Current File: 
                    <a href="{{ asset('storage/' . $publication->pdf_path) }}" target="_blank" class="text-blue-600 hover:underline">
                        View PDF
                    </a>
                </p>
            @endif
            @error('pdf') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
            Update
        </button>
    </form>
</div>
@endsection
