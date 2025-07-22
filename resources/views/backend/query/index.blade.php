@extends('backend.layout.app')
@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center text-dark py-2">
                            <i class="bx bx-info-square fs-4 me-1"></i>
                            <h6 class="mb-0 text-dark">
                                Queries
                            </h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Subject Type</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Message</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($query_list as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                                {{ match ($item->type) {
                                                    'enquiry' => 'Enquiry With Us',
                                                    'partner' => 'Partner With Us',
                                                    default => 'NA',
                                                } }}
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone }}</td>
                                            <td class="text-justify">{{ $item->message }}</td>
                                            <td>
                                                <div class="d-flex order-actions">
                                                    <form action="{{ route('admin.query.destroy', $item->id) }}"
                                                        method="POST">
                                                        @method('Delete')
                                                        @csrf
                                                        <button type="submit">
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
