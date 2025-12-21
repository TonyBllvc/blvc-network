<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Blvc Network </title>

    @vite('resources/css/app.css') {{-- I want to serve up the css --}}
</head>
<body class="text-center px-8 py-12">
    
    <h1>
        Welcome to the Black Network
    </h1>
    <p> Click the button below to view the list of Back </p>

    <a href="/black" class="btn mt-4 inline-block">
        Find Blacks
    </a>

</body>
</html>