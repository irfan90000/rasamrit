<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BlogPostController extends Controller
{
    // List all posts
    public function index()
    {
        $posts = BlogPost::latest()->paginate(10);
        return view('backend.blog_posts.index', compact('posts'));
    }

    // Show create post form
    public function create()
    {
        return view('backend.blog_posts.create');
    }

    // Store new post
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('blog_thumbnails', 'public');
            $validated['thumbnail'] = $path;
        }

        $validated['slug'] = Str::slug($validated['title']);
        $validated['user_id'] = Auth::id();

        BlogPost::create($validated);

        return redirect()->route('admin.blog-posts.index')->with('success', 'Blog post created successfully!');
    }

    // Show edit form
    public function edit(BlogPost $blogPost)
    {
        return view('backend.blog_posts.edit', compact('blogPost'));
    }

    // Update post
    public function update(Request $request, BlogPost $blogPost)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'thumbnail' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('thumbnail')) {
            $path = $request->file('thumbnail')->store('blog_thumbnails', 'public');
            $validated['thumbnail'] = $path;
        }

        $validated['slug'] = Str::slug($validated['title']);

        $blogPost->update($validated);

        return redirect()->route('admin.blog-posts.index')->with('success', 'Blog post updated!');
    }

    // Delete a post
    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();
        return redirect()->route('admin.blog-posts.index')->with('success', 'Blog post deleted!');
    }

    // Show a single blog post
    public function show(BlogPost $blogPost)
    {
        return view('backend.blog_posts.show', compact('blogPost'));
    }
}