<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sabor360</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white overflow-x-hidden">
<nav class="fixed top-0 left-0 z-50 p-6 w-full">
        <div class="bg-black bg-opacity-80 rounded-lg px-6 py-3 flex items-center justify-between max-w-7xl mx-auto">
            <div class="flex items-center space-x-2">
                <img src="/images/sabor360.png" alt="Sabor360 Logo" class="w-8 h-8 object-contain">
                <span class="text-white font-bold text-lg">SABOR360</span>
            </div>
            <div class="hidden md:flex items-center space-x-6 text-sm">
                <a href="#" class="text-white hover:text-gray-300 transition-colors" data-translate="HOME">INICIO</a>
                <a href="/menu-interactivo" class="text-white hover:text-gray-300 transition-colors" data-translate="MENU">MENÚ</a>
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
    <!-- Main Content -->
    <div class="min-h-screen flex">
        <!-- Left Side - Main Content -->
        <div class="flex-1 relative">
            <!-- Background Image -->
            <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('/images/background-texture.jpg');">
                <div class="absolute inset-0 bg-black bg-opacity-40"></div>
            </div>
            
            <!-- Background Image -->
            <div class="absolute inset-0 z-0">
                <img src="https://images.pexels.com/photos/262978/pexels-photo-262978.jpeg" alt="Sushi Plate" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>
            </div>
            
            <!-- Content -->
            <div class="relative z-10 flex items-center justify-center h-screen px-4 md:px-8">
                <div class="text-center">
                    <h1 class="text-6xl md:text-8xl lg:text-9xl xl:text-[12rem] font-light leading-none text-white" style="font-family: 'Lavishly Yours', cursive;">
                        <span class="block">SABOR</span>
                        <span class="block">360</span>
                    </h1>
                </div>
            </div>
            
            <!-- Social Media Icons -->
            <div class="absolute bottom-8 left-8 flex space-x-4">
                <a href="#" class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36" fill="url(#facebook__a)" height="40" width="40"><defs><linearGradient x1="50%" x2="50%" y1="97.078%" y2="0%" id="facebook__a"><stop offset="0%" stop-color="#0062E0"/><stop offset="100%" stop-color="#19AFFF"/></linearGradient></defs><path d="M15 35.8C6.5 34.3 0 26.9 0 18 0 8.1 8.1 0 18 0s18 8.1 18 18c0 8.9-6.5 16.3-15 17.8l-1-.8h-4l-1 .8z"/><path fill="#FFF" d="m25 23 .8-5H21v-3.5c0-1.4.5-2.5 2.7-2.5H26V7.4c-1.3-.2-2.7-.4-4-.4-4.1 0-7 2.5-7 7v4h-4.5v5H15v12.7c1 .2 2 .3 3 .3s2-.1 3-.3V23h4z"/></svg>
                </a>
                <a href="#" class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" width="1200" height="1227" fill="none" viewBox="0 0 1200 1227"><path fill="#fff" d="M714.163 519.284 1160.89 0h-105.86L667.137 450.887 357.328 0H0l468.492 681.821L0 1226.37h105.866l409.625-476.152 327.181 476.152H1200L714.137 519.284h.026ZM569.165 687.828l-47.468-67.894-377.686-540.24h162.604l304.797 435.991 47.468 67.894 396.2 566.721H892.476L569.165 687.854v-.026Z"/></svg>
                </a>
                <a href="#" class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition-all">
                    <svg viewBox="0 0 256 259" width="256" height="259" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid"><path d="m67.663 221.823 4.185 2.093c17.44 10.463 36.971 15.346 56.503 15.346 61.385 0 111.609-50.224 111.609-111.609 0-29.297-11.859-57.897-32.785-78.824-20.927-20.927-48.83-32.785-78.824-32.785-61.385 0-111.61 50.224-110.912 112.307 0 20.926 6.278 41.156 16.741 58.594l2.79 4.186-11.16 41.156 41.853-10.464Z" fill="#00E676"/><path d="M219.033 37.668C195.316 13.254 162.531 0 129.048 0 57.898 0 .698 57.897 1.395 128.35c0 22.322 6.278 43.947 16.742 63.478L0 258.096l67.663-17.439c18.834 10.464 39.76 15.347 60.688 15.347 70.453 0 127.653-57.898 127.653-128.35 0-34.181-13.254-66.269-36.97-89.986ZM129.048 234.38c-18.834 0-37.668-4.882-53.712-14.648l-4.185-2.093-40.458 10.463 10.463-39.76-2.79-4.186C7.673 134.63 22.322 69.058 72.546 38.365c50.224-30.692 115.097-16.043 145.79 34.181 30.692 50.224 16.043 115.097-34.18 145.79-16.045 10.463-35.576 16.043-844.108 16.043Zm61.385-77.428-7.673-3.488s-11.16-4.883-18.136-8.371c-.698 0-1.395-.698-2.093-.698-2.093 0-3.488.698-4.883 1.396 0 0-.697.697-10.463 11.858-.698 1.395-2.093 2.093-3.488 2.093h-.698c-.697 0-2.092-.698-2.79-1.395l-3.488-1.395c-7.673-3.488-14.648-7.674-20.229-13.254-1.395-1.395-3.488-2.79-4.883-4.185-4.883-4.883-9.766-10.464-13.253-16.742l-.698-1.395c-.697-.698-.697-1.395-1.395-2.79 0-1.395 0-2.79.698-3.488 0 0 2.79-3.488 4.882-5.58 1.396-1.396 2.093-3.488 3.488-4.883 1.395-2.093 2.093-4.883 1.395-6.976-.697-3.488-9.068-22.322-11.16-26.507-1.396-2.093-2.79-2.79-4.883-3.488H83.01c-1.396 0-2.79.698-4.186.698l-.698.697c-1.395.698-2.79 2.093-4.185 2.79-1.395 1.396-2.093 2.79-3.488 4.186-4.883 6.278-7.673 13.951-7.673 21.624 0 5.58 1.395 11.161 3.488 16.044l.698 2.093c6.278 13.253 14.648 25.112 25.81 35.575l2.79 2.79c2.092 2.093 4.185 3.488 5.58 5.58 14.649 12.8447 31.39 21.625 50.224 26.508 2.093.697 4.883.697 6.976 1.395h6.975c3.488 0 7.673-1.395 10.464-2.79 2.092-1.395 3.487-1.395 4.882-2.79l1.396-1.396c1.395-1.395 2.79-2.092 4.185-3.487 1.395-1.395 2.79-2.79 3.488-4.186 1.395-2.79 2.092-6.278 2.79-9.765v-4.883s-.698-.698-2.093-1.395Z" fill="#FFF"/></svg>
                </a>
            </div>
        </div>

        <!-- Right Side - Image Gallery -->
        <div class="w-80 lg:w-96 bg-black bg-opacity-50 flex flex-col">
            <!-- Menu Button -->
            <div class="p-6 flex justify-end">
                <a href="/menu-interactivo" class="border-2 border-yellow-400 text-yellow-400 px-4 py-2 rounded text-sm hover:bg-yellow-400 hover:text-black transition-all inline-block" data-translate="MENU →">
                    MENU →
                </a>
            </div>
            
            <!-- Image Grid -->
            <div class="flex-1 p-6 space-y-4">
            <div class="relative overflow-hidden rounded-lg">
                    <img src="https://images.pexels.com/photos/3338537/pexels-photo-3338537.jpeg" alt="Menu" class="w-full h-48 object-cover object-center hover:scale-105 transition-transform duration-300">
                    <div class="absolute bottom-4 right-4 bg-black bg-opacity-70 text-white px-4 py-2 rounded-full">
                        <span class="text-sm font-medium tracking-wider uppercase">MENÚ</span>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-lg">
                    <img src="https://images.pexels.com/photos/6278522/pexels-photo-6278522.jpeg" alt="Restaurant ambiance" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                    <div class="absolute bottom-4 right-4 bg-black bg-opacity-70 text-white px-4 py-2 rounded-full">
                        <span class="text-sm font-medium tracking-wider uppercase">AMBIENTE</span>
                    </div>
                </div>
                
                <div class="relative overflow-hidden rounded-lg">
                    <img src="https://images.pexels.com/photos/260922/pexels-photo-260922.jpeg" alt="Nuestro lugar" class="w-full h-48 object-cover hover:scale-105 transition-transform duration-300">
                    <div class="absolute bottom-4 right-4 bg-black bg-opacity-70 text-white px-4 py-2 rounded-full">
                        <span class="text-sm font-medium tracking-wider uppercase">NUESTRO LUGAR</span>
                    </div>
                </div>
            </div>
            
            <!-- Reservation Button -->
            <div class="p-6">
                <a href="{{ route('reservations.create') }}" class="w-full border-2 border-yellow-400 text-yellow-400 py-3 rounded text-sm hover:bg-yellow-400 hover:text-black transition-all block text-center" data-translate="RESERVACION →">
                    RESERVACION →
                </a>
            </div>
        </div>
    </div>

    <!-- Why We Are Best Food Maker Section -->
    <section class="bg-black py-20 px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Section Title -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-light text-white mb-6" data-translate="Por qué somos los mejores creadores de comida">
                    Por qué somos los mejores creadores de comida
                </h2>
                <p class="text-gray-300 text-lg max-w-3xl mx-auto" data-translate="Lorem Ipsum es simplemente texto ficticio de la industria de impresión y composición tipográfica. Lorem lo mezcló para hacer un libro de muestras tipográficas.">
                    Lorem Ipsum es simplemente texto ficticio de la industria de impresión y composición tipográfica. Lorem lo mezcló para hacer un libro de muestras tipográficas.
                </p>
            </div>

            <!-- Content Grid -->
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="text-gray-300 leading-relaxed">
                    <p class="mb-6">
                        Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página cuando mire su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de letras, en lugar de usar inglés. Muchos paquetes de autoedición de escritorio y editores de páginas web ahora usan Lorem Ipsum como su texto modelo predeterminado, y una búsqueda de 'lorem ipsum' descubrirá muchos sitios web aún en su infancia.
                    </p>
                    <p class="mb-6">
                        Varias versiones han evolucionado a lo largo de los años, a veces por accidente, a veces a propósito. Es un hecho establecido desde hace mucho tiempo que un lector se distraerá con el contenido legible de una página cuando mire su diseño. La distribución normal de letras, en lugar de usar 'Contenido aquí, contenido aquí'. Muchos paquetes de autoedición de escritorio y editores de páginas web buscan 'lorem ipsum' descubrirán muchos sitios web aún en humor y similares.
                    </p>
                    
                    <!-- Read More Button -->
                    <div class="mt-8">
                        <a href="/sobre-nosotros" class="inline-flex items-center border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black px-6 py-3 rounded-lg font-medium transition-all duration-300 group">
                            <span data-translate="Leer más">Leer más</span>
                            <svg class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Image with Play Button -->
                <div class="relative">
                    <div class="relative overflow-hidden rounded-lg shadow-2xl">
                        <!-- Chef cooking video -->
                        <div class="w-full h-96 bg-gray-800 flex items-center justify-center">
                            <video 
                                class="w-full h-full object-cover"
                                muted
                                autoplay
                            >
                                <source src="presentation.mp4" type="video/mp4">
                                <p class="text-white">Tu navegador no soporta el elemento de video.</p>
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Separator Image Section -->
    <section class="relative h-96 overflow-hidden">
        <div class="absolute inset-0 bg-cover bg-center bg-fixed" style="background-image: url('https://images.pexels.com/photos/5083915/pexels-photo-5083915.jpeg');">
            <div class="absolute inset-0 bg-black bg-opacity-60"></div>
        </div>
        <div class="relative z-10 flex items-center justify-center h-full">
            <div class="text-center text-white">
                <h3 class="text-3xl md:text-4xl font-light mb-4">Experiencia Culinaria Única</h3>
                <p class="text-lg text-gray-200 max-w-2xl mx-auto px-4">
                    Donde cada plato cuenta una historia y cada sabor despierta los sentidos
                </p>
            </div>
        </div>
    </section>

    <!-- Premium Features Stripe Section -->
    <section class="bg-black py-16 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="text-center group">
                    <div class="w-16 h-16 mx-auto mb-6 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center group-hover:bg-opacity-30 transition-all duration-300">
                        <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.7844 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3" data-translate="Ingredientes Premium">Ingredientes Premium</h3>
                    <p class="text-gray-300 text-sm leading-relaxed" data-translate="Seleccionamos cuidadosamente los mejores ingredientes frescos y de temporada para garantizar sabores excepcionales en cada plato.">
                        Seleccionamos cuidadosamente los mejores ingredientes frescos y de temporada para garantizar sabores excepcionales en cada plato.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="text-center group">
                    <div class="w-16 h-16 mx-auto mb-6 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center group-hover:bg-opacity-30 transition-all duration-300">
                        <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3" data-translate="Chefs Expertos">Chefs Expertos</h3>
                    <p class="text-gray-300 text-sm leading-relaxed" data-translate="Nuestro equipo de chefs profesionales cuenta con más de 15 años de experiencia en alta cocina internacional y técnicas culinarias innovadoras.">
                        Nuestro equipo de chefs profesionales cuenta con más de 15 años de experiencia en alta cocina internacional y técnicas culinarias innovadoras.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="text-center group">
                    <div class="w-16 h-16 mx-auto mb-6 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center group-hover:bg-opacity-30 transition-all duration-300">
                        <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3" data-translate="Ambiente Exclusivo">Ambiente Exclusivo</h3>
                    <p class="text-gray-300 text-sm leading-relaxed" data-translate="Disfruta de un ambiente sofisticado y acogedor, diseñado para crear momentos memorables con un servicio personalizado de primera clase.">
                        Disfruta de un ambiente sofisticado y acogedor, diseñado para crear momentos memorables con un servicio personalizado de primera clase.
                    </p>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="mt-16 pt-12 border-t border-gray-800">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div class="group">
                        <div class="text-3xl md:text-4xl font-light text-yellow-400 mb-2 group-hover:scale-110 transition-transform duration-300">25+</div>
                        <p class="text-gray-300 text-sm uppercase tracking-wider" data-translate="Años de Experiencia">Años de Experiencia</p>
                    </div>
                    <div class="group">
                        <div class="text-3xl md:text-4xl font-light text-yellow-400 mb-2 group-hover:scale-110 transition-transform duration-300">150+</div>
                        <p class="text-gray-300 text-sm uppercase tracking-wider" data-translate="Platos Únicos">Platos Únicos</p>
                    </div>
                    <div class="group">
                        <div class="text-3xl md:text-4xl font-light text-yellow-400 mb-2 group-hover:scale-110 transition-transform duration-300">50K+</div>
                        <p class="text-gray-300 text-sm uppercase tracking-wider" data-translate="Clientes Satisfechos">Clientes Satisfechos</p>
                    </div>
                    <div class="group">
                        <div class="text-3xl md:text-4xl font-light text-yellow-400 mb-2 group-hover:scale-110 transition-transform duration-300">5★</div>
                        <p class="text-gray-300 text-sm uppercase tracking-wider" data-translate="Calificación Promedio">Calificación Promedio</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Customer Testimonials Section -->
    <section class="bg-black py-20 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-light text-white mb-6" data-translate="Lo que dicen nuestros clientes">
                    Lo que dicen nuestros clientes
                </h2>
                <p class="text-gray-300 text-lg max-w-3xl mx-auto" data-translate="Miles de clientes satisfechos avalan nuestra excelencia culinaria y servicio excepcional">
                    Miles de clientes satisfechos avalan nuestra excelencia culinaria y servicio excepcional
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-gray-900 bg-opacity-50 p-8 rounded-lg border border-gray-800 hover:border-yellow-400 transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-6 italic">"Una experiencia culinaria excepcional. Cada plato es una obra de arte y el servicio es impecable. Sin duda, el mejor restaurante de la ciudad."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center text-black font-bold mr-4">
                            MR
                        </div>
                        <div>
                            <h4 class="text-white font-semibold">María Rodríguez</h4>
                            <p class="text-gray-400 text-sm">Cliente frecuente</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="bg-gray-900 bg-opacity-50 p-8 rounded-lg border border-gray-800 hover:border-yellow-400 transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-6 italic">"Celebramos nuestro aniversario aquí y fue perfecto. El ambiente, la comida y la atención al detalle superaron todas nuestras expectativas."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center text-black font-bold mr-4">
                            CL
                        </div>
                        <div>
                            <h4 class="text-white font-semibold">Carlos López</h4>
                            <p class="text-gray-400 text-sm">Ocasión especial</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="bg-gray-900 bg-opacity-50 p-8 rounded-lg border border-gray-800 hover:border-yellow-400 transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <div class="flex text-yellow-400">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                    <p class="text-gray-300 mb-6 italic">"Como chef profesional, puedo decir que la calidad y presentación de los platos es extraordinaria. Un lugar que respeta la gastronomía."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center text-black font-bold mr-4">
                            AS
                        </div>
                        <div>
                            <h4 class="text-white font-semibold">Ana Sánchez</h4>
                            <p class="text-gray-400 text-sm">Chef profesional</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Events & Promotions Section -->
    <section class="bg-black py-20 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-light text-white mb-6" data-translate="Eventos Especiales">
                    Eventos Especiales
                </h2>
                <p class="text-gray-300 text-lg max-w-3xl mx-auto" data-translate="Disfruta de nuestras noches temáticas y eventos exclusivos durante toda la semana">
                    Disfruta de nuestras noches temáticas y eventos exclusivos durante toda la semana
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Event 1 -->
                <div class="relative overflow-hidden rounded-lg group cursor-pointer">
                    <div class="h-64 relative">
                        <img src="https://images.pexels.com/photos/442540/pexels-photo-442540.jpeg" 
                             alt="Jazz Night" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                            <div class="text-center text-white">
                                <div class="text-4xl font-bold mb-2">VIERNES</div>
                                <div class="text-lg font-semibold">Noche de Jazz</div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-80 transition-all duration-300 flex items-center justify-center">
                        <div class="text-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-xl font-semibold mb-2">Jazz & Cena</h3>
                            <p class="text-sm mb-4">Música en vivo + Menú especial</p>
                            <div class="text-yellow-400 font-bold">8:00 PM - 11:00 PM</div>
                        </div>
                    </div>
                </div>

                <!-- Event 2 -->
                <div class="relative overflow-hidden rounded-lg group cursor-pointer">
                    <div class="h-64 relative">
                        <img src="https://images.unsplash.com/photo-1510812431401-41d2bd2722f3?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                             alt="Wine Tasting" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                            <div class="text-center text-white">
                                <div class="text-4xl font-bold mb-2">SÁBADO</div>
                                <div class="text-lg font-semibold">Noche de Vinos</div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-80 transition-all duration-300 flex items-center justify-center">
                        <div class="text-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-xl font-semibold mb-2">Cata de Vinos</h3>
                            <p class="text-sm mb-4">Selección premium + Maridaje</p>
                            <div class="text-yellow-400 font-bold">7:00 PM - 10:00 PM</div>
                        </div>
                    </div>
                </div>

                <!-- Event 3 -->
                <div class="relative overflow-hidden rounded-lg group cursor-pointer">
                    <div class="h-64 relative">
                        <img src="https://images.unsplash.com/photo-18441218808-94e220e084d2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                             alt="Family Brunch" 
                             class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
                            <div class="text-center text-white">
                                <div class="text-4xl font-bold mb-2">DOMINGO</div>
                                <div class="text-lg font-semibold">Brunch Familiar</div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-80 transition-all duration-300 flex items-center justify-center">
                        <div class="text-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <h3 class="text-xl font-semibold mb-2">Brunch Especial</h3>
                            <p class="text-sm mb-4">Buffet + Actividades para niños</p>
                            <div class="text-yellow-400 font-bold">11:00 AM - 3:00 PM</div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- Featured Dishes Section -->
    <section class="bg-black py-20 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-light text-white mb-6" data-translate="Platos Destacados">
                    Platos Destacados
                </h2>
                <p class="text-gray-300 text-lg max-w-3xl mx-auto" data-translate="Descubre nuestras creaciones más populares, cuidadosamente elaboradas por nuestros chefs expertos">
                    Descubre nuestras creaciones más populares, cuidadosamente elaboradas por nuestros chefs expertos
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Dish 1 -->
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-lg mb-4">
                        <img src="https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg" alt="Salmón a la parrilla" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300"></div>
                        <div class="absolute top-4 right-4 bg-yellow-400 text-black px-3 py-1 rounded-full text-sm font-semibold">
                            Chef's Choice
                        </div>
                        <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <button class="border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black px-4 py-2 rounded-lg transition-all">
                                Ver Detalles
                            </button>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Salmón a la Parrilla</h3>
                    <p class="text-gray-300 text-sm mb-3">Con vegetales de temporada y salsa de limón</p>
                    <div class="flex items-center justify-between">
                        <span class="text-yellow-400 font-bold text-lg">$450</span>
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Dish 2 -->
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-lg mb-4">
                        <img src="https://images.pexels.com/photos/1639562/pexels-photo-1639562.jpeg" alt="Risotto de mariscos" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300"></div>
                        <div class="absolute top-4 right-4 bg-red-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Popular
                        </div>
                        <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <button class="border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black px-4 py-2 rounded-lg transition-all">
                                Ver Detalles
                            </button>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Risotto de Mariscos</h3>
                    <p class="text-gray-300 text-sm mb-3">Arroz cremoso con camarones y pulpo fresco</p>
                    <div class="flex items-center justify-between">
                        <span class="text-yellow-400 font-bold text-lg">$380</span>
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Dish 3 -->
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-lg mb-4">
                        <img src="https://images.pexels.com/photos/1640772/pexels-photo-1640772.jpeg" alt="Filete Wellington" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300"></div>
                        <div class="absolute top-4 right-4 bg-purple-600 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Premium
                        </div>
                        <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <button class="border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black px-4 py-2 rounded-lg transition-all">
                                Ver Detalles
                            </button>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Filete Wellington</h3>
                    <p class="text-gray-300 text-sm mb-3">Carne premium envuelta en hojaldre dorado</p>
                    <div class="flex items-center justify-between">
                        <span class="text-yellow-400 font-bold text-lg">$650</span>
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Dish 4 -->
                <div class="group cursor-pointer">
                    <div class="relative overflow-hidden rounded-lg mb-4">
                        <img src="https://images.pexels.com/photos/1099680/pexels-photo-1099680.jpeg" alt="Postre de chocolate" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-40 transition-all duration-300"></div>
                        <div class="absolute top-4 right-4 bg-pink-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                            Dulce
                        </div>
                        <div class="absolute bottom-4 left-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <button class="border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black px-4 py-2 rounded-lg transition-all">
                                Ver Detalles
                            </button>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Volcán de Chocolate</h3>
                    <p class="text-gray-300 text-sm mb-3">Postre tibio con centro líquido y helado</p>
                    <div class="flex items-center justify-between">
                        <span class="text-yellow-400 font-bold text-lg">$180</span>
                        <div class="flex text-yellow-400">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.7844 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View Full Menu Button -->
            <div class="text-center mt-12">
                <a href="/menu-interactivo" class="inline-flex items-center border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 group">
                    <span data-translate="Ver Menú Completo">Ver Menú Completo</span>
                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="bg-black py-20 px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-light text-white mb-6">
                ¿Listo para una experiencia inolvidable?
            </h2>
            <p class="text-gray-300 text-lg mb-8">
                Reserva tu mesa ahora y descubre por qué somos el restaurante más reconocido de la ciudad
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('reservations.create') }}" class="border-2 border-yellow-400 text-yellow-400 px-8 py-4 rounded-lg font-medium hover:bg-yellow-400 hover:text-black transition-all duration-300 transform hover:scale-105" data-translate="Reservar Mesa">
                    Reservar Mesa
                </a>
                <a href="#" class="border-2 border-yellow-400 text-yellow-400 px-8 py-4 rounded-lg font-medium hover:bg-yellow-400 hover:text-black transition-all duration-300">
                    <span data-translate="Ver Menú Completo">Ver Menú Completo</span>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white py-16 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-8 mb-12">
                <!-- Logo and Description -->
                <div class="md:col-span-2">
                    <div class="flex items-center space-x-2 mb-6">
                        <img src="/images/sabor360.png" alt="Sabor360 Logo" class="w-10 h-10 object-contain">
                        <span class="text-white font-bold text-2xl">Sabor360</span>
                    </div>
                    <p class="text-gray-300 mb-6 max-w-md">
                        Desde 1995, Sabor360 ha sido el destino culinario preferido, 
                        ofreciendo una experiencia gastronómica única que combina tradición e innovación.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-yellow-400 hover:text-black transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.8447c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.8445-3.594-1.8445-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-yellow-400 hover:text-black transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-yellow-400 hover:text-black transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-yellow-400 hover:text-black transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-white font-semibold text-lg mb-4">Enlaces Rápidos</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-yellow-400 transition-colors">Inicio</a></li>
                        <li><a href="#menu" class="text-gray-300 hover:text-yellow-400 transition-colors">Menú</a></li>
                        <li><a href="/sobre-nosotros" class="text-gray-300 hover:text-yellow-400 transition-colors">Sobre Nosotros</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-yellow-400 transition-colors">Reservaciones</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-yellow-400 transition-colors">Eventos</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-yellow-400 transition-colors">Contacto</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-white font-semibold text-lg mb-4">Contacto</h3>
                    <div class="space-y-3">
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-yellow-400 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
Av. Gastronómica 456, Col. Sabores, Ciudad Culinaria
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <p class="text-gray-300">+52 (8445) 123-4567</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-yellow-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            <p class="text-gray-300">info@sabor360.com</p>
                        </div>
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-yellow-400 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="text-gray-300">
                                <p>Lun - Jue: 12:00 PM - 11:00 PM</p>
                                <p>Vie - Sáb: 12:00 PM - 12:00 AM</p>
                                <p>Dom: 12:00 PM - 10:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400 text-sm mb-4 md:mb-0">
                    © 2024 Sabor360. Todos los derechos reservados.
                </p>
                <div class="flex space-x-6 text-sm">
                    <a href="#" class="text-gray-400 hover:text-yellow-400 transition-colors">Política de Privacidad</a>
                    <a href="#" class="text-gray-400 hover:text-yellow-400 transition-colors">Términos de Servicio</a>
                    <a href="#" class="text-gray-400 hover:text-yellow-400 transition-colors">Cookies</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Toggle -->
    <button class="md:hidden fixed top-6 right-6 z-50 w-10 h-10 bg-black bg-opacity-80 rounded-lg flex items-center justify-center">
        <div class="w-5 h-5 flex flex-col justify-center space-y-1">
            <div class="w-full h-0.5 bg-white"></div>
            <div class="w-full h-0.5 bg-white"></div>
            <div class="w-full h-0.5 bg-white"></div>
        </div>
    </button>

    <script>
        // Menu category functionality
        document.addEventListener('DOMContentLoaded', function() {
            const categoryButtons = document.querySelectorAll('.menu-category');
            const categoryContents = document.querySelectorAll('.menu-category-content');

            categoryButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetCategory = this.getAttribute('data-category');

                    // Remove active class from all buttons
                    categoryButtons.forEach(btn => {
                        btn.classList.remove('active', 'bg-yellow-400', 'text-black');
                        btn.classList.add('border', 'border-gray-600', 'text-white');
                    });

                    // Add active class to clicked button
                    this.classList.add('active', 'bg-yellow-400', 'text-black');
                    this.classList.remove('border', 'border-gray-600', 'text-white');

                    // Hide all category contents
                    categoryContents.forEach(content => {
                        content.classList.remove('active');
                        content.classList.add('hidden');
                    });

                    // Show target category content
                    const targetContent = document.querySelector(`[data-category="${targetCategory}"].menu-category-content`);
                    if (targetContent) {
                        targetContent.classList.add('active');
                        targetContent.classList.remove('hidden');
                    }
                });
            });
        });
    </script>
</body>
</html>