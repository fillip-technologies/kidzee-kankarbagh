@extends('admin.include.layout')

@section('title', 'Update Teacher')

@section('content')
<div class="max-w-2xl mx-auto bg-white shadow p-6 rounded">
    <h2 class="text-xl font-semibold mb-4"> Update Teacher</h2>

    <form action="{{ route('admin.teacher.update', $teacher->id)}}"
          method="POST" enctype="multipart/form-data">
        @csrf
        @if(isset($teacher))
            @method('PUT')
        @endif

        <!-- Department -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Department</label>
            <input type="text" name="department" class="mt-1 w-full border rounded p-2" value="{{ $teacher->department }}">

        </div>

        <!-- Name -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" class="mt-1 w-full border rounded p-2"
                   value="{{ $teacher->name}}" >
        </div>

         <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Desination</label>
            <input type="text" name="position" class="mt-1 w-full border rounded p-2"
                   value="{{ $teacher->position}}" >
        </div>

       
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Photograph</label>
            <input type="file" name="photo" class="mt-1 w-full border rounded p-2" accept=".jpg,.jpeg,.png">
            @if(isset($teacher) && $teacher->photo)
                <img src="{{ asset($teacher->photo) }}" alt="Teacher Photo" class="w-24 h-24 mt-2 rounded">
            @endif
        </div>

        <!-- Bio -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Short Bio</label>
            <textarea name="bio" class="mt-1 w-full border rounded p-2">{{ $teacher->bio }}</textarea>
        </div>
        <button type="submit" class="bg-pink-600 text-white px-4 py-2 rounded">
            Update
        </button>
    </form>
</div>
@endsection
