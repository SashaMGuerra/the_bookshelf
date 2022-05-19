<x-app-layout>
    <x-slot name="header">{{ __('My Stories') }}</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="my_stories" method="post" id="myStoriesForm">
                        @csrf
                        <button type="submit" name="submit" value="addStory">{{__('Add Story')}}</button>
                    </form>
                </div>
            </div>
            <div class="p-6 bg-white border-b border-gray-200">
                @foreach ($stories as $story)
                    <div class="p-6 border-b bg-gray-100 flex items-center">
                        <div class="">{{$story['title']}}</div>
                        <div class="">{{$story['synopsis']}}</div>
                        <button type="submit" form="myStoriesForm" name="submit" value="edit/{{$story['id']}}">{{__('Edit')}}</button>
                        <button type="submit" form="myStoriesForm" name="submit" value="delete/{{$story['id']}}">{{__('Delete')}}</button>
                    </div>
                @endforeach
            </div>
            <div>
                {{$stories->links()}}
            </div>
        </div>
    </div>
</x-app-layout>
