@extends('admin.include.layout')
@section('title', 'Alumni List')

@section('content')
<div class="container mx-auto p-4">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">Alumni List</h2>
        <a href="{{ route('admin.alumni.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Add Alumni</a>
    </div>



    <table class="min-w-full bg-white rounded shadow">
        <thead class="bg-gray-200">
            <tr>
                <th class="py-2 px-4 text-left">Photo</th>
                <th class="py-2 px-4 text-left">Name</th>
                <th class="py-2 px-4 text-left">Designation</th>
                <th class="py-2 px-4 text-left">Quote</th>
                <th class="py-2 px-4 text-left">Status</th>
                <th class="py-2 px-4 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumni as $alumnus)
                <tr class="border-b">
                    <td class="py-2 px-4">
                        @if($alumnus->photo)
                            <img src="{{ asset($alumnus->photo) }}" alt="{{ $alumnus->name }}" class="w-12 h-12 rounded-full object-cover">
                        @endif
                    </td>
                    <td class="py-2 px-4">{{ $alumnus->name }}</td>
                    <td class="py-2 px-4">{{ $alumnus->designation }}</td>
                    <td class="py-2 px-4">{{ Str::limit($alumnus->quote, 50) }}</td>
                    <td class="py-2 px-4">{{ ucfirst($alumnus->status) }}</td>
                    <td class="py-2 px-4 flex space-x-2">
                        <a href="{{ route('admin.alumni.edit', $alumnus->id) }}" class="bg-yellow-500 px-2 py-1 rounded text-white hover:bg-yellow-600">Edit</a>
                        <form action="{{ route('admin.alumni.destroy', $alumnus->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-600 px-2 py-1 rounded text-white hover:bg-red-700">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $alumni->links() }}
    </div>
</div>
@endsection
