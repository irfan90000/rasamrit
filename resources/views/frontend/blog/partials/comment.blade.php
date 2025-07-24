<div class="mb-3" style="margin-left:{{ $level * 20 }}px;">
    <div>
        <strong>{{ $comment->author->name ?? 'User' }}</strong> 
        <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
    </div>
    <div>
        {{ $comment->body }}
    </div>
    {{-- Like Button --}}
    <form action="{{ route('blog.like') }}" method="POST" style="display:inline;">
        @csrf
        <input type="hidden" name="type" value="comment">
        <input type="hidden" name="id" value="{{ $comment->id }}">
        <button class="btn btn-link btn-sm p-0 m-0 {{ auth()->check() && $comment->likes->where('user_id', auth()->id())->first() ? 'text-success' : '' }}">
            Like ({{ $comment->likes->count() }})
        </button>
    </form>
    {{-- Reply Button and Form --}}
    @auth
        <button class="btn btn-link btn-sm p-0 m-0" onclick="document.getElementById('reply-form-{{ $comment->id }}').style.display='block'">Reply</button>
        <form 
             id="reply-form-{{ $comment->id }}" 
             action="{{ route('blog.comment', $post->slug) }}" 
             method="POST"
             style="display:none; margin-top:5px;">
            @csrf
            <input type="hidden" name="parent_id" value="{{ $comment->id }}">
            <textarea name="body" class="form-control form-control-sm mb-1" required placeholder="Write reply..."></textarea>
            <button class="btn btn-primary btn-xs btn-sm">Reply</button>
        </form>
    @endauth

    {{-- Show replies recursively --}}
    @foreach($comment->replies as $reply)
        @include('frontend.blog.partials.comment', ['comment' => $reply, 'post' => $post, 'level' => $level + 1])
    @endforeach
</div>