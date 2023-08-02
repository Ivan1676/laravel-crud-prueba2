<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-blue-950 text-blue-100 pt-20">
    <div class="max-w-5xl mx-auto">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
            <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                Game Details
            </span>
        </h1>
        <div class="border-b-2 border-blue-500 p-2">
            <div>Name: {{ $game->name }}</div>
            <div>Description: {{ $game->description }}</div>
            <div>Genre: {{ $game->genre }}</div>
            <div>Release date: {{ $game->release_date }}</div>
            <div>Developer: {{ $game->developer }}</div>
            <div>Price: {{ $game->price }}€</div>
        </div>
        <form action="{{ route('delete-game', ['game' => $game->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="relative mt-2 inline-flex items-center justify-center p-0.5 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-red-400 to-red-600 group-hover:from-red-400 group-hover:to-red-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-red-200 dark:focus:ring-red-800">
                <span
                    class="relative px-4 py-2 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    Delete Game
                </span>
            </button>
        </form>
        <a href="{{ route('store') }}"
            class="relative mt-2 inline-flex items-center justify-center p-0.5 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
            <span
                class="relative px-4 py-2 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Back to Store
            </span>
        </a>
    </div>
</body>

</html>
