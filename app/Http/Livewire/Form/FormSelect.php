<?php

namespace App\Http\Livewire\Form;

use Livewire\Component;

class FormSelect extends Component
{

    public $field;
    public $options;
    public $defaultOption;

    public function render()
    {
        return view('livewire.form.form-select');
    }
}