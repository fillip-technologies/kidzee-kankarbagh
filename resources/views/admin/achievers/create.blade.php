@extends('admin.include.layout')

@section('title', 'Add Achiever')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Add Achiever</h1>

    <form action="{{ route('admin.achievers.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

        <input type="hidden" name="type" value="{{ $type ?? '' }}">

        <div>
            <label class="block">Name</label>
            <input type="text" name="name" class="w-full border rounded p-2" required>
        </div>

        @if(!isset($type))
        <div>
            <label class="block">Type</label>
            <select name="type" class="w-full border rounded p-2" required>
                <option value="">Select Type</option>
                <option value="academic">Academic</option>
                <option value="star">Star</option>
            </select>
        </div>
        @endif

        <div>
            <label class="block">Photo</label>
            <input type="file" name="photo" class="w-full border rounded p-2">
        </div>

        <div class="academic-fields">
            <label class="block">Class</label>
            <input type="text" name="class" class="w-full border rounded p-2">
        </div>

        <div class="academic-fields">
            <label class="block">Session</label>
            <input type="text" name="session" class="w-full border rounded p-2">
        </div>

        <div class="academic-fields">
            <label class="block">Description (Achievements)</label>
            <textarea name="description" class="w-full border rounded p-2"></textarea>
        </div>

        <div class="star-fields">
            <label class="block">Event Details</label>
            <input type="text" name="event_details" class="w-full border rounded p-2">
        </div>

        <div class="star-fields">
            <label class="block">Rank</label>
            <input type="text" name="rank" class="w-full border rounded p-2">
        </div>

        <div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
        </div>
    </form>
</div>

<script>
    // Optional: Show/hide fields based on type
    const type = "{{ $type ?? '' }}";
    document.addEventListener('DOMContentLoaded', () => {
        if(type === 'academic') {
            document.querySelectorAll('.star-fields').forEach(el => el.style.display = 'none');
        } else if(type === 'star') {
            document.querySelectorAll('.academic-fields').forEach(el => el.style.display = 'none');
        }
    });
</script>
@endsection
