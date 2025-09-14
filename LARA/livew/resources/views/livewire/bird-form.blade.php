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
        <div>
            @foreach ($allData as $data )
            <div>
                {{ $data->bird_count }}
            </div>
            <div>
                 {{ $data->notes }}
            </div>
            @endforeach
        </div>
</div>
