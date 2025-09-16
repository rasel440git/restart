<div>
    <form wire:submit="submit">
        <div>
            <label for="count">Bird Count</label>
        <input wire:model="count"/>
        </div>
        <div>
            <label for="notes">Bird Count</label>
            <textarea wire:model="notes"> </textarea>
        </div>
        <button>Add New Bird</button>
    </form>
        @foreach ($allData as $data )
        <div wire:key='{{ $data->id }}' wire:transition>
            
            <div >
                {{ $data->bird_count }}
            </div>
            <div>
                 {{ $data->notes }}
            </div>
            <button wire:click="delete({{ $data->id }})">Delete</button>
           
        </div>
         @endforeach
</div>
