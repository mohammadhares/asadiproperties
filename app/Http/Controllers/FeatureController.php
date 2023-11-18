<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{

    public function addFeature(Request $request, $id, $type)
    {
        $feature = new Feature();
        $feature->property_id = $id;
        $feature->feature = $request->feature;
        $feature->type = $type;
        $feature->save();

        if ($feature->save()) {
            return response()->json(['success' => 'Feature added successfully']);
        } else {
            return response()->json(['error' => 'Failed, Please try agaign']);
        }
    }

    public function features($id)
    {
        $feature = Feature::where('property_id', $id)->where('type', 'property')->get();
        return response()->json(['feature' => $feature]);
    }

    public function deleteFeature($id)
    {
        $feature = Feature::findOrFail($id);
        $feature->delete();
        if ($feature->delete()) {
            return response()->json(['success' => 'Feature Removed successfully']);
        } else {
            return response()->json(['error' => 'Failed, Please try agaign']);
        }
    }

}
