@extends('admin.include.layout')

@section('title', 'Edit Student Transfer Certificate')

@section('content')
@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
        {{ session('success') }}
    </div>
@endif

<div class="max-w-2xl mx-auto bg-white shadow p-6 rounded">
    <h2 class="text-xl font-semibold mb-4">Update Transfer Certificate</h2>

    <form action="{{ route('admin.tc.update', $data_edit->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Admission Number -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Admission Number</label>
            <input type="text" name="admission_no" class="mt-1 w-full border rounded p-2"
                   value="{{ old('admission_no', $data_edit->admission_no) }}" required>
        </div>

        <!-- Transfer Certificate Number -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Transfer Certificate Number</label>
            <input type="text" name="tc_no" class="mt-1 w-full border rounded p-2"
                   value="{{ old('tc_no', $data_edit->tc_no) }}" required>
        </div>

        <!-- File Upload -->
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Upload TC (PDF/Image)</label>
            <input type="file" name="tc_file" class="mt-1 w-full border rounded p-2" accept=".pdf,.jpg,.jpeg,.png">

            <!-- Old file preview -->
            @if($data_edit->tc_file)
                <div class="mt-2">
                    @if(Str::endsWith($data_edit->tc_file, ['.jpg','.jpeg','.png']))
                        <img src="{{ asset($data_edit->tc_file) }}" alt="TC File" class="w-32 h-24 object-cover rounded">
                    @else
                        <a href="{{ asset($data_edit->tc_file) }}" target="_blank" class="text-blue-600 hover:underline">View Existing PDF</a>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex justify-between items-center">
            <button type="submit" class="bg-pink-600 text-white px-4 py-2 rounded hover:bg-pink-700">Update</button>
            <a href="{{ url('/stu/tc/cet') }}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">Back to List</a>
        </div>
    </form>
</div>
@endsection

