<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Http;


class UserController extends Controller
{

    public function register(){
        return view('admin.register');
    }

    public function storeRegister(Request $request){
        $formFields=$request->validate([
            'name' =>['required', 'min:3'],
            'email' =>['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // hash password
        $formFields['password']=bcrypt($formFields['password']);


        // create user
        $user=User::create($formFields);


        // Login
        auth()->login($user);


        return redirect('/admin/index')->with('message', 'user created and logged in');

    }

    // logout
    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/index')->with('message', 'user created and logged in');
    }


    // login
    public function login(){
        return view('admin.login');
    }

    // login a user
    public function storeLogin(Request $request){
        $formFields=$request->validate([
            'email'=>['required', 'email'],
            'password'=>'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/admin/index')->with('message', 'You are now logged in');
        }

        return  back()->withErrors(['email' => 'invalid credentials'])->onlyInput('email');
    }
}
