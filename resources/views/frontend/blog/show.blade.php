@extends('frontend.layout.app')
@section('content')

    <div class="container">
        <h1>{{ $post->title }}</h1>
        @if($post->thumbnail)
            <img src="{{ asset('storage/' . $post->thumbnail) }}" style="max-width:400px;">
        @endif
        <div class="mb-2">
            <strong>By:</strong> {{ $post->author->name ?? 'Unknown' }}
            | <strong>Date:</strong> {{ $post->created_at->format('d-m-Y') }}
        </div>
        <article>
            {!! nl2br(e($post->body)) !!}
        </article>

        {{-- Likes for Post --}}
        <form action="{{ route('blog.like') }}" method="POST" style="display:inline;">
            @csrf
            <input type="hidden" name="type" value="post">
            <input type="hidden" name="id" value="{{ $post->id }}">
            <button class="btn btn-sm {{ $user && $post->likes->where('user_id', $user->id)->first() ? 'btn-success' : 'btn-outline-success' }}">
                &#x1F44D; Like ({{ $post->likes->count() }})
            </button>
        </form>

        {{-- Share Button --}}
        <button type="button" class="btn btn-info btn-sm"
                onclick="navigator.clipboard.writeText('{{ $post->share_link }}')">
            &#128279; Share
        </button>


        <hr>

        {{-- Comments Section --}}
        <h4>Comments ({{ $post->comments->count() }})</h4>
        @auth
            <form action="{{ route('blog.comment', $post->slug) }}" method="POST" class="mb-3">
                @csrf
                <textarea name="body" class="form-control" placeholder="Add a comment..." required></textarea>
                <button class="btn btn-primary btn-sm mt-2">Comment</button>
            </form>
        @endauth

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        {{-- Recursive comments and replies --}}
        <div>
            @foreach($post->comments->where('parent_id', null) as $comment)
                @include('frontend.blog.partials.comment', ['comment' => $comment, 'post' => $post, 'level' => 0])
            @endforeach
        </div>
    </div>




@endsection