@extends('backend.layout.app')
@section('content')
    <div class="page-content">
        <div class="row g-3">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center text-dark py-2">
                            <i class='bx bx-football fs-4 me-1'></i>
                            <h6 class="mb-0 text-dark">
                                Goals
                            </h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($goal_list as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                                <img src="{{ asset('storage/goal/' . $item->image) }}"
                                                    alt="User Image" class="img-fluid" style="height: 100px">
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <div class="d-flex order-actions">
                                                    <a href="{{ route('admin.goal.edit', $item->id) }}">
                                                        <i class='bx bxs-edit'></i>
                                                    </a>
                                                    <form action="{{ route('admin.goal.destroy', $item->id) }}"
                                                        method="POST">
                                                        @method('Delete')
                                                        @csrf
                                                        <button type="submit" class="ms-1">
                                                            <i class='bx bxs-trash'></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="d-flex align-items-center text-dark py-2">
                                    @if (isset($edit_data))
                                        <i class='bx bxs-edit fs-5 me-1'></i>
                                        <h6 class="mb-0 text-dark">
                                            Edit Goal
                                        </h6>
                                    @else
                                        <i class='bx bxs-plus-square fs-5 me-1'></i>
                                        <h6 class="mb-0 text-dark">
                                            Add Goal
                                        </h6>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4 text-end">
                                @if (isset($edit_data))
                                    <a href="{{ route('admin.goal.index') }}" class="btn btn-danger btn-sm">
                                        Cancel
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (isset($edit_data))
                            <form method="post" action="{{ route('admin.goal.update', $edit_data->id) }}"
                                enctype="multipart/form-data">
                                @method('PUT')
                            @else
                                <form method="post" action="{{ route('admin.goal.store') }}"
                                    enctype="multipart/form-data">
                        @endif
                            @csrf
                            <div class="row gy-3">
                                <div class="col-lg-12">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        @if (isset($edit_data)) value="{{ $edit_data->name }}" @endif name="name"
                                        id="name" placeholder="Enter name">
                                </div>
                                <div class="col-lg-12">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        name="image" id="image">
                                    @if (isset($edit_data) && $edit_data->image)
                                        <img src="{{ asset('storage/goal/' . $edit_data->image) }}" alt="User Image"
                                            class="img-fluid" style="height: 100px">
                                    @endif
                                </div>
                                <div class="col-lg-12 text-end">
                                    <button type="submit" class="btn btn-success w-100">
                                        @if (isset($edit_data))
                                            Update
                                        @else
                                            Save
                                        @endif
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
