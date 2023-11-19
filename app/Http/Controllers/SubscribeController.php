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
        $subscribe->email = $request->subscribe;
        $subscribe->created_at = Carbon::now();
        $subscribe->updated_at = Carbon::now();
        $subscribe->save();

        if($subscribe){
            return response()->json(['success' => 'you subscribed successfully']);
        } else {
            return response()->json(['error' => 'Failed, Please try agaign']);
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
                return redirect()->back()->with('success', 'email deleted successfully');
        }
}
