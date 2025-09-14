<?php

namespace App\Livewire;

use App\Models\Entry;
use Dom\Entity;
use Laravel\Telescope\Storage\EntryModel;
use Livewire\Component;

class BirdForm extends Component
{

    public string $notes;
    public int $count;

    public function submit(){
        Entry::create([
            'bird_count'=>$this-> count,
            'notes'=>$this-> notes,
        ]);
        $this->reset();
        
    }
    public function render()
    {
        return view('livewire.bird-form',
        ['allData'=>Entry::all()]);
    }
}
