<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'email'=>['required'],
        'password'=>['required'],
      ]); 
      if (!Auth::attempt($validatedData) ) {
        throw ValidationException::withMessages([
            'email'=>'Email doesnt match'
        ]);
      }
      $request->session()->regenerate();
      return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
