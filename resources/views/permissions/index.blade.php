@extends('dashboard.app')


@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h2>Permission Management</h2>
        <a href="{{ route('permissions.create') }}" class="btn btn-primary">Add New Permission</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Permission Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($permissions as $permission)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $permission->name }}</td>
                    <td>
                        <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Are you sure to delete this permission?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="3">No permissions found.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

