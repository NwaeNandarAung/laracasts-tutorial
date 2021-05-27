<ul class="px-0">
    @if(count($links))
        @foreach($links as $link)
            <li class="border list-none rounded-sm px-3 py-3" style='border-bottom-width:0'>
                <form method="POST" action="/votes/{{$link->id}}">
                    @csrf
                    <button class="font-bold py-2 px-4 rounded-full {{ Auth::check() && Auth::user()->votedFor($link) ? 'bg-blue-500 hover:bg-blue-700 text-white' : 'bg-gray-500 hover:bg-gray-700 text-white'}}">
                        {{$link->votes->count()}}
                    </button>
                </form>

                <a  href="/community/{{ $link->channel->slug }}" class="label label-defaultinline-flex items-center justify-center text-xs font-bold text-white px-1 leading-none rounded" style="background : {{$link->channel->color}}">{{$link->channel->title}}</a>
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
</ul>

{{ $links->links() }}
