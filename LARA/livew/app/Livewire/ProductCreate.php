<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductCreate extends Component
{
    public $category, $name, $price, $status, $venders=[], $details;
    public function render()
    {
        return view('livewire.product-create');
    }

    public function submit(){
        // $this->validate([
        //     "name"=>"required",
        //     "price"=>"required",
        //     "details"=>"required"
        // ]);

        // $product= Product::create([
        //     'name'=>$this->name,
        //     'price'=>$this->price,
        //     'details'=>$this->details
        // ]);
         sleep(3);
        info($this->category);
        info($this->name);
        info($this->price);
        info($this->status);
        info($this->venders);
        info($this->details);
    }

    public function resetForm(){
        sleep(2);
        $this->name=null;
        $this->price=null;
        $this->details=null;
        $this->venders=null;
        $this->category=null;
    }
}
