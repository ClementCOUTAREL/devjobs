<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My applications') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="pl-4 text-2xl font-bold mb-8">Your applications</h2>
                    @if($applications)
                    @foreach ($applications as $application )
                    <hr>
                    <div class="my-4 px-4 flex flex-row justify-between items-center">
                        <div>
                            <h3 class="text-3xl mb-3">{{$application->title}}</h3>
                        </div>
                        <div>
                            <a href="{{route('application.list', $application->id)}}" class="text-xl bg-lime-400 hover:bg-lime-500 py-2 px-3 rounded">
                                See application details
                            </a>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>