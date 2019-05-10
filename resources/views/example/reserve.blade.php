@extends('app')

@section('content')
    <div class = "col-sm-8">
        <h1>Szabadság foglalása</h1>
        <form method="POST" action={{action('FreedayController@store')}}>
            {{ csrf_field() }}

            <div class="form-group">
                <label for="date">Első nap</label>
                <input type="date" class="form-control" id="date"  name="first_day">
            </div>

            <div class="form-group">
                <label for="date">Utolsó nap</label>
                <input type="date" class="form-control" id="email" name="last_day">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-outline-warning">Foglalás</button>
            </div>
        </form>
        <div class="form-group">
            <a class="btn btn-outline-success" href="{{ URL::previous() }}">Vissza</a>
        </div>
    </div>
@endsection