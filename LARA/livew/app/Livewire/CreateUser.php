<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\User;

class CreateUser extends Component
{
    public  $name, $email;
    public function render()
    {
        return view('livewire.user-search');
    }

    public function submit(){
        $this->validate([
            "name"=>"required",
            "email"=>"required|email"
        ]);
        $user = User::create([
            "name"=>$this->name,
            "email"=>$this->email,
        ]);
        session()->flash('message', 'User created successfully.');

    }
}
