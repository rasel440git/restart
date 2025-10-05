<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\User;

class CreateUser extends Component
{
    public  $insertName, $insertEmail;
    public function render()
    {
        return view('livewire.user-search');
    }

    public function submit(){
        $this->validate([
            "insertName"=>"required",
            "insertEmail"=>"required|email"
        ]);
        $user = User::create([
            "name"=>$this->insertName,
            "email"=>$this->insertEmail
        ]);
        session()->flash('message', 'User created successfully.');

    }
}
