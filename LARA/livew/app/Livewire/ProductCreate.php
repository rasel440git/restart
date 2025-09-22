<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductCreate extends Component
{
    public $name, $price, $details;
    public function render()
    {
        return view('livewire.product-create');
    }

    public function submit(){
        $this->validate([
            "name"=>"required",
            "price"=>"required",
            "details"=>"required"
        ]);

        $product= Product::create([
            'name'=>$this->name,
            'price'=>$this->price,
            'details'=>$this->details
        ]);
        info($product);
    }
}
