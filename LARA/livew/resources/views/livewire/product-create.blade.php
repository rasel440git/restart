<div class="col-md-5" >
   <form wire:submit.prevent="submit">
        <div>
        <label>Catagory</label>
        <select name="category" class="form-control" wire:model="category">
            <option value="">Select Category</option>
            <option value="electronics">Electronics</option>
            <option value="clothing">Clothing</option>
            <option value="home">Home</option>
        </select>
        
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
        <label>Status</label>
        <label><input type="radio" name="status"  wire:model="status" value="active"> Active<label>
        <label><input type="radio" name="status" wire:model="status" value="inactive"> Inactive <label>
        </div>

        <div>
        <label class="mt-1">Vender:</label></br>
        <label> <input type="checkbox" wire:model="venders" value="vender1"> Vender 1</label>
        <label> <input type="checkbox"  wire:model="venders" value="vender2"> Vender 2</label>
        <label> <input type="checkbox"  wire:model="venders" value="vender3"> Vender 3</label>
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
            
           <!--  <img src="https://upload.wikimedia.org/wikipedia/commons/c/c7/Loading_2.gif" width="50"> -->

            Working...
         </div>
         <div wire:dirty>Unsaved input...</div>
   </form>
</div>
