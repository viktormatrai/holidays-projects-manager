<p class="h2 mt-5">Munkatársak</p>
<div class="card bg-light">
    <div class="card-body p-0">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Név</th>
                    <th scope="col">Email</th>
                    <th scope="col">Felhasználható szabadnapok</th>
                    <th scope="col">Felhasznált szabadnapok</th>
                    <th scope="col">Projects working on</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $key => $user)
                    <tr>
                        <td>{{ $user -> name }}</td>
                        <td>{{ $user -> email }}</td>
                        <td>{{ $user -> remaining_free_days }}</td>
                        <td>{{ $user -> used_free_days }}</td>
                        <td><a class="btn btn-info" href="{{ URL::to("projects") }}">Projects</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="pagination justify-content-center">
    <ul class="pagination page-item">
        {{ $users->links() }}
    </ul>
</div>