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
                                        <i class="bx bx-pencil fs-4 me-1"></i>
                                         <h6 class="mb-0 text-dark">
                                              Blog Posts
                                          </h6>
                                    </div>
                                  </div>
                                 <div class="col-lg-4 text-end">
                                         <a href="{{ route('admin.blog-posts.create') }}" class="btn btn-danger btn-sm">
                                        <i class='bx bxs-plus-square fs-5 me-1'></i>Add
                                        </a>
                                       @if (session('success'))
                                       <div class="alert alert-success">{{ session('success') }}</div>
                                      @endif
                                 </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table mb-0">
                                      <thead class="table-light">

                                           <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Slug</th>
                                                <th>Created At</th>
                                                <th>Actions</th>
                                           </tr>
                                       </thead>
                             <tbody>
                                         @foreach ($posts as $post)
                                    <tr>
                                       <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                         <td>{{ $post->slug }}</td>
                                         <td>{{ $post->created_at->format('d-m-Y') }}</td>
                                        <td>
                                             <a class="btn btn-light btn-sm" href="{{ route('admin.blog-posts.show', $post) }}"><i class='bx bxs-show text-info'></i>
                                                            </a>
                                               <a class="btn btn-light btn-sm" href="{{ route('admin.blog-posts.edit', $post) }}">     <i class='bx bxs-edit text-warning'></i></a>
                                               <form action="{{ route('admin.blog-posts.destroy', $post) }}" method="POST" style="display:inline;">
                                              @csrf @method('DELETE')
                                                 <button onclick="return confirm('Are you sure?')" class="btn btn-light btn-sm">  <i class='bx bxs-trash text-danger'></i></button>
                                          </form>
                                        </td>
                                    </tr>
                                @endforeach
                           </tbody>

                      </table>
                           {{ $posts->links() }}
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection