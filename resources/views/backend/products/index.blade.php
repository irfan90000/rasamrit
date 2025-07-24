@extends('backend.layout.app')

@section('content')
    <div class="page-content">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="d-flex align-items-center text-dark py-2">
                                <i class="bx bx-food-menu fs-4 me-1"></i>
                                <h6 class="mb-0 text-dark ">
                                    Products
                                </h6>
                            </div>
                        </div>
                        <div class="col-lg-4 text-end">
                            <a href="{{ route('admin.products.create') }}" class="btn btn-danger btn-sm">
                                <i class='bx bxs-plus-square fs-5 me-1'></i>Add
                            </a>
                        </div>
                    </div>
                </div>
{{--                <div class="card-header">--}}
{{--                    <h3 class="card-title">Products--}}
{{--                    </h3>--}}
{{--                    <div class="card-tools">--}}
{{--                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">--}}
{{--                            Add New Product--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="card-body">
                    <div class="table-responsive">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table class="table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Stock</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>
                                        @if($product->image)
                                            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" width="50">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td>${{ number_format($product->price, 2) }}</td>
                                    <td>
                                        <span class="badge badge-{{ $product->status === 'in_stock' ? 'success' : ($product->status === 'out_of_stock' ? 'danger' : 'warning') }}">
                                            {{ str_replace('_', ' ', ucfirst($product->status)) }}
                                        </span>
                                    </td>
                                    <td>{{ $product->stock_quantity }}</td>
                                    <td>
                                        <a href="{{ route('admin.products.edit', $product) }}" class="btn btn-sm btn-info">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.products.destroy', $product) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-3">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection 