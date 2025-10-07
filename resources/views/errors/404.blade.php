<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página no encontrada - Sabor360</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white overflow-x-hidden min-h-screen">
    <!-- Error Content -->
    <div class="min-h-screen flex items-center justify-center px-8 pt-24">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Error Icon -->
            <div class="relative mb-12">
                <div class="text-9xl md:text-[12rem] font-light text-yellow-400 opacity-20" style="font-family: 'Lavishly Yours', cursive;">
                    404
                </div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-32 h-32 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center animate-pulse">
                        <svg class="w-16 h-16 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6-4h6m2 5.291A7.962 7.962 0 0112 15c-2.34 0-4.5-1.01-6-2.709M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.0844-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Error Message -->
            <h1 class="text-4xl md:text-6xl font-light text-white mb-6" style="font-family: 'Lavishly Yours', cursive;">
                ¡Ups! Plato no encontrado
            </h1>
            <!-- Suggestions -->
            <div class="bg-gray-900 bg-opacity-50 rounded-lg p-8 border border-gray-800 mb-12 max-w-2xl mx-auto">
                <h2 class="text-2xl font-semibold text-yellow-400 mb-6">¿Qué tal si pruebas?</h2>
                <div class="grid md:grid-cols-2 gap-6 text-left">
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2V7"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-medium mb-1">Nuestro Menú</h3>
                            <p class="text-gray-300 text-sm">Explora todos nuestros deliciosos platos</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-medium mb-1">Página Principal</h3>
                            <p class="text-gray-300 text-sm">Regresa al inicio de nuestra experiencia</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3a4 4 0 118 0v4m-4 8a4 4 0 11-8 0v-4m8 4v4a4 4 0 11-8 0v-4"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-medium mb-1">Reservar Mesa</h3>
                            <p class="text-gray-300 text-sm">Asegura tu lugar en nuestra mesa</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-medium mb-1">Contáctanos</h3>
                            <p class="text-gray-300 text-sm">¿Necesitas ayuda? Estamos aquí</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/" class="border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black px-8 py-4 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 group">
                    <span class="flex items-center">
                        <svg class="w-5 h-5 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Volver al Inicio
                    </span>
                </a>
                <a href="/menu-interactivo" class="border-2 border-gray-600 text-gray-300 hover:border-yellow-400 hover:text-yellow-400 px-8 py-4 rounded-lg font-medium transition-all duration-300">
                    Ver Menú Completo
                </a>
            </div>
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