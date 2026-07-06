@extends('admin.include.layout')
@section('title', 'Edit Alumni')

@section('content')
<div class="container mx-auto p-4 max-w-2xl">
    <h2 class="text-2xl font-bold mb-6">Edit Alumni</h2>

    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.alumni.update', $alumnus->id) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" class="w-full border rounded px-3 py-2" value="{{ old('name', $alumnus->name) }}" required>
        </div>

        <div>
            <label class="block text-gray-700">Designation</label>
            <input type="text" name="designation" class="w-full border rounded px-3 py-2" value="{{ old('designation', $alumnus->designation) }}">
        </div>

        <div>
            <label class="block text-gray-700">Quote</label>
            <textarea name="quote" class="w-full border rounded px-3 py-2">{{ old('quote', $alumnus->quote) }}</textarea>
        </div>

        <div>
            <label class="block text-gray-700">Photo</label>
            <input type="file" name="photo" id="photo" class="w-full border rounded px-3 py-2" accept="image/*">
            <img id="preview" class="mt-2 w-32 h-32 object-cover rounded" 
                 src="{{ $alumnus->photo ? asset($alumnus->photo) : '' }}" />
        </div>

        <div>
            <label class="block text-gray-700">Status</label>
            <select name="status" class="w-full border rounded px-3 py-2">
                <option value="active" {{ $alumnus->status == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ $alumnus->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
            </select>
        </div>

        <div>
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Update</button>
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
        }
    });
</script>
@endsection
