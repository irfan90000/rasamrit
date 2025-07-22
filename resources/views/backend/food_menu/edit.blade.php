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
                                        Edit Food Menu
                                    </h6>
                                </div>
                            </div>
                            <div class="col-lg-4 text-end">
                                <a href="{{ route('admin.food-menu.index') }}" class="btn btn-danger btn-sm">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.food-menu.update', $food_data->id) }}">
                            @method('PUT')
                            @csrf
                            <div class="row g-3">
                                <div class="col-lg-6">
                                    <label class="form-label">Diet Type</label>
                                    <select class="form-select @error('diet_type') is-invalid @enderror" name="diet_type">
                                        <option value="" selected>Select Diet Type</option>
                                        @foreach ($diet_type_list as $diet)
                                            <option value="{{ $diet->id }}"
                                                @if ($food_data->diet_type == $diet->id) selected @endif>
                                                {{ $diet->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label class="form-label">Dietary</label>
                                    <select class="form-select @error('dietary') is-invalid @enderror" name="dietary">
                                        <option value="" selected>Select Dietary</option>
                                        <option value="vegetarian" @if ($food_data->dietary == 'vegetarian') selected @endif>
                                            Vegetarian
                                        </option>
                                        <option value="nonvegetarian" @if ($food_data->dietary == 'nonvegetarian') selected @endif>
                                            Non Vegetarian
                                        </option>
                                        <option value="eggetarian" @if ($food_data->dietary == 'eggetarian') selected @endif>
                                            Eggetarian
                                        </option>
                                    </select>
                                </div>

                                @for ($i = 1; $i <= 7; $i++)
                                    <div class="col-lg-12">
                                        <h5 class="mb-0 py-3 text-center text-success">{{ getDay($i) }} Diet</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="row g-3 border-1">
                                            <div class="col-lg-6">
                                                <div class="bg-light p-2">
                                                    <h6 class="border-bottom pb-2 mb-3">
                                                        Breakfast
                                                    </h6>

                                                    <div class="row g-3">
                                                        <div class="col-lg-12">
                                                            <label for="breakfast_name_{{ $i }}"
                                                                class="form-label">Name</label>
                                                            <input type="text" class="form-control"
                                                                name="breakfast[{{ $i }}][name]"
                                                                id="breakfast_name_{{ $i }}"
                                                                value="{{ $food_data->menu['breakfast'][$i]['name'] }}"
                                                                placeholder="Enter name" required>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <label for="breakfast_description_{{ $i }}"
                                                                class="form-label">Description</label>
                                                            <textarea rows="4" class="form-control" name="breakfast[{{ $i }}][description]"
                                                                id="breakfast_description_{{ $i }}" placeholder="Enter Description" required>{{ $food_data->menu['breakfast'][$i]['description'] }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="bg-light p-2">
                                                    <h6 class="border-bottom pb-2 mb-3">
                                                        Lunch
                                                    </h6>

                                                    <div class="row g-3">
                                                        <div class="col-lg-12">
                                                            <label for="lunch_name_{{ $i }}"
                                                                class="form-label">Name</label>
                                                            <input type="text" class="form-control"
                                                                name="lunch[{{ $i }}][name]"
                                                                id="lunch_name_{{ $i }}"
                                                                value="{{ $food_data->menu['lunch'][$i]['name'] }}"
                                                                placeholder="Enter name" required>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <label for="lunch_description_{{ $i }}"
                                                                class="form-label">Description</label>
                                                            <textarea rows="4" class="form-control" name="lunch[{{ $i }}][description]"
                                                                id="lunch_description_{{ $i }}" placeholder="Enter Description" required>{{ $food_data->menu['lunch'][$i]['description'] }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="bg-light p-2">
                                                    <h6 class="border-bottom pb-2 mb-3">
                                                        Evening Snacks
                                                    </h6>

                                                    <div class="row g-3">
                                                        <div class="col-lg-12">
                                                            <label for="snack_name_{{ $i }}"
                                                                class="form-label">Name</label>
                                                            <input type="text" class="form-control"
                                                                name="snack[{{ $i }}][name]"
                                                                id="snack_name_{{ $i }}"
                                                                value="{{ $food_data->menu['snack'][$i]['name'] }}"
                                                                placeholder="Enter name" required>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <label for="snack_description_{{ $i }}"
                                                                class="form-label">Description</label>
                                                            <textarea rows="4" class="form-control" name="snack[{{ $i }}][description]"
                                                                id="snack_description_{{ $i }}" placeholder="Enter Description" required>{{ $food_data->menu['snack'][$i]['description'] }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="bg-light p-2">
                                                    <h6 class="border-bottom pb-2 mb-3">
                                                        Dinner
                                                    </h6>

                                                    <div class="row g-3">
                                                        <div class="col-lg-12">
                                                            <label for="dinner_name_{{ $i }}"
                                                                class="form-label">Name</label>
                                                            <input type="text" class="form-control"
                                                                name="dinner[{{ $i }}][name]"
                                                                id="dinner_name_{{ $i }}"
                                                                value="{{ $food_data->menu['dinner'][$i]['name'] }}"
                                                                placeholder="Enter name" required>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <label for="dinner_description_{{ $i }}"
                                                                class="form-label">Description</label>
                                                            <textarea rows="4" class="form-control" name="dinner[{{ $i }}][description]"
                                                                id="dinner_description_{{ $i }}" placeholder="Enter Description" required>{{ $food_data->menu['dinner'][$i]['description'] }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor

                                <div class="col-lg-12 text-end">
                                    <button type="submit" class="btn btn-success">
                                        Submit
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
