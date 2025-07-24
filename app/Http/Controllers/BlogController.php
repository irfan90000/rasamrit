<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Comment;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    // Show all posts list (optional)
    public function index()
    {
        $posts = BlogPost::withCount('likes')->latest()->paginate(10);
        return view('frontend.blog.index', compact('posts'));
    }

    // Show a single post, comments, replies etc.
    public function show(BlogPost $blogPost)
    {
        $blogPost->load(['comments.replies', 'comments.author', 'comments.likes', 'author', 'likes']);
        $user = Auth::user();

        return view('frontend.blog.show', [
            'post' => $blogPost,
            'user' => $user,
        ]);
    }

    // Add a comment or reply
    public function comment(Request $request, BlogPost $blogPost)
    {
        $data = $request->validate([
            'body' => 'required|string',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        $comment = new Comment([
            'user_id' => Auth::id(),
            'body' => $data['body'],
            'parent_id' => $data['parent_id'] ?? null,
        ]);
        $blogPost->comments()->save($comment);

        return redirect()->route('blog.show', $blogPost->slug)->with('success', 'Comment posted!');
    }

    // Like/unlike a post or a comment
    public function like(Request $request)
    {
        $data = $request->validate([
            'type' => 'required|in:post,comment',
            'id' => 'required|integer',
        ]);

        $user = Auth::user();
        if (!$user) return back();

        if ($data['type'] === 'post') {
            $likeable = BlogPost::findOrFail($data['id']);
        } else {
            $likeable = Comment::findOrFail($data['id']);
        }

        $existing = $likeable->likes()->where('user_id', $user->id)->first();
        if ($existing) {
            $existing->delete();
        } else {
            $likeable->likes()->create(['user_id' => $user->id]);
        }

        return back();
    }
}