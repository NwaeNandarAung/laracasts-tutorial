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
                    @include('flash-message')
                    <div class="grid grid-cols-3 gap-4">
                        <div class="col-span-2">
                            <p class="text-xl font-bold">Community Link</p>
                            <ul class="Links"></ul>
                            @if(count($links))
                                @foreach($links as $link)
                                    <li class="links__link">
                                        <span class="label label-defaultinline-flex items-center justify-center text-xs font-bold text-white px-1 leading-none rounded" style="background : {{$link->channel->color}}">{{$link->channel->title}}</span>
                                        <a href="{{$link->link}}" target="_blank" class="text-purple-600">
                                            {{$link->title}}
                                        </a>
                                        <small>
                                            Contributed by: <a href="#" class="font-bold">{{$link->creator->name}}</a>{{$link->updated_at->diffForHumans()}}
                                        </small>
                                    </li>
                                @endforeach
                            @else
                                <li class="links__link">
                                    No contribution yet!
                                </li>
                            @endif
                        </div>
                        @include('community.add-link')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
