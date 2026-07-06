@extends('admin.include.layout')
@section('title', 'Add Alumni')

@section('content')
<div class="container mx-auto p-4 max-w-2xl">
    <h2 class="text-2xl font-bold mb-6">Add New Alumni</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.alumni.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <div>
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" class="w-full border rounded px-3 py-2" value="{{ old('name') }}" required>
        </div>

        <div>
            <label class="block text-gray-700">Designation</label>
            <input type="text" name="designation" class="w-full border rounded px-3 py-2" value="{{ old('designation') }}">
        </div>

        <div>
            <label class="block text-gray-700">Quote</label>
            <textarea name="quote" class="w-full border rounded px-3 py-2">{{ old('quote') }}</textarea>
        </div>

        <div>
            <label class="block text-gray-700">Photo</label>
            <input type="file" name="photo" id="photo" class="w-full border rounded px-3 py-2" accept="image/*">
            <img id="preview" class="mt-2 w-32 h-32 object-cover rounded hidden" />
        </div>

        <div>
            <label class="block text-gray-700">Status</label>
            <select name="status" class="w-full border rounded px-3 py-2">
                <option value="active" selected>Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>

        <div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
        </div>
    </form>
</div>

<script>
    // Preview selected image
    document.getElementById('photo').addEventListener('change', function(e){
        const preview = document.getElementById('preview');
        const file = e.target.files[0];
        if(file){
            preview.src = URL.createObjectURL(file);
            preview.classList.remove('hidden');
        }
    });
</script>
@endsection
