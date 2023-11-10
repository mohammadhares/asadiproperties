<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyRequest;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::paginate(12);
        return $properties;
    }

    public function create(PropertyRequest $request)
    {
        $property = new Property();
        $property->title = $request->title;
        $property->content = $request->content;
        $property->city = $request->city;
        $property->country = $request->country;
        $property->address = $request->address;
        $property->thumbnail = $request->thumbnail;
        $property->longitude = $request->longitude;
        $property->latitude = $request->latitude;
        $property->price = $request->price;
        $property->size = $request->size;
        $property->bedrooms = $request->bedrooms;
        $property->bathrooms = $request->bathrooms;
        $property->year_built = $request->year_built;
        $property->features = $request->features;
        $property->property_type = $request->property_type;
        $property->status = $request->status;
        $property->modified_by = $request->modified_by;
        $property->save();
        if($property->save()){
            return redirect('/dashboard/property')->with('success', 'Property created successfully');
        }else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);
        $property->title = $request->title;
        $property->content = $request->content;
        $property->city = $request->city;
        $property->country = $request->country;
        $property->address = $request->address;
        $property->thumbnail = $request->thumbnail;
        $property->longitude = $request->longitude;
        $property->latitude = $request->latitude;
        $property->price = $request->price;
        $property->size = $request->size;
        $property->bedrooms = $request->bedrooms;
        $property->bathrooms = $request->bathrooms;
        $property->year_built = $request->year_built;
        $property->features = $request->features;
        $property->property_type = $request->property_type;
        $property->status = $request->status;
        $property->modified_by = $request->modified_by;
        $property->save();
        if($property->save()){
            return redirect('/dashboard/property')->with('success', 'Property updated successfully');
        }else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function delete($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();
        if($property->delete()){
            return redirect('/dashboard/property')->with('success', 'Property deleted successfully');
        }else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
