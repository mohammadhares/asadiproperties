<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $result = Project::OrderBy('id', 'desc')->paginate(15);
        return view('dashboard.Project.Project_list', compact('result'));
    }

    public function add()
    {
        return view('dashboard.Project.modify_Project', [
            'mode' => 'ADD',
        ]);
    }

    public function edit($id)
    {
        $item = Project::where('id', $id)->first();
        return view('dashboard.project.modify_project', [
            'item' => $item,
            'mode' => 'EDIT',
        ]);
    }

    public function create(Request $request)
    {
        $file = $request->file('thumbnail');
        $name = "uploads/project/" . time() . '' . $file->getClientOriginalName();
        $file->move("uploads/project/", $name);

        $property = new Project();
        $property->title = $request->title;
        $property->content = $request->content;
        $property->thumbnail = $name;
        $property->developer = $request->developer;
        $property->price = $request->price;
        $property->project_type = $request->project_type;
        $property->status = $request->status;
        $property->save();
        if ($property->save()) {
            $item = Project::where('id', $property->id)->first();
            return view('dashboard.project.modify_project', [
                'item' => $item,
                'mode' => 'EDIT',
            ])->with('success', 'Project created successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function update(Request $request, $id)
    {
        if ($request->file('thumbnail')) {
            $file = $request->file('thumbnail');
            $name = "uploads/project/" . time() . '' . $file->getClientOriginalName();
            $file->move("uploads/project/", $name);
        } else {
            $image = Project::where('id', $id)->first();
            $name = $image->thumbnail;
        }


        $property = Project::findOrFail($id);
        $property->title = $request->title;
        $property->content = $request->content;
        $property->thumbnail = $name;
        $property->developer = $request->developer;
        $property->price = $request->price;
        $property->project_type = $request->project_type;
        $property->status = $request->status;
        $property->modified_by = 'haris';
        $property->save();
        if ($property->save()) {
            $item = Project::where('id', $property->id)->first();
            return view('dashboard.project.modify_project', [
                'item' => $item,
                'mode' => 'EDIT',
            ])->with('success', 'Project updated successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function updateAddress(Request $request, $id)
    {
        $property = Project::findOrFail($id);
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
        $property = Project::findOrFail($id);
        $property->delete();
        return redirect()->back()->with('success', 'Project deleted successfully');
    }
}
