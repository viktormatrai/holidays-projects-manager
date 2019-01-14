@extends('app')

@section('content')
    <div class = "col-sm-8">
        <h1>Register</h1>
        <form method="POST" action="{{ action('UserController@store') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" minlength="6">
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Register</button>
            </div>

        </form>
        <div class="form-group">
            <a class="btn btn-outline-success" href="{{ URL::to('/freedays') }}">Back</a>
        </div>
    </div>
@endsection