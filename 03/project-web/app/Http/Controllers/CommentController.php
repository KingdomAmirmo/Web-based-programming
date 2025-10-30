<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::with('user','post')->latest()->get();
        return view('comments.index', compact('comments'));
    }

    // show form for creating comment (برای پست خاص)
    public function create(Post $post)
    {
        $users = User::all();
        return view('comments.create', compact('post','users'));
    }

    public function store(Request $request, Post $post)
    {
        $data = $request->validate([
            'body' => 'required|string',
            'user_id' => 'required|exists:users,id'
        ]);

        $data['post_id'] = $post->id;
        Comment::create($data);

        return redirect()->route('posts.show', $post)->with('success', 'کامنت اضافه شد.');
    }

    // edit comment
    public function edit(Comment $comment)
    {
        $users = User::all();
        return view('comments.edit', compact('comment','users'));
    }

    public function update(Request $request, Comment $comment)
    {
        $data = $request->validate([
            'body' => 'required|string',
            'user_id' => 'required|exists:users,id',
        ]);

        $comment->update($data);

        return redirect()->route('posts.show', $comment->post_id)->with('success', 'کامنت با موفقیت بروزرسانی شد.');
    }

    public function destroy(Comment $comment)
    {
        $postId = $comment->post_id;
        $comment->delete();
        return redirect()->route('posts.show', $postId)->with('success', 'کامنت حذف شد.');
    }

    // optional: show comment
    public function show(Comment $comment)
    {
        return view('comments.show', compact('comment'));
    }
}
