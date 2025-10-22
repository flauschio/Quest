<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quest Board</title>
    @vite('resources/css/app.css')
</head>
<body class="relative flex min-h-screen flex-col items-center justify-center bg-[url('/images/castle-background.png')] bg-cover bg-center bg-no-repeat">
    <div class="absolute top-4 left-4 border-4 border-white/80 bg-black/40 rounded-md p-4">
        <h1 class="text-7xl font-bold leading-none text-white">Quest Board</h1>
    </div>

    <p class="mb-4 text-2xl text-gray-700">Your adventure starts here!</p>

    <a href="/quests" 
       class="rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700">
        Find Quests
    </a>
</body>
</html>