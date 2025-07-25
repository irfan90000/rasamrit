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
                                    <i class='bx bxs-plus-square fs-5 me-1'></i>
                                    <h6 class="mb-0 text-dark">
                                        Create Blog Post
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
    <div class="container card-body">

        <form action="{{ route('admin.blog-posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Title:</label>
                <input name="title" value="{{ old('title') }}" class="form-control" required>
                @error('title')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label>Body:</label>
                <textarea name="body" class="form-control" rows="6" required>{{ old('body') }}</textarea>
                @error('body')<div class="text-danger">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label>Thumbnail (optional):</label>
                <input type="file" name="thumbnail" class="form-control">
                @error('thumbnail')<div class="text-danger">{{ $message }}</div>@enderror
            </div>


                    <div class="col-lg-12 text-end ">
            <button class="btn btn-success">Publish</button>
                    </div>
        </form>
    </div>
                </div>
            </div>
        </div>
    </div>
@endsection