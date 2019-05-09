<ul class="nav nav-pills my-5">
    <li class="nav-item">
        <a class="btn btn-outline-success" href="{{ URL::to('reserve/create') }}">Szabadnap foglalás</a>
    </li>
    <li class="nav-item">
        <a class="btn btn-outline-secondary" href="{{ URL::to('reserve/index') }}">Szabadságaim</a>
    </li>
    <li>
        <a class="btn btn-outline-primary" href="{{ URL::to( 'projects/show' ) }}">Projectek</a>
    </li>
@if(Auth::user()->user_role == 'admin')
    <li class="nav-item">
        <a class="btn btn-outline-dark" href="{{ URL::to('freedays/create') }}">Új munkatárs</a>
    </li>
    <!--
        <li>
            <a class="btn btn-outline-success" href="{{ URL::to('projects/create') }}"> Create projects </a>
        </li>
    -->
@endif
    <li class="nav-item">
        <a class="btn btn-outline-danger" href="{{ URL::to('logout') }}"> Log out </a>
    </li>

</ul>