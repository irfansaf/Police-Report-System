<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'ktp_id' => 'required|unique:users',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required|in:admin,police,user',
        ]);

        $user = new User([
            'ktp_id' => $request->ktp_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);

        $user->save();

        // Log the user in and redirect to the dashboard
        Auth::login($user);
        return redirect()->route('dashboard');
    }

    public function login(Request $request) {
        $request->validate([
            'ktp_id' => 'required',
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        } else {
            return back()->withError(['Invalid email or password. please try again']);
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('login');
    }
}
