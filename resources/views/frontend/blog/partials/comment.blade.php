<div class="mb-3 ms-{{ $level * 1 }}">
    <div class="border border-success rounded-3 p-3 bg-light-subtle">
        <div class="mb-1">
            <strong class="text-success">{{ $comment->author->name ?? 'User' }}</strong>
            <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
        </div>

        <div class="mb-2 text-dark">
            {{ $comment->body }}
        </div>

        {{-- Like Button --}}
        <form action="{{ route('blog.like') }}" method="POST" class="d-inline like-form">
            @csrf
            <input type="hidden" name="type" value="comment">
            <input type="hidden" name="id" value="{{ $comment->id }}">
            <button
                    type="submit"
                    class="btn btn-link btn-sm p-0 m-0 text-decoration-none {{ auth()->check() && $comment->likes->where('user_id', auth()->id())->first() ? 'text-success fw-bold' : 'text-muted' }}">
                👍 Like (<span>{{ $comment->likes->count() }}</span>)
            </button>
        </form>

        {{-- Reply Button --}}
        @auth
            <button
                    class="btn btn-link btn-sm p-0 m-0 text-decoration-none text-primary reply-toggle-btn"
                    data-comment-id="{{ $comment->id }}">
                💬 Reply
            </button>

            {{-- Reply Form --}}
            <form
                    id="reply-form-{{ $comment->id }}"
                    action="{{ route('blog.comment', $post->slug) }}"
                    method="POST"
                    class="reply-form"
                    style="display: none; margin-top: 10px;">
                @csrf
                <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                <textarea name="body" class="form-control form-control-sm mb-2" required placeholder="Write a reply..."></textarea>
                <button type="submit" class="btn btn-success btn-sm mb-1">Submit Reply</button>
            </form>
        @endauth

        {{-- Recursive Replies --}}
        @foreach($comment->replies as $reply)
            @include('frontend.blog.partials.comment', ['comment' => $reply, 'post' => $post, 'level' => $level + 1])
        @endforeach
    </div>
</div>