<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso denegado - Sabor360</title>
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
                <div class="text-9xl md:text-[12rem] font-light text-orange-400 opacity-20" style="font-family: 'Lavishly Yours', cursive;">
                    403
                </div>
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-32 h-32 bg-orange-400 bg-opacity-20 rounded-full flex items-center justify-center animate-pulse">
                        <svg class="w-16 h-16 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Error Message -->
            <h1 class="text-4xl md:text-6xl font-light text-white mb-6" style="font-family: 'Lavishly Yours', cursive;">
                Área Restringida
            </h1>
            
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto leading-relaxed">
                Esta zona está reservada solo para nuestro personal. Como un área VIP de la cocina, necesitas permisos especiales para acceder.
            </p>

            <!-- Access Info -->
            <div class="bg-gray-900 bg-opacity-50 rounded-lg p-8 border border-gray-800 mb-12 max-w-2xl mx-auto">
                <h2 class="text-2xl font-semibold text-orange-400 mb-6">¿Por qué no puedo acceder?</h2>
                <div class="text-left space-y-4">
                    <div class="flex items-start space-x-3">
                        <div class="w-6 h-6 bg-orange-400 bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-3 h-3 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="text-gray-300">Esta sección requiere permisos de administrador</p>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <div class="w-6 h-6 bg-orange-400 bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-3 h-3 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="text-gray-300">Tu sesión puede haber expirado</p>
                    </div>
                    
                    <div class="flex items-start space-x-3">
                        <div class="w-6 h-6 bg-orange-400 bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-3 h-3 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <p class="text-gray-300">Es posible que no tengas los permisos necesarios</p>
                    </div>
                </div>
            </div>

            <!-- Suggestions -->
            <div class="bg-orange-400 bg-opacity-10 border border-orange-400 rounded-lg p-6 mb-12 max-w-2xl mx-auto">
                <h3 class="text-orange-400 font-semibold text-lg mb-4">¿Qué puedes hacer?</h3>
                <div class="grid md:grid-cols-2 gap-4 text-sm text-left">
                    <div class="flex items-start space-x-2">
                        <svg class="w-4 h-4 text-orange-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-gray-300">Contacta al administrador del sistema</span>
                    </div>
                    <div class="flex items-start space-x-2">
                        <svg class="w-4 h-4 text-orange-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-gray-300">Verifica tus credenciales de acceso</span>
                    </div>
                    <div class="flex items-start space-x-2">
                        <svg class="w-4 h-4 text-orange-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-gray-300">Intenta iniciar sesión nuevamente</span>
                    </div>
                    <div class="flex items-start space-x-2">
                        <svg class="w-4 h-4 text-orange-400 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-gray-300">Regresa a las áreas públicas</span>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="/" class="border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black px-8 py-4 rounded-lg font-medium transition-all duration-300 transform hover:scale-105 group">
                    <span class="flex items-center">
                        <svg class="w-5 h-5 mr-2 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Volver al Inicio
                    </span>
                </a>
                <a href="/contacto" class="border-2 border-gray-600 text-gray-300 hover:border-yellow-400 hover:text-yellow-400 px-8 py-4 rounded-lg font-medium transition-all duration-300">
                    Contactar Soporte
                </a>
            </div>

            <!-- Contact Info -->
            <div class="text-center">
                <p class="text-gray-400 text-sm mb-2">¿Necesitas ayuda con el acceso?</p>
                <div class="flex justify-center space-x-6 text-sm">
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <span class="text-gray-300">+52 (8445) 123-4567</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <span class="text-gray-300">info@sabor360.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Animated Background Elements -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-orange-400 rounded-full animate-ping opacity-20"></div>
        <div class="absolute top-3/4 right-1/4 w-1 h-1 bg-orange-400 rounded-full animate-pulse opacity-30"></div>
        <div class="absolute bottom-1/4 left-1/3 w-1.5 h-1.5 bg-orange-400 rounded-full animate-bounce opacity-25"></div>
    </div>
</body>
</html>