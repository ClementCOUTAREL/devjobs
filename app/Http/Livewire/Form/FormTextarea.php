<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class FormTextarea extends Component
{

    public $field;

    public function render()
    {
        return view('livewire.form.form-textarea');
    }
}