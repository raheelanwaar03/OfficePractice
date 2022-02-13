<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }
    public function registerReq(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        $user = new Auth();
        $user->fname = $validated['fname'];
        $user->lname = $validated['lname'];
        $user->email = $validated['email'];
        $user->password = $validated['password'];
        $user->save();
        return redirect('/home');
    }
    public function login()
    {
        return view('login');
    }
    public function loginReq(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        $user = Auth::where('email', $validated['email'])->first();
        if ($user) {
            if ($user->password == $validated['password']) {
                session(['user' => $user]);
                return redirect('/home');
            } else {
                return redirect('/login');
            }
        } else {
            return redirect('/login');
        }
    }
    public function logout()
    {
        session()->flush();
        return redirect('/register');
    }
}
