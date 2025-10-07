<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Sabor360</title>
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
                <a href="/" class="text-white hover:text-gray-300 transition-colors">INICIO</a>
                <a href="/menu-interactivo" class="text-white hover:text-gray-300 transition-colors">MENÚ</a>
                <a href="/sobre-nosotros" class="text-white hover:text-gray-300 transition-colors">SOBRE NOSOTROS</a>
                <a href="/contacto" class="text-yellow-400 hover:text-yellow-300 transition-colors">CONTACTO</a>
                
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
            <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2000&q=80" 
                 alt="Restaurant Contact" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black bg-opacity-70"></div>
        </div>
        
        <!-- Content -->
        <div class="relative z-10 text-center px-8 max-w-4xl mx-auto">
            <h1 class="text-6xl md:text-8xl lg:text-9xl font-light leading-none text-white mb-8" style="font-family: 'Lavishly Yours', cursive;">
                Contacto
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 font-light max-w-3xl mx-auto leading-relaxed">
                Estamos aquí para hacer de tu experiencia algo extraordinario. Contáctanos y permítenos ser parte de tus momentos especiales.
            </p>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="bg-black py-20 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-3 gap-12">
                <!-- Contact Info Cards -->
                <div class="lg:col-span-1 space-y-8">
                    <!-- Phone -->
                    <div class="bg-gray-900 bg-opacity-50 p-8 rounded-lg border border-gray-800 hover:border-yellow-400 transition-all duration-300 group">
                        <div class="w-16 h-16 mx-auto mb-6 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center group-hover:bg-opacity-30 transition-all duration-300">
                            <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-4 text-center">Teléfono</h3>
                        <div class="text-center space-y-2">
                            <p class="text-gray-300">Reservaciones:</p>
                            <p class="text-yellow-400 font-semibold text-lg">+52 (8445) 123-4567</p>
                            <p class="text-gray-300 text-sm">Lun - Dom: 10:00 AM - 11:00 PM</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="bg-gray-900 bg-opacity-50 p-8 rounded-lg border border-gray-800 hover:border-yellow-400 transition-all duration-300 group">
                        <div class="w-16 h-16 mx-auto mb-6 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center group-hover:bg-opacity-30 transition-all duration-300">
                            <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-4 text-center">Email</h3>
                        <div class="text-center space-y-2">
                            <p class="text-gray-300">Información general:</p>
                            <p class="text-yellow-400 font-semibold">info@sabor360.com</p>
                            <p class="text-gray-300">Reservaciones:</p>
                            <p class="text-yellow-400 font-semibold">reservas@sabor360.com</p>
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="bg-gray-900 bg-opacity-50 p-8 rounded-lg border border-gray-800 hover:border-yellow-400 transition-all duration-300 group">
                        <div class="w-16 h-16 mx-auto mb-6 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center group-hover:bg-opacity-30 transition-all duration-300">
                            <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-4 text-center">Ubicación</h3>
                        <div class="text-center space-y-2">
                            <p class="text-yellow-400 font-semibold">Av. Gastronómica 456</p>
                            <p class="text-gray-300">Colonia Sabores</p>
                            <p class="text-gray-300">Ciudad Culinaria, 12345</p>
                            <p class="text-gray-300 text-sm mt-4">Estacionamiento disponible</p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="lg:col-span-2">
                    <div class="bg-gray-900 bg-opacity-50 rounded-lg p-8 border border-gray-800">
                        <h2 class="text-3xl font-light text-white mb-8 text-center">Envíanos un Mensaje</h2>
                        
                        <form class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <!-- Name -->
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-300 mb-2">
                                        Nombre Completo *
                                    </label>
                                    <input type="text" 
                                           id="name" 
                                           name="name" 
                                           required
                                           class="w-full px-4 py-3 bg-black border-2 border-gray-700 rounded-lg text-white focus:border-yellow-400 focus:outline-none transition-colors">
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-300 mb-2">
                                        Correo Electrónico *
                                    </label>
                                    <input type="email" 
                                           id="email" 
                                           name="email" 
                                           required
                                           class="w-full px-4 py-3 bg-black border-2 border-gray-700 rounded-lg text-white focus:border-yellow-400 focus:outline-none transition-colors">
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <!-- Phone -->
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-300 mb-2">
                                        Teléfono
                                    </label>
                                    <input type="tel" 
                                           id="phone" 
                                           name="phone"
                                           class="w-full px-4 py-3 bg-black border-2 border-gray-700 rounded-lg text-white focus:border-yellow-400 focus:outline-none transition-colors">
                                </div>

                                <!-- Subject -->
                                <div>
                                    <label for="subject" class="block text-sm font-medium text-gray-300 mb-2">
                                        Asunto *
                                    </label>
                                    <select id="subject" 
                                            name="subject" 
                                            required
                                            class="w-full px-4 py-3 bg-black border-2 border-gray-700 rounded-lg text-white focus:border-yellow-400 focus:outline-none transition-colors">
                                        <option value="">Seleccione un asunto...</option>
                                        <option value="reservacion">Reservación</option>
                                        <option value="evento">Eventos Privados</option>
                                        <option value="catering">Catering</option>
                                        <option value="trabajo">Oportunidades de Trabajo</option>
                                        <option value="sugerencia">Sugerencias</option>
                                        <option value="otro">Otro</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Message -->
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-300 mb-2">
                                    Mensaje *
                                </label>
                                <textarea id="message" 
                                          name="message" 
                                          rows="6"
                                          required
                                          placeholder="Cuéntanos cómo podemos ayudarte..."
                                          class="w-full px-4 py-3 bg-black border-2 border-gray-700 rounded-lg text-white focus:border-yellow-400 focus:outline-none transition-colors resize-none"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center pt-6">
                                <button type="submit" 
                                        class="inline-flex items-center border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 group">
                                    <span>Enviar Mensaje</span>
                                    <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hours Section -->
    <section class="bg-black py-20 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-light text-white mb-6">
                    Horarios de Atención
                </h2>
                <p class="text-gray-300 text-lg max-w-3xl mx-auto">
                    Estamos aquí para servirte en los siguientes horarios
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 max-w-4xl mx-auto">
                <!-- Restaurant Hours -->
                <div class="bg-gray-900 bg-opacity-50 p-8 rounded-lg border border-gray-800">
                    <h3 class="text-2xl font-semibold text-yellow-400 mb-6 text-center">Restaurante</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-2 border-b border-gray-700">
                            <span class="text-gray-300">Lunes - Jueves</span>
                            <span class="text-white font-medium">12:00 PM - 10:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-gray-700">
                            <span class="text-gray-300">Viernes - Sábado</span>
                            <span class="text-white font-medium">12:00 PM - 11:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-gray-700">
                            <span class="text-gray-300">Domingo</span>
                            <span class="text-white font-medium">12:00 PM - 9:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-gray-300">Cocina cierra</span>
                            <span class="text-yellow-400 font-medium">30 min antes</span>
                        </div>
                    </div>
                </div>

                <!-- Reservations Hours -->
                <div class="bg-gray-900 bg-opacity-50 p-8 rounded-lg border border-gray-800">
                    <h3 class="text-2xl font-semibold text-yellow-400 mb-6 text-center">Reservaciones</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-2 border-b border-gray-700">
                            <span class="text-gray-300">Lunes - Domingo</span>
                            <span class="text-white font-medium">10:00 AM - 11:00 PM</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-gray-700">
                            <span class="text-gray-300">Teléfono</span>
                            <span class="text-white font-medium">+52 (8445) 123-4567</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-gray-700">
                            <span class="text-gray-300">En línea</span>
                            <span class="text-white font-medium">24/7 disponible</span>
                        </div>
                        <div class="text-center pt-4">
                            <a href="{{ route('reservations.create') }}" class="inline-flex items-center border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black px-6 py-3 rounded-lg font-medium transition-all duration-300">
                                Reservar Ahora
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="bg-black py-20 px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-light text-white mb-6">
                    Cómo Llegar
                </h2>
                <p class="text-gray-300 text-lg max-w-3xl mx-auto">
                    Nos encontramos en el corazón de la Ciudad Culinaria, fácil acceso en transporte público y privado
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Map -->
                <div class="relative">
                    <div class="aspect-[4/3] rounded-lg overflow-hidden shadow-2xl">
                        <div class="w-full h-full bg-gradient-to-br from-gray-800 to-gray-900 rounded-lg flex items-center justify-center">
                            <div class="text-center text-gray-300">
                                <div class="w-16 h-16 bg-yellow-400 bg-opacity-20 rounded-full mx-auto mb-4 flex items-center justify-center">
                                    <svg class="w-8 h-8 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-white mb-2">Sabor360</h3>
                                <p class="text-gray-300">Av. Gastronómica 456</p>
                                <p class="text-gray-300">Col. Sabores, Ciudad Culinaria</p>
                                <p class="text-yellow-400 text-sm mt-4">Mapa Interactivo</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Directions -->
                <div class="space-y-8">
                    <h3 class="text-3xl font-light text-white mb-6">Indicaciones</h3>
                    
                    <!-- Metro -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-white mb-2">Metro</h4>
                            <p class="text-gray-300">Estación Sabor Central (Línea Dorada) - 5 minutos caminando</p>
                            <p class="text-gray-300">Estación Gourmet Plaza (Línea Verde) - 8 minutos caminando</p>
                        </div>
                    </div>

                    <!-- Car -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-white mb-2">Automóvil</h4>
                            <p class="text-gray-300">Estacionamiento propio disponible</p>
                            <p class="text-gray-300">Valet parking disponible fines de semana</p>
                        </div>
                    </div>

                    <!-- Taxi/Uber -->
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-white mb-2">Taxi / Uber</h4>
                            <p class="text-gray-300">Zona de fácil acceso para servicios de transporte</p>
                            <p class="text-gray-300">Dirección: Av. Gastronómica 456, Col. Sabores</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Section -->
    <section class="bg-black py-20 px-8">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-light text-white mb-6">
                Síguenos
            </h2>
            <p class="text-gray-300 text-lg mb-12 max-w-3xl mx-auto">
                Mantente al día con nuestras últimas creaciones, eventos especiales y promociones exclusivas
            </p>
            
            <div class="flex justify-center space-x-8 mb-12">
                <a href="#" class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center hover:bg-yellow-400 hover:text-black transition-all duration-300 transform hover:scale-110 group">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 4.8447c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.8445-3.594-1.8445-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                    </svg>
                </a>
                <a href="#" class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center hover:bg-yellow-400 hover:text-black transition-all duration-300 transform hover:scale-110 group">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
                <a href="#" class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center hover:bg-yellow-400 hover:text-black transition-all duration-300 transform hover:scale-110 group">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                    </svg>
                </a>
                <a href="#" class="w-16 h-16 bg-gray-800 rounded-full flex items-center justify-center hover:bg-yellow-400 hover:text-black transition-all duration-300 transform hover:scale-110 group">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.8444v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.4844v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.8445V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>
            </div>

            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div>
                    <h4 class="text-lg font-semibold text-yellow-400 mb-2">@sabor360mx</h4>
                    <p class="text-gray-300 text-sm">Síguenos en Instagram para ver nuestros platos del día</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-yellow-400 mb-2">Sabor360 Oficial</h4>
                    <p class="text-gray-300 text-sm">Dale like a nuestra página de Facebook</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold text-yellow-400 mb-2">#Sabor360Experience</h4>
                    <p class="text-gray-300 text-sm">Comparte tu experiencia con nuestro hashtag</p>
                </div>
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
</html>