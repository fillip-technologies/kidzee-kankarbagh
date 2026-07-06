@extends('admin.include.layout')

@section('title', 'Add Teacher')

@section('content')
<div class="max-w-2xl mx-auto bg-white shadow p-6 rounded">
    <h2 class="text-xl font-semibold mb-4">Add Teacher</h2>
    <form action="{{ route('admin.teacher.store')}}"
          method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Department</label>
            <input type="text" name="department" class="mt-1 w-full border rounded p-2">
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" class="mt-1 w-full border rounded p-2">
        </div>

          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Degination</label>
            <input type="text" name="position" class="mt-1 w-full border rounded p-2">
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Photograph</label>
            <input type="file" name="photo" class="mt-1 w-full border rounded p-2" accept=".jpg,.jpeg,.png">
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Short Bio</label>
            <textarea name="bio" class="mt-1 w-full border rounded p-2"></textarea>
        </div>
        <button type="submit" class="bg-pink-600 text-white px-4 py-2 rounded">
             Add
        </button>
    </form>
</div>
@endsection
