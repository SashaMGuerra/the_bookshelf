<x-app-layout>
    <x-slot name="header">{{ __('Edit chapter') }}</x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="edit_chapter" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$chapter['id']??''}}">
                        <input type="hidden" name="story_id" value="{{$chapter['story_id']}}">
                        <div class="">
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
                              " type="text" name="title" id="title" value="{{old('title')??$chapter['title']??''}}">
                            </div>
                        </div>
                        <div style="color: red" class="text-center">
                            @error('title'){{$message}}@enderror
                        </div>
                        <div class="">
                            <div class="">
                                <label for="summary">{{__('Summary')}}</label>
                            
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
                          " name="summary" id="summary">{{old('summary')??$chapter['summary']??''}}</textarea>
                            </div>
                        </div>
                        <div class="">
                            <div class="">
                                <label for="text">{{__('Text')}}</label>
                                <div style="color: red" class="text-center">
                                    @error('text'){{$message}}@enderror
                                </div>
                            
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
                          " name="text" id="text">{{old('text')??$chapter['text']??''}}</textarea>
                            </div>
                        </div>

                        <div class="flex justify-between">
                            <button type="submit" name="submit" value="saveChapter">{{__('Save')}}</button>
                            <button type="submit" name="submit" value="cancel">{{__('Cancel')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
