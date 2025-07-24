@extends('backend.layout.app')
@section('content')
    <div class="container">
        <h1>{{ $blogPost->title }}</h1>
        @if($blogPost->thumbnail)
            <img src="{{ asset('storage/' . $blogPost->thumbnail) }}" style="max-width:300px;">
        @endif
        <p><strong>By:</strong> {{ $blogPost->author->name ?? 'Unknown' }}</p>
        <p>{!! nl2br(e($blogPost->body)) !!}</p>
        <a href="{{ route('admin.blog-posts.index') }}" class="btn btn-secondary">Back</a>
    </div>

@endsection