@extends('frontend.layout.app')
@section('content')
    <div class="container py-5">
        <h2 class="text-success fw-bold mb-4 border-bottom pb-2">Blog Posts</h2>

        <div class="row g-4"> <!-- Bootstrap row with gap -->
            @foreach($posts as $singlePost)
                <div class="col-md-4"> <!-- 3 columns per row on medium screens -->
                    <div class="card h-100 shadow-sm border-success">
                        <div class="card-body d-flex flex-column">
                            <h5>
                                <a class="text-success fw-bold text-decoration-none"
                                   href="{{ route('blog.show', $singlePost->slug) }}">
                                    {{ $singlePost->title }}
                                </a>
                            </h5>

                            @if($singlePost->thumbnail)
                                <img src="{{ asset('storage/' . $singlePost->thumbnail) }}"
                                     class="img-fluid rounded my-3" style="max-height: 180px; object-fit: cover;">
                            @endif

                            <div class="mb-2 text-muted small">
                                <strong>By:</strong> {{ $singlePost->author->name ?? 'Unknown' }}
                                | <strong>Date:</strong> {{ $singlePost->created_at->format('d-m-Y') }}
                            </div>

                            <p class="text-dark flex-grow-1">
                                {{ Str::limit(strip_tags($singlePost->body), 120) }}
                            </p>

                            <a href="{{ route('blog.show', $singlePost->slug) }}"
                               class="btn btn-outline-success btn-sm mt-auto">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-5">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
