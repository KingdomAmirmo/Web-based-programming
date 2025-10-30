<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->orderBy('created_at','desc')->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        $users = User::all();
        return view('posts.create', compact('users'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body'  => 'required|string',
            'user_id' => 'required|exists:users,id',
        ]);

        Post::create($data);

        return redirect()->route('posts.index')->with('success', 'پست ساخته شد.');
    }

    public function show(Post $post)
    {
        $post->load('comments.user', 'user');
        return view('posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $users = User::all();
        return view('posts.edit', compact('post','users'));
    }

    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'body'  => 'required|string',
            'user_id' => 'required|exists:users,id',
        ]);

        $post->update($data);

        return redirect()->route('posts.show', $post)->with('success', 'پست با موفقیت بروزرسانی شد.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'پست حذف شد.');
    }
}
