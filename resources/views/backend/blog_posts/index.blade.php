@extends('backend.layout.app')
@section('content')
    <div class="container">
        <h1>Blog Posts</h1>
        <a href="{{ route('admin.blog-posts.create') }}" class="btn btn-primary mb-2">Create New Post</a>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table table-bordered">
            <tr>
                <th>ID</th><th>Title</th><th>Slug</th><th>Created At</th><th>Actions</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->created_at->format('d-m-Y') }}</td>
                    <td>
                        <a class="btn btn-info btn-sm" href="{{ route('admin.blog-posts.show', $post) }}">View</a>
                        <a class="btn btn-warning btn-sm" href="{{ route('admin.blog-posts.edit', $post) }}">Edit</a>
                        <form action="{{ route('admin.blog-posts.destroy', $post) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $posts->links() }}
    </div>

@endsection