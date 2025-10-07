<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesión expirada - Sabor360</title>
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
                <div class="text-9xl md:text-[12rem] font-light text-blue-400 opacity-20" style="font-family: 'Lavishly Yours', cursive;">
                    419
                </div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-32 h-32 bg-blue-400 bg-opacity-20 rounded-full flex items-center justify-center animate-pulse">
                        <svg class="w-16 h-16 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Error Message -->
            <h1 class="text-4xl md:text-6xl font-light text-white mb-6" style="font-family: 'Lavishly Yours', cursive;">
                Tu Mesa se Enfrió
            </h1>
            
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto leading-relaxed">
                Tu sesión ha expirado por seguridad. Como un plato que se enfría, necesitamos preparar una nueva experiencia fresca para ti.
            </p>

            <!-- Session Info -->
            <div class="bg-gray-900 bg-opacity-50 rounded-lg p-8 border border-gray-800 mb-12 max-w-2xl mx-auto">
                <h2 class="text-2xl font-semibold text-blue-400 mb-6">¿Por qué expiró mi sesión?</h2>
                <div class="text-left space-y-4">
                    <div class="flex items-start space-x-3">
                        <div class="w-6 h-6 bg-blue-400 bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-3 h-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <p class="text-gray-300">Has estado inactivo por mucho tiempo</p>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <div class="w-6 h-6 bg-blue-400 bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-3 h-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <p class="text-gray-300">Es una medida de seguridad para proteger tu información</p>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <div class="w-6 h-6 bg-blue-400 bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-3 h-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <p class="text-gray-300">Simplemente necesitas refrescar tu sesión</p>
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
                        Refrescar Sesión
                    </span>
                </button>
                <a href="/" class="border-2 border-gray-600 text-gray-300 hover:border-yellow-400 hover:text-yellow-400 px-8 py-4 rounded-lg font-medium transition-all duration-300">
                    Volver al Inicio
                </a>
            </div>

            <!-- Tips -->
            <div class="bg-blue-400 bg-opacity-10 border border-blue-400 rounded-lg p-6 max-w-2xl mx-auto">
                <h3 class="text-blue-400 font-semibold text-lg mb-4">💡 Consejos para evitar que expire tu sesión</h3>
                <div class="grid md:grid-cols-2 gap-4 text-sm text-left">
                    <div class="flex items-start space-x-2">
                        <div class="w-2 h-2 bg-blue-400 rounded-full mt-2 flex-shrink-0"></div>
                        <span class="text-gray-300">Mantente activo en el sitio</span>
                    </div>
                    <div class="flex items-start space-x-2">
                        <div class="w-2 h-2 bg-blue-400 rounded-full mt-2 flex-shrink-0"></div>
                        <span class="text-gray-300">Completa tus acciones rápidamente</span>
                    </div>
                    <div class="flex items-start space-x-2">
                        <div class="w-2 h-2 bg-blue-400 rounded-full mt-2 flex-shrink-0"></div>
                        <span class="text-gray-300">Guarda tu progreso frecuentemente</span>
                    </div>
                    <div class="flex items-start space-x-2">
                        <div class="w-2 h-2 bg-blue-400 rounded-full mt-2 flex-shrink-0"></div>
                        <span class="text-gray-300">Evita dejar pestañas abiertas sin usar</span>
                    </div>
                </div>
            </div>

            <!-- Fun Message -->
            <div class="mt-8">
                <p class="text-gray-400 italic text-sm">
                    "Como un buen vino, las mejores experiencias necesitan tiempo... pero no demasiado."
                </p>
            </div>
        </div>
    </div>

    <!-- Animated Background Elements -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-blue-400 rounded-full animate-ping opacity-20"></div>
        <div class="absolute top-3/4 right-1/4 w-1 h-1 bg-blue-400 rounded-full animate-pulse opacity-30"></div>
        <div class="absolute bottom-1/4 left-1/3 w-1.5 h-1.5 bg-blue-400 rounded-full animate-bounce opacity-25"></div>
    </div>
</body>
</html>