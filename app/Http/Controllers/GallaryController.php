<?php

namespace App\Http\Controllers;

use App\Models\Gallary;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
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

    public function gallary($id, $type)
    {
        $gallary = Gallary::where('property_id', $id)->where('type', $type)->get();
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
}
