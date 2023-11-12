<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('Dashbord.login');
    }

    public function login(Request $request)
    {
        $username = $request->email;
        $password = $request->password;
        $user = User::where('email', '=', $username)->first();
        if($user && (Hash::check($password, $user->password))){
            session(['user' => $user]);
            return redirect('dashboard/home');
        }else{
            return redirect()->back()->with('error', 'Incorrect Username or Password');
        }
    }

    public function logout()
    {
        return view('Dashbord.login');
    }
}
