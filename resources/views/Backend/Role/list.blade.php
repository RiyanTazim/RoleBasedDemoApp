@extends('Backend.Master.master')

@section('content')
    <style>
        .pagination {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
        }
    </style>
    <div class="pc-container">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Roles</h5>
                            <a href="{{ route('role.create') }}" class="btn btn-light btn-sm">Add New Role</a>
                        </div>

                        <div class="card-body">
                            {{-- @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif --}}

                            @if (Session::has('success'))
                                <div class="text-success">{{ Session::get('success') }}</div>
                            @endif

                            @if ($roles->isEmpty())
                                <p class="text-muted mb-0">No Role found.</p>
                            @else
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th>SL</th>
                                                <th>Role Name</th>
                                                <th>Permissions</th>
                                                {{-- <th>Created At</th> --}}
                                                <th style="width: 250px;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($roles as $index => $role)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $role->name }}</td>
                                                    <td>{{ $role->permissions->pluck('name')->implode(', ') }}</td>
                                                    <td>
                                                        <a href="{{ route('permission.edit', $role->id) }}"
                                                            class="btn btn-sm btn-success">Edit</a>
                                                        <a href="{{ route('permission.delete', $role->id) }}"
                                                            class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this role?')">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                            <div class="d-flex mt-3">
                                {{ $roles->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
