@extends('app')

@section('content')
    <div class = "col-sm-8">
        <h1>Új project felvétele</h1>
        <form method="POST" action="{{ action('ProjectController@store') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="project_name">Project neve</label>
                <input type="text" class="form-control" id="project_name" name="project_name">
            </div>

            <div class="form-group">
                <textarea type="text" class="form-control"
                          id="project_description"
                          name="project_description"
                          placeholder="Project leírása"></textarea>
            </div>
            <div class="form-group">
                <label for="project_deadline">Project leadás határideje</label>
                <input type="date" class="form-control" id="project_deadline" name="project_deadline">
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