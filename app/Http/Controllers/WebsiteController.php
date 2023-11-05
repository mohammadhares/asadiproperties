<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Property;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    protected $siteInfo;

    public function __construct()
    {
        $this->loadSiteInfo();
    }

    protected function loadSiteInfo()
    {
        $data = Setting::first();
        $data['phones'] = json_decode($data['phones'], true);
        $data['emails'] = json_decode($data['emails'], true);
        $data['socialmedias'] = json_decode($data['socialmedias'], true);
        $this->siteInfo = $data;
    }

    public function home()
    {
        return view('index', [
            'siteInfo' => $this->siteInfo,
            'newProperties' => Property::OrderBy('id', 'desc')->take(10)->get(),
            'popular_rent' => Property::where('status', 'RENT')->take(4)->get(),
            'popular_sale' => Property::where('status', 'SALE')->take(4)->get(),
            'blogs' => Blog::OrderBy('id', 'desc')->take(3)->get(),
        ]);
    }

    public function search(Request $request)
    {
        $status = $request->status;
        $address = $request->address;
        $result = Property::where('status', '=', $status)
            ->OrWhere('address', 'like', '%' . $address . '%')
            ->orWhere('city', 'like', '%' . $address . '%')
            ->orWhere('country', 'like', '%' . $address . '%')
            ->orWhere('title', 'like', '%' . $address . '%')
            ->orWhere('content', 'like', '%' . $address . '%')
            ->paginate(12);

        if ($status === 'RENT') {
            return view('rent', [
                'siteInfo' => $this->siteInfo,
                'result' => $result,
            ]);
        } else {
            return view('sale', [
                'siteInfo' => $this->siteInfo,
                'result' => $result,
            ]);
        }
    }

    public function advanceSearch(Request $request)
    {
        $properties = DB::table('properties')
            ->select('*')
            ->when(request('status'), function ($query) {
                $query->where('status', request('status'));
            })
            ->when(request('min_price') > 0, function ($query) {
                $query->where('price', '>=', request('min_price'));
            })
            ->when(request('max_price') > 0, function ($query) {
                $query->where('price', '<=', request('max_price'));
            })
            ->when(request('property_type') != "", function ($query) {
                $query->where('property_type', request('property_type'));
            })
            ->when(request('property_id') != "", function ($query) {
                $query->where('id', request('property_id'));
            })
            ->when(request('beds') > 0, function ($query) {
                $query->where('bedrooms', '>', request('beds'));
            })
            ->when(request('baths') > 0, function ($query) {
                $query->where('bathrooms', '>', request('baths'));
            })
            ->when(request('city') != "", function ($query) {
                $query->where('city', request('city'));
            })
            ->when(request('min_size') > 0, function ($query) {
                $query->where('size', '>=', request('min_size'));
            })
            ->when(request('max_size') > 0, function ($query) {
                $query->where('size', '<=', request('max_size'));
            })
            ->paginate(12);

        if (request('status') === 'RENT') {
            return view('rent', [
                'siteInfo' => $this->siteInfo,
                'result' => $properties,
            ]);
        } else {
            return view('sale', [
                'siteInfo' => $this->siteInfo,
                'result' => $properties,
            ]);
        }
    }

    public function singleProperty($id)
    {
        $result = Property::findOrFail($id);
        return view('single-property', [
            'siteInfo' => $this->siteInfo,
            'result' => $result,
        ]);
    }

    public function singleProject($id)
    {
        $result = Project::findOrFail($id);
        return view('single-project', [
            'siteInfo' => $this->siteInfo,
            'result' => $result,
        ]);
    }

    public function singleBlog($id)
    {
        $result = Blog::findOrFail($id);
        return view('single-blog', [
            'siteInfo' => $this->siteInfo,
            'result' => $result,
        ]);
    }

    public function offplane()
    {
        return view('offplane', [
            'siteInfo' => $this->siteInfo,
            'result' => Project::OrderBy('id', 'desc')->paginate(20),
        ]);
    }

    public function rent()
    {
        return view('rent', [
            'siteInfo' => $this->siteInfo,
            'result' => Property::where('status', 'RENT')->paginate(12),
        ]);
    }

    public function sale()
    {
        return view('sale', [
            'siteInfo' => $this->siteInfo,
            'result' => Property::where('status', 'SALE')->paginate(12),
        ]);
    }

    public function blog()
    {
        return view('blog', [
            'siteInfo' => $this->siteInfo,
            'result' => Blog::OrderBy('id', 'desc')->paginate(12),
        ]);
    }

    public function about()
    {
        return view('about', [
            'siteInfo' => $this->siteInfo,
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'siteInfo' => $this->siteInfo,
        ]);
    }

    public function storeContact(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->description = $request->description;
        $contact->save();

        if ($contact->save()) {
            return redirect()->back()->with('success', 'Your message has been sent successfully');
        }
    }

    public function services()
    {
        return view('services', [
            'siteInfo' => $this->siteInfo,
        ]);
    }
    // discover
    public function termsof()
    {
        return view('termsof', [
            'siteInfo' => $this->siteInfo,
        ]);
    }
    public function privaecy()
    {
        return view('privaecy', [
            'siteInfo' => $this->siteInfo,
        ]);
    }
    public function pricing()
    {
        return view('pricing', [
            'siteInfo' => $this->siteInfo,
        ]);
    }
    public function careers()
    {
        return view('careers', [
            'siteInfo' => $this->siteInfo,
        ]);
    }
    public function FAQs()
    {
        return view('FAQs', [
            'siteInfo' => $this->siteInfo,
        ]);
    }
    public function sitemap()
    {
        return view('sitemap', [
            'siteInfo' => $this->siteInfo,
        ]);
    }
}
