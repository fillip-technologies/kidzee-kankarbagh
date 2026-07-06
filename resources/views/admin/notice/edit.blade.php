@extends('admin.include.layout')

@section('title', 'Edit Notice')

@section('content')
<div class="max-w-3xl mx-auto p-6">
    <h2 class="text-xl font-bold mb-4">Edit Notice</h2>

    <form action="{{ route('admin.notice.update', $notice) }}" method="POST" class="space-y-4">
        @csrf @method('PUT')

        <div>
            <label class="block mb-1 font-medium">Notice</label>
            <textarea name="notice" id="notice" rows="3" class="w-full border rounded p-2">{{ old('notice', $notice->notice) }}</textarea>
            @error('notice') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block mb-1 font-medium">Link</label>
            <input type="text" name="link" value="{{ old('link', $notice->link) }}" 
                   class="w-full border rounded p-2">
            @error('link') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block mb-1 font-medium">Type</label>
            <select name="type" class="w-full border rounded p-2">
                <option value="h" {{ $notice->type=='h'?'selected':'' }}>Horizontal</option>
                <option value="v" {{ $notice->type=='v'?'selected':'' }}>Vertical</option>
            </select>
            @error('type') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
        </div>

        <button class="px-4 py-2 bg-yellow-600 text-white rounded hover:bg-yellow-700">Update</button>
        <a href="{{ route('admin.notice.index') }}" class="ml-2 px-4 py-2 bg-gray-300 rounded">Cancel</a>
    </form>
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
