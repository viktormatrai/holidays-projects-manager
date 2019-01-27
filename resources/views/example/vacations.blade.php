@extends('app')

@section('content')
    <p class="h2 mt-5">My reserved holidays</p>
    <div class="card bg-light">
        <div class="card-body p-0">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">From</th>
                    <th scope="col">Until</th>
                </tr>
                </thead>
                <tbody>
                @foreach($freedays as $key => $freeday)
                    <tr>
                        <td>{{ $freeday -> first_day }}</td>
                        <td>{{ $freeday -> last_day }}</td>
                        <td><a class="btn btn-info" href="{{ URL::to('reserve/'.$freeday->id.'/edit') }}"> Update </a></td>
                        <td>
                            <form action="{{ action('FreedayController@destroy', $freeday->id) }}" method="POST">
                                {{method_field('DELETE')}}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <a class="btn btn-outline-success" href="{{ URL::to('freedays') }}">Back</a>
    </div>
@endsection
