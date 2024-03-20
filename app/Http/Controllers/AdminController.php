<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    // LOGIN FUNCTION
    public function login(Request $request)
    {
        $formFields = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'يجب إدخال إسم المستخدم',
            'password.required' => 'يجب إدخال كلمة السر',
        ]);

        if (Auth::attempt($formFields, true)) {
            return redirect(route('dashboard'));
        }
    }


    // LOGOUT FUNCTION
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect(route('home'));
    }

    // SHOW MAIN CONTROL PANEL PAGE
    public function dashboard()
    {
        return view('dashboard');
    }
}
