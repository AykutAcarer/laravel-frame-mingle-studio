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

     //Show User Edit Page
     public function userInfo(User $user){

        // dd('useredit', [
        //     'user' => $user
        // ]);
        return view('users.edit', [
            'user' => $user
        ]);
    }
    
    //create New User
    public function register(Request $request){

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

    //Login
    public function login(Request $request){
        
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You have been logged in');
        }

        return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');
    }

    //Logout
    public function logout(Request $request, User $user){

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out');
    }

    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->name = $data['name'];
        $user->email = $data['email'];

        if (!empty($data['password'])) {
            $user->password = bcrypt($data['password']);
        }

        $user->save();

        return redirect()->route('users.edit', $user)->with('message', 'User updated successfully');
    }
}
