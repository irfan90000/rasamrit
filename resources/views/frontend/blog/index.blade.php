@extends('frontend.layout.app')
@section('content')

    <div class="container">
        <h1>Blog Posts</h1>
        @foreach($posts as $singlePost)
            <div class="blog-post mb-4">
                <h2>
                    <a href="{{ route('blog.show', $singlePost->slug) }}">
                        {{ $singlePost->title }}
                    </a>
                </h2>
                @if($singlePost->thumbnail)
                    <img src="{{ asset('storage/' . $singlePost->thumbnail) }}" style="max-width:400px;">
                @endif
                <div class="mb-2">
                    <strong>By:</strong> {{ $singlePost->author->name ?? 'Unknown' }}
                    | <strong>Date:</strong> {{ $singlePost->created_at->format('d-m-Y') }}
                </div>
                <div>
                    {!! Str::limit(e($singlePost->body), 200) !!}
                </div>
                <a href="{{ route('blog.show', $singlePost->slug) }}">Read More</a>
                <hr>
            </div>
        @endforeach

        {{-- Pagination links --}}
        {{ $posts->links() }}
    </div>
@endsection