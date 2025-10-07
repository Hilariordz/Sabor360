<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error del servidor - Sabor360</title>
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
            <!-- Error Icon -->
            <div class="relative mb-12">
                <div class="text-9xl md:text-[12rem] font-light text-red-400 opacity-20" style="font-family: 'Lavishly Yours', cursive;">
                    500
                </div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-32 h-32 bg-red-400 bg-opacity-20 rounded-full flex items-center justify-center animate-pulse">
                        <svg class="w-16 h-16 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.732-.833-2.464 0L4.34 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Error Message -->
            <h1 class="text-4xl md:text-6xl font-light text-white mb-6" style="font-family: 'Lavishly Yours', cursive;">
                ¡Algo se quemó en la cocina!
            </h1>
            
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto leading-relaxed">
                Nuestros chefs están trabajando para solucionar este problema. Por favor, inténtalo de nuevo en unos momentos.
            </p>

            <!-- Error Details -->
            <div class="bg-gray-900 bg-opacity-50 rounded-lg p-8 border border-gray-800 mb-12 max-w-2xl mx-auto">
                <h2 class="text-2xl font-semibold text-red-400 mb-6">¿Qué pasó?</h2>
                <div class="text-left space-y-4">
                    <div class="flex items-start space-x-3">
                        <div class="w-6 h-6 bg-red-400 bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <div class="w-2 h-2 bg-red-400 rounded-full"></div>
                        </div>
                        <p class="text-gray-300">Ocurrió un error interno en nuestros servidores</p>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <div class="w-6 h-6 bg-red-400 bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <div class="w-2 h-2 bg-red-400 rounded-full"></div>
                        </div>
                        <p class="text-gray-300">Nuestro equipo técnico ha sido notificado automáticamente</p>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <div class="w-6 h-6 bg-red-400 bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <div class="w-2 h-2 bg-red-400 rounded-full"></div>
                        </div>
                        <p class="text-gray-300">Estamos trabajando para resolver el problema lo antes posible</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <button onclick="window.location.reload()" class="border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black px-8 py-4 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 group">
                    <span class="flex items-center">
                        <svg class="w-5 h-5 mr-2 group-hover:rotate-180 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                        </svg>
                        Intentar de Nuevo
                    </span>
                </button>
                <a href="/" class="border-2 border-gray-600 text-gray-300 hover:border-yellow-400 hover:text-yellow-400 px-8 py-4 rounded-lg font-medium transition-all duration-300">
                    Volver al Inicio
                </a>
            </div>

            <!-- Contact Info -->
            <div class="bg-yellow-400 bg-opacity-10 border border-yellow-400 rounded-lg p-6 max-w-2xl mx-auto">
                <h3 class="text-yellow-400 font-semibold text-lg mb-3">¿Necesitas ayuda inmediata?</h3>
                <div class="grid md:grid-cols-2 gap-4 text-sm">
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span class="text-gray-300">+52 (8445) 123-4567</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span class="text-gray-300">info@sabor360.com</span>
                    </div>
                </div>
            </div>

            <!-- Fun Message -->
            <div class="mt-8">
                <p class="text-gray-400 italic text-sm">
                    "Incluso los mejores chefs queman algo de vez en cuando. Lo importante es seguir cocinando."
                </p>
            </div>
        </div>
    </div>

    <!-- Animated Background Elements -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-red-400 rounded-full animate-ping opacity-20"></div>
        <div class="absolute top-3/4 right-1/4 w-1 h-1 bg-red-400 rounded-full animate-pulse opacity-30"></div>
        <div class="absolute bottom-1/4 left-1/3 w-1.5 h-1.5 bg-red-400 rounded-full animate-bounce opacity-25"></div>
    </div>
</body>
</html>