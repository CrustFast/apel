<?php

namespace App\Livewire\Eksternal;

use Livewire\Component;
use App\Models\ProgramKeahlian;
use App\Models\JenisBenturanKepentingan; 

class FormBenturanKepentingan extends Component
{
    public $programKeahlianOptions;
    public $jenisBenturanKepentingan;

    public function mount()
    {
        $this->programKeahlianOptions = ProgramKeahlian::all();
        $this->jenisBenturanKepentingan = JenisBenturanKepentingan::all();
    }
    
    public function render()
    {
        return view('livewire.eksternal.form-benturan-kepentingan');
    }
}

