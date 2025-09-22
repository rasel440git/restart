<div class="container mt-5">
    <input type="text" name="search" class="form-control mb-3" placeholder="Search Users..." wire:model="search"
    wire:keyup="set('search', $event.target.value)">
   
   <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
             @foreach($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>
