@extends('admin.include.layout')

@section('title', 'Achievers')

@section('content')
<div class="container mx-auto px-4 py-6">

    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Achievers</h1>
        <a href="{{ route('admin.achievers.create', ['type' => $type]) }}" class="bg-blue-600 text-white px-4 py-2 rounded">
            + Add New
        </a>
    </div>

    {{-- Type filter --}}
    <div class="mb-4 space-x-2">
        <a href="{{ route('admin.achievers.index') }}" class="px-3 py-1 {{ !$type ? 'bg-blue-500 text-white' : 'bg-gray-200' }} rounded">All</a>
        <a href="{{ route('admin.achievers.index', ['type' => 'academic']) }}" class="px-3 py-1 {{ $type == 'academic' ? 'bg-blue-500 text-white' : 'bg-gray-200' }} rounded">Academic</a>
        <a href="{{ route('admin.achievers.index', ['type' => 'star']) }}" class="px-3 py-1 {{ $type == 'star' ? 'bg-blue-500 text-white' : 'bg-gray-200' }} rounded">Star</a>
    </div>

    <table class="w-full bg-white shadow rounded">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="px-4 py-2">Photo</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Type</th>
                <th class="px-4 py-2">Details</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($achievers as $achiever)
            <tr class="border-b">
                <td class="px-4 py-2">
                    @if($achiever->photo)
                        <img src="{{ asset($achiever->photo) }}" class="h-12 w-12 object-cover rounded">
                    @endif
                </td>
                <td class="px-4 py-2 font-semibold">{{ $achiever->name }}</td>
                <td class="px-4 py-2 capitalize">{{ $achiever->type }}</td>
                <td class="px-4 py-2 text-sm">
                    @if($achiever->type == 'academic')
                        Class: {{ $achiever->class }} <br>
                        Session: {{ $achiever->session }} <br>
                        {!! $achiever->description !!}
                    @else
                        Event: {{ $achiever->event_details }} <br>
                        Rank: {{ $achiever->rank }}
                    @endif
                </td>
                <td class="px-4 py-2">
                    <a href="{{ route('admin.achievers.edit', $achiever) }}" class="text-blue-600">Edit</a> |
                    <form action="{{ route('admin.achievers.destroy', $achiever) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button type="submit" onclick="return confirm('Delete this achiever?')" class="text-red-600">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="5" class="text-center py-4">No achievers found</td></tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-4">{{ $achievers->appends(['type' => $type])->links() }}</div>

</div>
@endsection
