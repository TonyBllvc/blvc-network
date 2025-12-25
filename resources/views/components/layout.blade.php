<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Blvc Network | UI </title>

    @vite('resources/css/app.css') {{-- I want to serve up the css --}}
</head>
<body>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 text-center px-4 py-2 mb-4">
            {{ session('success') }}
        </div>
    @endif

    <header>
        <nav>
            <h1>
                <a href='/'> Black Network</a>
            </h1>
            <a class="text-slate-600 hover:text-red-400 hover:border-b hover:border-red-500 transition-all duration-700" href="{{ route('black.index') }}" > All Black list</a>
            <a class="text-slate-600 hover:text-red-400 hover:border-b hover:border-red-500 transition-all duration-700" href="{{ route('black.create') }}" > Add list </a>
        </nav>
    </header>

    <main class="container">
        {{-- slot is a global variable that represents wrapped children --}}
        {{ $slot }} 
    </main>
    
</body>
</html>