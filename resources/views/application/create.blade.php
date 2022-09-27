<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create aplication') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-3xl mb-4" >
                        Apply for : <span class="font-bold">{{$offer->title}} - {{$offer->company}}</span>
                    </h2>
                    <form wire:submit.prevent='submit' novalidate>
                        @csrf
                    
                        <x-form-errors class="mb-4" :errors="$errors"></x-form-errors>
                        <div>
                            <x-input-label for="title" :value="__('Job title')" />
                            <x-text-input id="title" class="block mt-1 w-full" type="text" wire:model="title" value="{{$offer->title}}"
                                required></x-text-input>
                        </div>
                        <div>
                            <x-input-label for="category_id" :value="__('category')" />
                            
                            <select wire:model="category_id" id="category_id" class="w-full">
                                <option value="{{$offer->category_id}}">{{$offer->category->name}}</option>
                            </select>
                        </div>
                        <div>
                            <x-input-label for="salary_id" :value="__('Salary')" />
                            <select wire:model="salary_id" id="salary_id" class="w-full">
                                <option value="{{$offer->salary_id}}">{{$offer->salary->range}}</option>
                            </select>
                        </div>
                        <div>
                            <x-input-label for="description" :value="__('description')" />
                            <x-textarea class="block mt-1 w-full h-80" wire:model="description" value="old('description')" required>{{$offer->description}}
                            </x-textarea>
                        </div>
                        <livewire:form.form-button text="Create application">
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>