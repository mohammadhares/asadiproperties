<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::OrderBy('id', 'desc')->paginate(12);
        return view('dashboard.users.user', [
            'result' => $user
        ]);
    }

    public function profile()
    {
        $user = User::where('id', 1)->first();
        return view('dashboard.users.profile', [
            'user' => $user
        ]);
    }

    public function create(Request $request)
    {
        $file = $request->file('image');
        $name = "uploads/user/" . time() . '' . $file->getClientOriginalName();
        $file->move("uploads/user/", $name);

        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->image = $name;
        $user->save();
        if ($user->save()) {
            return redirect()->back()->with('success', 'User Created successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function update(Request $request, $id)
    {
        if ($request->file('image')) {
            $file = $request->file('image');
            $name = "uploads/blog/" . time() . '' . $file->getClientOriginalName();
            $file->move("uploads/blog/", $name);
        } else {
            $image = User::where('id', $id)->first();
            $name = $image->image;
        }

        if($request->password === ""){
            $data = User::where('id', $id)->first();
            $password = $data->password;
        }else{
            $password = Hash::make($request->password);
        }

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = $password;
        $user->image = $name;
        $user->save();
        if ($user->save()) {
            return redirect()->back()->with('success', 'User Update successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        if ($user->delete()) {
            return redirect()->back()->with('success', 'User deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
