<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('dashboard.users.detail', [
            'title'=>'Pengguna',
            'users'=>User::all()
        ]);
        // $user = User::all();
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
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/dashboard/users')->with('success', 'user Has Been Deleted!');
    }
    public function show()
    {
    }
    public function edit()
    {
        $roles = Role::all();
        return view('dashboard.users.detail', compact('roles'));
    }
}
