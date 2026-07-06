@extends('admin.include.layout')
@section('title', 'Result')

@section('content')
  <a href="{{ url('/result') }}" class="bg-green-600 text-white p-3 rounded-md float-end my-6">+ Add Result</a>
<div class="p-4 my-5">

    <table class="w-full bg-white shadow rounded">
        <thead>
            <tr class="bg-gray-100 text-left">
                <th class="px-4 py-2">Class</th>
                <th class="px-4 py-2">Section</th>
                <th class="px-4 py-2">Exam Type</th>
                <th class="px-4 py-2">Details</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($result as $datas)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $datas->class }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $datas->section }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $datas->exam_type }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <a href="{{ asset($datas->result_file) }}" target="_blank" class="text-blue-600 underline">
                            View File
                        </a>
                    </td>
                    <td class="border border-gray-300 px-4 py-2">
                        <form action="{{ route('delete.result',$datas->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
