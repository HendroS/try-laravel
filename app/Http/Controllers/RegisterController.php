<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Contracts\Service\Attribute\Required;

class RegisterController extends Controller
{
    function index()
    {
        return view('register.index', [
            'title' => 'register',
            'active' => 'register'
        ]);
    }
    function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:225',
            'username' => ['required', 'min:3', 'max:225', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => 'required|min:5|max:255'
        ]);
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        // $request->session()->flash('success', 'Restration successfull! Please login');
        return redirect('/login')->with('success', 'Restration successfull! Please login');
    }
}
