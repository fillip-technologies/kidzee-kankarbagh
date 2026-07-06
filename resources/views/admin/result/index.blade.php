@extends('admin.include.layout')

@section('title', 'Add Result')

@section('content')

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="content-wrapper min-h-screen bg-gray-100 py-8">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-semibold mb-6">Add Result</h2>

            <form action="{{ route('result.store') }}" method="POST" enctype="multipart/form-data"
                class="bg-white p-6 rounded-lg shadow-md space-y-6">
                @csrf

                <!-- Class Selection -->
                <div>
                    <label for="class" class="block text-gray-700 font-medium mb-2">Class</label>
                    <select name="class" id="class"
                        class="block w-full border border-gray-300 rounded-md p-2 text-gray-700 focus:ring-2 focus:ring-pink-300 focus:outline-none">
                        <option value="1">Class 1</option>
                        <option value="2">Class 2</option>
                        <option value="3">Class 3</option>
                        <option value="4">Class 4</option>
                        <option value="5">Class 5</option>
                        <option value="6">Class 6</option>
                        <option value="7">Class 7</option>
                        <option value="8">Class 8</option>
                        <option value="9">Class 9</option>
                        <option value="10">Class 10</option>
                        <option value="11">Class 11</option>
                        <option value="12">Class 12</option>
                    </select>
                    @error('class')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Section -->
                <div>
                    <label for="section" class="block text-gray-700 font-medium mb-2">Section</label>
                    <input type="text" name="section" id="section" placeholder="Enter Section (e.g., A, B, C)"
                        class="block w-full border border-gray-300 rounded-md p-2 text-gray-700 focus:ring-2 focus:ring-pink-300 focus:outline-none">
                    @error('section')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Exam Type -->
                <div>
                    <label for="exam_type" class="block text-gray-700 font-medium mb-2">Examination Type</label>
                    <select name="exam_type" id="exam_type"
                        class="block w-full border border-gray-300 rounded-md p-2 text-gray-700 focus:ring-2 focus:ring-pink-300 focus:outline-none">
                        <option value="HalfYearly">Half-Yearly</option>
                        <option value="Annual">Annual</option>
                        <option value="MidTerm">Mid-Term</option>
                    </select>
                    @error('exam_type')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Upload Result File -->
                <div>
                    <label for="result_file" class="block text-gray-700 font-medium mb-2">Upload Result File</label>
                    <input type="file" name="result_file" id="result_file" accept=".pdf, .jpg, .png"
                        class="block w-full border border-gray-300 rounded-md p-2 text-gray-700 focus:ring-2 focus:ring-pink-300 focus:outline-none">
                    @error('result_file')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Date of Exam -->
                <div>
                    <label for="exam_date" class="block text-gray-700 font-medium mb-2">Date of Exam</label>
                    <input type="date" name="exam_date" id="exam_date" 
                        class="block w-full border border-gray-300 rounded-md p-2 text-gray-700 focus:ring-2 focus:ring-pink-300 focus:outline-none">
                    @error('exam_date')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit and Back Buttons -->
                <div class="flex space-x-4">
                    <button type="submit"
                        class="bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition">Upload</button>
                    <a href="{{ url('listing/result') }}"
                        class="bg-gray-300 text-gray-800 px-4 py-2 rounded-md hover:bg-gray-400 transition">List</a>
                </div>
            </form>

        </div>
    </div>
@endsection
