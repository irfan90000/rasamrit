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
                                        Edit Food Price
                                    </h6>
                                </div>
                            </div>
                            <div class="col-lg-4 text-end">
                                <a href="{{ route('admin.food-program.index') }}" class="btn btn-danger btn-sm">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.food-program.update', $data->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="row g-2">
                                <div class="col-lg-6">
                                    <label for="plan" class="form-label">Food Plan</label>
                                    <select class="form-select @error('plan') is-invalid @enderror" name="plan"
                                        id="plan">
                                        <option value="">Select Plan</option>
                                        @foreach ($plan_list as $plan)
                                            <option value="{{ $plan->id }}"
                                                @if ($data->plan == $plan->id) selected @endif>{{ $plan->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="goal" class="form-label">Food Goal</label>
                                    <select class="form-select @error('goal') is-invalid @enderror" name="goal"
                                        id="goal">
                                        <option value="">Select Goal</option>
                                        @foreach ($goal_list as $goal)
                                            <option value="{{ $goal->id }}"
                                                @if ($data->goal == $goal->id) selected @endif> {{ $goal->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row g-3 mt-1">
                                        @for ($i = 1; $i <= 3; $i++)
                                            <div class="col-lg-4">
                                                <div class="bg-light p-2">
                                                    <p class="border-bottom pb-2 mb-3 text-success text-center fw-500">
                                                        {{ match ($i) {
                                                            1 => 'Vegetarian Price/Meal',
                                                            2 => 'Non Vegetarian Price/Meal',
                                                            3 => 'Eggetarian Price/Meal',
                                                            default => null,
                                                        } }}
                                                    </p>
                                                    <div class="row g-2">
                                                        <div class="col-lg-6">
                                                            <label for="breakfast_{{ $i }}" class="form-label">
                                                                Breakfast
                                                            </label>
                                                            <input type="number" class="form-control"
                                                                name="breakfast[{{ $i }}][price]" required
                                                                id="breakfast_{{ $i }}"
                                                                value="{{ $data[$i]['breakfast'] }}"
                                                                placeholder="Enter price">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="lunch_{{ $i }}" class="form-label">
                                                                Lunch
                                                            </label>
                                                            <input type="number" class="form-control"
                                                                name="lunch[{{ $i }}][price]" required
                                                                value="{{ $data[$i]['lunch'] }}"
                                                                id="lunch_{{ $i }}" placeholder="Enter price">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="snack_{{ $i }}" class="form-label">
                                                                Snacks
                                                            </label>
                                                            <input type="number" class="form-control"
                                                                name="snack[{{ $i }}][price]" required
                                                                value="{{ $data[$i]['snack'] }}"
                                                                id="snack_{{ $i }}" placeholder="Enter price">
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="dinner_{{ $i }}" class="form-label">
                                                                Dinner
                                                            </label>
                                                            <input type="number" class="form-control"
                                                                name="dinner[{{ $i }}][price]" required
                                                                value="{{ $data[$i]['dinner'] }}"
                                                                id="dinner_{{ $i }}" placeholder="Enter price">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                </div>

                                <div class="col-lg-12 text-end">
                                    <button type="submit" class="btn btn-success">
                                        Save
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
