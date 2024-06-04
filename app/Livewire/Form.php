<?php

namespace App\Livewire;

use Livewire\Component;

class Form extends Component
{
    public $selectedOption;
    public $selectedIdentity;

    public function render()
    {
        return view('livewire.form');
    }
}
