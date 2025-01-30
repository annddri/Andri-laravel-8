<?php

namespace App\Http\Controllers;

use  \App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistController extends Controller
{
    public function index(){
        return view('regist', [
            'title' => 'Regist',
            'active' => 'regist'
        ]);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' =>'required|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
