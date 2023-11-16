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
        return view('dashboard.property.add_property', [
            'mode' => 'ADD',
        ]);
    }

    public function edit($id)
    {
        $item = Property::where('id', $id)->first();
        return view('dashboard.property.add_property', [
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
            return view('dashboard.property.add_property', [
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

    public function uplaodImage(Request $request, $id, $type)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = "uploads/property/" . time() . '' . $image->getClientOriginalName();
            $image->move("uploads/property/", $name);

            $gallary = new Gallary();
            $gallary->property_id = $id;
            $gallary->image = $name;
            $gallary->type = $type;
            $gallary->save();

            return response()->json(['success' => 'Image uploaded successfully']);
        }

        return response()->json(['error' => 'Image not found']);
    }

    public function gallary($id)
    {
        $gallary = Gallary::where('property_id', $id)->where('type', 'property')->get();
        return response()->json(['gallary' => $gallary]);
    }

    public function deleteGallary($id)
    {
        $gallary = Gallary::findOrFail($id);
        $gallary->delete();
        if ($gallary->delete()) {
            return response()->json(['success' => 'Gallary Removed successfully']);
        } else {
            return response()->json(['error' => 'Failed, Please try agaign']);
        }
    }

    public function addFeature(Request $request, $id, $type)
    {
        $feature = new Feature();
        $feature->property_id = $id;
        $feature->feature = $request->feature;
        $feature->type = $type;
        $feature->save();

        if ($feature->save()) {
            return response()->json(['success' => 'feature added successfully']);
        } else {
            return response()->json(['error' => 'Failed, Please try agaign']);
        }
    }

    public function delete($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();
        if ($property->delete()) {
            return redirect('/dashboard/property')->with('success', 'Property deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
