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
                            <h5 class="mb-0">Permission List</h5>
                            <a href="{{ route('permission.create') }}" class="btn btn-light btn-sm">Add New</a>
                        </div>

                        <div class="card-body">
                            {{-- @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif --}}

                            @if (Session::has('success'))
                                <div class="text-success">{{ Session::get('success') }}</div>
                            @endif

                            @if ($permissions->isEmpty())
                                <p class="text-muted mb-0">No permissions found.</p>
                            @else
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th>SL</th>
                                                <th>Permission Name</th>
                                                {{-- <th>Created At</th> --}}
                                                <th style="width: 250px;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($permissions as $index => $permission)
                                                <tr>
                                                    <td>{{ $index + 1 }}</td>
                                                    <td>{{ $permission->name }}</td>
                                                    {{-- <td>{{ $permission->created_at->format('d M Y') }}</td> --}}
                                                    <td>
                                                        <a href="{{ route('permission.edit', $permission->id) }}"
                                                            class="btn btn-sm btn-success">Edit</a>
                                                        <a href="{{ route('permission.delete', $permission->id) }}"
                                                            class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this permission?')">Delete</a>
                                                        {{-- <form action="{{ route('permission.delete', $permission->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger"
                                                                onclick="return confirm('Are you sure you want to delete this permission?')">Delete</button>
                                                        </form> --}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                            <div class="d-flex mt-3">
                                {{ $permissions->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
