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
                                    <i class="bx bx-food-menu fs-4 me-1"></i>
                                    <h6 class="mb-0 text-dark">
                                        Food Program check router is working or not
                                    </h6>
                                </div>
                            </div>
                            <div class="col-lg-4 text-end">
                                <a href="{{ route('admin.food-program.create') }}" class="btn btn-danger btn-sm">
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
                                        <th>Goal</th>
                                        <th>Plan</th>
                                        <th>Veg Price/Meal</th>
                                        <th>Nonveg Price/Meal</th>
                                        <th>Egg Price/Meal</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pricing_list as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->getGoal->name }}</td>
                                            <td>{{ $item->getPlan->name }}</td>
                                            <td>
                                                <table class="subtable">
                                                    <tr>
                                                        <td>Breakfast:</td>
                                                        <td>Rs {{ $item->vegetarian['breakfast'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lunch:</td>
                                                        <td>Rs {{ $item->vegetarian['lunch'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Snacks:</td>
                                                        <td>Rs {{ $item->vegetarian['snack'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dinner:</td>
                                                        <td>Rs {{ $item->vegetarian['dinner'] }}</td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="subtable">
                                                    <tr>
                                                        <td>Breakfast:</td>
                                                        <td>Rs {{ $item->nonvegetarian['breakfast'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lunch:</td>
                                                        <td>Rs {{ $item->nonvegetarian['lunch'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Snacks:</td>
                                                        <td>Rs {{ $item->nonvegetarian['snack'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dinner:</td>
                                                        <td>Rs {{ $item->nonvegetarian['dinner'] }}</td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <table class="subtable">
                                                    <tr>
                                                        <td>Breakfast:</td>
                                                        <td>Rs {{ $item->eggetarian['breakfast'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lunch:</td>
                                                        <td>Rs {{ $item->eggetarian['lunch'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Snacks:</td>
                                                        <td>Rs {{ $item->eggetarian['snack'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dinner:</td>
                                                        <td>Rs {{ $item->eggetarian['dinner'] }}</td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                                <div class="d-flex order-actions justify-content-center">
                                                    <a href="{{ route('admin.food-pricing.edit', $item->id) }}">
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
        </div>
    </div>
@endsection
