<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quest Board</title>

    @vite('resources/css/app.css')
</head>
<body class="text-lg md:text-xl leading-relaxed text-center">
    
    <header>
        <nav class="flex items-center gap-6 p-4">
            <div class="inline-block border-4 border-white/80 bg-black/40 rounded-md p-2">
                <h1 class="text-3xl md:text-5xl lg:text-7xl font-bold leading-none text-white">Quest Board</h1>
            </div>

            <div class="ml-auto flex gap-4">
                <a href="{{route('quests.index')}}" class="text-sm md:text-base">Home</a>
                <a href="{{route('quests.create')}}" class="text-sm md:text-base">Submit Quest</a>
            </div>
        </nav>
    </header>

    <main class="container">
        {{$slot}}
    </main>
    
</body>
</html>