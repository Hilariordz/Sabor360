<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú Interactivo - Sabor360</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lavishly+Yours&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .menu-category.active {
            background: linear-gradient(135deg, #f59e0b, #d97706);
            color: white;
        }
        .menu-item {
            transition: all 0.3s ease;
        }
        .menu-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(245, 158, 11, 0.2);
        }
        .cart-badge {
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
    </style>
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
                <a href="/menu-interactivo" class="text-yellow-400 hover:text-yellow-300 transition-colors">MENÚ</a>
                <a href="/sobre-nosotros" class="text-white hover:text-gray-300 transition-colors">SOBRE NOSOTROS</a>
                <a href="/contacto" class="text-white hover:text-gray-300 transition-colors">CONTACTO</a>
                
                <!-- Language Switcher -->
                <div class="flex items-center space-x-2 ml-4 border-l border-gray-600 pl-4">
                    <button class="lang-btn active px-2 py-1 text-xs rounded bg-yellow-400 text-black font-medium" data-lang="es">ES</button>
                    <button class="lang-btn px-2 py-1 text-xs rounded border border-gray-600 text-gray-300 hover:bg-gray-700" data-lang="en">EN</button>
                </div>
            </div>
        </div>
    </nav>

    <div class="flex min-h-screen pt-20">
        <!-- Sidebar de categorías -->
        <div class="w-80 bg-gray-800 p-6 shadow-2xl">
            <div class="mb-8">
                <div class="flex items-center space-x-3 mb-6">
                    <img src="/images/sabor360.png" alt="Sabor360" class="w-10 h-10">
                    <span class="text-xl font-bold">SABOR360</span>
                </div>
                <h2 class="text-2xl font-semibold text-yellow-400 mb-2">Menú</h2>
                <p class="text-gray-400 text-sm">Selecciona una categoría</p>
            </div>

            <!-- Categorías del menú -->
            <nav class="space-y-2">
                <button class="menu-category active w-full text-left p-4 rounded-lg flex items-center space-x-3 transition-all" data-category="wagyu">
                    <span class="text-2xl">🥩</span>
                    <span class="font-medium">Wagyu Premium</span>
                </button>
                
                <button class="menu-category w-full text-left p-4 rounded-lg flex items-center space-x-3 hover:bg-gray-700 transition-all" data-category="especiales">
                    <span class="text-2xl">⭐</span>
                    <span class="font-medium">Menú Especial</span>
                </button>
                
                <button class="menu-category w-full text-left p-4 rounded-lg flex items-center space-x-3 hover:bg-gray-700 transition-all" data-category="bbq">
                    <span class="text-2xl">🍖</span>
                    <span class="font-medium">BBQ Beef</span>
                </button>
                
                <button class="menu-category w-full text-left p-4 rounded-lg flex items-center space-x-3 hover:bg-gray-700 transition-all" data-category="family">
                    <span class="text-2xl">👨‍👩‍👧‍👦</span>
                    <span class="font-medium">Family SET</span>
                </button>
                
                <button class="menu-category w-full text-left p-4 rounded-lg flex items-center space-x-3 hover:bg-gray-700 transition-all" data-category="pollo">
                    <span class="text-2xl">🍗</span>
                    <span class="font-medium">Pollo & Cerdo</span>
                </button>
                
                <button class="menu-category w-full text-left p-4 rounded-lg flex items-center space-x-3 hover:bg-gray-700 transition-all" data-category="mariscos">
                    <span class="text-2xl">🦐</span>
                    <span class="font-medium">Mariscos</span>
                </button>
                
                <button class="menu-category w-full text-left p-4 rounded-lg flex items-center space-x-3 hover:bg-gray-700 transition-all" data-category="vegetales">
                    <span class="text-2xl">🥬</span>
                    <span class="font-medium">BBQ Vegetales</span>
                </button>
                
                <button class="menu-category w-full text-left p-4 rounded-lg flex items-center space-x-3 hover:bg-gray-700 transition-all" data-category="bebidas">
                    <span class="text-2xl">🍹</span>
                    <span class="font-medium">Bebidas</span>
                </button>
                
                <button class="menu-category w-full text-left p-4 rounded-lg flex items-center space-x-3 hover:bg-gray-700 transition-all" data-category="postres">
                    <span class="text-2xl">🍰</span>
                    <span class="font-medium">Postres</span>
                </button>
            </nav>

            <!-- Carrito de compras -->
            <div class="mt-8 p-4 bg-yellow-500 bg-opacity-20 rounded-lg">
                <div class="flex items-center justify-between mb-2">
                    <span class="font-medium">🛒 Mi Pedido</span>
                    <span class="cart-badge bg-yellow-500 text-black px-2 py-1 rounded-full text-xs font-bold" id="cart-count">0</span>
                </div>
                <p class="text-sm text-gray-300">Total: $<span id="cart-total">0</span></p>
                <button class="w-full mt-3 bg-yellow-500 text-black py-2 rounded-lg font-medium hover:bg-yellow-400 transition-all">
                    Ver Pedido
                </button>
            </div>
        </div>

        <!-- Contenido principal -->
        <div class="flex-1 p-8">
            <!-- Wagyu Premium (Categoría activa por defecto) -->
            <div class="menu-content active" data-category="wagyu">
                <div class="mb-8">
                    <h2 class="text-3xl font-bold text-yellow-400 mb-2">🥩 Wagyu Premium</h2>
                    <p class="text-gray-400">La mejor carne wagyu importada directamente de Japón</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Wagyu A5 -->
                    <div class="menu-item bg-gray-800 rounded-xl overflow-hidden shadow-lg">
                        <div class="relative">
                            <img src="https://images.pexels.com/photos/361184/asparagus-steak-veal-steak-veal-361184.jpeg" alt="Wagyu A5" class="w-full h-48 object-cover">
                            <div class="absolute top-3 right-3 bg-red-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                                PREMIUM
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">WAGYU A5 RIBEYE</h3>
                            <p class="text-gray-400 text-sm mb-4">Corte premium de 300g con marmoleo excepcional, servido con vegetales asados</p>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-yellow-400">$180</span>
                                <button class="add-to-cart bg-yellow-500 text-black px-4 py-2 rounded-lg font-medium hover:bg-yellow-400 transition-all" 
                                        data-name="WAGYU A5 RIBEYE" data-price="180">
                                    Agregar +
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Wagyu Sirloin -->
                    <div class="menu-item bg-gray-800 rounded-xl overflow-hidden shadow-lg">
                        <div class="relative">
                            <img src="https://images.pexels.com/photos/1639562/pexels-photo-1639562.jpeg" alt="Wagyu Sirloin" class="w-full h-48 object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">WAGYU SIRLOIN</h3>
                            <p class="text-gray-400 text-sm mb-4">Corte tierno de 250g con salsa teriyaki especial y arroz japonés</p>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-yellow-400">$150</span>
                                <button class="add-to-cart bg-yellow-500 text-black px-4 py-2 rounded-lg font-medium hover:bg-yellow-400 transition-all"
                                        data-name="WAGYU SIRLOIN" data-price="150">
                                    Agregar +
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Wagyu Tenderloin -->
                    <div class="menu-item bg-gray-800 rounded-xl overflow-hidden shadow-lg">
                        <div class="relative">
                            <img src="https://images.pexels.com/photos/3535383/pexels-photo-3535383.jpeg" alt="Wagyu Tenderloin" class="w-full h-48 object-cover">
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">WAGYU TENDERLOIN</h3>
                            <p class="text-gray-400 text-sm mb-4">El corte más tierno, 200g con reducción de vino tinto y puré de papa</p>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-yellow-400">$200</span>
                                <button class="add-to-cart bg-yellow-500 text-black px-4 py-2 rounded-lg font-medium hover:bg-yellow-400 transition-all"
                                        data-name="WAGYU TENDERLOIN" data-price="200">
                                    Agregar +
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menú Especial -->
            <div class="menu-content hidden" data-category="especiales">
                <div class="mb-8">
                    <h2 class="text-3xl font-bold text-yellow-400 mb-2">⭐ Menú Especial</h2>
                    <p class="text-gray-400">Nuestras creaciones exclusivas del chef</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="menu-item bg-gray-800 rounded-xl overflow-hidden shadow-lg">
                        <div class="relative">
                            <img src="https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg" alt="Especial del Chef" class="w-full h-48 object-cover">
                            <div class="absolute top-3 right-3 bg-purple-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                                CHEF'S CHOICE
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">ESPECIAL DEL CHEF</h3>
                            <p class="text-gray-400 text-sm mb-4">Combinación única de mariscos y carne con salsa secreta</p>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-yellow-400">$85</span>
                                <button class="add-to-cart bg-yellow-500 text-black px-4 py-2 rounded-lg font-medium hover:bg-yellow-400 transition-all"
                                        data-name="ESPECIAL DEL CHEF" data-price="85">
                                    Agregar +
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Family SET -->
            <div class="menu-content hidden" data-category="family">
                <div class="mb-8">
                    <h2 class="text-3xl font-bold text-yellow-400 mb-2">👨‍👩‍👧‍👦 Family SET</h2>
                    <p class="text-gray-400">Perfectos para compartir en familia</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="menu-item bg-gray-800 rounded-xl overflow-hidden shadow-lg">
                        <div class="relative">
                            <img src="https://images.pexels.com/photos/1640777/pexels-photo-1640777.jpeg" alt="Family Combo" class="w-full h-48 object-cover">
                            <div class="absolute top-3 left-3 bg-green-500 text-white px-2 py-1 rounded-full text-xs font-bold">
                                4-6 PERSONAS
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">COMBO FAMILIAR</h3>
                            <p class="text-gray-400 text-sm mb-4">Variedad de carnes, mariscos, vegetales y acompañamientos</p>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-yellow-400">$120</span>
                                <button class="add-to-cart bg-yellow-500 text-black px-4 py-2 rounded-lg font-medium hover:bg-yellow-400 transition-all"
                                        data-name="COMBO FAMILIAR" data-price="120">
                                    Agregar +
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Otras categorías (placeholder) -->
            <div class="menu-content hidden" data-category="bbq">
                <div class="text-center py-20">
                    <h2 class="text-3xl font-bold text-yellow-400 mb-4">🍖 BBQ Beef</h2>
                    <p class="text-gray-400">Contenido próximamente...</p>
                </div>
            </div>

            <div class="menu-content hidden" data-category="pollo">
                <div class="text-center py-20">
                    <h2 class="text-3xl font-bold text-yellow-400 mb-4">🍗 Pollo & Cerdo</h2>
                    <p class="text-gray-400">Contenido próximamente...</p>
                </div>
            </div>

            <div class="menu-content hidden" data-category="mariscos">
                <div class="text-center py-20">
                    <h2 class="text-3xl font-bold text-yellow-400 mb-4">🦐 Mariscos</h2>
                    <p class="text-gray-400">Contenido próximamente...</p>
                </div>
            </div>

            <div class="menu-content hidden" data-category="vegetales">
                <div class="text-center py-20">
                    <h2 class="text-3xl font-bold text-yellow-400 mb-4">🥬 BBQ Vegetales</h2>
                    <p class="text-gray-400">Contenido próximamente...</p>
                </div>
            </div>

            <div class="menu-content hidden" data-category="bebidas">
                <div class="text-center py-20">
                    <h2 class="text-3xl font-bold text-yellow-400 mb-4">🍹 Bebidas</h2>
                    <p class="text-gray-400">Contenido próximamente...</p>
                </div>
            </div>

            <div class="menu-content hidden" data-category="postres">
                <div class="text-center py-20">
                    <h2 class="text-3xl font-bold text-yellow-400 mb-4">🍰 Postres</h2>
                    <p class="text-gray-400">Contenido próximamente...</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Sistema de navegación del menú
        const menuCategories = document.querySelectorAll('.menu-category');
        const menuContents = document.querySelectorAll('.menu-content');
        
        menuCategories.forEach(category => {
            category.addEventListener('click', () => {
                const targetCategory = category.dataset.category;
                
                // Remover clase active de todas las categorías
                menuCategories.forEach(cat => cat.classList.remove('active'));
                // Agregar clase active a la categoría seleccionada
                category.classList.add('active');
                
                // Ocultar todo el contenido
                menuContents.forEach(content => {
                    content.classList.add('hidden');
                    content.classList.remove('active');
                });
                
                // Mostrar contenido seleccionado
                const targetContent = document.querySelector(`[data-category="${targetCategory}"].menu-content`);
                if (targetContent) {
                    targetContent.classList.remove('hidden');
                    targetContent.classList.add('active');
                }
            });
        });

        // Sistema de carrito de compras
        let cart = [];
        let cartTotal = 0;
        
        const addToCartButtons = document.querySelectorAll('.add-to-cart');
        const cartCount = document.getElementById('cart-count');
        const cartTotalElement = document.getElementById('cart-total');
        
        addToCartButtons.forEach(button => {
            button.addEventListener('click', () => {
                const name = button.dataset.name;
                const price = parseInt(button.dataset.price);
                
                cart.push({ name, price });
                cartTotal += price;
                
                // Actualizar UI del carrito
                cartCount.textContent = cart.length;
                cartTotalElement.textContent = cartTotal;
                
                // Animación de confirmación
                button.textContent = '✓ Agregado';
                button.classList.add('bg-green-500');
                button.classList.remove('bg-yellow-500');
                
                setTimeout(() => {
                    button.textContent = 'Agregar +';
                    button.classList.remove('bg-green-500');
                    button.classList.add('bg-yellow-500');
                }, 1500);
            });
        });
    </script>
</body>
</html>