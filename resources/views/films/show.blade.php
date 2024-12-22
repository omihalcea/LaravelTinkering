<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Info</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
</head>
<body class="background min-h-screen">
@include('layout.header')

<div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6 mt-16 container flex-grow content-fade flex flex-col items-center text-center">
    <h1 class="text-3xl font-bold mb-4">Informació Adicional</h1>

    <div class="mb-4">
        <label for="title" class="block text-gray-700 font-bold">Titol:</label>
        <p id="title" class="block text-gray-700">{{ $film->title }}</p>
    </div>

    <div class="mb-4">
        <label for="director" class="block text-gray-700 font-bold">Director:</label>
        <p id="director" class="block text-gray-700">{{ $film->director }}</p>
    </div>

    <div class="mb-4">
        <label for="genre" class="block text-gray-700 font-bold">Genere:</label>
        <p id="genre" class="block text-gray-700">{{ $film->genre }}</p>
    </div>

    <div class="mb-4">
        <label for="duration" class="block text-gray-700 font-bold">Duració (minuts):</label>
        <p id="duration" class="block text-gray-700">{{ $film->duration }}</p>
    </div>

    <div class="mb-4">
        <label for="year" class="block text-gray-700 font-bold">Any d'estrena:</label>
        <p id="year" class="block text-gray-700">{{ $film->year }}</p>
    </div>

    <a href="{{ route('films.index') }}" class="text-gray-500 hover:underline mt-4 block">Tornar</a>
</div>

@include('layout.footer')
</body>

<style>
    body {
        font-family: 'Poppins', sans-serif;
        position: relative;
        min-height: 100vh;
    }

    .background {
        background-color: #1e1c2a;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .content-fade {
        opacity: 0;
        animation: fadeIn 2s forwards;
    }

    #footer {
        position: absolute;
        bottom: 0;
        width: 100%;
    }
</style>
</html>
