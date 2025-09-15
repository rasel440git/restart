<?php

namespace App\Livewire;

use Livewire\Attribute\On;
use Livewire\Component;

class ReceiveEvent extends Component
{
    public string $message='No Message now';

    #[on('MessageSent')]
    public function displayMessage(){
        $this->message= 'Hello from the other component';
    }
    public function render()
    {
        return view('livewire.receive-event');
    }
}
