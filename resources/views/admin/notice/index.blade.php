@extends('admin.include.layout')

@section('title', 'Notices')

@section('content')
<div class="max-w-7xl mx-auto p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">All Notices</h2>
        <a href="{{ route('admin.notice.create') }}" 
           class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
            + Add Notice
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-100 text-gray-700">
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Notice</th>
                    <th class="px-4 py-2">Link</th>
                    <th class="px-4 py-2">Type</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($notices as $notice)
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-4 py-2">{{ $notice->id }}</td>
                    <td class="px-4 py-2">{{ Str::limit($notice->notice, 50) }}</td>
                    <td class="px-4 py-2 text-blue-600">
                        <a href="{{ $notice->link }}" target="_blank">{{ $notice->link }}</a>
                    </td>
                    <td class="px-4 py-2 uppercase font-semibold">{{ $notice->type }}</td>
                    <td class="px-4 py-2 space-x-2">
                        <a href="{{ route('admin.notice.edit', $notice) }}" 
                           class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edit</a>
                        <form action="{{ route('admin.notice.destroy', $notice) }}" method="POST" class="inline">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Delete this notice?')" 
                                    class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-4 text-gray-500">No notices found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $notices->links() }}
    </div>
</div>
@endsection
