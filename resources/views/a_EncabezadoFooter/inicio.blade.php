@extends('a_EncabezadoFooter.princi')
@section('content')
    <script src="{{ asset('public/js/inicio.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('public/css/inicio.css') }}">
    <link rel="stylesheet" href="{{ asset('public/css/general.css') }}">
    <!-- Hero Content -->
    <section class="demo-content">
        <div class="demo-container">
            <h1>VUELA A TU <span class="highlight">MANERA</span></h1>
            <p>Tu eliges el destino, nosotros nos encargamos de la logistica</p>
        </div>
    </section>
    <!-- Tours Section -->
    <section class="tours-section">
        <div class="tours-container">
            <div class="tours-header">
                <h1>Descubre Perú: Tours y Experiencias Inolvidables</h1>
                <p>Embárcate en una aventura inolvidable y explora la magia del Perú con nuestros tours cuidadosamente diseñados</p>
            </div>
            

            <div class="tours-slider" id="tours-slider">
                    <div class="tour-card">
                        <div class="tour-image">
                            <img src="https://images.unsplash.com/photo-1526392060635-9d6019884377?w=400&h=300&fit=crop" alt="Andes Mágicos">
                            <div class="tour-overlay">
                                <span class="tour-duration">4 Días / 3 Noches</span>
                            </div>
                        </div>
                        <div class="tour-content">
                            <h3>Andes Mágicos</h3>
                            <p>Descubre paisajes únicos y lagunas de colores turquesa en los majestuosos Andes peruanos</p>
                            <div class="tour-price">Desde $899</div>
                        </div>
                    </div>
                    
                    <div class="tour-card">
                        <div class="tour-image">
                            <img src="https://images.unsplash.com/photo-1587595431973-160d0d94add1?w=400&h=300&fit=crop" alt="Cusco Clásico">
                            <div class="tour-overlay">
                                <span class="tour-duration">5 Días / 4 Noches</span>
                            </div>
                        </div>
                        <div class="tour-content">
                            <h3>Cusco Clásico</h3>
                            <p>Explora la antigua capital del Imperio Inca y descubre Machu Picchu, una de las maravillas del mundo</p>
                            <div class="tour-price">Desde $1,299</div>
                        </div>
                    </div>
                    
                    <div class="tour-card">
                        <div class="tour-image">
                            <img src="https://images.unsplash.com/photo-1531065208531-4036c0dba3ca?w=400&h=300&fit=crop" alt="Ruta Sagrada">
                            <div class="tour-overlay">
                                <span class="tour-duration">7 Días / 6 Noches</span>
                            </div>
                        </div>
                        <div class="tour-content">
                            <h3>Ruta Sagrada</h3>
                            <p>Recorre el Valle Sagrado y experimenta la mística de los antiguos caminos incas</p>
                            <div class="tour-price">Desde $1,599</div>
                        </div>
                    </div>
                    
                    <div class="tour-card">
                        <div class="tour-image">
                            <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?w=400&h=300&fit=crop" alt="Aventura Andina">
                            <div class="tour-overlay">
                                <span class="tour-duration">6 Días / 5 Noches</span>
                            </div>
                        </div>
                        <div class="tour-content">
                            <h3>Aventura Andina</h3>
                            <p>Una experiencia completa de trekking y aventura en los paisajes más espectaculares de los Andes</p>
                            <div class="tour-price">Desde $1,199</div>
                        </div>
                    </div>
                    
                    <div class="tour-card">
                        <div class="tour-image">
                            <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&h=300&fit=crop" alt="Amazonía Peruana">
                            <div class="tour-overlay">
                                <span class="tour-duration">5 Días / 4 Noches</span>
                            </div>
                        </div>
                        <div class="tour-content">
                            <h3>Amazonía Peruana</h3>
                            <p>Sumérgete en la biodiversidad de la selva amazónica y descubre su fauna única</p>
                            <div class="tour-price">Desde $1,099</div>
                        </div>
                    </div>
                    

            </div>
            

            
            <div class="tours-pagination" id="tours-pagination">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </section>
    <!-- Por qué elegirnos Section -->
    <section class="por-que-section">
        <div class="por-que-container">
            <div class="por-que-header">
                <h1>¿Por qué elegirnos?</h1>
                <p>Descubre las razones que nos convierten en tu mejor opción para viajar por América del Sur</p>
                <div class="linea"></div>
            </div>
            
            <div class="por-que-grid">
                <div class="por-que-card">
                    <div class="por-que-icon">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="40" cy="40" r="35" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <path d="M25 40L35 50L55 30" stroke="#c9a227" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="40" cy="40" r="8" fill="#c9a227" opacity="0.3"/>
                        </svg>
                    </div>
                    <div class="por-que-content">
                        <h3>Seguridad Garantizada</h3>
                        <p>Contamos con los más altos estándares de seguridad internacional y una flota moderna con mantenimiento riguroso. Tu tranquilidad es nuestra prioridad número uno.</p>
                        <div class="por-que-features">
                            <span class="feature-tag">✓ Certificación IATA</span>
                            <span class="feature-tag">✓ Flota renovada</span>
                            <span class="feature-tag">✓ Pilotos certificados</span>
                        </div>
                    </div>
                </div>
                
                <div class="por-que-card">
                    <div class="por-que-icon">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="40" cy="40" r="35" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <path d="M30 25H50C52.5 25 55 27.5 55 30V50C55 52.5 52.5 55 50 55H30C27.5 55 25 52.5 25 50V30C25 27.5 27.5 25 30 25Z" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <path d="M35 35H45M35 40H45M35 45H40" stroke="#c9a227" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="40" cy="40" r="12" fill="#c9a227" opacity="0.1"/>
                        </svg>
                    </div>
                    <div class="por-que-content">
                        <h3>Experiencia Personalizada</h3>
                        <p>Ofrecemos un servicio personalizado que se adapta a tus necesidades específicas. Desde la reserva hasta el destino, cada detalle está pensado para ti.</p>
                        <div class="por-que-features">
                            <span class="feature-tag">✓ Atención 24/7</span>
                            <span class="feature-tag">✓ Servicio premium</span>
                            <span class="feature-tag">✓ Flexibilidad total</span>
                        </div>
                    </div>
                </div>
                
                <div class="por-que-card">
                    <div class="por-que-icon">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="40" cy="40" r="35" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <path d="M25 45C25 35 32 25 40 25C48 25 55 35 55 45" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <path d="M30 50C30 47 32 45 35 45H45C48 45 50 47 50 50V55H30V50Z" stroke="#c9a227" stroke-width="3" fill="none"/>
                            <circle cx="40" cy="35" r="6" stroke="#c9a227" stroke-width="2" fill="none"/>
                            <circle cx="40" cy="40" r="15" fill="#c9a227" opacity="0.1"/>
                        </svg>
                    </div>
                    <div class="por-que-content">
                        <h3>Tradición y Confianza</h3>
                        <p>Con más de 25 años de experiencia conectando América del Sur, somos la aerolínea de confianza que ha llevado a miles de pasajeros a sus destinos soñados.</p>
                        <div class="por-que-features">
                            <span class="feature-tag">✓ 25+ años experiencia</span>
                            <span class="feature-tag">✓ Miles de vuelos</span>
                            <span class="feature-tag">✓ Reconocimiento internacional</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonios Section -->
    <section class="testimonios-section">
        <div class="testimonios-container">
            <div class="testimonios-header">
                <h1>Lo que dicen nuestros pasajeros</h1>
                <p>Experiencias reales de viajeros que han confiado en nosotros para sus aventuras por los cielos del sur.</p>
                <div class="linea"></div>
            </div>

            <div class="testimonios-grid">
                <div class="testimonio-card">
                    <div class="testimonio-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testimonio-text">"Una experiencia increíble desde el primer momento. El servicio fue excepcional y la atención al detalle impresionante. Definitivamente volaré con ellos nuevamente."</p>
                    <div class="testimonio-author">
                        <div class="author-avatar">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23c9a227'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3EMA%3C/text%3E%3C/svg%3E" alt="María Alejandra">
                        </div>
                        <div class="author-info">
                            <h4>María Alejandra González</h4>
                            <span>Empresaria - Lima, Perú</span>
                        </div>
                    </div>
                </div>

                <div class="testimonio-card">
                    <div class="testimonio-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testimonio-text">"Profesionalismo y seguridad en cada vuelo. La puntualidad y comodidad superaron mis expectativas. Recomiendo totalmente sus servicios."</p>
                    <div class="testimonio-author">
                        <div class="author-avatar">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23800020'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3ECR%3C/text%3E%3C/svg%3E" alt="Carlos Rodríguez">
                        </div>
                        <div class="author-info">
                            <h4>Carlos Rodríguez</h4>
                            <span>Arquitecto - Bogotá, Colombia</span>
                        </div>
                    </div>
                </div>

                <div class="testimonio-card">
                    <div class="testimonio-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testimonio-text">"El mejor servicio de aviación que he experimentado. Desde la reserva hasta el aterrizaje, todo fue perfecto. Un equipo verdaderamente profesional."</p>
                    <div class="testimonio-author">
                        <div class="author-avatar">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23c9a227'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3EAM%3C/text%3E%3C/svg%3E" alt="Ana Martínez">
                        </div>
                        <div class="author-info">
                            <h4>Ana Martínez</h4>
                            <span>Doctora - Quito, Ecuador</span>
                        </div>
                    </div>
                </div>

                <div class="testimonio-card">
                    <div class="testimonio-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testimonio-text">"Excelente atención y vuelos cómodos. La tripulación siempre amable y dispuesta a ayudar. Una experiencia de lujo a precio justo."</p>
                    <div class="testimonio-author">
                        <div class="author-avatar">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23800020'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3EJL%3C/text%3E%3C/svg%3E" alt="Jorge López">
                        </div>
                        <div class="author-info">
                            <h4>Jorge López</h4>
                            <span>Ingeniero - Santiago, Chile</span>
                        </div>
                    </div>
                </div>

                <div class="testimonio-card">
                    <div class="testimonio-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testimonio-text">"Seguridad y confianza en cada vuelo. Me siento tranquila sabiendo que estoy en buenas manos. El servicio personalizado hace la diferencia."</p>
                    <div class="testimonio-author">
                        <div class="author-avatar">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23c9a227'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3ELS%3C/text%3E%3C/svg%3E" alt="Lucía Silva">
                        </div>
                        <div class="author-info">
                            <h4>Lucía Silva</h4>
                            <span>Abogada - Caracas, Venezuela</span>
                        </div>
                    </div>
                </div>

                <div class="testimonio-card">
                    <div class="testimonio-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                    <p class="testimonio-text">"Una aerolínea que realmente se preocupa por sus pasajeros. Vuelos puntuales, servicio excepcional y precios competitivos. Altamente recomendado."</p>
                    <div class="testimonio-author">
                        <div class="author-avatar">
                            <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='60' height='60' viewBox='0 0 60 60'%3E%3Ccircle cx='30' cy='30' r='30' fill='%23800020'/%3E%3Ctext x='30' y='38' text-anchor='middle' fill='white' font-size='24' font-weight='bold'%3ERH%3C/text%3E%3C/svg%3E" alt="Roberto Herrera">
                        </div>
                        <div class="author-info">
                            <h4>Roberto Herrera</h4>
                            <span>Consultor - Buenos Aires, Argentina</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimonios-stats">
                <div class="stat-item">
                    <div class="stat-number">4.9</div>
                    <div class="stat-label">Calificación promedio</div>
                    <div class="stat-stars">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">2,847</div>
                    <div class="stat-label">Reseñas verificadas</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Clientes satisfechos</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Certificaciones Section -->
    <section class="certificaciones-section">
        <div class="certificaciones-container">
            <div class="certificaciones-header">
                <h1>Certificaciones Premium</h1>
                <p>Excelencia certificada en cada vuelo. Nuestros estándares de calidad y seguridad están respaldados por las más prestigiosas organizaciones internacionales de aviación.</p>
                <div class="linea"></div>
            </div>

            <div class="certificaciones-slider">
                <div class="certificaciones-viewport">
                    <div class="certificaciones-track" id="cert-track">
                        <!-- Certificación 1 - IATA -->
                        <div class="certification-item" data-cert="iata">
                            <img src="https://via.placeholder.com/140x140/ffffff/1c1c1c?text=IATA" alt="Certificación IATA" title="International Air Transport Association" data-original-src="path/to/iata-logo.png">
                        </div>
                        <!-- Certificación 2 - ICAO -->
                        <div class="certification-item" data-cert="icao">
                            <img src="https://via.placeholder.com/140x140/ffffff/1c1c1c?text=ICAO" alt="Certificación ICAO" title="International Civil Aviation Organization" data-original-src="path/to/icao-logo.png">
                        </div>
                        <!-- Certificación 3 - ISO 9001 -->
                        <div class="certification-item" data-cert="iso9001">
                            <img src="https://via.placeholder.com/140x140/ffffff/1c1c1c?text=ISO+9001" alt="Certificación ISO 9001" title="Sistema de Gestión de Calidad" data-original-src="path/to/iso9001-logo.png">
                        </div>
                        <!-- Certificación 4 - IOSA -->
                        <div class="certification-item" data-cert="iosa">
                            <img src="https://via.placeholder.com/140x140/ffffff/1c1c1c?text=IOSA" alt="Certificación IOSA" title="IATA Operational Safety Audit" data-original-src="path/to/iosa-logo.png">
                        </div>
                        <!-- Certificación 5 - ANAC -->
                        <div class="certification-item" data-cert="anac">
                            <img src="https://via.placeholder.com/140x140/ffffff/1c1c1c?text=ANAC" alt="Certificación ANAC" title="Administración Nacional de Aviación Civil" data-original-src="path/to/anac-logo.png">
                        </div>
                        <!-- Certificación 6 - SKYTRAX -->
                        <div class="certification-item" data-cert="skytrax">
                            <img src="https://via.placeholder.com/140x140/ffffff/1c1c1c?text=SKYTRAX" alt="Certificación Skytrax" title="World Airline Rating" data-original-src="path/to/skytrax-logo.png">
                        </div>
                        <!-- Certificación 7 - APEX -->
                        <div class="certification-item" data-cert="apex">
                            <img src="https://via.placeholder.com/140x140/ffffff/1c1c1c?text=APEX" alt="Certificación APEX" title="Airline Passenger Experience Association" data-original-src="path/to/apex-logo.png">
                        </div>
                    </div>
                </div>
            </div>

            <div class="cert-pagination" id="cert-pagination">
                <span class="dot active"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
    </section>
    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="faq-container">
            <div class="faq-header">
                <h1>Preguntas Frecuentes</h1>
                <p>Encuentra respuestas a las preguntas más comunes sobre nuestros servicios</p>
            </div>
            
            <div class="faq-grid">
                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿Qué servicios de aerolínea ofrecen?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Ofrecemos vuelos nacionales e internacionales con la más alta calidad de servicio. Nuestras rutas cubren las principales ciudades del país y destinos internacionales selectos, con opciones de clase económica, ejecutiva y primera clase.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿Cómo puedo hacer una reserva?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Puedes hacer tu reserva a través de nuestro sitio web, llamando a nuestro centro de atención al cliente, o visitando una de nuestras oficinas. También ofrecemos una aplicación móvil para reservas rápidas y gestión de vuelos.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿Cuál es la política de equipaje?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Permitimos equipaje de mano de hasta 8kg y equipaje facturado de hasta 23kg en clase económica. Las clases superiores tienen límites más generosos. Consulta nuestra página de políticas para detalles específicos sobre dimensiones y restricciones.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿Puedo cambiar o cancelar mi vuelo?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Sí, ofrecemos opciones flexibles para cambios y cancelaciones. Las políticas varían según el tipo de tarifa adquirida. Los cambios pueden estar sujetos a diferencias tarifarias y cargos administrativos según las condiciones de tu boleto.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿Qué medidas de seguridad implementan?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Cumplimos con todos los estándares internacionales de seguridad aérea. Nuestras aeronaves reciben mantenimiento regular certificado, nuestros pilotos tienen entrenamiento continuo, y seguimos protocolos estrictos de seguridad en tierra y vuelo.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">
                        <h3>¿Ofrecen programas de viajero frecuente?</h3>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Sí, nuestro programa "Cielos del Sur" ofrece beneficios exclusivos como acumulación de millas, upgrades gratuitos, acceso a salas VIP, y prioridad en check-in. Únete gratis y comienza a disfrutar de privilegios desde tu primer vuelo.</p>
                    </div>
                </div>
            </div>

            <div class="contact-section">
                <h2>¿No encontraste lo que buscabas?</h2>
                <p>Nuestro equipo está aquí para ayudarte</p>
                <div class="contact-buttons">
                    <a href="tel:+1234567890" class="contact-btn call-btn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        Llamar Ahora
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection