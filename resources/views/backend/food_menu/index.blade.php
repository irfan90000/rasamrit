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
                                    <i class='bx bx-food-tag fs-4 me-1'></i>
                                    <h6 class="mb-0 text-dark">
                                        Food Menu
                                    </h6>
                                </div>
                            </div>
                            <div class="col-lg-4 text-end">
                                <a href="{{ route('admin.food-menu.create') }}" class="btn btn-danger btn-sm">
                                    <i class='bx bxs-plus-square fs-5 me-1'></i>Add
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Diet Type</th>
                                        <th>Dietary</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($food_list as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->getDiet->name }}</td>
                                            <td class="text-capitalize">{{ $item->dietary }}</td>
                                            <td>
                                                <div class="d-flex order-actions justify-content-center">
                                                    <a href="{{ route('admin.food-menu.edit', $item->id) }}">
                                                        <i class='bx bxs-edit'></i>
                                                    </a>
                                                    <form action="{{ route('admin.food-menu.destroy', $item->id) }}"
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
        </div>
    </div>
@endsection
