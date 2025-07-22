@extends('backend.layout.app')
@section('content')
    <div class="page-content">
        <div class="row g-3">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center text-dark py-2">
                            <i class='bx bxs-cube-alt fs-4 me-1'></i>
                            <h6 class="mb-0 text-dark">
                                Diet Type
                            </h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Goal</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($diet_list as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                @foreach ($item->goal as $data)
                                                    {{ App\Models\Goal::find($data)->name }},&nbsp;&nbsp;
                                                @endforeach
                                            </td>
                                            <td>
                                                <div class="d-flex order-actions">
                                                    <a href="{{ route('admin.diet-type.edit', $item->id) }}">
                                                        <i class='bx bxs-edit'></i>
                                                    </a>
                                                    <form action="{{ route('admin.diet-type.destroy', $item->id) }}"
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
                                            Edit Diet
                                        </h6>
                                    @else
                                        <i class='bx bxs-plus-square fs-5 me-1'></i>
                                        <h6 class="mb-0 text-dark">
                                            Add Diet
                                        </h6>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-4 text-end">
                                @if (isset($edit_data))
                                    <a href="{{ route('admin.diet-type.index') }}" class="btn btn-danger btn-sm">
                                        Cancel
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (isset($edit_data))
                            <form method="post" action="{{ route('admin.diet-type.update', $edit_data->id) }}"
                                enctype="multipart/form-data">
                                @method('PUT')
                            @else
                                <form method="post" action="{{ route('admin.diet-type.store') }}"
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
                            @if (isset($edit_data) && $edit_data->goal)
                                <div class="col-lg-12">
                                    <label for="goal" class="form-label">Goal</label>
                                    <select class="form-control select2" name="goal[]" multiple>
                                        @foreach ($goal_list as $goal)
                                            <option value="{{ $goal->id }}"
                                                @if (in_array($goal->id, $edit_data->goal)) selected @endif>
                                                {{ $goal->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('goal')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            @else
                                <div class="col-lg-12">
                                    <label for="goal" class="form-label">Goal</label>
                                    <select class="form-control select2" name="goal[]" multiple>
                                        @foreach ($goal_list as $goal)
                                            <option value="{{ $goal->id }}">{{ $goal->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('goal')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            @endif
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
