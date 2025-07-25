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
{{--                                <i class='bx bxs-plus-square fs-5 me-1'></i>--}}
                                <h5 class="mb-0 text-dark">Order #{{ $order->id }} Details</h5>
                            </div>
                        </div>
                        <div class="col-lg-4 text-end">
                            <a href="{{ route('admin.orders.index') }}" class="btn btn-danger btn-sm">
                                Cancel
                            </a>
                        </div>
                    </div>
{{--                    <h3 class="card-title">Order #{{ $order->id }} Details</h3>--}}
{{--                    <div class="card-tools">--}}
{{--                        <a href="{{ route('admin.orders.index') }}" class="btn btn-default">--}}
{{--                            Back to Orders--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4 bg-light ">
                                <div class="card-header">
                                    <h5 class="mb-0 fw-bold text-success">Customer Information</h5>
                                </div>
                                <div class="card-body">
                                    <p><strong>Name:</strong> {{ $order->user->name }}</p>
                                    <p><strong>Email:</strong> {{ $order->user->email }}</p>
                                    <p><strong>Order Date:</strong> {{ $order->created_at->format('M d, Y H:i') }}</p>
                                </div>
                            </div>

                            <div class="card bg-light">
                                <div class="card-header">
                                    <h5 class="mb-0 fw-bold text-success">Shipping & Billing</h5>
                                </div>
                                <div class="card-body">
                                    <h6>Shipping Address</h6>
                                    <p class="mb-4">{{ $order->shipping_address }}</p>

                                    <h6>Billing Address</h6>
                                    <p class="mb-0">{{ $order->billing_address }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4 bg-light">
                                <div class="card-header">
                                    <h5 class="mb-0 fw-bold text-success">Order Status</h5>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('admin.orders.update-status', $order) }}" method="POST" class="mb-4">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group">
                                            <label for="status">Order Status</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="pending" {{ $order->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="processing" {{ $order->status === 'processing' ? 'selected' : '' }}>Processing</option>
                                                <option value="completed" {{ $order->status === 'completed' ? 'selected' : '' }}>Completed</option>
                                                <option value="cancelled" {{ $order->status === 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-success mt-2">Update Status</button>
                                    </form>

                                    <form action="{{ route('admin.orders.update-payment', $order) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group">
                                            <label for="payment_status ">Payment Status</label>
                                            <select name="payment_status" id="payment_status" class="form-control">
                                                <option value="pending" {{ $order->payment_status === 'pending' ? 'selected' : '' }}>Pending</option>
                                                <option value="paid" {{ $order->payment_status === 'paid' ? 'selected' : '' }}>Paid</option>
                                                <option value="failed" {{ $order->payment_status === 'failed' ? 'selected' : '' }}>Failed</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-success mt-2">Update Payment Status</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-4 bg-light">
                        <div class="card-header ">
                            <h5 class="mb-0 text-success fw-bold">Order Items</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th class="text-end">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order->items as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        @if($item->product->image)
                                                            <img src="{{ Storage::url($item->product->image) }}" alt="{{ $item->product->name }}" class="img-thumbnail mr-3" style="width: 50px;">
                                                        @endif
                                                        <div>
                                                            <h6 class="mb-0">{{ $item->product->name }}</h6>
                                                            <small class="text-muted">SKU: {{ $item->product->id }}</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>${{ number_format($item->price, 2) }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td class="text-end">${{ number_format($item->price * $item->quantity, 2) }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" class="text-end"><strong>Total:</strong></td>
                                            <td class="text-end"><strong>${{ number_format($order->total_amount, 2) }}</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 