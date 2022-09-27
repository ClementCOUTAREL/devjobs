<form wire:submit.prevent='submit' novalidate>
    @csrf

    <x-form-errors class="mb-4" :errors="$errors"></x-form-errors>
    <div>
        <x-input-label for="title" :value="__('Job title')" />
        <x-text-input id="title" class="block mt-1 w-full" type="text" wire:model="title" :value="old('title')"
            required></x-text-input>
    </div>
    <div>
        <x-input-label for="company" :value="__('Company')" />
        <x-text-input id="company" class="block mt-1 w-full" type="text" wire:model="company" :value="old('company')" required>
        </x-text-input>
    </div>
    <div>
        <x-input-label for="category_id" :value="__('category')" />
        <select wire:model="category_id" id="category_id" class="w-full">
            <option value="">Select your category</option>
            @foreach ($categoryOptions as $option)
            <option value="{{$option->id}}">{{$option->name}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <x-input-label for="salary_id" :value="__('Salary')" />
        <select wire:model="salary_id" id="salary_id" class="w-full">
            <option value="">Select your salary</option>
            @foreach ($salaryOptions as $option)
            <option value="{{$option->id}}">{{$option->range}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <x-input-label for="description" :value="__('description')" />
        <x-textarea class="block mt-1 w-full h-80" wire:model="description" :value="old('description')" required>
        </x-textarea>
    </div>
    <livewire:form.form-button text="Create offer">
</form>