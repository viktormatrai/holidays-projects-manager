@extends('app')

@section('content')
    <div class = "col-sm-8">
        <h1>Reserve free days</h1>
        <form method="POST" action={{ action('FreedayController@update', $freeday->id) }}>
            {{ csrf_field() }}
            <div class="form-group">
                <label for="date">First day</label>
                <input type="date" class="form-control" id="date" name="first_day"
                       value="{{ old('first_day', $freeday-> first_day) }}">
            </div>

            <div class="form-group">
                <label for="date">Last day</label>
                <input type="date" class="form-control" id="email" name="last_day"
                       value="{{ old('last_day', $freeday-> last_day) }}">
            </div>

            <div class="form-group">
                {{method_field('PUT')}}
                <button type="submit" class="btn btn-outline-warning">Update</button>
            </div>
        </form>
        <div class="form-group">
            <a class="btn btn-outline-success" href="{{ URL::previous() }}">Back</a>
        </div>
    </div>
@endsection