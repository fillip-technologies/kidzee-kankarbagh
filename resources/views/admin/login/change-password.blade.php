@extends('admin.include.layout')

@section('title', 'Change Password')

@section('content')
<div class="content-wrapper min-h-screen bg-gray-100 py-8">
    <div class="container mx-auto px-4">
        <h2 class="text-2xl font-semibold mb-6 text-gray-800">Change Password</h2>

        @if(session('status'))
            <div class="mb-4 p-3 rounded-md bg-green-100 text-green-700">
                {{ session('status') }}
            </div>
        @endif

        @if($errors->any())
            <div class="mb-4 p-3 rounded-md bg-red-100 text-red-700">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.password.update') }}" 
              class="bg-white p-6 rounded-lg shadow-md space-y-6">
            @csrf

            <div>
                <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1">
                    Current Password
                </label>
                <input id="current_password" type="password" name="current_password" required autofocus
                       class="w-half border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                    New Password
                </label>
                <input id="password" type="password" name="password" required 
                       onkeyup="checkStrength(this.value)"
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
                <div id="strengthMessage" class="mt-1 text-sm font-semibold"></div>
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">
                    Confirm New Password
                </label>
                <input id="password_confirmation" type="password" name="password_confirmation" required
                       class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />
            </div>

            <div>
                <button type="submit" 
                        class="px-4 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Change Password
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function checkStrength(password) {
    let strengthMessage = document.getElementById('strengthMessage');
    let strength = 0;

    if (password.length >= 8) strength++;
    if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++;
    if (/[0-9]/.test(password)) strength++;
    if (/[^A-Za-z0-9]/.test(password)) strength++;

    strengthMessage.className = "mt-1 text-sm font-semibold";

    if (strength === 0) {
        strengthMessage.textContent = '';
    } else if (strength <= 2) {
        strengthMessage.textContent = 'Weak';
        strengthMessage.classList.add("text-red-600");
    } else if (strength === 3) {
        strengthMessage.textContent = 'Medium';
        strengthMessage.classList.add("text-yellow-500");
    } else {
        strengthMessage.textContent = 'Strong';
        strengthMessage.classList.add("text-green-600");
    }
}
</script>
@endsection
