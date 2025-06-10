@extends('dashboard.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h2>User Management</h2>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Add New User</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Roles</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @foreach ($user->roles as $role)
                            <span class="badge bg-info text-dark">{{ $role->name }}</span>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Are you sure to delete this user?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="5">No users found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

