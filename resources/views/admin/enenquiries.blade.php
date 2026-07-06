@extends('admin.include.layout')

@section('title', 'Enquiries')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Enquiries List</h1>

    <table class="w-full bg-white shadow-md rounded border">
        <thead class="bg-gray-100 text-left">
            <tr>
                <th class="px-4 py-2 border">#</th>
                <th class="px-4 py-2 border">Student Name</th>
                <th class="px-4 py-2 border">Mobile</th>
                <th class="px-4 py-2 border">Father's Name</th>
                <th class="px-4 py-2 border">Mother's Name</th>
                <th class="px-4 py-2 border">Class</th>
                <th class="px-4 py-2 border">Location</th>
                <th class="px-4 py-2 border">Message</th>
                <th class="px-4 py-2 border">Submitted At</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($enquiries as $index => $enquiry)
                <tr>
                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                    <td class="border px-4 py-2">{{ $enquiry->student_name }}</td>
                    <td class="border px-4 py-2">{{ $enquiry->mobile_number }}</td>
                    <td class="border px-4 py-2">{{ $enquiry->father_name }}</td>
                    <td class="border px-4 py-2">{{ $enquiry->mother_name }}</td>
                    <td class="border px-4 py-2">{{ $enquiry->class }}</td>
                    <td class="border px-4 py-2">{{ $enquiry->current_location }}</td>
                    <td class="border px-4 py-2">{{ $enquiry->message }}</td>
                    <td class="border px-4 py-2 text-sm text-gray-500">{{ $enquiry->created_at->format('d M, Y H:i') }}</td>
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
