<div class="col-md-5" >
   <form wire:submit.prevent="submit">
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
        <label>Details</label>
        <textarea name="details" class="form-control" wire:model="details"></textarea>
        @error("details")
        <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
   </form>
</div>
