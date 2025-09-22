<?php

namespace App\Livewire;

use App\Models\Image;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;


class PhotoUpload extends Component
{
    use WithFileUploads;
    use WithPagination;
    protected $paginationTheme ="bootstrap";
    public function render()
    {
        
        return view('livewire.photo-upload',[
            // "Images"=>Image::all()
            "Images"=>Image::paginate(3)

        ]);
    }

    public $photo;
    public function submit(){
        $this->validate([
            'photo'=>"required|image"
        ]);
         $filepath= $this->photo->store('photos');

         $image=Image::create([
            'title'=>"test",
            'filepath'=>$filepath
         ]);
         session()->flash('success', 'Image uploaded successfully!!!');
        //  session()->flash('error', 'Something is wrong!!!');
        info($image);
        return redirect('success');
    }

    public function download($path){
        return Storage::download($path);
    }
}
