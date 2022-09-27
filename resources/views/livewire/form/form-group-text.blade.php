<div>
    <x-input-label for={{$field}} :value="__($fieldName)" />
    <x-text-input 
    id={{$field}} 
    class="block mt-1 w-full" 
    type="text" 
    name={{$field}} 
    :value="old('{{$field}}')" 
    required > </x-text-input>
</div>
