@extends('layouts.app')

@section('content')
    <style>
        .rounded-table-container {
            display: flex;
            justify-content: center;
        }

        .rounded-table {
            border-radius: 10px;
            overflow: hidden;
            font-size: 16px;
            max-width: 80rem;
            width: 100%;
            background-color: #f0f0f0; /* Adjust the background color as needed */
            border: 2px solid #ccc; /* Add the border style and color */
        }

        .rounded-table th,
        .rounded-table td {
            padding: 1rem;
        }
    </style>

    <div class="container mt-4">
        <h2 class="text-center mb-4">All User Accounts</h2>

        <div class="rounded-table-container">
            <div class="table-responsive rounded-table">
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    {{ $user->type }}
                                    @if ($user->type === 0)
                                        User
                                    @elseif ($user->type === 1)
                                        Admin
                                    @elseif ($user->type === 2)
                                        Manager
                                    @endif  
                                </td>
                                <td>
                                    <form action="{{ route('admin.deleteUser', ['user' => $user->id]) }}" method="post" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm rounded">Delete</button>
                                    </form>

                                    <a href="{{ route('admin.edit-user-role', ['user' => $user->id]) }}" class="btn btn-primary btn-sm rounded">Edit Role</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
