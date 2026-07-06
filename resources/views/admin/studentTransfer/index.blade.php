@extends('admin.include.layout')

@section('title', 'Transfer Certificate')

@section('content')
<section class="bg-gray-50 py-12">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Transfer Certificate</h2>
            <p class="text-gray-600 mt-2">List Student Transfer Certificates</p>
        </div>

        <!-- Transfer Certificates Table -->
        <div class="overflow-x-auto bg-white shadow rounded-xl">
            <table class="min-w-full text-sm text-left text-gray-600">
                <thead class="bg-gray-100 text-gray-700 uppercase text-xs font-semibold">
                    <tr>
                        <th class="px-6 py-3">#</th>
                        <th class="px-6 py-3">Admission No</th>
                        <th class="px-6 py-3">Transfer No</th>
                        <th class="px-6 py-3">File</th>
                        <th class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($datas as $index => $data)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-6 py-4">{{ $index + 1 }}</td>
                            <td class="px-6 py-4 font-medium text-gray-800">{{ $data->admission_no }}</td>
                            <td class="px-6 py-4">{{ $data->tc_no }}</td>
                            <td class="px-6 py-4">
                                @if($data->tc_file)
                                    @if(Str::endsWith($data->tc_file, ['.jpg','.jpeg','.png']))
                                        <img src="{{ asset($data->tc_file) }}" alt="TC" class="w-20 h-16 object-cover rounded">
                                    @else
                                        <a href="{{ asset($data->tc_file) }}" target="_blank" class="text-blue-600 hover:underline">View PDF</a>
                                    @endif
                                @endif
                            </td>
                            <td class="px-6 py-4 flex space-x-2">
                                <a href="{{ route('edit.section.crt', $data->id) }}"
                                   class="px-3 py-1 bg-yellow-500 text-white text-xs rounded hover:bg-yellow-600 transition">
                                   Edit
                                </a>
                                <form action="{{ route('admin.tc.delete',$data->id) }}" method="POST" onsubmit="return confirm('Delete this TC?')">
                                    @csrf @method('DELETE')
                                    <button type="submit"
                                            class="px-3 py-1 bg-red-500 text-white text-xs rounded hover:bg-red-600 transition">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-gray-500">
                                No Transfer Certificates found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
