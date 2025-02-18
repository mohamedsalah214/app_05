<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::paginate(10);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'title'         => 'required|unique:posts|max:255',
            'description'   => 'required',
            'category_id'   => 'required',
            'image'         => 'nullable|image',
            'status'        => 'required',
        ]);

        if ($request->hasFile('image')) {
            $validate['image'] = $request->file('image')->store('images');
        }

        $validate = Post::create($validate);
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $post = Post::findOrFail($post->id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validate = $request->validate([
            'title'         => 'required|max:255',
            'description'   => 'required',
            'category_id'   => 'required',
            'image'         => 'nullable|image',
            'status'        => 'required',
        ]);

        if ($request->hasFile('image')) {
            $validate['image'] = $request->file('image')->store('images');
        }

        // $validate = Post::create($validate);
        $post->update($validate);
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
