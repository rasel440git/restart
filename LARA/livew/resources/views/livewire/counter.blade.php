<div>
    <h1>Hello from counter!</h1>
    {{ $count }}
    <input type="number" wire:model.live="number" />
    <button wire:click="changeCount(5)"> Change button</button>
</div>
