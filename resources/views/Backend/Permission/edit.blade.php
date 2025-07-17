{{-- resources/views/permissions/edit.blade.php --}}
@extends('Backend.Master.master')

@section('content')
    <div class="pc-container">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card shadow-sm">
                        <div class="card-header bg-warning text-white">
                            <h4 class="mb-0">Edit Permission</h4>
                        </div>
                        <div class="card-body">
                            @if (Session::has('success'))
                                <div class="text-success">{{ Session::get('success') }}</div>
                            @endif

                            <form action="{{ route('permission.update', $permission->id) }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Permission Name</label>
                                    <input type="text" name="name" id="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name', $permission->name) }}" required>
                                    @error('name')
                                        <div class="text-danger mt-1">{{ $message }}</div>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-warning w-100 border border-white text-white">
                                    Update
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
