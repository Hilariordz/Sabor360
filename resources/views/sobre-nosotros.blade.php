<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nosotros - Sabor360</title>
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

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2000&q=80" 
                 alt="Restaurant Interior" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-70"></div>
        </div>
        
        <!-- Content -->
        <div class="relative z-10 text-center px-8 max-w-4xl mx-auto">
            <h1 class="text-6xl md:text-8xl lg:text-9xl font-light leading-none text-white mb-8" style="font-family: 'Lavishly Yours', cursive;">
                Sobre Nosotros
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 font-light italic max-w-3xl mx-auto leading-relaxed">
                "La cocina es un acto de amor, donde cada ingrediente cuenta una historia y cada plato despierta emociones"
            </p>
            <div class="mt-8 text-yellow-400 text-lg">
                — Chef Eduardo Martínez, Fundador
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="bg-black py-20 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left Content -->
                <div class="space-y-8">
                    <h2 class="text-4xl md:text-5xl font-light text-white mb-6">
                        Nuestra Historia
                    </h2>
                    <div class="space-y-6 text-gray-300 leading-relaxed text-lg">
                        <p>
                            En 1995, el Chef Eduardo Martínez tenía un sueño: crear un espacio donde la gastronomía fuera más que comida, fuera una experiencia que tocara el alma. Con apenas 25 años y una pasión desbordante por la cocina, abrió las puertas de Sabor360 en el corazón de la ciudad.
                        </p>
                        <p>
                            Lo que comenzó como un pequeño restaurante familiar se ha convertido en un referente culinario, reconocido por su innovación, calidad excepcional y el cuidado meticuloso en cada detalle. Cada plato que sale de nuestra cocina lleva consigo 30 años de tradición, perfeccionamiento y amor por el arte culinario.
                        </p>
                        <p>
                            Hoy, Sabor360 no es solo un restaurante, es un legado que continúa evolucionando, manteniendo siempre nuestros valores fundamentales: ingredientes de la más alta calidad, técnicas culinarias excepcionales y un servicio que hace sentir a cada huésped como parte de nuestra familia.
                        </p>
                    </div>
                </div>
                
                <!-- Right Image -->
                <div class="relative">
                    <div class="aspect-[4/3] rounded-lg overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1578474846511-04ba529f0b88?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                             alt="Chef Eduardo Martínez" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-yellow-400 text-black p-6 rounded-lg shadow-xl">
                        <div class="text-center">
                            <div class="text-3xl font-bold">30+</div>
                            <div class="text-sm font-medium">Años de Experiencia</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Founder Section -->
    <section class="bg-black py-20 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left Image -->
                <div class="relative">
                    <div class="aspect-[4/3] rounded-lg overflow-hidden shadow-2xl">
                        <img src="https://plus.unsplash.com/premium_photo-1682097307514-d0858ba71931?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                             alt="Chef Eduardo Martínez en la cocina" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -left-6 bg-yellow-400 text-black p-6 rounded-lg shadow-xl">
                        <div class="text-center">
                            <div class="text-2xl font-bold">Chef del Año</div>
                            <div class="text-sm font-medium">2025</div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Content -->
                <div class="space-y-8">
                    <h2 class="text-4xl md:text-5xl font-light text-white mb-6">
                        El Fundador
                    </h2>
                    <div class="space-y-6 text-gray-300 leading-relaxed text-lg">
                        <p>
                            <strong class="text-yellow-400">Chef Eduardo Martínez</strong> nació en una familia donde la cocina era el corazón del hogar. Desde pequeño, observaba a su abuela preparar comidas tradicionales con ingredientes frescos del mercado local, despertando en él una pasión que definiría su vida.
                        </p>
                        <p>
                            Tras estudiar en el prestigioso Instituto Culinario de París y trabajar en restaurantes Michelin en Europa, Eduardo regresó a su país con una visión clara: fusionar las técnicas clásicas europeas con los sabores auténticos de su tierra natal.
                        </p>
                        <p class="italic text-yellow-400 text-xl border-l-4 border-yellow-400 pl-6">
                            "Mi filosofía es simple: cocinar con el corazón, respetar los ingredientes y crear momentos que perduren en la memoria de nuestros huéspedes."
                        </p>
                    </div>
                    
                    <!-- Achievements -->
                    <div class="grid grid-cols-2 gap-6 mt-8">
                        <div class="text-center p-4 bg-gray-900 bg-opacity-50 rounded-lg">
                            <div class="text-2xl font-bold text-yellow-400">15+</div>
                            <div class="text-sm text-gray-300">Premios Internacionales</div>
                        </div>
                        <div class="text-center p-4 bg-gray-900 bg-opacity-50 rounded-lg">
                            <div class="text-2xl font-bold text-yellow-400">3</div>
                            <div class="text-sm text-gray-300">Libros de Cocina</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="bg-black py-20 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-light text-white mb-6">
                    Nuestros Valores
                </h2>
                <p class="text-gray-300 text-lg max-w-3xl mx-auto">
                    Los principios que guían cada decisión y cada plato que servimos
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="text-center group">
                    <div class="w-20 h-20 mx-auto mb-6 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center group-hover:bg-opacity-30 transition-all duration-300">
                        <svg class="w-10 h-10 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Pasión</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Cada plato es preparado con amor y dedicación, transmitiendo nuestra pasión por la gastronomía en cada bocado.
                    </p>
                </div>

                <!-- Value 2 -->
                <div class="text-center group">
                    <div class="w-20 h-20 mx-auto mb-6 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center group-hover:bg-opacity-30 transition-all duration-300">
                        <svg class="w-10 h-10 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.7844 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Excelencia</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Buscamos la perfección en cada detalle, desde la selección de ingredientes hasta la presentación final.
                    </p>
                </div>

                <!-- Value 3 -->
                <div class="text-center group">
                    <div class="w-20 h-20 mx-auto mb-6 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center group-hover:bg-opacity-30 transition-all duration-300">
                        <svg class="w-10 h-10 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-4">Comunidad</h3>
                    <p class="text-gray-300 leading-relaxed">
                        Creemos en crear conexiones auténticas con nuestros huéspedes y ser parte integral de nuestra comunidad.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Awards Section -->
    <section class="bg-black py-20 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-light text-white mb-6">
                    Reconocimientos
                </h2>
                <p class="text-gray-300 text-lg max-w-3xl mx-auto">
                    Orgullosos de los reconocimientos que avalan nuestra dedicación y excelencia
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Award 1 -->
                <div class="text-center space-y-4 bg-gray-900 bg-opacity-50 p-8 rounded-lg border border-gray-800 hover:border-yellow-400 transition-all duration-300">
                    <div class="flex justify-center mb-4">
                        <div class="flex space-x-1">
                            <span class="text-yellow-400 text-xl">★</span>
                            <span class="text-yellow-400 text-xl">★</span>
                            <span class="text-yellow-400 text-xl">★</span>
                            <span class="text-yellow-400 text-xl">★</span>
                            <span class="text-yellow-400 text-xl">★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-light tracking-wider text-white">TRIPADVISOR</h3>
                    <p class="text-sm text-gray-400 tracking-widest uppercase">
                        Mejor Restaurante<br>
                        Ciudad Culinaria 2025
                    </p>
                </div>

                <!-- Award 2 -->
                <div class="text-center space-y-4 bg-gray-900 bg-opacity-50 p-8 rounded-lg border border-gray-800 hover:border-yellow-400 transition-all duration-300">
                    <div class="flex justify-center mb-4">
                        <div class="flex space-x-1">
                            <span class="text-yellow-400 text-xl">★</span>
                            <span class="text-yellow-400 text-xl">★</span>
                            <span class="text-yellow-400 text-xl">★</span>
                            <span class="text-yellow-400 text-xl">★</span>
                            <span class="text-yellow-400 text-xl">★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-light tracking-wider text-white">GUÍA GASTRONÓMICA</h3>
                    <p class="text-sm text-gray-400 tracking-widest uppercase">
                        Excelencia Culinaria<br>
                        Nacional 2022-2024
                    </p>
                </div>

                <!-- Award 3 -->
                <div class="text-center space-y-4 bg-gray-900 bg-opacity-50 p-8 rounded-lg border border-gray-800 hover:border-yellow-400 transition-all duration-300">
                    <div class="flex justify-center mb-4">
                        <div class="flex space-x-1">
                            <span class="text-yellow-400 text-xl">★</span>
                            <span class="text-yellow-400 text-xl">★</span>
                            <span class="text-yellow-400 text-xl">★</span>
                            <span class="text-yellow-400 text-xl">★</span>
                            <span class="text-yellow-400 text-xl">★</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-light tracking-wider text-white">FOOD & WINE</h3>
                    <p class="text-sm text-gray-400 tracking-widest uppercase">
                        Chef del Año<br>
                        Eduardo Martínez 2025
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="bg-black py-20 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-light text-white mb-6">
                    Nuestro Equipo
                </h2>
                <p class="text-gray-300 text-lg max-w-3xl mx-auto">
                    Profesionales apasionados que hacen posible la magia de Sabor360
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Team Member 1 -->
                <div class="text-center group">
                    <div class="relative mb-6">
                        <div class="w-48 h-48 mx-auto rounded-full overflow-hidden">
                            <img src="https://plus.unsplash.com/premium_photo-1682097307514-d0858ba71931?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                                 alt="Chef Eduardo Martínez" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Eduardo Martínez</h3>
                    <p class="text-yellow-400 mb-3">Chef Ejecutivo & Fundador</p>
                    <p class="text-gray-300 text-sm">30 años de experiencia en alta cocina internacional</p>
                </div>

                <!-- Team Member 2 -->
                <div class="text-center group">
                    <div class="relative mb-6">
                        <div class="w-48 h-48 mx-auto rounded-full overflow-hidden">
                            <img src="https://plus.unsplash.com/premium_photo-1661778091956-15dbe6e47442?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                                 alt="Chef María González" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">María González</h3>
                    <p class="text-yellow-400 mb-3">Sous Chef</p>
                    <p class="text-gray-300 text-sm">Especialista en repostería y técnicas moleculares</p>
                </div>

                <!-- Team Member 3 -->
                <div class="text-center group">
                    <div class="relative mb-6">
                        <div class="w-48 h-48 mx-auto rounded-full overflow-hidden">
                            <img src="https://plus.unsplash.com/premium_photo-1661778029158-e1a758c26bf7?q=80&w=687&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                                 alt="Sommelier Carlos Ruiz" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-2">Carlos Ruiz</h3>
                    <p class="text-yellow-400 mb-3">Sommelier Principal</p>
                    <p class="text-gray-300 text-sm">Experto en maridajes y vinos de autor</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="bg-black py-20 px-8">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-light text-white mb-6">
                Vive la Experiencia Sabor360
            </h2>
            <p class="text-gray-300 text-lg mb-8">
                Te invitamos a ser parte de nuestra historia y crear momentos inolvidables
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('reservations.create') }}" class="border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black px-8 py-4 rounded-lg font-medium transition-all duration-300 transform hover:scale-105">
                    Reservar Mesa
                </a>
                <a href="/menu-interactivo" class="border-2 border-gray-600 text-gray-300 hover:border-yellow-400 hover:text-yellow-400 px-8 py-4 rounded-lg font-medium transition-all duration-300">
                    Ver Menú
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
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-yellow-400 hover:text-black transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-white font-semibold text-lg mb-4">Enlaces Rápidos</h3>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-300 hover:text-yellow-400 transition-colors">Inicio</a></li>
                        <li><a href="/menu-interactivo" class="text-gray-300 hover:text-yellow-400 transition-colors">Menú</a></li>
                        <li><a href="/sobre-nosotros" class="text-gray-300 hover:text-yellow-400 transition-colors">Sobre Nosotros</a></li>
                        <li><a href="{{ route('reservations.create') }}" class="text-gray-300 hover:text-yellow-400 transition-colors">Reservaciones</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-white font-semibold text-lg mb-4">Contacto</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li>Av. Gastronómica 456</li>
                        <li>Ciudad Culinaria</li>
                        <li>+52 (8445) 123-4567</li>
                        <li>info@sabor360.com</li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Bar -->
            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-400">
                    © 2025 Sabor360. Todos los derechos reservados. | Creado con pasión por la gastronomía
                </p>
            </div>
        </div>
    </footer>
</body>
