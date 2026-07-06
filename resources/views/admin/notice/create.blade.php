@extends('admin.include.layout')

@section('title', 'Create Notice')

@section('content')
<div class="content-wrapper min-h-screen bg-gray-100 py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-semibold mb-6">Add New Notice</h2>

        <form action="{{ route('admin.notice.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md space-y-6">
            @csrf
            <div>
                <label class="block mb-1 font-medium">Notice</label>
                <textarea name="notice" id="notice" rows="3" class="w-full border rounded p-2">{{ old('notice') }}</textarea>
                @error('notice') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block mb-1 font-medium">Link</label>
                <input type="text" name="link" value="{{ old('link') }}" 
                    class="w-full border rounded p-2">
                @error('link') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div>
                <label class="block mb-1 font-medium">Type</label>
                <select name="type" class="w-full border rounded p-2">
                    <option value="h" {{ old('type')=='h'?'selected':'' }}>Horizontal</option>
                    <option value="v" {{ old('type')=='v'?'selected':'' }}>Vertical</option>
                </select>
                @error('type') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Save</button>
            <a href="{{ route('admin.notice.index') }}" class="ml-2 px-4 py-2 bg-gray-300 rounded">Cancel</a>
        </form>
    </div>   
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#notice'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
