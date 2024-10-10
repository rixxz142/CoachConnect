<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showLogin()
    {
        return view("login");
    }

    public function login(Request $request)
    {
        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect("/");
        } else {
            return back()->with("message", "Username or Password Incorrect");
        }
    }

    public function register(Request $request)
    {
        User::create($request->all());
        return redirect("/login");
    }

    public function logout()
    {
        Auth::logout();
        return redirect("/");
    }
}
