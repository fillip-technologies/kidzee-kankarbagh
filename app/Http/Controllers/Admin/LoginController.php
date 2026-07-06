<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Show the login form
    

    // Handle the login request
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ])->onlyInput('email');
    }

    public function store(Request $request)
    {
        // ✅ Create user
        $user = User::create([
            'name'     => 'Admin',
            'email'    => 'admin@gmail.com',
            'password' => Hash::make('admin@1275'),
        ]);
        

        
    }

    public function showChangeForm()
    {
        return view('admin.login.change-password');
    }


    // Update password action
    public function update(Request $request)
    {
        $request->validate([
        'current_password' => ['required','current_password'], // Laravel built-in rule (>=8.43)
        'password' => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()->symbols()],
        ]);


        $user = $request->user();


        // Save new password
        $user->password = Hash::make($request->password);
        $user->save();


        return Redirect::route('password.change')->with('status', 'Password changed successfully.');
    }

    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}

