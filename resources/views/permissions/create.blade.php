@extends('dashboard.app')


@section('content')
<div class="container">
    <h2>Create New Permission</h2>

    <form action="{{ route('permissions.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name">Permission Name</label>
            <input type="text" name="name" class="form-control" required>
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button class="btn btn-success">Create Permission</button>
        <a href="{{ route('permissions.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection

