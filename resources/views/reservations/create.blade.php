<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservación - Sabor360</title>
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
    <div class="pt-24 pb-16 px-8">
        <div class="max-w-4xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-5xl md:text-6xl font-light mb-6" style="font-family: 'Lavishly Yours', cursive;">
                    Reservación
                </h1>
                <p class="text-gray-300 text-lg max-w-2xl mx-auto">
                    Reserve su mesa en Sabor360 y disfrute de una experiencia culinaria inolvidable
                </p>
            </div>

            <!-- Reservation Form -->
            <div class="bg-gray-900 bg-opacity-50 rounded-lg p-8 border border-gray-800">
                <form action="{{ route('reservations.store') }}" method="POST" class="space-y-6">
                    @csrf
                    
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
                                   value="{{ old('name') }}"
                                   class="w-full px-4 py-3 bg-black border-2 border-gray-700 rounded-lg text-white focus:border-yellow-400 focus:outline-none transition-colors">
                            @error('name')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
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
                                   value="{{ old('email') }}"
                                   class="w-full px-4 py-3 bg-black border-2 border-gray-700 rounded-lg text-white focus:border-yellow-400 focus:outline-none transition-colors">
                            @error('email')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Phone -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-300 mb-2">
                                Teléfono *
                            </label>
                            <input type="tel" 
                                   id="phone" 
                                   name="phone" 
                                   required
                                   value="{{ old('phone') }}"
                                   class="w-full px-4 py-3 bg-black border-2 border-gray-700 rounded-lg text-white focus:border-yellow-400 focus:outline-none transition-colors">
                            @error('phone')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Guests -->
                        <div>
                            <label for="guests" class="block text-sm font-medium text-gray-300 mb-2">
                                Número de Personas *
                            </label>
                            <select id="guests" 
                                    name="guests" 
                                    required
                                    class="w-full px-4 py-3 bg-black border-2 border-gray-700 rounded-lg text-white focus:border-yellow-400 focus:outline-none transition-colors">
                                <option value="">Seleccione...</option>
                                @for($i = 1; $i <= 20; $i++)
                                    <option value="{{ $i }}" {{ old('guests') == $i ? 'selected' : '' }}>
                                        {{ $i }} {{ $i == 1 ? 'persona' : 'personas' }}
                                    </option>
                                @endfor
                            </select>
                            @error('guests')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <!-- Date with Custom Calendar -->
                        <div class="relative">
                            <label for="date" class="block text-sm font-medium text-gray-300 mb-2">
                                Fecha *
                            </label>
                            <div class="relative">
                                <input type="text" 
                                       id="date-display" 
                                       readonly
                                       placeholder="Seleccione una fecha"
                                       class="w-full px-4 py-3 bg-black border-2 border-gray-700 rounded-lg text-white focus:border-yellow-400 focus:outline-none transition-colors cursor-pointer">
                                <input type="hidden" id="date" name="date" value="{{ old('date') }}">
                                <div class="absolute right-3 top-1/2 transform -translate-y-1/2 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            </div>
                            
                            <!-- Custom Calendar -->
                            <div id="calendar" class="absolute top-full left-0 mt-2 bg-gray-900 border-2 border-gray-700 rounded-lg shadow-2xl z-50 hidden w-80">
                                <div class="p-4">
                                    <!-- Calendar Header -->
                                    <div class="flex items-center justify-between mb-4">
                                        <button type="button" id="prev-month" class="p-2 hover:bg-gray-800 rounded-lg transition-colors">
                                            <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                            </svg>
                                        </button>
                                        <h3 id="calendar-month" class="text-lg font-semibold text-white"></h3>
                                        <button type="button" id="next-month" class="p-2 hover:bg-gray-800 rounded-lg transition-colors">
                                            <svg class="w-5 h-5 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    
                                    <!-- Days of Week -->
                                    <div class="grid grid-cols-7 gap-1 mb-2">
                                        <div class="text-center text-xs font-medium text-gray-400 py-2">Dom</div>
                                        <div class="text-center text-xs font-medium text-gray-400 py-2">Lun</div>
                                        <div class="text-center text-xs font-medium text-gray-400 py-2">Mar</div>
                                        <div class="text-center text-xs font-medium text-gray-400 py-2">Mié</div>
                                        <div class="text-center text-xs font-medium text-gray-400 py-2">Jue</div>
                                        <div class="text-center text-xs font-medium text-gray-400 py-2">Vie</div>
                                        <div class="text-center text-xs font-medium text-gray-400 py-2">Sáb</div>
                                    </div>
                                    
                                    <!-- Calendar Days -->
                                    <div id="calendar-days" class="grid grid-cols-7 gap-1">
                                        <!-- Days will be generated by JavaScript -->
                                    </div>
                                </div>
                            </div>
                            
                            @error('date')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Time -->
                        <div>
                            <label for="time" class="block text-sm font-medium text-gray-300 mb-2">
                                Hora *
                            </label>
                            <select id="time" 
                                    name="time" 
                                    required
                                    class="w-full px-4 py-3 bg-black border-2 border-gray-700 rounded-lg text-white focus:border-yellow-400 focus:outline-none transition-colors">
                                <option value="">Seleccione hora...</option>
                                <option value="12:00" {{ old('time') == '12:00' ? 'selected' : '' }}>12:00 PM</option>
                                <option value="12:30" {{ old('time') == '12:30' ? 'selected' : '' }}>12:30 PM</option>
                                <option value="13:00" {{ old('time') == '13:00' ? 'selected' : '' }}>1:00 PM</option>
                                <option value="13:30" {{ old('time') == '13:30' ? 'selected' : '' }}>1:30 PM</option>
                                <option value="14:00" {{ old('time') == '14:00' ? 'selected' : '' }}>2:00 PM</option>
                                <option value="14:30" {{ old('time') == '14:30' ? 'selected' : '' }}>2:30 PM</option>
                                <option value="19:00" {{ old('time') == '19:00' ? 'selected' : '' }}>7:00 PM</option>
                                <option value="19:30" {{ old('time') == '19:30' ? 'selected' : '' }}>7:30 PM</option>
                                <option value="20:00" {{ old('time') == '20:00' ? 'selected' : '' }}>8:00 PM</option>
                                <option value="20:30" {{ old('time') == '20:30' ? 'selected' : '' }}>8:30 PM</option>
                                <option value="21:00" {{ old('time') == '21:00' ? 'selected' : '' }}>9:00 PM</option>
                                <option value="21:30" {{ old('time') == '21:30' ? 'selected' : '' }}>9:30 PM</option>
                                <option value="22:00" {{ old('time') == '22:00' ? 'selected' : '' }}>10:00 PM</option>
                            </select>
                            @error('time')
                                <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Special Requests -->
                    <div>
                        <label for="special_requests" class="block text-sm font-medium text-gray-300 mb-2">
                            Solicitudes Especiales
                        </label>
                        <textarea id="special_requests" 
                                  name="special_requests" 
                                  rows="4"
                                  placeholder="Alergias, celebraciones especiales, preferencias de mesa, etc."
                                  class="w-full px-4 py-3 bg-black border-2 border-gray-700 rounded-lg text-white focus:border-yellow-400 focus:outline-none transition-colors resize-none">{{ old('special_requests') }}</textarea>
                        @error('special_requests')
                            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center pt-6">
                        <button type="submit" 
                                class="inline-flex items-center border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 group">
                            <span>Confirmar Reservación</span>
                            <svg class="ml-2 w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Info Section -->
            <div class="mt-12 grid md:grid-cols-3 gap-8 text-center">
                <div class="bg-gray-900 bg-opacity-30 p-6 rounded-lg">
                    <div class="w-12 h-12 mx-auto mb-4 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Horarios</h3>
                    <p class="text-gray-300 text-sm">Almuerzo: 12:00 PM - 3:00 PM<br>Cena: 7:00 PM - 11:00 PM</p>
                </div>

                <div class="bg-gray-900 bg-opacity-30 p-6 rounded-lg">
                    <div class="w-12 h-12 mx-auto mb-4 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Contacto</h3>
                    <p class="text-gray-300 text-sm">+52 (8445) 123-4567<br>reservas@sabor360.com</p>
                </div>

                <div class="bg-gray-900 bg-opacity-30 p-6 rounded-lg">
                    <div class="w-12 h-12 mx-auto mb-4 bg-yellow-400 bg-opacity-20 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-white mb-2">Ubicación</h3>
                    <p class="text-gray-300 text-sm">Av. Gastronómica 456<br>Ciudad Culinaria</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        class CustomCalendar {
            constructor() {
                this.currentDate = new Date();
                this.selectedDate = null;
                this.minDate = new Date();
                this.minDate.setDate(this.minDate.getDate() + 1); // Tomorrow
                
                this.monthNames = [
                    'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio',
                    'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
                ];
                
                this.init();
            }
            
            init() {
                this.bindEvents();
                this.render();
                
                // Set initial value if exists
                const hiddenInput = document.getElementById('date');
                if (hiddenInput.value) {
                    this.selectedDate = new Date(hiddenInput.value);
                    this.updateDisplay();
                }
            }
            
            bindEvents() {
                const dateDisplay = document.getElementById('date-display');
                const calendar = document.getElementById('calendar');
                const prevBtn = document.getElementById('prev-month');
                const nextBtn = document.getElementById('next-month');
                
                // Show/hide calendar
                dateDisplay.addEventListener('click', () => {
                    calendar.classList.toggle('hidden');
                });
                
                // Hide calendar when clicking outside
                document.addEventListener('click', (e) => {
                    if (!dateDisplay.contains(e.target) && !calendar.contains(e.target)) {
                        calendar.classList.add('hidden');
                    }
                });
                
                // Navigation
                prevBtn.addEventListener('click', () => {
                    this.currentDate.setMonth(this.currentDate.getMonth() - 1);
                    this.render();
                });
                
                nextBtn.addEventListener('click', () => {
                    this.currentDate.setMonth(this.currentDate.getMonth() + 1);
                    this.render();
                });
            }
            
            render() {
                this.renderHeader();
                this.renderDays();
            }
            
            renderHeader() {
                const monthHeader = document.getElementById('calendar-month');
                monthHeader.textContent = `${this.monthNames[this.currentDate.getMonth()]} ${this.currentDate.getFullYear()}`;
            }
            
            renderDays() {
                const daysContainer = document.getElementById('calendar-days');
                daysContainer.innerHTML = '';
                
                const year = this.currentDate.getFullYear();
                const month = this.currentDate.getMonth();
                
                // First day of the month
                const firstDay = new Date(year, month, 1);
                const lastDay = new Date(year, month + 1, 0);
                
                // Days from previous month
                const startDate = new Date(firstDay);
                startDate.setDate(startDate.getDate() - firstDay.getDay());
                
                // Generate 42 days (6 weeks)
                for (let i = 0; i < 42; i++) {
                    const date = new Date(startDate);
                    date.setDate(startDate.getDate() + i);
                    
                    const dayElement = this.createDayElement(date, month);
                    daysContainer.appendChild(dayElement);
                }
            }
            
            createDayElement(date, currentMonth) {
                const dayDiv = document.createElement('div');
                const isCurrentMonth = date.getMonth() === currentMonth;
                const isToday = this.isSameDay(date, new Date());
                const isSelected = this.selectedDate && this.isSameDay(date, this.selectedDate);
                const isPast = date < this.minDate;
                const isWeekend = date.getDay() === 0 || date.getDay() === 6;
                
                dayDiv.className = `
                    text-center py-2 text-sm cursor-pointer rounded-lg transition-all duration-200
                    ${isCurrentMonth ? 'text-white' : 'text-gray-600'}
                    ${isPast ? 'opacity-50 cursor-not-allowed' : 'hover:bg-gray-800'}
                    ${isToday ? 'bg-yellow-400 bg-opacity-20 text-yellow-400 font-semibold' : ''}
                    ${isSelected ? 'bg-yellow-400 text-black font-semibold' : ''}
                    ${isWeekend && isCurrentMonth && !isPast ? 'text-yellow-300' : ''}
                `.trim();
                
                dayDiv.textContent = date.getDate();
                
                if (!isPast && isCurrentMonth) {
                    dayDiv.addEventListener('click', () => {
                        this.selectDate(date);
                    });
                }
                
                return dayDiv;
            }
            
            selectDate(date) {
                this.selectedDate = new Date(date);
                this.updateDisplay();
                this.updateHiddenInput();
                document.getElementById('calendar').classList.add('hidden');
                this.render(); // Re-render to show selection
            }
            
            updateDisplay() {
                const dateDisplay = document.getElementById('date-display');
                if (this.selectedDate) {
                    const options = { 
                        weekday: 'long', 
                        year: 'numeric', 
                        month: 'long', 
                        day: 'numeric' 
                    };
                    dateDisplay.value = this.selectedDate.toLocaleDateString('es-ES', options);
                }
            }
            
            updateHiddenInput() {
                const hiddenInput = document.getElementById('date');
                if (this.selectedDate) {
                    const year = this.selectedDate.getFullYear();
                    const month = String(this.selectedDate.getMonth() + 1).padStart(2, '0');
                    const day = String(this.selectedDate.getDate()).padStart(2, '0');
                    hiddenInput.value = `${year}-${month}-${day}`;
                }
            }
            
            isSameDay(date1, date2) {
                return date1.getDate() === date2.getDate() &&
                       date1.getMonth() === date2.getMonth() &&
                       date1.getFullYear() === date2.getFullYear();
            }
        }
        
        // Initialize calendar when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            new CustomCalendar();
        });
    </script>
</body>
</html>