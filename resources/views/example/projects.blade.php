<p class="h2 mt-5">Projectek</p>
<div class="card bg-light">
    <div class="card-body p-0">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Project neve</th>
                <th scope="col">Project határideje</th>
                <th scope="col">Projecten dolgozók</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($projects as $key => $project)
                <tr>
                    <td>{{ $projects -> project_name }}</td>
                    <td>{{ $project -> project_deadline }}</td>
                    <td>{{ $project -> user() }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>