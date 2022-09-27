<?php

namespace App\Http\Livewire\Form;

use App\Models\Offer;
use App\Models\Salary;
use App\Models\Company;
use Livewire\Component;
use App\Models\Category;
use App\Models\Application;
use Illuminate\Support\Facades\DB;

class OfferForm extends Component
{
        public $salaryOptions;
    public $categoryOptions;
    public $title;
    public $company;
    public $category_id;
    public $salary_id;
    public $description;
    public $user_id;

     protected $rules = [
        'title' => ['required','min:5'],
        'category_id' => ['required'],
        'company' => ['required'],
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

        Offer::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'company' => $validated['company'],
            'salary_id' => $validated['salary_id'],
            'category_id' => $validated['category_id'],
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('dashboard');

    }

    public function render()
    {
        return view('livewire.form.offer-form');
    }
}