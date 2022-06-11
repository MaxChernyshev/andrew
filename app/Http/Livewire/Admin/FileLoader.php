<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;

class FileLoader extends Component
{
    use WithFileUploads;

    public $file = '';
    public $subject;

    public function mount()
    {
        $file = $this->file;
    }

    public function render()
    {
        return view('livewire.admin.file-loader');
    }
}
