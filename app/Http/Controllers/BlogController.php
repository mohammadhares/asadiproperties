<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::OrderBy('id', 'desc')->paginate(12);
        return view('dashboard.blog.blog', [
            'result' => $blog
        ]);
    }

    public function create(Request $request)
    {
        $file = $request->file('image');
        $name = "uploads/blog/" . time() . '' . $file->getClientOriginalName();
        $file->move("uploads/blog/", $name);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->image = $name;
        $blog->save();
        if ($blog->save()) {
            return redirect()->back()->with('success', 'Blog Created successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function update(Request $request, $id)
    {
        if ($request->file('image')) {
            $file = $request->file('image');
            $name = "uploads/blog/" . time() . '' . $file->getClientOriginalName();
            $file->move("uploads/blog/", $name);
        } else {
            $image = Blog::where('id', $id)->first();
            $name = $image->image;
        }

        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->image = $name;
        $blog->save();
        if ($blog->save()) {
            return redirect()->back()->with('success', 'Blog Update successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function delete($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->back()->with('success', 'Blog deleted successfully');
    }
}
