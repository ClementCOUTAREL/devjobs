<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class FormButton extends Component
{

    public $text;

    public function render()
    {
        return view('livewire.form.form-button');
    }
}