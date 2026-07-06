@extends('admin.include.layout')

@section('title', 'Teachers')

@section('content')
<section class="bg-gray-50 py-12">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="text-3xl font-bold text-gray-800">Teachers</h2>
                <p class="text-gray-600 mt-2">List of all faculty members</p>
            </div>
            <a href="{{ url('teachers') }}"
               class="px-4 py-2 bg-pink-600 text-white text-sm rounded-lg hover:bg-pink-700">
               + Add Teacher
            </a>
        </div>

        <!-- Teachers Table -->
        <div class="overflow-x-auto bg-white shadow rounded-xl">
            <table class="min-w-full text-sm text-left text-gray-600">
                <thead class="bg-gray-100 text-gray-700 uppercase text-xs font-semibold">
                    <tr>
                        <th class="px-6 py-3">#</th>
                        <th class="px-6 py-3">Photo</th>
                        <th class="px-6 py-3">Name</th>
                        <th class="px-6 py-3">Designation</th>
                        <th class="px-6 py-3">Department</th>
                        <th class="px-6 py-3">Bio</th>
                        <th class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($teachers as $index => $teacher)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $index + 1 }}</td>
                            <td class="px-6 py-4">
                                @if($teacher->photo)
                                    <img src="{{ asset($teacher->photo) }}"
                                         alt="Photo"
                                         class="w-12 h-12 rounded-full object-cover">
                                @else
                                    <span class="text-gray-400">No Photo</span>
                                @endif
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-800">
                                {{ $teacher->name }}
                            </td>
                            <td class="px-6 py-4 font-semibold text-gray-800">
                                {{ $teacher->position }}
                            </td>
                            <td class="px-6 py-4">{{ $teacher->department }}</td>
                            <td class="px-6 py-4">{{ Str::limit($teacher->bio, 50) }}</td>
                            <td class="px-6 py-4 flex gap-2">
                                <a href="{{ route('admin.teacher.edit', $teacher->id) }}"
                                   class="px-3 py-1 bg-yellow-500 text-white text-xs rounded hover:bg-yellow-600">
                                   Edit
                                </a>
                                <form action="{{ route('admin.teacher.destroy', $teacher->id) }}" method="POST"
                                      onsubmit="return confirm('Delete this teacher?')">
                                    @csrf @method('DELETE')
                                    <button class="px-3 py-1 bg-red-500 text-white text-xs rounded hover:bg-red-600">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-gray-500">
                                No Teachers Found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
