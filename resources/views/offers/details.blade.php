<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('See job offer') }}
        </h2>
    </x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div>
                    <h2 class="text-4xl mb-8">
                        {{$offer->title}}
                    </h2>
                    <h3 class="text-2xl mb-6">{{$offer->company}}</h3>
                    <p class="text-xl">{{$offer->description}}</p>
                </div>
                @if($offer->user_id === auth()->user()->id)
                <div class="mt-8">
                    <hr>
                    <div class="my-8 pl-8 flex flex-row justify-start items-center gap-8">
                        <form 
                        action="{{route('offer.destroy', $offer->id)}}"  
                        method="post">
                            @csrf
                            @method('delete')
                            <input class="bg-red-500 py-2 px-3 rounded text-2xl cursor-pointer" type="submit" value="Delete offer">   
                        </form>
                    </div>
                </div>
                @elseif (auth()->user()->role == "1")
                    <div class="mt-8">
                        <hr>
                        <div class="my-8 pl-8 flex flex-row justify-start items-center gap-8">
                            <a href="{{route('application.create', $offer->id)}}" class="bg-lime-400 hover:bg-lime-500 py-2 px-3 rounded text-2xl cursor-pointer">Apply for the job</a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

</x-app-layout>