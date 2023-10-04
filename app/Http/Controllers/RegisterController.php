<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title'=>'Register',
            'active'=>'register'
        ]);
    }
    public function Store(Request $request)
    {
        $validatedData=$request->validate([
            'name'=>'required|max:255',
            'username'=>['required', 'min:3', 'max:255', 'unique:users'],
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|max:255'
        ]);

        $validatedData['password']=bcrypt($validatedData['password']);

        User::create($validatedData);
        // $request->session()->flash('success', 'Registarasi success! Please login');
        return redirect('/register')->with('success', 'Registration success! Please login!');


    }
}
