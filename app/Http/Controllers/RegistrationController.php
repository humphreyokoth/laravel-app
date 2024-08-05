<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegistrationController extends Controller
{

    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validate
       $validatedData = $request->validate([
            'name'=>['required'],
            'email'=>['required','email'],
            'password'=>['required',Password::min(5),'confirmed'],
          
        ]);
        $user= User::create($validatedData);
        Auth::login($user);

        return redirect('/jobs');
    }
}
