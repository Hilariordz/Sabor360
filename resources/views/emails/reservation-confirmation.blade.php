<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Reservación - Sabor360</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lavishly+Yours&family=Inter:wght@300;400;500;600;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', Arial, sans-serif;
            line-height: 1.6;
            color: #ffffff;
            background-color: #000000;
        }
        
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #000000;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }
        
        .header {
            background: linear-gradient(135deg, #1a1a1a 0%, #000000 100%);
            padding: 40px 30px;
            text-align: center;
            border-bottom: 2px solid #fbbf24;
        }
        
        .logo {
            display: inline-flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .logo img {
            width: 40px;
            height: 40px;
            margin-right: 12px;
        }
        
        .logo-text {
            font-size: 24px;
            font-weight: 700;
            color: #ffffff;
            letter-spacing: 1px;
        }
        
        .header-title {
            font-family: 'Lavishly Yours', cursive;
            font-size: 48px;
            color: #fbbf24;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .header-subtitle {
            color: #d1d5db;
            font-size: 18px;
            font-weight: 300;
        }
        
        .content {
            padding: 40px 30px;
            background-color: #111111;
        }
        
        .greeting {
            font-size: 20px;
            color: #ffffff;
            margin-bottom: 20px;
            font-weight: 500;
        }
        
        .message {
            color: #d1d5db;
            font-size: 16px;
            margin-bottom: 30px;
            line-height: 1.7;
        }
        
        .reservation-card {
            background: linear-gradient(135deg, #1f1f1f 0%, #0a0a0a 100%);
            border: 2px solid #fbbf24;
            border-radius: 12px;
            padding: 30px;
            margin: 30px 0;
            position: relative;
            overflow: hidden;
        }
        
        .reservation-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(251, 191, 36, 0.1) 0%, transparent 70%);
            animation: pulse 3s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 0.6; }
        }
        
        .card-title {
            color: #fbbf24;
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 20px;
            text-align: center;
            position: relative;
            z-index: 1;
        }
        
        .details-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            position: relative;
            z-index: 1;
        }
        
        .detail-item {
            background-color: rgba(0, 0, 0, 0.3);
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #fbbf24;
        }
        
        .detail-label {
            color: #9ca3af;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
            font-weight: 500;
        }
        
        .detail-value {
            color: #ffffff;
            font-size: 16px;
            font-weight: 600;
        }
        
        .special-requests {
            grid-column: 1 / -1;
            margin-top: 10px;
        }
        
        .special-requests .detail-value {
            font-weight: 400;
            line-height: 1.5;
        }
        
        .animated-elements {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px 0;
            gap: 20px;
        }
        
        .dish-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: float 3s ease-in-out infinite;
            box-shadow: 0 10px 20px rgba(251, 191, 36, 0.3);
        }
        
        .dish-icon:nth-child(2) {
            animation-delay: 0.5s;
        }
        
        .dish-icon:nth-child(3) {
            animation-delay: 1s;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .dish-icon svg {
            width: 30px;
            height: 30px;
            color: #000000;
        }
        
        .next-steps {
            background: linear-gradient(135deg, #1f2937 0%, #111827 100%);
            border-radius: 12px;
            padding: 25px;
            margin: 30px 0;
            border: 1px solid #374151;
        }
        
        .next-steps h3 {
            color: #fbbf24;
            font-size: 18px;
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .next-steps ul {
            list-style: none;
            padding: 0;
        }
        
        .next-steps li {
            color: #d1d5db;
            margin-bottom: 10px;
            padding-left: 20px;
            position: relative;
            font-size: 14px;
        }
        
        .next-steps li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #fbbf24;
            font-weight: bold;
        }
        
        .contact-info {
            background-color: #1a1a1a;
            padding: 25px;
            border-radius: 12px;
            text-align: center;
            margin: 30px 0;
            border: 1px solid #333333;
        }
        
        .contact-info h3 {
            color: #fbbf24;
            font-size: 18px;
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        .contact-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
            margin-top: 15px;
        }
        
        .contact-item {
            color: #d1d5db;
            font-size: 14px;
        }
        
        .contact-item strong {
            color: #ffffff;
            display: block;
            margin-bottom: 5px;
        }
        
        .footer {
            background-color: #0a0a0a;
            padding: 30px;
            text-align: center;
            border-top: 1px solid #333333;
        }
        
        .footer-logo {
            font-family: 'Lavishly Yours', cursive;
            font-size: 32px;
            color: #fbbf24;
            margin-bottom: 15px;
        }
        
        .footer-text {
            color: #9ca3af;
            font-size: 14px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .social-link {
            width: 40px;
            height: 40px;
            background-color: #1f1f1f;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            border: 1px solid #333333;
        }
        
        .social-link:hover {
            background-color: #fbbf24;
            transform: translateY(-2px);
        }
        
        .social-link svg {
            width: 20px;
            height: 20px;
            color: #d1d5db;
        }
        
        .social-link:hover svg {
            color: #000000;
        }
        
        .copyright {
            color: #6b7280;
            font-size: 12px;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #1f1f1f;
        }
        
        @media (max-width: 600px) {
            .email-container {
                margin: 0;
                border-radius: 0;
            }
            
            .header, .content, .footer {
                padding: 20px;
            }
            
            .header-title {
                font-size: 36px;
            }
            
            .details-grid {
                grid-template-columns: 1fr;
                gap: 15px;
            }
            
            .contact-details {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <div class="logo">
                <span class="logo-text">SABOR360</span>
            </div>
            <h1 class="header-title">¡Reservación Confirmada!</h1>
            <p class="header-subtitle">Su mesa está reservada en nuestro restaurante</p>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="greeting">
                Estimado/a {{ $reservation->name }},
            </div>
            
            <div class="message">
                Nos complace confirmar que hemos recibido su reservación en <strong>Sabor360</strong>. 
                Estamos emocionados de recibirle y brindarle una experiencia culinaria excepcional 
                que recordará para siempre.
            </div>

            <!-- Animated Dish Elements -->
            <div class="animated-elements">
                <div class="dish-icon">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M8.1 13.34l2.83-2.83L3.91 3.5c-1.56 1.56-1.56 4.09 0 5.66l4.19 4.18zm6.78-1.81c1.53.71 3.68.21 5.27-1.38 1.91-1.91 2.28-4.65.81-6.12-1.46-1.46-4.20-1.10-6.12.81-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88 1.41-1.41L13.41 13l1.47-1.47z"/>
                    </svg>
                </div>
                <div class="dish-icon">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12,2A3,3 0 0,1 15,5V11A3,3 0 0,1 12,14A3,3 0 0,1 9,11V5A3,3 0 0,1 12,2M19,11C19,14.53 16.39,17.44 13,17.93V21H11V17.93C7.61,17.44 5,14.53 5,11H7A5,5 0 0,0 12,16A5,5 0 0,0 17,11H19Z"/>
                    </svg>
                </div>
                <div class="dish-icon">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M2,21V19H20V21H2M20,8V5H18V8H20M20,3A2,2 0 0,1 22,5V8A2,2 0 0,1 20,10H18V13A4,4 0 0,1 14,17H8A4,4 0 0,1 4,13V3H6V13A2,2 0 0,0 8,15H14A2,2 0 0,0 16,13V3H20Z"/>
                    </svg>
                </div>
            </div>

            <!-- Reservation Details Card -->
            <div class="reservation-card">
                <h2 class="card-title">Detalles de su Reservación</h2>
                <div class="details-grid">
                    <div class="detail-item">
                        <div class="detail-label">Fecha</div>
                        <div class="detail-value">{{ $reservation->date->format('d/m/Y') }}</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Hora</div>
                        <div class="detail-value">{{ $reservation->time->format('H:i') }}</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Personas</div>
                        <div class="detail-value">{{ $reservation->guests }} {{ $reservation->guests == 1 ? 'persona' : 'personas' }}</div>
                    </div>
                    <div class="detail-item">
                        <div class="detail-label">Teléfono</div>
                        <div class="detail-value">{{ $reservation->phone }}</div>
                    </div>
                    @if($reservation->special_requests)
                    <div class="detail-item special-requests">
                        <div class="detail-label">Solicitudes Especiales</div>
                        <div class="detail-value">{{ $reservation->special_requests }}</div>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Next Steps -->
            <div class="next-steps">
                <h3>Próximos Pasos</h3>
                <ul>
                    <li>Nuestro equipo confirmará su reservación dentro de las próximas 2 horas</li>
                    <li>Le recomendamos llegar 15 minutos antes de su hora reservada</li>
                    <li>Si necesita hacer cambios, contáctenos al +52 (844) 123-4567</li>
                    <li>Para cancelaciones, por favor avísenos con al menos 4 horas de anticipación</li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="contact-info">
                <h3>Información de Contacto</h3>
                <div class="contact-details">
                    <div class="contact-item">
                        <strong>Teléfono</strong>
                        +52 (844) 123-4567
                    </div>
                    <div class="contact-item">
                        <strong>Email</strong>
                        reservas@sabor360.com
                    </div>
                    <div class="contact-item">
                        <strong>Dirección</strong>
                        Av. Gastronómica 456, Ciudad Culinaria
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="footer-logo">Sabor360</div>
            <div class="footer-text">
                Desde 1995, creando experiencias culinarias inolvidables.<br>
                Gracias por elegirnos para sus momentos especiales.
            </div>
            
            <div class="social-links">
                <a href="#" class="social-link">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 4.8447c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.844-3.594-1.844-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                    </svg>
                </a>
                <a href="#" class="social-link">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                    </svg>
                </a>
                <a href="#" class="social-link">
                    <svg fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>
            </div>
            
            <div class="copyright">
                © 2025 Sabor360. Todos los derechos reservados.
            </div>
        </div>
    </div>
</body>
</html>