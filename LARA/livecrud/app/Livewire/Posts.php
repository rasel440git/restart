<?php

namespace App\Livewire;

use Livewire\Component;

class Posts extends Component
{
    
    public $posts, $title, $body, $post_id;
    public $updateMode = false;
        public function render()
    {
        return view('livewire.posts');
    }

     private function resetInputFields(){
        $this->title = '';
        $this->body = '';

    }   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function store()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

  

        Post::create($validatedDate);  

        session()->flash('message', 'Post Created Successfully.');  

        $this->resetInputFields();

    }
}
