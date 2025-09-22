<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class UserSearch extends Component
{
    use WithPagination;

    public $search;
    protected $paginationTheme ="bootstrap";
    public function render()
    {
         info($this->search);
        return view('livewire.user-search',[
            // 'users' => \App\Models\User::all()
            "users"=>User::where("name","like", "%{$this->search}%")
                          ->orWhere("email","like", "%{$this->search}%")->paginate(5)

        ]);
       
    }
    
}
