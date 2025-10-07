<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservación Confirmada - Sabor360</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black text-white min-h-screen">
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

    <!-- Main Content -->
    <div class="pt-24 pb-16 px-8 flex items-center justify-center min-h-screen">
        <div class="max-w-2xl mx-auto text-center">
            <!-- Success Icon -->
            <div class="w-24 h-24 mx-auto mb-8 bg-green-500 bg-opacity-20 rounded-full flex items-center justify-center animate-pulse">
                <svg class="w-12 h-12 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>

            <!-- Success Message -->
            <h1 class="text-5xl md:text-6xl font-light mb-6 text-green-400" style="font-family: 'Lavishly Yours', cursive;">
                ¡Reservación Confirmada!
            </h1>
            
            <p class="text-gray-300 text-lg mb-8 max-w-lg mx-auto">
                Su reservación ha sido procesada exitosamente. Hemos enviado los detalles de confirmación a su correo electrónico.
            </p>

            <!-- Confirmation Details -->
            <div class="bg-gray-900 bg-opacity-50 rounded-lg p-8 border border-gray-800 mb-8">
                <h2 class="text-2xl font-semibold text-yellow-400 mb-6">Detalles de su Reservación</h2>
                
                @if(session('reservation'))
                    @php $reservation = session('reservation') @endphp
                    <div class="grid md:grid-cols-2 gap-6 text-left">
                        <div>
                            <p class="text-gray-400 text-sm mb-1">Nombre</p>
                            <p class="text-white font-medium">{{ $reservation->name }}</p>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm mb-1">Email</p>
                            <p class="text-white font-medium">{{ $reservation->email }}</p>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm mb-1">Fecha</p>
                            <p class="text-white font-medium">{{ $reservation->date->format('d/m/Y') }}</p>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm mb-1">Hora</p>
                            <p class="text-white font-medium">{{ $reservation->time->format('H:i') }}</p>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm mb-1">Personas</p>
                            <p class="text-white font-medium">{{ $reservation->guests }} {{ $reservation->guests == 1 ? 'persona' : 'personas' }}</p>
                        </div>
                        <div>
                            <p class="text-gray-400 text-sm mb-1">Estado</p>
                            <p class="text-yellow-400 font-medium">Pendiente de confirmación</p>
                        </div>
                    </div>
                    
                    @if($reservation->special_requests)
                        <div class="mt-6 pt-6 border-t border-gray-700">
                            <p class="text-gray-400 text-sm mb-2">Solicitudes Especiales</p>
                            <p class="text-white">{{ $reservation->special_requests }}</p>
                        </div>
                    @endif
                @endif
            </div>

            <!-- Next Steps -->
            <div class="bg-yellow-400 bg-opacity-10 border border-yellow-400 rounded-lg p-6 mb-8">
                <h3 class="text-yellow-400 font-semibold text-lg mb-3">Próximos Pasos</h3>
                <ul class="text-gray-300 text-sm space-y-2 text-left">
                    <li class="flex items-start">
                        <span class="text-yellow-400 mr-2">•</span>
                        Recibirá un email de confirmación con todos los detalles
                    </li>
                    <li class="flex items-start">
                        <span class="text-yellow-400 mr-2">•</span>
                        Nuestro equipo confirmará su reservación dentro de 2 horas
                    </li>
                    <li class="flex items-start">
                        <span class="text-yellow-400 mr-2">•</span>
                        Llegue 15 minutos antes de su hora reservada
                    </li>
                    <li class="flex items-start">
                        <span class="text-yellow-400 mr-2">•</span>
                        Para cambios, contacte al +52 (8445) 123-4567
                    </li>
                </ul>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/" class="border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black px-8 py-3 rounded-lg font-medium transition-all duration-300">
                    Volver al Inicio
                </a>
                <a href="/menu-interactivo" class="border-2 border-gray-600 text-gray-300 hover:border-yellow-400 hover:text-yellow-400 px-8 py-3 rounded-lg font-medium transition-all duration-300">
                    Ver Menú
                </a>
            </div>
        </div>
    </div>
</body>
</html>