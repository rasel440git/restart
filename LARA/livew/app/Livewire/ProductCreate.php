<?php

namespace App\Livewire;

use App\Models\Product;
// use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\On;

class ProductCreate extends Component
{
    public $category_id, $name, $price, $status, $venders=[], $details, $products;
    public $categories=[];

    public function loadCategory(): void{
        $this->categories = Product::select('id','category')->distinct()->pluck('category','id')->toArray();      
        // dd($this->categories);      
       
    }
    public function render()
    {
        sleep(1);
        $this->products = Product::all();
        return view('livewire.product-create');
    }

    public function submit(){
        $this->validate([
            'category_id' => 'required',
            'name' => 'required|string',
            'price' => 'required|numeric',
            'status' => 'required',
            'details' => 'nullable|string',
        ]);

        $product= Product::create([
            'category_id' => $this->category_id,
            'name' => $this->name,
            'price' => $this->price,
            'status' => $this->status,
            'venders' => json_encode($this->venders),
            'details' => $this->details,
        ]);
         sleep(3);
        info($this->category_id);
        info($this->name);
        info($this->price);
        info($this->status);
        info($this->venders);
        info($this->details);

         session()->flash('success', 'Product added successfully!');
            $this->resetForm();

    }

    public function resetForm(){
        sleep(2);
        $this->name=null;
        $this->price=null;
        $this->details=null;
        $this->venders=null;
        $this->category_id=null;
    }

    public function productDelete($id  ){
        info($id);
        $this->dispatch("confirm", id: $id);    
        
    }

    #[On('delete')]
    public function delete($id){
        Product::find($id)->delete();
        // info($id);
    }
}
