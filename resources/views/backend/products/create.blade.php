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
                                    Add New Product
                                </h6>
                            </div>
                        </div>
                        <div class="col-lg-4 text-end">
                            <a href="{{ route('admin.products.index') }}" class="btn btn-danger btn-sm">
                                Cancel
                            </a>
                        </div>
                    </div>
{{--                    <div class="row flex">--}}
{{--                        <div class="col-lg-8">--}}
{{--                    <h3 class="card-title">Add New Product</h3>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 text-end">--}}
{{--                    <div  class="card-tools">--}}
{{--                        <a href="{{ route('admin.products.index') }}" class="btn btn-danger btn-sm">--}}
{{--                            Cancel--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mt-2 form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-2 form-group">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="3">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-2 form-group">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}" step="0.01" required>
                            @error('price')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-2 form-group">
                            <label for="stock_quantity" class="form-label">Stock Quantity</label>
                            <input type="number" name="stock_quantity" id="stock_quantity" class="form-control @error('stock_quantity') is-invalid @enderror" value="{{ old('stock_quantity', 0) }}" required>
                            @error('stock_quantity')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-2 form-group">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-control @error('status') is-invalid @enderror" required>
                                <option value="in_stock" {{ old('status') === 'in_stock' ? 'selected' : '' }}>In Stock</option>
                                <option value="out_of_stock" {{ old('status') === 'out_of_stock' ? 'selected' : '' }}>Out of Stock</option>
                                <option value="coming_soon" {{ old('status') === 'coming_soon' ? 'selected' : '' }}>Coming Soon</option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mt-2 form-group">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" name="is_active" class="custom-control-input" id="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                                <label class="custom-control-label" for="is_active" class="form-label">Active</label>
                            </div>
                        </div>

                        <div class="mt-2 form-group">
                            <label for="image" class="form-label">Product Image</label>
                            <input type="file" name="image" id="image" class="form-control-file @error('image') is-invalid @enderror">
                            @error('image')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-lg-12 text-end">
                            <button type="submit" class="btn btn-success">
                                Create Product
                            </button>
                        </div>
{{--                        <button type="submit" class="btn btn-primary">Create Product</button>--}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 