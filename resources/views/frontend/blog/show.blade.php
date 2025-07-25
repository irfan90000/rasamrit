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
                <form id="like-form-{{ $post->id }}" action="{{ route('blog.like') }}" method="POST" class="d-inline">
                    @csrf
                    <input type="hidden" name="type" value="post">
                    <input type="hidden" name="id" value="{{ $post->id }}">
                    <button
                        type="submit"
                        id="like-btn-{{ $post->id }}"
                        class="btn btn-sm {{ $user && $post->likes->where('user_id', $user->id)->first() ? 'btn-success' : 'btn-outline-success' }}">
                        👍 Like (<span id="like-count-{{ $post->id }}">{{ $post->likes->count() }}</span>)
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
                <form id="blog-comment-form" action="{{ route('blog.comment', $post->slug) }}" method="POST" class="mb-3">
                    @csrf
                    <textarea name="body" class="form-control" rows="3" placeholder="Add a comment..." required></textarea>
                    <button type="submit" class="btn btn-success btn-sm mt-2">Comment</button>
                    <div id="blog-comment-success" class="mt-2" style="display:none"></div>
                    <div id="blog-comment-error" class="mt-2 text-danger" style="display:none"></div>
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
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('blog-comment-form');
    if (!form) return;

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // Hide previous messages
        document.getElementById('blog-comment-success').style.display = 'none';
        document.getElementById('blog-comment-error').style.display = 'none';

        // Prepare data
        const formData = new FormData(form);

        axios.post(form.action, formData)
            .then(function(response) {
                // On success, show a message, clear textarea, or instantly append comment as you wish
                document.getElementById('blog-comment-success').textContent = "Comment posted!";
                document.getElementById('blog-comment-success').style.display = '';
                form.querySelector('textarea[name="body"]').value = '';
                // Optionally: dynamically prepend comment to comment list here!
            })
            .catch(function(error) {
                let msg = 'Failed to post comment.';
                if(error.response && error.response.data && error.response.data.errors) {
                    msg = Object.values(error.response.data.errors).flat().join(' ');
                }
                document.getElementById('blog-comment-error').textContent = msg;
                document.getElementById('blog-comment-error').style.display = '';
            });
    });
});
</script>