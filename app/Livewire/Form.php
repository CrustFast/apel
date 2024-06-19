<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ProgramKeahlian;

class Form extends Component
{
    public $selectedOption;
    public $selectedIdentity;
    public $programKeahlianOptions = [];

    public function mount()
    {
        $this->programKeahlianOptions = ProgramKeahlian::all();
    }

    public function render()
    {
        return view('livewire.form');
    }
}
