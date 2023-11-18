<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::where('id', 1)->first();
        return view('dashboard.users.setting', [
            'setting' => $setting
        ]);
    }

    public function update(Request $request, $id)
    {
        $setting = Setting::findOrFail($id);
        $setting->about = $request->about;
        $setting->privacy = $request->privacy;
        $setting->condations = $request->condations;
        $setting->phone_number = $request->phone_number;
        $setting->whatsapp_number = $request->whatsapp_number;
        $setting->primary_email = $request->primary_email;
        $setting->secondary_email = $request->secondary_email;
        $setting->facebook = $request->facebook;
        $setting->instagram = $request->instagram;
        $setting->twitter = $request->twitter;
        $setting->linkedin= $request->linkedin;
        $setting->address= $request->address;
        $setting->latitude= $request->latitude;
        $setting->longitude= $request->longitude;
        $setting->modified_by= 'haris';
        $setting->save();
        if ($setting->save()) {
            return redirect()->back()->with('success', 'Settings Update successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
