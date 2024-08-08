<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illumianate\Http\Facades\Auth;
use Illumianate\Http\Facades\Hash;
use App\Http\Controllers\UserController;


class UserController extends Controller
{
    function login(){
        return view ('users.login');
    }

    function registration(){
        return view ('users.registration');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'passsword' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        // dd(Auth::attempt($credentials));
        if(Auth::attempt($credentials)){
            return redirect()->intended(route(name: 'home'))->with("success", "Login Success");
        }

        return redirect(route(name: 'users.login'))->with("error", "User Password Invalid");

    function registrationPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'passsword' => 'required'
        ]);

            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['password'] = Hash::make($request->password);
            $user = User::create($data);
            if (!$user){
                return redirect(route(name: 'users.registration'))->with("error", "Registration failed try again latter");
            };    

        function logout(){
            session::flush();
            Auth::logout();
            return redirect(route(name: 'users.login'));
        };        

        }
    }
}   
