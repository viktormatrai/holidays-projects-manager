<ul class="nav nav-pills my-5">
    <li class="nav-item">
        <a class="btn btn-outline-success" href="{{ URL::to('reserve/create') }}">Reserve free day(s)</a>
    </li>
    <li class="nav-item">
        <a class="btn btn-outline-secondary" href="{{ URL::to('reserve/index') }}">My vacations</a>
    </li>
    <li class="nav-item">
        <a class="btn btn-outline-danger" href="{{ URL::to('logout') }}"> Log out </a>
    </li>
    <li>
        <a class="btn btn-outline-primary" href="{{ URL::to( 'projects/show' ) }}">Assign to projects</a>
    </li>
    <li class="nav-item">
        <a class="btn btn-outline-dark" href="{{ URL::to('freedays/create') }}">Add new employee</a>
    </li>
    <!-- only admins can use this feature
    <li>
        <a class="btn btn-outline-success" href="{{ URL::to('projects/create') }}"> Create projects </a>
    </li>
    -->
</ul>