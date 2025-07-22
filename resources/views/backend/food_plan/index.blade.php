@extends('backend.layout.app')
@section('content')
    <div class="page-content">
        <div class="row g-3">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="d-flex align-items-center text-dark py-2">
                                    <i class="bx bx-food-menu fs-4 me-1"></i>
                                    <h6 class="mb-0 text-dark">
                                        Food Plan
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Total Days</th>
                                        <th>Discount</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($plan_list as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{$item->days}} Days</td>
                                            <td>{{ $item->discount ?? 0 }}%</td>
                                            <td>
                                                <div class="d-flex order-actions justify-content-center">
                                                    <a href="{{ route('admin.food-plan.edit', $item->id) }}">
                                                        <i class='bx bxs-edit'></i>
                                                    </a>
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
                                            Edit Plan
                                        </h6>
                                    @else
                                        <i class='bx bxs-plus-square fs-5 me-1'></i>
                                        <h6 class="mb-0 text-dark">
                                            Add Plan
                                        </h6>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4 text-end">
                                @if (isset($edit_data))
                                    <a href="{{ route('admin.food-plan.index') }}" class="btn btn-danger btn-sm">
                                        Cancel
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (isset($edit_data))
                            <form method="post" action="{{ route('admin.food-plan.update', $edit_data->id) }}">
                                @method('PUT')
                            @else
                                <form method="post" action="{{ route('admin.food-plan.store') }}">
                        @endif
                        @csrf
                        <div class="row gy-2">
                            <div class="col-lg-12">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    @if (isset($edit_data)) value="{{ $edit_data->name }}" @endif name="name"
                                    id="name" placeholder="Enter name">
                            </div>
                            <div class="col-lg-12">
                                <label for="days" class="form-label">Total Days</label>
                                <input type="number" class="form-control @error('days') is-invalid @enderror"
                                @if (isset($edit_data)) value="{{ $edit_data->days }}" @endif name="days" id="days" placeholder="Enter days">
                            </div>
                            <div class="col-lg-12">
                                <label for="discount" class="form-label">Discount (In %)</label>
                                <input type="number" class="form-control @error('discount') is-invalid @enderror"
                                @if (isset($edit_data)) value="{{ $edit_data->discount }}" @endif  name="discount" id="discount" placeholder="Enter discount">
                            </div>
                            <div class="col-lg-12 text-end">
                                <button type="submit" class="btn btn-success w-100 mt-2">
                                    @if (isset($edit_data))
                                        Update
                                    @else
                                        Save
                                    @endif
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
