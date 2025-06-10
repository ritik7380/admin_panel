@extends('dashboard.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between mb-3">
            <h2>Role Management</h2>
            <a href="{{ route('roles.create') }}" class="btn btn-primary">Add New Role</a>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Role Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($roles as $role)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-sm btn-warning">Edit</a>

                            {{-- <form action="{{ route('roles.destroy', $role->id) }}" method="POST" class="d-inline"
                              onsubmit="return confirm('Are you sure to delete this role?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form> --}}
                            @can('delete role')
                                <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            @endcan

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No roles found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
