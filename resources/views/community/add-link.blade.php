<div class="...">
    <p class="text-lg font-semibold">Contribute a Link</p>
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="/community">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="channel">
                Channel:
            </label>
            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="channel_id">
                <option selected disabled>Pick a channel</option>
                @foreach($channels as $channel) 
                    <option value="{{$channel->id}}" {{old('channel_id')==$channel->id? 'selected' : ''}}>
                        {{$channel->title}}
                    </option>
                @endforeach
            </select>
            {!! $errors->first('channel_id', '<span class="Error text-red-500 text-xs">:message</span>') !!}
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                Title:
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" name="title" placeholder="What is the title of your article?" value="{{old('title')}}">
            {!! $errors->first('title', '<span class="Error text-red-500 text-xs">:message</span>') !!}
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="link">
                Link:
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="link" type="text" name="link" placeholder="What is the URL?" value="{{old('link')}}">
            {!! $errors->first('link', '<span class="Error text-red-500 text-xs">:message</span>') !!}
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Contribute Link
            </button>
        </div>
    </form>
</div>
