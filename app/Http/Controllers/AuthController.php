<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('dashboard.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $username = $request->email;
        $password = $request->password;
        $user = User::where('email', '=', $username)->first();
        if($user && Hash::check($password, $user->password)){
            $request->session()->put('user', $user);
            return redirect()->route('home.view');
        }else{
            return redirect()->back()->with('error', 'Incorrect Username or Password');
        }
    }

    public function logout()
    {
        Session::flush();
        return view('dashboard.login');
    }
}
