<x-app-layout>
    <x-slot name="header">{{ __('Dictionary') }}</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/dictionary" method="get">
                        <input class="
                        form-control
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                      " type="text" name="word" id="word" placeholder="{{__('Search')}}">
                    </form>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (isset($word['word']))
                    <div>
                        <h2 class="text-center text-xl">{{$word['word']}}</h2>
                        <div class="">
                            @foreach ($word['meanings'] as $meaning)
                            <hr>       
                            <div class="">
                                <div class="text-center">{{$meaning['partOfSpeech']}}:</div>
                                <ol style="list-style: decimal; padding: auto">
                                    @foreach ($meaning['definitions'] as $definition)
                                    <li>{{$definition['definition']}}</li>
                                    @endforeach
                                </ol>
                            </div>                    
                            @endforeach
                        </div>
                    </div>                     
                    @else
                    <div class="text-center">{{__('Please, enter a word')}}</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
