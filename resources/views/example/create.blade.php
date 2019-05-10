@extends('app')

@section('content')
    <div class = "col-sm-8">
        <h1>Új munkatárs hozzáadása</h1>
        <form method="POST" action="{{ action('UserController@store') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Név:</label>
                <input type="text" class="form-control" id="name" name="name" minlength="6">
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="password">Jelszó:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">
                <label for="user_role">Felhasználó szerepe:</label>
                <select class="form-control" name="user_role" id="role">
                    <option value="admin">Adminisztrátor</option>
                    <option value="simple">Felhasználó</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Hozzáad</button>
            </div>


        </form>
        <div class="form-group">
            <a class="btn btn-outline-success" href="{{ URL::to('/freedays') }}">Vissza</a>
        </div>
    </div>
@endsection