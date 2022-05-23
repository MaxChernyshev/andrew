<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;

class ImageLoader extends Component
{
    use WithFileUploads;

    public $image = '';
    public $subject;

    public function mount()
    {
        $image = $this->image;
    }


    public function render()
    {
        return view('livewire.admin.image-loader');
    }
}
