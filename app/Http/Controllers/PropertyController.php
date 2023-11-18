<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyRequest;
use App\Models\Feature;
use App\Models\Gallary;
use App\Models\Property;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        $result = Property::OrderBy('id', 'desc')->paginate(15);
        return view('dashboard.property.property_list', compact('result'));
    }

    public function add()
    {
        return view('dashboard.property.modify_property', [
            'mode' => 'ADD',
        ]);
    }

    public function edit($id)
    {
        $item = Property::where('id', $id)->first();
        return view('dashboard.property.modify_property', [
            'item' => $item,
            'mode' => 'EDIT',
        ]);
    }

    public function create(Request $request)
    {
        $file = $request->file('thumbnail');
        $name = "uploads/property/" . time() . '' . $file->getClientOriginalName();
        $file->move("uploads/property/", $name);

        $property = new Property();
        $property->title = $request->title;
        $property->content = $request->content;
        $property->thumbnail = $name;
        $property->price = $request->price;
        $property->size = $request->size;
        $property->bedrooms = $request->bedrooms;
        $property->bathrooms = $request->bathrooms;
        $property->year_built = $request->build_year;
        $property->property_type = $request->property_type;
        $property->status = $request->status;
        $property->modified_by = 1;
        $property->save();
        if ($property->save()) {
            $item = Property::where('id', $property->id)->first();
            return view('dashboard.property.add_property', [
                'item' => $item,
                'mode' => 'EDIT',
            ])->with('success', 'Property created successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function update(Request $request, $id)
    {
        if ($request->file('thumbnail')) {
            $file = $request->file('thumbnail');
            $name = "uploads/property/" . time() . '' . $file->getClientOriginalName();
            $file->move("uploads/property/", $name);
        } else {
            $image = Property::where('id', $id)->first();
            $name = $image->thumbnail;
        }


        $property = Property::findOrFail($id);
        $property->title = $request->title;
        $property->content = $request->content;
        $property->thumbnail = $name;
        $property->price = $request->price;
        $property->size = $request->size;
        $property->bedrooms = $request->bedrooms;
        $property->bathrooms = $request->bathrooms;
        $property->year_built = $request->build_year;
        $property->property_type = $request->property_type;
        $property->status = $request->status;
        $property->modified_by = 1;
        $property->save();
        if ($property->save()) {
            $item = Property::where('id', $property->id)->first();
            return view('dashboard.property.modify_property', [
                'item' => $item,
                'mode' => 'EDIT',
            ])->with('success', 'Property updated successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function updateAddress(Request $request, $id)
    {
        $property = Property::findOrFail($id);
        $property->address = $request->address;
        $property->city = $request->city;
        $property->country = $request->country;
        $property->longitude = $request->longitude;
        $property->latitude = $request->latitude;
        $property->save();

        if ($property->save()) {
            return response()->json(['success' => 'address updated successfully']);
        } else {
            return response()->json(['error' => 'Failed, Please try agaign']);
        }
    }

    public function delete($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();
        return redirect()->back()->with('success', 'Property deleted successfully');
    }
}
