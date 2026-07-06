@extends('admin.include.layout')

@section('title', 'Add Student Transfer Certificate')

@section('content')
 @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
            {{ session('success') }}
        </div>
    @endif
<div class="max-w-2xl mx-auto bg-white shadow p-6 rounded">
    <h2 class="text-xl font-semibold mb-4">Upload Transfer Certificate</h2>

    <form action="{{ route('upluad.student.transfer.certificate') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Admission Number</label>
            <input type="text" name="admission_no" class="mt-1 w-full border rounded p-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Transfer Certificate Number</label>
            <input type="text" name="tc_no" class="mt-1 w-full border rounded p-2" required>
        </div>
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Upload TC (PDF/Image)</label>
            <input type="file" name="tc_file" class="mt-1 w-full border rounded p-2" accept=".pdf,.jpg,.jpeg,.png" required>
        </div>
        <button type="submit" class="bg-pink-600 text-white px-4 py-2 rounded">Upload</button>
            <a href="{{ url('/stu/tc/cet') }}" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700"> List</a>
    </form>
</div>
@endsection
