<?php

namespace App\Livewire\Helpers;

use Livewire\WithFileUploads;
use App\Http\Controllers\MediaController;
use Livewire\Component;

class Upload extends Component
{
    use WithFileUploads;
    public $image, $phpimage, $methods;
    public function updated($property)
    {
        if ($property == 'image') {
            $this->methods = get_class_methods($this->image);
            MediaController::saveFile(strval($this->image->getContent()), $this->image->getClientOriginalName());
        }
    }
    public function test()
    {
        MediaController::test();
    }
    public function render()
    {
        return view('livewire.helpers.upload');
    }
}
