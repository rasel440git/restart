<div class="container mt-5">
    
   <div>
    <level class="form-control"> Create User </level>
    <form wire:submit.prevent="submit">
    <input type="text" name="name" class="form-control mb-3" placeholder="Enter Name..." wire:model="name">
        @error("name")
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <input type="email" name="email" class="form-control mb-3" placeholder="Enter Email..." wire:model="email">
        @error("email")
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <input type="button" value="submit" class="btn btn-primary" wire:loading.attr="disabled">
    </form>
   </div>



    <input type="text" name="search" class="form-control mb-3 mt-5" placeholder="Search Users..." wire:model="search"
    wire:keyup="set('search', $event.target.value)">
   
   <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
             @foreach($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <button class="btn btn-sm btn-primary" wire:click="edit({{ $user->id }})">Edit</button>
                    <button class="btn btn-sm btn-danger" wire:click="delete({{ $user->id }})" wire:confirm="Are you sure you want to delete this user?">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
</div>
