@extends('admin.include.layout')

@section('title', 'Publications')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Publications</h1>

    <a href="{{ route('admin.publications.create') }}"
       class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white text-end rounded-lg hover:bg-blue-700">
       + Upload New
    </a>

    

    <table class="min-w-full border border-gray-200 bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-100">
                <th class="p-3 text-left">Type</th>
                <th class="p-3 text-left">Year</th>
                <th class="p-3 text-left">Month</th>
                <th class="p-3 text-left">PDF</th>
                <th class="p-3 text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($publications as $pub)
                <tr class="border-t">
                    <td class="p-3">{{ $pub->type }}</td>
                    <td class="p-3">{{ $pub->year }}</td>
                    <td class="p-3">{{ $pub->month }}</td>
                    <td class="p-3">
                        <a href="{{ asset($pub->pdf_path) }}" target="_blank"
                           class="text-blue-600 hover:underline">View PDF</a>
                    </td>
                    <td class="p-3 text-center">
                        <a href="{{ route('admin.publications.edit', $pub) }}"
                           class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">Edit</a>
                        <form action="{{ route('admin.publications.destroy', $pub) }}" method="POST"
                              class="inline-block"
                              onsubmit="return confirm('Delete this publication?')">
                            @csrf @method('DELETE')
                            <button class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $publications->links() }}
    </div>
</div>
@endsection
