<?php
namespace App\Http\Livewire;

use Livewire\Component;

class FormComponent extends Component
{
    public $selectedOption = '';

    public function render()
    {
        return view('livewire.form');
    }

    public function showUploadSection()
    {
        return $this->selectedOption === 'kerusakan';
    }
}