@extends('dashboard.app')

@section('content')
<div class="container">
    <h2>Edit Role: {{ $role->name }}</h2>

    <form action="{{ route('roles.update', $role->id) }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name">Role Name</label>
            <input type="text" name="name" class="form-control" value="{{ $role->name }}" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="permissions">Assign Permissions</label>
            <div class="row">
                @foreach($permissions as $permission)
                    <div class="col-md-3">
                        <label>
                            <input type="checkbox" name="permissions[]" value="{{ $permission->name }}"
                                {{ in_array($permission->name, $rolePermissions) ? 'checked' : '' }}>
                            {{ $permission->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <button class="btn btn-success">Update Role</button>
        <a href="{{ route('roles.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
