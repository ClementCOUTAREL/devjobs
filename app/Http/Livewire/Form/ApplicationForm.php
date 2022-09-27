<?php

namespace App\Http\Livewire\Form;

use App\Models\Salary;
use Livewire\Component;
use App\Models\Category;
use App\Models\Application;
use Illuminate\Support\Facades\DB;

class ApplicationForm extends Component
{
    public $salaryOptions;
    public $categoryOptions;
    public $title;
    public $category_id;
    public $salary_id;
    public $description;
    public $user_id;

    protected $rules = [
        'title' => ['required','min:5'],
        'category_id' => ['required'],
        'salary_id' => ['required'],
        'description' => ['required','min:10'],
    ];

    public function mount()
    {
        $user_id = auth()->user()->id;

        $salaries = Salary::all();
        $categories =Category::all();
     
        $this->salaryOptions = $salaries;
        $this->categoryOptions = $categories;
    }

    public function submit()
    {
        $validated = $this->validate();

        Application::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'salary_id' => $validated['salary_id'],
            'category_id' => $validated['category_id'],
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('dashboard');

    }

    public function render()
    {
        return view('livewire.form.application-form');
    }
}