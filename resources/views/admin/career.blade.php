@extends('admin.include.layout')

@section('title', 'Contact')

@section('content')
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Contacts List</h1>
        <table class="w-full bg-white shadow-md rounded border">
            <thead class="bg-gray-100 text-left">
                <tr>
                    <th class="px-4 py-2 border">#</th>
                    <th class="px-4 py-2 border">Name</th>
                    <th class="px-4 py-2 border">Email</th>
                    <th class="px-4 py-2 border">Phone</th>
                    <th class="px-4 py-2 border">Message</th>

                </tr>
            </thead>
            <tbody>
                @forelse ($careers as $index => $enquiry)
                    <tr>
                        <td class="border px-4 py-2">{{ $index + 1 }}</td>
                        <td class="border px-4 py-2">{{ $enquiry->fullname }}</td>
                        <td class="border px-4 py-2">{{ $enquiry->email }}</td>
                        <td class="border px-4 py-2">{{ $enquiry->phone }}</td>
                        <td class="border px-4 py-2">{{ $enquiry->message }}</td>
                        
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center px-4 py-6 text-gray-500">
                            No enquiries found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection
