<div class="col-md-5" >
    <form wire:submit.prevent="submit">
        <div wire:init="loadCategory">
            <label>Category</label>
            <select name="category_id" class="form-control" wire:model="category_id">
                <option value="">Select Category</option>
                @foreach ($categories as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
            @error("category_id")
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label>Name</label>
            <input type="text" name="name" class="form-control" wire:model="name">
            @error("name")
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label>Price</label>
            <input type="text" name="price" class="form-control" wire:model="price">
            @error("price")
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label>Status</label><br>
            <label><input type="radio" name="status" wire:model="status" value="active"> Active</label>
            <label><input type="radio" name="status" wire:model="status" value="inactive"> Inactive</label>
            @error("status")
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label class="mt-1">Vendors:</label><br>
            <label><input type="checkbox" wire:model="venders" value="vender1"> Vender 1</label>
            <label><input type="checkbox" wire:model="venders" value="vender2"> Vender 2</label>
            <label><input type="checkbox" wire:model="venders" value="vender3"> Vender 3</label>
        </div>

        <div>
            <label>Details</label>
            <textarea name="details" class="form-control" wire:model="details"></textarea>
            @error("details")
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary mt-3" wire:loading.attr="disabled">Submit</button>
        <button type="button" class="btn btn-danger mt-3" wire:click="resetForm">Reset</button>

        <div wire:loading>
            <img src="{{ asset('storage/photos/Loading.gif') }}" width="30">
            Working...
        </div>

        <div wire:dirty>Unsaved input...</div>
    </form>
 

    <div>

   <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Category</th>
                <th>Name</th>
                <th>Price</th>
                <th>Status</th>
                <th>Vendor</th>
                <th>Details</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
             @foreach($products as $product)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $product->category }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->status }}</td>
                <td>{{ $product->vendor }}</td>
                <td>{{ $product->details }}</td>      
                <td>
                    <button class="btn btn-sm btn-primary" wire:click="edit({{ $product->id }})">Edit</button>
                    <button class="btn btn-sm btn-danger" wire:click="delete({{ $product->id }})" wire:confirm="Are you sure you want to delete this user?">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    
</div>
