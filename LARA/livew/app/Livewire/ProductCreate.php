<?php

namespace App\Livewire;

use App\Models\Product;
// use App\Models\Category;
use Livewire\Component;

class ProductCreate extends Component
{
    public $category, $name, $price, $status, $venders=[], $details, $products;
    public $categories=[];

    public function loadCategory(){
        $this->categories = Product::pluck('category','id')->all();      
        // dd($this->categories);      
       
    }
    public function render()
    {
        $this->products = Product::all();
        return view('livewire.product-create');
    }

    public function submit(){
        $this->validate([
            "name"=>"required",
            "price"=>"required",
            "status"=>"required"
        ]);

        $product= Product::create([
            'category'=>$this->category,
            'name'=>$this->name,
            'price'=>$this->price,
            'status'=>$this->status,
            'vendor'=>$this->venders,
            'details'=>$this->details
        ]);
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
