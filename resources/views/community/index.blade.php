<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Community') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-3 gap-4">
                        <div class="col-span-2">
                            <p class="text-xl font-bold">Community Link</p class=>
                            <ul class="Links"></ul>
                                @foreach($links as $link)
                                    <li class="links__link">
                                        <a href="{{$link->link}}" target="_blank" class="text-purple-600">
                                            {{$link->title}}
                                        </a>
                                        <small>
                                            Contributed by: <a href="#" class="font-bold">{{$link->creator->name}}</a>  {{$link->updated_at->diffForHumans()}}
                                        </small>
                                    </li>
                                @endforeach
                        </div>
                        <div class="...">
                            <p class="text-lg font-semibold">Contribute a Link</p>
                            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="/community">
                                @csrf
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                                        Title:
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" name="title" placeholder="What is the title of your article?">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="link">
                                        Link:
                                    </label>
                                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="link" type="text" name="link" placeholder="What is the URL?">
                                </div>
                                <div class="flex items-center justify-between">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                        Contribute Link
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
