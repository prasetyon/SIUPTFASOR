@extends('layouts.admin')

@section('content')

    <div class="container">
        <h1>User List</h1>
            <p class="lead">Here's a list of all user. <a href="{{ route('user.create') }}">Add a new one?</a></p>
        <hr>
        @foreach($user as $user)
            <p>{{ $user->id }}</p>
            <p>{{ $user->name}}</p>
            <p>{{ $user->email}}</p>
            <p>{{ $user->no_hp}}</p>
            <p>{{ $user->alamat}}</p>
            <p>
                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit User</a>
                <?php //<a href="{{ route('user.delete', $user->id) }}" class="btn btn-danger">Delete User</a>?>
            </p>
            <hr>
        @endforeach
    </div>

@stop