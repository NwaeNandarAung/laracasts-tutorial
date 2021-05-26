<div class="...">
    <p class="text-lg font-semibold">Contribute a Link</p>
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="/community">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                Title:
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" type="text" name="title" placeholder="What is the title of your article?">
            {!! $errors->first('title', '<span class="Error text-red-500 text-xs">:message</span>') !!}
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="link">
                Link:
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="link" type="text" name="link" placeholder="What is the URL?">
            {!! $errors->first('link', '<span class="Error text-red-500 text-xs">:message</span>') !!}
        </div>
        <div class="flex items-center justify-between">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Contribute Link
            </button>
        </div>
    </form>
</div>
