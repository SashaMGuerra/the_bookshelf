<x-app-layout>
    <x-slot name="header">{{ $story['title'] }}</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 text-center">
                    <h1 class="text-xl p-6">{{$story['title']}}</h1>
                    <hr>
                    <div class="text-justify p-2">{{$story['synopsis']}}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <h2 class="text-lg text-center">{{$chapter['title']}}</h2>
                        @if ($chapter['summary']!=null)
                            <div class="text-justify">
                                {{$chapter['summary']}}
                            </div>
                        @endif
                        <hr>
                        <div class="text-clip">
                            {{$chapter['text']}}
                        </div>
                    </div>
                    <hr>
                    <form action="/read" method="post">
                        <div class="w-24 text-center pt-2 flex justify-between">
                            @csrf
                            <button name="changeChapter" value="previous">{{__('Previous')}}</button>
                            <span>{{session('storyChapter')}}/{{session('story')->getChapters->count()}}</span>
                            <button name="changeChapter" value="next">{{__('Next')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
