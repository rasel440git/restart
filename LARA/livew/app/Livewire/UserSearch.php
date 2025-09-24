<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\Attributes\Url;

class UserSearch extends Component
{
    use WithPagination;

    #[Url]
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
    

    public function delete($id){
            info('Delete user id: '.$id);
            User::find($id)->delete();
            session()->flash('message', 'User deleted successfully.');

     }

     public function edit($id){
        info('Edit user id: '.$id);
     }
}