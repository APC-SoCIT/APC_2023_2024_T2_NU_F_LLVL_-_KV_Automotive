@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2>Edit User Role</h2>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.update-user-role', $user) }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" id="name" class="form-control" value="{{ $user->name }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" id="email" class="form-control" value="{{ $user->email }}" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Update Role:</label>
                        <select name="type" id="type" class="form-select">
                            <option value="1" {{ $user->type == 1 ? 'selected' : '' }}>Admin</option>
                            <option value="2" {{ $user->type == 2 ? 'selected' : '' }}>Staff</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
