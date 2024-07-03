<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    use WithFileUploads;

    public $files = [];

    public function upload()
    {
        $this->validate([
            'files' => 'required|array|max:3', // Max 3 files
            'files.*' => 'file|max:3072', // 3MB Max per file
        ]);

        foreach ($this->files as $file) {
            $file->store('uploads');
        }

        session()->flash('message', 'Files successfully uploaded.');
    }

    public function render()
    {
        return view('livewire.file-upload');
    }
}
