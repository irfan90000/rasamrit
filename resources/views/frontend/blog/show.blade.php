@extends('frontend.layout.app')
@section('content')

    <div class="container py-5">
        <div class="">
            <div class="">
                <h2 class="text-success fw-bold">{{ $post->title }}</h2>

                @if($post->thumbnail)
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" class="img-fluid rounded my-3" style="max-height: 300px; min-width: 100%;">
                @endif

                <div class="mb-2 text-muted small">
                    <strong>By:</strong> {{ $post->author->name ?? 'Unknown' }}
                    | <strong>Date:</strong> {{ $post->created_at->format('d-m-Y') }}
                </div>

                <article class="mb-4">
                    {!! nl2br(e($post->body)) !!}
                </article>

                {{-- Like Button --}}
                <form action="{{ route('blog.like') }}" method="POST" class="d-inline">
                    @csrf
                    <input type="hidden" name="type" value="post">
                    <input type="hidden" name="id" value="{{ $post->id }}">
                    <button class="btn btn-sm {{ $user && $post->likes->where('user_id', $user->id)->first() ? 'btn-success' : 'btn-outline-success' }}">
                        👍 Like ({{ $post->likes->count() }})
                    </button>
                </form>

                {{-- Share --}}
                <button type="button" class="btn btn-info btn-sm ms-2"
                        onclick="navigator.clipboard.writeText('{{ $post->share_link }}')">
                    🔗 Share
                </button>
            </div>
        </div>

        {{-- Comments --}}
        <div class="mt-4">
            <h4 class="text-success">Comments ({{ $post->comments->count() }})</h4>

            @auth
                <form action="{{ route('blog.comment', $post->slug) }}" method="POST" class="mb-3">
                    @csrf
                    <textarea name="body" class="form-control" rows="3" placeholder="Add a comment..." required></textarea>
                    <button class="btn btn-success btn-sm mt-2">Comment</button>
                </form>
            @endauth

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            {{-- Nested comments --}}
            <div>
                @foreach($post->comments->where('parent_id', null) as $comment)
                    @include('frontend.blog.partials.comment', ['comment' => $comment, 'post' => $post, 'level' => 0])
                @endforeach
            </div>
        </div>
    </div>
@endsection
