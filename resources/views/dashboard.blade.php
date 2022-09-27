<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(auth()->user()->role == "1")
                        <h2 class="pl-4 text-4xl fon t-bold mb-8">Get started and find a new job</h2>
                        <form action="">
                            <x-input-label>Search for your next job:</x-input-label>
                            <div>
                                <x-text-input class="w-4/5"/>
                                <x-primary-button>Search</x-primary-button>
                            </div>
                        </form>
                    @else
                        <h2 class="pl-4 text-2xl fon t-bold">Your job offers</h2>
                    @endif

                    @foreach ($offers as $offer )
                    <hr>
                    <div class="my-4 px-4 flex flex-row items-center justify-between">
                        <div>
                            <h3 class="text-3xl mb-3">{{$offer->title}}</h3>
                            <h4>{{$offer->company}}</h4>
                            <p>{{$offer->salary->range}}</p>
                        </div>
                        <div>
                            <a href="{{route('offer.show', $offer->id)}}"
                            class="bg-lime-400 hover:bg-lime-500 py-2 px-3 rounded uppercase">See offer details</a>
                        </div>
                    </div>
                    @endforeach

                </div>  
            </div>
        </div>
    </div>
</x-app-layout>
