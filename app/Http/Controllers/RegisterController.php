<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|min:4|max:255',
            'username' => 'required|min:4|max:255|unique:users',
            'email' => 'required|min:10|max:255|email:dns|unique:users',
            'password' => 'required|min:8|max:255',
            'level' => 'required|in:penulis,pengunjung', // Validasi untuk level
        ]);

        // Tentukan nilai is_admin berdasarkan level yang dipilih
        $is_admin = ($validateData['level'] == 'pengunjung') ? 1 : 0;

        $validateData['password'] = bcrypt($validateData['password']);
        $validateData['is_admin'] = $is_admin;

        User::create($validateData);

        return redirect('/login')->with('success', 'Registration Successfull. Please login!');
    }
}
