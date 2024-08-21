<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    //
    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $validatedBody = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', Password::default(), 'confirmed'],
        ]);

        $user = User::create($validatedBody);


        Auth::login($user);
        return redirect()->route('home.index');
    }
}
