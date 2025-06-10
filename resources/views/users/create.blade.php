@extends('dashboard.app')


@section('content')
<div class="container">
    <h2>Create New User</h2>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" required>
            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Assign Roles</label>
            <div class="row">
                @foreach($roles as $role)
                    <div class="col-md-3">
                        <label>
                            <input type="checkbox" name="roles[]" value="{{ $role->name }}"
                                {{ (is_array(old('roles')) && in_array($role->name, old('roles'))) ? 'checked' : '' }}>
                            {{ $role->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mb-3">
            <label>Assign Permissions</label>
            <div class="row">
                @foreach($permissions as $permission)
                    <div class="col-md-3">
                        <label>
                            <input type="checkbox" name="permissions[]" value="{{ $permission->name }}"
                                {{ (is_array(old('permissions')) && in_array($permission->name, old('permissions'))) ? 'checked' : '' }}>
                            {{ $permission->name }}
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <button class="btn btn-success">Create User</button>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection

