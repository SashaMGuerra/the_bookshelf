<x-app-layout>
    <x-slot name="header">{{ __('Edit story') }}</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="edit_story" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$story['id']??''}}">
                        <div class="">
                            <label for="title">{{__('Title')}}</label>
                            <input class="
                            form-control
                            block
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
                          " type="text" name="title" id="title" value="{{$story['title']??''}}">
                        </div>
                        <div style="color: red" class="text-center">
                            @error('title'){{$message}}@enderror
                        </div>
                        <div class="">
                            <label for="synopsis">{{__('Synopsis')}}</label>
                        
                        <textarea class="
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
                      " name="synopsis" id="synopsis">{{$story['synopsis']??''}}</textarea>
                        </div>

                        @if ($story['id'])
                            <div class="">
                                <h3 class="text-center">Chapters</h3>
                                <button type="submit" name="submit" value="addChapter">{{__('Add chapter')}}</button>
                                <div class="">
                                    @foreach ($story->getChapters as $chapter)
                                        <div class="p-6 border-b bg-gray-100 flex justify-between">
                                            <div class="">{{$chapter['title']}}</div>
                                            <div class="">{{$chapter['summary']}}</div>
                                            <button name="submit" value="edit/{{$chapter['id']}}">Edit</button>
                                            <button name="submit" value="delete/{{$chapter['id']}}">Delete</button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <div class="flex justify-between">
                            <button type="submit" name="submit" value="saveStory">{{__('Save')}}</button>
                            <button type="submit" name="submit" value="cancel">{{__('Cancel')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
