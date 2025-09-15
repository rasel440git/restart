<?php

namespace App\Livewire;

use Livewire\Component;

class SentEvent extends Component
{

    public function sentMessage(){
        $this->dispatch('MessageSent');
    }
    public function render()
    {
        return view('livewire.sent-event');
    }
}
