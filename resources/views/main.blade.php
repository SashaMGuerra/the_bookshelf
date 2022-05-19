<x-app-layout>
    <x-slot name="header">{{ __('Main') }}</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/main" method="get">
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
                      "type="text" name="description" id="description" placeholder="{{__('Search')}}">
                    </form>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($stories as $story)
                    <div class="p-6 border-b bg-gray-100 flex items-center">
                        <div class="">{{$story['title']}}</div>
                        <div class="">{{$story['synopsis']}}</div>
                        <a href="/read/{{$story['id']}}/1">{{__('Read')}}</a>
                    </div>
                    @endforeach
                </div>
                <div>
                    {{$stories->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
