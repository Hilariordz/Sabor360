<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Error') - Sabor360</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white overflow-x-hidden min-h-screen">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 z-50 p-6 w-full">
        <div class="bg-black bg-opacity-80 rounded-lg px-6 py-3 flex items-center justify-between max-w-7xl mx-auto">
            <div class="flex items-center space-x-2">
                <img src="/images/sabor360.png" alt="Sabor360 Logo" class="w-8 h-8 object-contain">
                <span class="text-white font-bold text-lg">SABOR360</span>
            </div>
            <div class="hidden md:flex items-center space-x-6 text-sm">
                <a href="/" class="text-white hover:text-gray-300 transition-colors">INICIO</a>
                <a href="/menu-interactivo" class="text-white hover:text-gray-300 transition-colors">MENÚ</a>
                <a href="/sobre-nosotros" class="text-white hover:text-gray-300 transition-colors">SOBRE NOSOTROS</a>
                <a href="/contacto" class="text-white hover:text-gray-300 transition-colors">CONTACTO</a>
            </div>
        </div>
    </nav>

    <!-- Error Content -->
    <div class="min-h-screen flex items-center justify-center px-8 pt-24">
        <div class="max-w-4xl mx-auto text-center">
            @yield('content')
        </div>
    </div>

    <!-- Animated Background Elements -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-yellow-400 rounded-full animate-ping opacity-20"></div>
        <div class="absolute top-3/4 right-1/4 w-1 h-1 bg-yellow-400 rounded-full animate-pulse opacity-30"></div>
        <div class="absolute bottom-1/4 left-1/3 w-1.5 h-1.5 bg-yellow-400 rounded-full animate-bounce opacity-25"></div>
    </div>
</body>
</html>