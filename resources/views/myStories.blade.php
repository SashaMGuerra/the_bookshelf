<x-app-layout>
    <x-slot name="header">{{ __('My Stories') }}</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="my_stories" method="post">
                        @csrf
                        <button name="submit" value="addStory">{{__('Add Story')}}</button>
                    </form>
                </div>
            </div>
            <div class="p-6 bg-white border-b border-gray-200">
                @foreach ($stories as $story)
                    <x-story id="{{$story['id']}}" title="{{$story['title']}}" synopsis="{{$story['synopsis']}}"/>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
