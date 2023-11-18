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

        public function index()
        {
            $contact = Subscribe::OrderBy('id', 'desc')->paginate(12);
            return view('dashboard.subscribe.subscribe', [
                'result' => $contact
            ]);
        }

        public function delete($id)
        {
            $contact = Subscribe::findOrFail($id);
            $contact->delete();
            if ($contact->delete()) {
                return redirect()->back()->with('success', 'email deleted successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        }
}
