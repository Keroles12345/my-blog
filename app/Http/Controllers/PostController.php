<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Validation\Rules\Password;

class PostController
{

    public function index()
    {
        $posts=Post::orderBy('created_at','desc')->paginate(10);
        return view('posts.index',['posts'=>$posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:posts|max:255',
            'email' => 'required|email|max:255',
            'password' => ['required', 'confirmed', Password::min(8)],
        ]);

        Post::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('post')->with('success', 'Post created successfully.');
    }

    public function show(string $id) {
     $post=   Post::findorfail($id);
  return view('posts.show',['post'=>$post]);
    }
    public function edit(string $id) {}
    public function update(Request $request, string $id) {}
    public function destroy(string $id) {}
}

