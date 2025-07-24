@extends('backend.layout.app')
@section('content')
    <div class="container">
        <h2>Create Blog Post</h2>
        <form action="{{ route('admin.blog-posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Title:</label>
                <input name="title" value="{{ old('title') }}" class="form-control" required>
                @error('title')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label>Body:</label>
                <textarea name="body" class="form-control" rows="6" required>{{ old('body') }}</textarea>
                @error('body')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label>Thumbnail (optional):</label>
                <input type="file" name="thumbnail" class="form-control">
                @error('thumbnail')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <button class="btn btn-success">Publish</button>
            <a href="{{ route('admin.blog-posts.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>

@endsection