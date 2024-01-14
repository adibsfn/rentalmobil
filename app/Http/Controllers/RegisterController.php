<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'number' => 'required',
            'sim' => 'required|unique:users',
            'password' => 'required',
            'roles' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        // dd($validatedData);
        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successful! Please login');
    }

}
