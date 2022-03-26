<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => 'Register',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:12|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // Hash Password
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successfull! Please login');
        return redirect()->route('login')->with('success', 'Registration successfull! Please login');
    }
}
