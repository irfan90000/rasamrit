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
        <form action="{{ route('blog.like') }}"
              method="POST"
              class="d-inline like-form"
              data-type="comment"
              data-id="{{ $comment->id }}"
              id="like-form-comment-{{ $comment->id }}">
            @csrf
            <button
                type="button"
                id="like-btn-comment-{{ $comment->id }}"
                class="btn btn-link btn-sm p-0 m-0 text-decoration-none {{ auth()->check() && $comment->likes->where('user_id', auth()->id())->first() ? 'text-success fw-bold' : 'text-muted' }}">
                👍 Like (<span id="like-count-comment-{{ $comment->id }}">{{ $comment->likes->count() }}</span>)
            </button>
        </form>

        {{-- Reply Button --}}
        @auth
            <button
                    class="btn btn-link btn-sm p-0 m-0 text-decoration-none text-primary"
                    onclick="document.getElementById('reply-form-{{ $comment->id }}').style.display='block'">
                💬 Reply
            </button>

            {{-- Reply Form --}}
            <form
                    id="reply-form-{{ $comment->id }}"
                    action="{{ route('blog.comment', $post->slug) }}"
                    method="POST"
                    style="display: none; margin-top: 10px;">
                @csrf
                <input type="hidden" name="parent_id" value="{{ $comment->id }}">
                <textarea name="body" class="form-control form-control-sm mb-2" required placeholder="Write a reply..."></textarea>
                <button class="btn btn-success btn-sm mb-1">Submit Reply</button>
            </form>
        @endauth

        {{-- Recursive Replies --}}
        @foreach($comment->replies as $reply)
            @include('frontend.blog.partials.comment', ['comment' => $reply, 'post' => $post, 'level' => $level + 1])
        @endforeach
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.like-form').forEach(function(form) {
        const button = form.querySelector('button[type="button"]');
        if (!button) return;

        button.addEventListener('click', function(e) {
            e.preventDefault();

            const type = form.getAttribute('data-type');
            const id = form.getAttribute('data-id');
            const action = form.getAttribute('action');
            const token = form.querySelector('input[name="_token"]').value;

            button.disabled = true;
            axios.post(action, {
                type: type,
                id: id,
                _token: token
            })
            .then(function(response) {
                // update UI
                button.disabled = false;
                // Update like count
                if(response.data && typeof response.data.likes_count !== 'undefined') {
                    const countSpan = document.getElementById('like-count-comment-' + id);
                    if (countSpan) countSpan.textContent = response.data.likes_count;
                }
                // Toggle button style
                if(response.data && typeof response.data.liked !== 'undefined') {
                    if (response.data.liked) {
                        button.classList.remove('text-muted');
                        button.classList.add('text-success', 'fw-bold');
                    } else {
                        button.classList.remove('text-success', 'fw-bold');
                        button.classList.add('text-muted');
                    }
                }
            })
            .catch(function(error) {
                button.disabled = false;
                // handle error
                if(error.response && error.response.status === 401) {
                    alert('Please login to like comments.');
                }
            });
        });
    });
});
</script>