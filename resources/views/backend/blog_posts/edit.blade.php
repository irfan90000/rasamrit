@extends('backend.layout.app')
@section('content')
    <div class="container">
        <h2>Edit Blog Post</h2>
        <form action="{{ route('admin.blog-posts.update', $blogPost) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            <div class="mb-3">
                <label>Title:</label>
                <input name="title" value="{{ old('title', $blogPost->title) }}" class="form-control" required>
                @error('title')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label>Body:</label>
                <textarea name="body" class="form-control" rows="6" required>{{ old('body', $blogPost->body) }}</textarea>
                @error('body')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label>Thumbnail:</label>
                @if ($blogPost->thumbnail)
                    <br>
                    <img src="{{ asset('storage/' . $blogPost->thumbnail) }}" style="max-width:150px;">
                @endif
                <input type="file" name="thumbnail" class="form-control mt-2">
                @error('thumbnail')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <button class="btn btn-success">Update</button>
            <a href="{{ route('admin.blog-posts.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>

@endsection