<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class FormInput extends Component
{

    public $field;
    public $inputInset;

    public function mount()
    {
        $this->emitUp('test');
    }

    public function render()
    {
        return view('livewire.form.form-input');
    }
}