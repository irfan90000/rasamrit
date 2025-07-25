@extends('backend.layout.app')
@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">

                     <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="d-flex align-items-center text-dark py-2">

                                    <h6 class="mb-0 text-dark">
                                        {{ $blogPost->title }}
                                    </h6>
                                </div>
                            </div>
                            <div class="col-lg-4 text-end">
                                <a href="{{ route('admin.blog-posts.index') }}" class="btn btn-danger btn-sm">
                                    Cancel
                                </a>
                            </div>
                         </div>
                     </div>

                <div class="card-body">
                      <h1>{{ $blogPost->title }}</h1>
                       @if($blogPost->thumbnail)
                       <img src="{{ asset('storage/' . $blogPost->thumbnail) }}" style="max-width:300px;">
                        @endif
                        <p><strong>By:</strong> {{ $blogPost->author->name ?? 'Unknown' }}</p>
                        <p>{!! nl2br(e($blogPost->body)) !!}</p>
                    </div>
                    </div>

            </div>
        </div>
    </div>
@endsection