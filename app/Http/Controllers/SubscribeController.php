<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{

    public function subscribe(Request $request)
    {
        $subscribe = new Subscribe();
        $subscribe->email = $request->email;
        $subscribe->created_at = Carbon::now();
        $subscribe->updated_at = Carbon::now();
        $subscribe->save();

        if($subscribe){
            return redirect()->back()->with('subscribe-success', 'Your Email Send Successfully');
        }else{
            return redirect()->back()->with('error', 'Sorry, Something went wrong');
        }
    }
}
