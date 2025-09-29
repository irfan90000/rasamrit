@extends('frontend.layout.app')
@section('content')
    <div class="container py-5">
        <h1 class="text-success fw-bold mb-4 border-bottom pb-2">Blog Posts</h1>

        <div class="row g-4">
            @foreach($posts as $singlePost)
                <div class="col-md-4">
                    <div class="card h-100 border border-success  shadow-sm rounded-4" >
                        @if($singlePost->thumbnail)
                            <img src="{{ asset('storage/' . $singlePost->thumbnail) }}"
                                 class="card-img-top rounded-top-4"
                                 style="height: 200px; object-fit: cover;">
                        @endif

                        <div class="card-body d-flex flex-column">
                            <h5 class="fw-bold text-success mb-2">
                                <a href="{{ route('blog.show', $singlePost->slug) }}"
                                   class="text-decoration-none text-success">
                                    {{ $singlePost->title }}
                                </a>
                            </h5>

                            <div class="mb-2 small text-dark">
                                <strong>By:</strong> {{ $singlePost->author->name ?? 'Unknown' }}<br>
                                <strong>Date:</strong> {{ $singlePost->created_at->format('d-m-Y') }}
                            </div>

                            <p class="text-dark flex-grow-1">
                                {{ Str::limit(strip_tags($singlePost->body), 120) }}
                            </p>

                            <a href="{{ route('blog.show', $singlePost->slug) }}"
                               class="btn btn-success btn-sm mt-auto rounded-pill">Read More</a>
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
