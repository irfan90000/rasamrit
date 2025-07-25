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
                                        Edit Blog Post
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

               <form action="{{ route('admin.blog-posts.update', $blogPost) }}" method="POST" enctype="multipart/form-data">
                              @csrf @method('PUT')
                            <div class="mb-3">
                                   <label> <h6>Title:</h6></label>
                                   <input name="title" value="{{ old('title', $blogPost->title) }}" class="form-control" required>
                                   @error('title')<div class="text-danger">{{ $message }}</div>@enderror
                            </div>
                           <div class="mb-3">
                              <label><h6>Body:</h6></label>
                                    <textarea name="body" class="form-control" rows="6" required>{{ old('body', $blogPost->body) }}</textarea>
                              @error('body')<div class="text-danger">{{ $message }}</div>@enderror
                           </div>
                        <div class="mb-3">
                              <label><h6>Thumbnail:</h6></label>
                             @if ($blogPost->thumbnail)
                                <br>
                              <img src="{{ asset('storage/' . $blogPost->thumbnail) }}" style="max-width:150px;">
                             @endif
                           <input type="file" name="thumbnail" class="form-control mt-2">
                         @error('thumbnail')<div class="text-danger">{{ $message }}</div>@enderror
                        </div>
                       <div class="col-lg-12 text-end">
                           <button class="btn btn-success">Update</button>
                              </div>

                  </form>
                </div>
             </div>
            </div>
        </div>
    </div>

@endsection