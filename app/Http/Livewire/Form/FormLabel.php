<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class FormLabel extends Component
{

    public $field;
    public $fieldName;


    public function render()
    {
        return view('livewire.form.form-label');
    }
}