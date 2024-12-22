<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
</head>
<body>
<div class="bg-gray-900 p-8 flex items-center justify-center min-h-screen animation-fade-color">
    <div class="text-left content-fade animate-fade-in">
        <h1 class="text-white text-3xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-9xl">Discover new</h1>
        <h1 class="text-white text-3xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-9xl"> great
            <a href="/films"
               class="text-purple-400 hover:text-purple-600 transition duration-300 underline-hover">Films</a> or
        </h1>
        <h1 class="text-white text-3xl sm:text-5xl md:text-6xl lg:text-7xl xl:text-9xl">
            <a href="/videogames" class="text-purple-400 hover:text-purple-600 transition duration-300 underline-hover">Videogames</a>
        </h1>

    </div>
</div>
</body>
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }

    /* Animació per a la transició d'opacitat del text*/
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    /* Animació per a la transició de color de fons */
    @keyframes fadeColor {
        0% {
            background-color: #000000; /* bg-gray-900 */
        }
        100% {
            background-color: #100f17; /* Canvia a negre */
        }
    }

    .animation-fade-color {
        animation: fadeColor 2s forwards; /* Animació del canvi de color de fons */
    }

    /* Aplicar l'animació al contingut */
    .content-fade {
        opacity: 0; /* Inici amb opacitat 0 */
        animation: fadeIn 5s forwards; /* Animació de 2 segons */
    }

    .underline-hover {
        position: relative;
        color: #b48ce0; /* Color morat per defecte */
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .underline-hover::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 6px;
        bottom: 0;
        left: 0;
        background-color: #7c3aed; /* Manté el color morat a la subratllada */
        visibility: hidden;
        transform: scaleX(0);
        transition: all 0.3s ease-in-out;
    }

    .underline-hover:hover::after {
        visibility: visible;
        transform: scaleX(1);
    }

    .header {
        color: #100F17;
    }
</style>

</html>
