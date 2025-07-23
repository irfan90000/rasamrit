@extends('backend.layout.app')
@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center text-dark py-2">
                            <i class="bx bx-cycling fs-4 me-1"></i>
                            <h6 class="mb-0 text-dark">
                                Program Susbscription List
                            </h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th class="text-start">User Detail</th>
                                    <th class="text-start">Subscription Detail</th>
                                    <th class="text-start">Price Detail</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($subscription_list as $key => $item)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <table class="subtable">
                                                <tr>
                                                    <td>Name:</td>
                                                    <td>{{ $item->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Email:</td>
                                                    <td>{{ $item->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Phone:</td>
                                                    <td>{{ $item->phone }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Gender:</td>
                                                    <td class="text-capitalize">{{ $item->gender }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Weight:</td>
                                                    <td>{{ $item->weight }}Kg</td>
                                                </tr>
                                                <tr>
                                                    <td>Height:</td>
                                                    <td>{{ $item->height }}Inch</td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="subtable">
                                                <tr>
                                                    <td>Goal:</td>
                                                    <td>{{ $item->getGoal->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Diet Type:</td>
                                                    <td>{{ $item->getDietType->name ?? 'NA' }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Plan:</td>
                                                    <td>{{ $item->getPlan->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Meal:</td>
                                                    <td>{{ count($item->meal_type) }} Meals</td>
                                                </tr>
                                                <tr>
                                                    <td>Dietary:</td>
                                                    <td class="text-capitalize">{{ $item->dietary }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Meal Type:</td>
                                                    <td>
                                                        @foreach ($item->meal_type as $meal)
                                                            <span class="text-capitalize">{{ $meal }},</span>
                                                        @endforeach
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            <table class="subtable">
                                                <tr>
                                                    <td>Actual Price:</td>
                                                    <td>Rs {{ $item->actualprice }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Discount:</td>
                                                    <td>Rs {{ $item->discount }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Total Price:</td>
                                                    <td>Rs {{ $item->totalprice }}</td>
                                                </tr>
                                            </table>
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
