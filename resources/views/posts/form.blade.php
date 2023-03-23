<x-master-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Create New Post') }}
            </h2>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="/post/create">
                        @csrf
                        
                        <div class="m-3">
                            <x-text-input id="title" name="title" type="text"
                                          class="mt-1 block w-full" autocomplete="title" placeholder="Title"
                                          value="{{old('title')}}"/>
                            <x-input-error class="mt-2" :messages="$errors->get('title')"/>
                        </div>
                        <div class="m-3">
                            <x-input-label for="content" :value="__('Content')"/>

                            <textarea id="content" name="content" type="text"
                                      class="w-full p-3 mt-2 border-0 shadow bg-gray-900"
                                      autocomplete="content"
                                      placeholder="">{{old('content')}}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('content')"/>
                        </div>
                        <div class="flex justify-end m-3">
                            <x-primary-button>Submit Post</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-master-layout>
