<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de Traducción - Sabor360</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white overflow-x-hidden">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 z-50 p-6 w-full">
        <div class="bg-black bg-opacity-80 rounded-lg px-6 py-3 flex items-center justify-between max-w-7xl mx-auto">
            <div class="flex items-center space-x-2">
                <img src="/images/sabor360.png" alt="Sabor360 Logo" class="w-8 h-8 object-contain">
                <span class="text-white font-bold text-lg">SABOR360</span>
            </div>
            <div class="hidden md:flex items-center space-x-6 text-sm">
                <a href="/" class="text-white hover:text-gray-300 transition-colors" data-translate="INICIO">INICIO</a>
                <a href="/menu-interactivo" class="text-white hover:text-gray-300 transition-colors" data-translate="MENÚ">MENÚ</a>
                <a href="/sobre-nosotros" class="text-white hover:text-gray-300 transition-colors" data-translate="SOBRE NOSOTROS">SOBRE NOSOTROS</a>
                <a href="/contacto" class="text-white hover:text-gray-300 transition-colors" data-translate="CONTACTO">CONTACTO</a>
                
                <!-- Language Switcher -->
                <div class="flex items-center space-x-2 ml-4 border-l border-gray-600 pl-4">
                    <button class="lang-btn active px-2 py-1 text-xs rounded bg-yellow-400 text-black font-medium" data-lang="es">ES</button>
                    <button class="lang-btn px-2 py-1 text-xs rounded border border-gray-600 text-gray-300 hover:bg-gray-700" data-lang="en">EN</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Test Content -->
    <div class="pt-32 pb-16 px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-5xl md:text-6xl font-light mb-8" style="font-family: 'Lavishly Yours', cursive;" data-translate="Eventos Especiales">
                Eventos Especiales
            </h1>
            
            <p class="text-xl text-gray-300 mb-8" data-translate="Disfruta de nuestras noches temáticas y eventos exclusivos durante toda la semana">
                Disfruta de nuestras noches temáticas y eventos exclusivos durante toda la semana
            </p>

            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <div class="bg-gray-900 bg-opacity-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold text-yellow-400 mb-4" data-translate="Ingredientes Premium">Ingredientes Premium</h3>
                    <p class="text-gray-300" data-translate="Seleccionamos cuidadosamente los mejores ingredientes frescos y de temporada para garantizar sabores excepcionales en cada plato.">
                        Seleccionamos cuidadosamente los mejores ingredientes frescos y de temporada para garantizar sabores excepcionales en cada plato.
                    </p>
                </div>

                <div class="bg-gray-900 bg-opacity-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold text-yellow-400 mb-4" data-translate="Chefs Expertos">Chefs Expertos</h3>
                    <p class="text-gray-300" data-translate="Nuestro equipo de chefs profesionales cuenta con más de 15 años de experiencia en alta cocina internacional y técnicas culinarias innovadoras.">
                        Nuestro equipo de chefs profesionales cuenta con más de 15 años de experiencia en alta cocina internacional y técnicas culinarias innovadoras.
                    </p>
                </div>

                <div class="bg-gray-900 bg-opacity-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold text-yellow-400 mb-4" data-translate="Ambiente Exclusivo">Ambiente Exclusivo</h3>
                    <p class="text-gray-300" data-translate="Disfruta de un ambiente sofisticado y acogedor, diseñado para crear momentos memorables con un servicio personalizado de primera clase.">
                        Disfruta de un ambiente sofisticado y acogedor, diseñado para crear momentos memorables con un servicio personalizado de primera clase.
                    </p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/" class="border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black px-8 py-4 rounded-lg font-medium transition-all duration-300" data-translate="Ver Menú Completo">
                    Ver Menú Completo
                </a>
                <a href="/" class="border-2 border-gray-600 text-gray-300 hover:border-yellow-400 hover:text-yellow-400 px-8 py-4 rounded-lg font-medium transition-all duration-300" data-translate="Reservar Mesa">
                    Reservar Mesa
                </a>
            </div>

            <!-- Instructions -->
            <div class="mt-16 p-6 bg-yellow-400 bg-opacity-10 border border-yellow-400 rounded-lg">
                <h2 class="text-yellow-400 font-semibold text-lg mb-4">🌟 Instrucciones de Prueba</h2>
                <p class="text-gray-300 mb-4">
                    Haz clic en el botón <strong>"EN"</strong> en la navegación superior para ver la traducción al inglés.
                </p>
                <p class="text-gray-300">
                    Haz clic en <strong>"ES"</strong> para volver al español.
                </p>
            </div>
        </div>
    </div>
</body>
</html>