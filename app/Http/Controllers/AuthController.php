<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function Register(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
            'address' => ['required', 'string'],
            'phone' => ['required', 'min:10', 'numeric'],
            'sim_number' => ['required', 'numeric'],

        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'phone' => $request->phone,
            'sim_number' => $request->sim_number,
        ]);

        Auth::login($user);

        return redirect('/');
    }

    public function Login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            if ($user->is_admin) {
                return redirect('/dashboard');
            }
            return redirect('/');
        }

        return redirect()->back();
    }

    public function Logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
