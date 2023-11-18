<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::OrderBy('id', 'desc')->paginate(12);
        return view('dashboard.contact.contact', [
            'result' => $contact
        ]);
    }

    public function delete($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        if ($contact->delete()) {
            return redirect()->back()->with('success', 'Contact deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
