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
                    <h1>Community Link</h1>
                    <ul class="Links"></ul>
                    @foreach($links as $link)
                        <li class="links__link">
                            <a href="{{$link->link}}" target="_blank">
                                {{$link->title}}
                            </a>
                            <small>
                                Contributed by: <a href="#">{{$link->creator->name}}</a>  {{$link->updated_at->diffForHumans()}}
                            </small>
                        </li>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>