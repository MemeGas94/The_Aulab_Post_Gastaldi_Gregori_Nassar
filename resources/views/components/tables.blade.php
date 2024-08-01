<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($roleRequests as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @switch($role)
                        @case('amministratore')
                            <form action="{{ route('admin.setAdmin', $user) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-dark">Attiva {{ $role }}</button>
                            </form>
                        @break

                        @case('revisore')
                            <form action="{{ route('admin.setRevisor', $user) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-dark">Attiva {{ $role }}</button>
                            </form>
                        @break

                        @case('redattore')
                            <form action="{{ route('admin.setWriter', $user) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-dark">Attiva {{ $role }}</button>
                            </form>
                        @break
                    @endswitch
                </td>
            </tr>
        @endforeach








    </tbody>
</table>
