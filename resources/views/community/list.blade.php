<ul class="px-0">
    @if(count($links))
        @foreach($links as $link)
            <li class="border list-none rounded-sm px-3 py-3" style='border-bottom-width:0'>
                @if(Auth::check() && Auth::user()->votedFor($link))
                    +1
                @endif

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
