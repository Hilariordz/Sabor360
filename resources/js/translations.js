// Sistema de traducción para Sabor360
const translations = {
    es: {
        // Navigation
        'INICIO': 'INICIO',
        'MENÚ': 'MENÚ',
        'SOBRE NOSOTROS': 'SOBRE NOSOTROS',
        'CONTACTO': 'CONTACTO',
        'MENU': 'MENÚ',
        'HOME': 'INICIO',

        // Welcome Page
        'Eventos Especiales': 'Eventos Especiales',
        'Disfruta de nuestras noches temáticas y eventos exclusivos durante toda la semana': 'Disfruta de nuestras noches temáticas y eventos exclusivos durante toda la semana',
        'Por qué somos los mejores creadores de comida': 'Por qué somos los mejores creadores de comida',
        'Lorem Ipsum es simplemente texto ficticio de la industria de impresión y composición tipográfica. Lorem lo mezcló para hacer un libro de muestras tipográficas.': 'Lorem Ipsum es simplemente texto ficticio de la industria de impresión y composición tipográfica. Lorem lo mezcló para hacer un libro de muestras tipográficas.',
        'Leer más': 'Leer más',
        'Ingredientes Premium': 'Ingredientes Premium',
        'Seleccionamos cuidadosamente los mejores ingredientes frescos y de temporada para garantizar sabores excepcionales en cada plato.': 'Seleccionamos cuidadosamente los mejores ingredientes frescos y de temporada para garantizar sabores excepcionales en cada plato.',
        'Chefs Expertos': 'Chefs Expertos',
        'Nuestro equipo de chefs profesionales cuenta con más de 15 años de experiencia en alta cocina internacional y técnicas culinarias innovadoras.': 'Nuestro equipo de chefs profesionales cuenta con más de 15 años de experiencia en alta cocina internacional y técnicas culinarias innovadoras.',
        'Ambiente Exclusivo': 'Ambiente Exclusivo',
        'Disfruta de un ambiente sofisticado y acogedor, diseñado para crear momentos memorables con un servicio personalizado de primera clase.': 'Disfruta de un ambiente sofisticado y acogedor, diseñado para crear momentos memorables con un servicio personalizado de primera clase.',
        'Años de Experiencia': 'Años de Experiencia',
        'Platos Únicos': 'Platos Únicos',
        'Clientes Satisfechos': 'Clientes Satisfechos',
        'Calificación Promedio': 'Calificación Promedio',
        'Lo que dicen nuestros clientes': 'Lo que dicen nuestros clientes',
        'Miles de clientes satisfechos avalan nuestra excelencia culinaria y servicio excepcional': 'Miles de clientes satisfechos avalan nuestra excelencia culinaria y servicio excepcional',
        'Platos Destacados': 'Platos Destacados',
        'Descubre nuestras creaciones más populares, cuidadosamente elaboradas por nuestros chefs expertos': 'Descubre nuestras creaciones más populares, cuidadosamente elaboradas por nuestros chefs expertos',
        'RESERVACION →': 'RESERVACION →',
        'MENU →': 'MENU →',

        // Common buttons and actions
        'Ver Menú Completo': 'Ver Menú Completo',
        'Reservar Mesa': 'Reservar Mesa',
        'Ver Menú': 'Ver Menú',
        'Volver al Inicio': 'Volver al Inicio',
        'Contactar Soporte': 'Contactar Soporte',
        'Enviar Mensaje': 'Enviar Mensaje',
        'Confirmar Reservación': 'Confirmar Reservación',
        'Reservar Ahora': 'Reservar Ahora',

        // Forms
        'Nombre Completo': 'Nombre Completo',
        'Correo Electrónico': 'Correo Electrónico',
        'Teléfono': 'Teléfono',
        'Mensaje': 'Mensaje',
        'Asunto': 'Asunto',
        'Número de Personas': 'Número de Personas',
        'Fecha': 'Fecha',
        'Hora': 'Hora',
        'Solicitudes Especiales': 'Solicitudes Especiales',

        // Contact page
        'Estamos aquí para hacer de tu experiencia algo extraordinario. Contáctanos y permítenos ser parte de tus momentos especiales.': 'Estamos aquí para hacer de tu experiencia algo extraordinario. Contáctanos y permítenos ser parte de tus momentos especiales.',
        'Envíanos un Mensaje': 'Envíanos un Mensaje',
        'Horarios de Atención': 'Horarios de Atención',
        'Estamos aquí para servirte en los siguientes horarios': 'Estamos aquí para servirte en los siguientes horarios',
        'Cómo Llegar': 'Cómo Llegar',
        'Nos encontramos en el corazón de la Ciudad Culinaria, fácil acceso en transporte público y privado': 'Nos encontramos en el corazón de la Ciudad Culinaria, fácil acceso en transporte público y privado',
        'Síguenos': 'Síguenos',
        'Mantente al día con nuestras últimas creaciones, eventos especiales y promociones exclusivas': 'Mantente al día con nuestras últimas creaciones, eventos especiales y promociones exclusivas',

        // About page
        'Nuestra Historia': 'Nuestra Historia',
        'El Fundador': 'El Fundador',
        'Nuestros Valores': 'Nuestros Valores',
        'Los principios que guían cada decisión y cada plato que servimos': 'Los principios que guían cada decisión y cada plato que servimos',
        'Reconocimientos': 'Reconocimientos',
        'Orgullosos de los reconocimientos que avalan nuestra dedicación y excelencia': 'Orgullosos de los reconocimientos que avalan nuestra dedicación y excelencia',
        'Nuestro Equipo': 'Nuestro Equipo',
        'Profesionales apasionados que hacen posible la magia de Sabor360': 'Profesionales apasionados que hacen posible la magia de Sabor360',
        'Vive la Experiencia Sabor360': 'Vive la Experiencia Sabor360',
        'Te invitamos a ser parte de nuestra historia y crear momentos inolvidables': 'Te invitamos a ser parte de nuestra historia y crear momentos inolvidables',

        // Error pages
        '¡Ups! Plato no encontrado': '¡Ups! Plato no encontrado',
        'Parece que el plato que buscas no está en nuestro menú. Quizás se agotó o cambió de mesa.': 'Parece que el plato que buscas no está en nuestro menú. Quizás se agotó o cambió de mesa.',
        '¡Algo se quemó en la cocina!': '¡Algo se quemó en la cocina!',
        'Nuestros chefs están trabajando para solucionar este problema. Por favor, inténtalo de nuevo en unos momentos.': 'Nuestros chefs están trabajando para solucionar este problema. Por favor, inténtalo de nuevo en unos momentos.',
        'Área Restringida': 'Área Restringida',
        'Esta zona está reservada solo para nuestro personal. Como un área VIP de la cocina, necesitas permisos especiales para acceder.': 'Esta zona está reservada solo para nuestro personal. Como un área VIP de la cocina, necesitas permisos especiales para acceder.',
        'Tu Mesa se Enfrió': 'Tu Mesa se Enfrió',
        'Tu sesión ha expirado por seguridad. Como un plato que se enfría, necesitamos preparar una nueva experiencia fresca para ti.': 'Tu sesión ha expirado por seguridad. Como un plato que se enfría, necesitamos preparar una nueva experiencia fresca para ti.',
    },

    en: {
        // Navigation
        'HOME': 'HOME',
        'MENU': 'MENU',
        'ABOUT_US': 'ABOUT US',
        'CONTACT': 'CONTACT',

        // Welcome Page
        'SPECIAL_EVENTS': 'Special Events',
        'SPECIAL_EVENTS_DESC': 'Enjoy our themed nights and exclusive events throughout the week',
        'WHY_BEST_FOOD_CREATORS': 'Why we are the best food creators',
        'LOREM_IPSUM_TEXT': 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem mixed it to make a type specimen book.',
        'READ_MORE': 'Read More',
        'PREMIUM_INGREDIENTS': 'Premium Ingredients',
        'PREMIUM_INGREDIENTS_DESC': 'We carefully select the finest fresh and seasonal ingredients to guarantee exceptional flavors in every dish.',
        'EXPERT_CHEFS': 'Expert Chefs',
        'EXPERT_CHEFS_DESC': 'Our team of professional chefs has over 15 years of experience in international haute cuisine and innovative culinary techniques.',
        'EXCLUSIVE_ATMOSPHERE': 'Exclusive Atmosphere',
        'EXCLUSIVE_ATMOSPHERE_DESC': 'Enjoy a sophisticated and welcoming atmosphere, designed to create memorable moments with first-class personalized service.',
        'YEARS_EXPERIENCE': 'Years of Experience',
        'UNIQUE_DISHES': 'Unique Dishes',
        'SATISFIED_CUSTOMERS': 'Satisfied Customers',
        'AVERAGE_RATING': 'Average Rating',
        'WHAT_CUSTOMERS_SAY': 'What our customers say',
        'CUSTOMERS_ENDORSE_DESC': 'Thousands of satisfied customers endorse our culinary excellence and exceptional service',
        'FEATURED_DISHES': 'Featured Dishes',
        'FEATURED_DISHES_DESC': 'Discover our most popular creations, carefully crafted by our expert chefs',
        'RESERVATION_ARROW': 'RESERVATION →',
        'MENU_ARROW': 'MENU →',

        // Common buttons and actions
        'VIEW_FULL_MENU': 'View Full Menu',
        'RESERVE_TABLE': 'Reserve Table',
        'VIEW_MENU': 'View Menu',
        'BACK_TO_HOME': 'Back to Home',
        'CONTACT_SUPPORT': 'Contact Support',
        'SEND_MESSAGE': 'Send Message',
        'CONFIRM_RESERVATION': 'Confirm Reservation',
        'BOOK_NOW': 'Book Now',

        // Forms
        'FULL_NAME': 'Full Name',
        'EMAIL_ADDRESS': 'Email Address',
        'PHONE': 'Phone',
        'MESSAGE': 'Message',
        'SUBJECT': 'Subject',
        'NUMBER_OF_PEOPLE': 'Number of People',
        'DATE': 'Date',
        'TIME': 'Time',
        'SPECIAL_REQUESTS': 'Special Requests',

        // Contact page
        'CONTACT_INTRO': 'We are here to make your experience extraordinary. Contact us and let us be part of your special moments.',
        'SEND_US_MESSAGE': 'Send us a Message',
        'BUSINESS_HOURS': 'Business Hours',
        'BUSINESS_HOURS_DESC': 'We are here to serve you during the following hours',
        'HOW_TO_GET_HERE': 'How to Get Here',
        'LOCATION_DESC': 'We are located in the heart of Culinary City, with easy access by public and private transport',
        'FOLLOW_US': 'Follow Us',
        'FOLLOW_US_DESC': 'Stay up to date with our latest creations, special events and exclusive promotions',

        // About page
        'OUR_STORY': 'Our Story',
        'THE_FOUNDER': 'The Founder',
        'OUR_VALUES': 'Our Values',
        'OUR_VALUES_DESC': 'The principles that guide every decision and every dish we serve',
        'AWARDS': 'Awards',
        'AWARDS_DESC': 'Proud of the awards that endorse our dedication and excellence',
        'OUR_TEAM': 'Our Team',
        'OUR_TEAM_DESC': 'Passionate professionals who make the magic of Sabor360 possible',
        'LIVE_SABOR360_EXPERIENCE': 'Live the Sabor360 Experience',
        'LIVE_EXPERIENCE_DESC': 'We invite you to be part of our story and create unforgettable moments',

        // Error pages
        'DISH_NOT_FOUND': 'Oops! Dish not found',
        'DISH_NOT_FOUND_DESC': 'It seems the dish you are looking for is not on our menu. Maybe it ran out or moved tables.',
        'SOMETHING_BURNED': 'Something burned in the kitchen!',
        'SOMETHING_BURNED_DESC': 'Our chefs are working to solve this problem. Please try again in a few moments.',
        'RESTRICTED_AREA': 'Restricted Area',
        'RESTRICTED_AREA_DESC': 'This area is reserved only for our staff. Like a VIP area of the kitchen, you need special permissions to access.',
        'TABLE_GOT_COLD': 'Your Table Got Cold',
        'TABLE_GOT_COLD_DESC': 'Your session has expired for security. Like a dish that gets cold, we need to prepare a fresh new experience for you.',
    }
};

// Función para cambiar idioma
function changeLanguage(lang) {
    // Guardar idioma seleccionado
    localStorage.setItem('selectedLanguage', lang);

    // Actualizar botones de idioma
    document.querySelectorAll('.lang-btn').forEach(btn => {
        btn.classList.remove('active', 'bg-yellow-400', 'text-black', 'font-medium');
        btn.classList.add('border', 'border-gray-600', 'text-gray-300', 'hover:bg-gray-700');
    });

    const activeBtn = document.querySelector(`[data-lang="${lang}"]`);
    if (activeBtn) {
        activeBtn.classList.remove('border', 'border-gray-600', 'text-gray-300', 'hover:bg-gray-700');
        activeBtn.classList.add('active', 'bg-yellow-400', 'text-black', 'font-medium');
    }

    // Traducir todos los elementos con data-translate
    document.querySelectorAll('[data-translate]').forEach(element => {
        const key = element.getAttribute('data-translate');
        if (translations[lang] && translations[lang][key]) {
            element.textContent = translations[lang][key];
        }
    });

    // Traducir placeholders
    document.querySelectorAll('[data-translate-placeholder]').forEach(element => {
        const key = element.getAttribute('data-translate-placeholder');
        if (translations[lang] && translations[lang][key]) {
            element.placeholder = translations[lang][key];
        }
    });

    // Traducir títulos (title attributes)
    document.querySelectorAll('[data-translate-title]').forEach(element => {
        const key = element.getAttribute('data-translate-title');
        if (translations[lang] && translations[lang][key]) {
            element.title = translations[lang][key];
        }
    });
}

// Inicializar idioma al cargar la página
document.addEventListener('DOMContentLoaded', function () {
    const savedLang = localStorage.getItem('selectedLanguage') || 'es';
    changeLanguage(savedLang);

    // Agregar event listeners a los botones de idioma
    document.querySelectorAll('.lang-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            const lang = this.getAttribute('data-lang');
            changeLanguage(lang);
        });
    });
});

// Exportar para uso global
window.changeLanguage = changeLanguage;
window.translations = translations;