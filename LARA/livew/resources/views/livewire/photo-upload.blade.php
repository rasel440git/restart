<div class="col-md-5" >
   <form wire:submit.prevent="submit">
    @session('success')
    <div class="alert alert-success">
        {{ $value }}
    </div>
    @endsession

    @if ($photo)
    <img src="{{ $photo->temporaryUrl() }}" width="200px">
    @endif
        
        <label>Image</label>
        <input type="file" name="photo" class="form-control" wire:model="photo">
        @error("photo")
        <span class="text-danger">{{ $message }}</span>
        @enderror
              
        
        <button type="submit" class="btn btn-success mt-3">Upload</button>
   </form>

    <table class="table table-striped table-bordered mt-3">
        <thead>
            <tr>
                <th width="50px">Sl</th>
                <th>Title</th>
                <th width="200px">Download</th>
            </tr>
            @foreach ( $Images as $Image )
            <tr>
                <td>{{ $Image->id }}</td>
                <td>{{ $Image->title }}</td>
                <td><button wire:click="download('{{ $Image->filepath }}')" class="btn btn-success">Download</button></td>
            </tr>
            @endforeach
            
        </thead>

    </table>
    {{ $Images->links() }}
</div>

