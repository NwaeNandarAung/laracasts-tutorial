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
                            <a href="/community" class="text-xl font-bold">Community Link</a>

                            @if($channel != null)
                                <span class="text-xl font-bold">&#8211; {{ $channel->title }}</span>
                            @endif

                            @include('community.list')
                        </div>
                        @include('community.add-link')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
