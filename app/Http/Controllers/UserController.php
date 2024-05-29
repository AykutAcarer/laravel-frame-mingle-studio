<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show Register Page
    public function showRegister(){
        return view('users.register');
    }

    //Show Login Page
    public function showLogin(){
        return view('users.login');
    }
    
    //create New User
    public function create(Request $request){

        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        //Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        //Create User
        $user = User::create($formFields);

        //Login
        auth()->login($user);

        //message
        return redirect('/')-> with('message', 'User created successfully and logged in');
    }
}
