<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    // Blog listing
    public function index()
    {
        $blogs = Blog::latest()->paginate(6);
        return view('blog.index', compact('blogs'));
    }

    // Single blog
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $recentBlogs = Blog::latest()->take(5)->get();

        return view('blog.show', compact('blog', 'recentBlogs'));
    }
    public function create()
{
    return view('blog.create');
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'short_description' => 'required',
        'content' => 'required',
        'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $imagePath = null;

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('blogs', 'public');
    }

    Blog::create([
        'title' => $request->title,
        'slug' => Str::slug($request->title),
        'short_description' => $request->short_description,
        'content' => $request->content, // HTML from CKEditor
        'image' => $imagePath,
        'meta_title' => $request->meta_title,
        'meta_description' => $request->meta_description,
    ]);

    return redirect()->route('blog.index')->with('success', 'Blog created successfully!');
}

public function home()
    {
        $blogs = Blog::latest()->take(4)->get();

        return view('index', compact('blogs'));
    }
}
