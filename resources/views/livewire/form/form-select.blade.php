<select wire:model="{{$field}}" id="{{$field}}" class="w-full">
    <option value="">{{$defaultOption}}</option>
    @foreach ($options as $option )
    <option value="{{$option}}"> {{$option}} </option>
    @endforeach
</select>
