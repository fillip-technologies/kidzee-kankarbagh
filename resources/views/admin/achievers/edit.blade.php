@extends('admin.include.layout')

@section('title', 'Edit Achiever')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Edit Achiever</h1>

    <form action="{{ route('admin.achievers.update', $achiever) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf @method('PUT')

        <input type="hidden" name="type" value="{{ $type }}">

        <div>
            <label class="block">Name</label>
            <input type="text" name="name" value="{{ old('name', $achiever->name) }}" class="w-full border rounded p-2" required>
        </div>

        @if(!isset($type))
        <div>
            <label class="block">Type</label>
            <select name="type" class="w-full border rounded p-2" required>
                <option value="academic" {{ $achiever->type == 'academic' ? 'selected' : '' }}>Academic</option>
                <option value="star" {{ $achiever->type == 'star' ? 'selected' : '' }}>Star</option>
            </select>
        </div>
        @endif

        <div>
            <label class="block">Photo</label>
            @if($achiever->photo)
                <img src="{{ asset($achiever->photo) }}" class="h-20 mb-2">
            @endif
            <input type="file" name="photo" class="w-full border rounded p-2">
        </div>

        <div class="academic-fields">
            <label class="block">Class</label>
            <input type="text" name="class" value="{{ old('class', $achiever->class) }}" class="w-full border rounded p-2">
        </div>

        <div class="academic-fields">
            <label class="block">Session</label>
            <input type="text" name="session" value="{{ old('session', $achiever->session) }}" class="w-full border rounded p-2">
        </div>

        <div class="academic-fields">
            <label class="block">Description</label>
            <textarea name="description" class="w-full border rounded p-2">{{ old('description', $achiever->description) }}</textarea>
        </div>

        <div class="star-fields">
            <label class="block">Event Details</label>
            <input type="text" name="event_details" value="{{ old('event_details', $achiever->event_details) }}" class="w-full border rounded p-2">
        </div>

        <div class="star-fields">
            <label class="block">Rank</label>
            <input type="text" name="rank" value="{{ old('rank', $achiever->rank) }}" class="w-full border rounded p-2">
        </div>

        <div>
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Update</button>
        </div>
    </form>
</div>

<script>
    const type = "{{ $type }}";
    document.addEventListener('DOMContentLoaded', () => {
        if(type === 'academic') {
            document.querySelectorAll('.star-fields').forEach(el => el.style.display = 'none');
        } else if(type === 'star') {
            document.querySelectorAll('.academic-fields').forEach(el => el.style.display = 'none');
        }
    });
</script>
@endsection
