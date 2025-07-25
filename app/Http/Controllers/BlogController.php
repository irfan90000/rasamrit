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
            'body'      => 'required|string',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        $comment = new Comment([
            'user_id'   => Auth::id(),
            'body'      => $data['body'],
            'parent_id' => $data['parent_id'] ?? null,
        ]);
        $blogPost->comments()->save($comment);
        $comment->load(['author', 'likes', 'replies']); // eager for partial

        if ($request->expectsJson()) {
            $html = view('frontend.blog.partials.comment', [
                'comment' => $comment,
                'post'    => $blogPost,
                'level'   => 0,
            ])->render();

            return response()->json([
                'message'     => 'Comment posted!',
                'html'        => $html
            ]);
        }

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
        if (!$user) {
            // For AJAX, return error status
            if ($request->expectsJson()) {
                return response()->json(['message' => 'Unauthorized'], 401);
            }
            return back();
        }

        if ($data['type'] === 'post') {
            $likeable = \App\Models\BlogPost::findOrFail($data['id']);
        } else {
            $likeable = \App\Models\Comment::findOrFail($data['id']);
        }

        $existing = $likeable->likes()->where('user_id', $user->id)->first();
        if ($existing) {
            $existing->delete();
            $liked = false;
        } else {
            $likeable->likes()->create(['user_id' => $user->id]);
            $liked = true;
        }

        if ($request->expectsJson()) {
            return response()->json([
                'liked' => $liked,
                'likes_count' => $likeable->likes()->count()
            ]);
        }

        return back();
    }
}