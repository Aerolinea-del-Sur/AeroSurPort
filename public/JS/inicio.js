
    function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            
            mobileMenu.classList.toggle('active');
            mobileMenuBtn.classList.toggle('active');
        }

        // Close mobile menu when clicking outside
        document.addEventListener('click', function(event) {
            const mobileMenu = document.getElementById('mobileMenu');
            const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
            
            if (!mobileMenu.contains(event.target) && !mobileMenuBtn.contains(event.target)) {
                mobileMenu.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
            }
        });

        // Efecto de scroll en el encabezado
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            const scrolled = window.pageYOffset;
            
            if (scrolled > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Close mobile menu on window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                const mobileMenu = document.getElementById('mobileMenu');
                const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
                mobileMenu.classList.remove('active');
                mobileMenuBtn.classList.remove('active');
            }
        });

        // Footer accordion for mobile devices
        document.addEventListener('DOMContentLoaded', function() {
            const footerTitles = document.querySelectorAll('.footer-title');
            
            footerTitles.forEach(title => {
                title.addEventListener('click', function() {
                    // Solo activar en dispositivos móviles
                    if (window.innerWidth <= 480) {
                        const column = this.parentElement;
                        column.classList.toggle('active');
                    }
                });
            });

            // Reiniciar acordeón en cambio de tamaño
            window.addEventListener('resize', function() {
                if (window.innerWidth > 480) {
                    const activeColumns = document.querySelectorAll('.footer-column.active');
                    activeColumns.forEach(column => {
                        column.classList.remove('active');
                    });
                }
            });
        });

        // FAQ functionality
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                
                question.addEventListener('click', function() {
                    const isActive = item.classList.contains('active');
                    
                    // Close all other FAQ items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.classList.remove('active');
                        }
                    });
                    
                    // Toggle current item
                    if (isActive) {
                        item.classList.remove('active');
                    } else {
                        item.classList.add('active');
                    }
                });
            });

            // Handle hash navigation for FAQ items
            function handleHashNavigation() {
                const hash = window.location.hash;
                if (hash && hash.startsWith('#faq-')) {
                    const faqIndex = parseInt(hash.replace('#faq-', '')) - 1;
                    if (faqIndex >= 0 && faqIndex < faqItems.length) {
                        faqItems[faqIndex].classList.add('active');
                        faqItems[faqIndex].scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                }
            }

            // Handle hash navigation on page load and hash change
            handleHashNavigation();
            window.addEventListener('hashchange', handleHashNavigation);

            // Contact button analytics (optional)
            const contactButtons = document.querySelectorAll('.contact-btn');
            contactButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    const buttonType = this.classList.contains('whatsapp-btn') ? 'WhatsApp' : 'Phone';
                    console.log(`Contact button clicked: ${buttonType}`);
                    // Add analytics tracking here if needed
                });
            });

            // Smooth scroll animation for FAQ section
            const faqSection = document.querySelector('.faq-section');
            if (faqSection) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.style.opacity = '1';
                            entry.target.style.transform = 'translateY(0)';
                        }
                    });
                }, { threshold: 0.1 });

                faqSection.style.opacity = '0';
                faqSection.style.transform = 'translateY(20px)';
                faqSection.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(faqSection);
            }
        });

    // Slider de Certificaciones - Versión Simple
    class CertificationSlider {
        constructor() {
            this.currentSlide = 0;
            this.totalSlides = document.querySelectorAll('.certification-item').length;
            this.slidesToShow = this.getSlidesToShow();
            this.maxSlide = Math.max((0, this.totalSlides - this.slidesToShow)-1);
            this.isTransitioning = false;
            this.init();
        }

        getSlidesToShow() {
            const width = window.innerWidth;
            if (width <= 480) return 2;
            if (width <= 768) return 3;
            if (width <= 1024) return 4;
            return 5;
        }

        init() {
            this.createPagination();
            this.updateSlider();
            this.bindEvents();
        }

        createPagination() {
            const pagination = document.querySelector('.cert-pagination');
            if (!pagination) return;
            
            pagination.innerHTML = '';
            const totalPages = this.maxSlide + 1;
            
            for (let i = 0; i <= this.maxSlide; i++) {
                const dot = document.createElement('div');
                dot.className = 'dot';
                if (i === this.currentSlide) {
                    dot.classList.add('active');
                }
                dot.addEventListener('click', () => this.goToSlide(i));
                pagination.appendChild(dot);
            }
        }

        updateSlider() {
            const track = document.querySelector('.certificaciones-track');
            if (!track) return;
            
            const itemWidth = 210; // 160px + 50px margin
            const translateX = -this.currentSlide * itemWidth;
            track.style.transform = `translateX(${translateX}px)`;
            
            // Update pagination
            const dots = document.querySelectorAll('.cert-pagination .dot');
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === this.currentSlide);
            });
        }

        goToSlide(slideIndex) {
            if (this.isTransitioning) return;
            
            this.currentSlide = Math.max(0, Math.min(slideIndex, this.maxSlide));
            this.updateSlider();
        }

        nextSlide() {
            if (this.isTransitioning) return;
            
            this.isTransitioning = true;
            this.currentSlide = Math.min(this.currentSlide + 1, this.maxSlide);
            this.updateSlider();
            
            setTimeout(() => {
                this.isTransitioning = false;
            }, 400);
        }

        prevSlide() {
            if (this.isTransitioning) return;
            
            this.isTransitioning = true;
            this.currentSlide = Math.max(this.currentSlide - 1, 0);
            this.updateSlider();
            
            setTimeout(() => {
                this.isTransitioning = false;
            }, 400);
        }

        bindEvents() {
            // Handle window resize
            window.addEventListener('resize', () => {
                this.slidesToShow = this.getSlidesToShow();
                this.maxSlide = Math.max(0, this.totalSlides - this.slidesToShow);
                this.currentSlide = Math.min(this.currentSlide, this.maxSlide);
                this.createPagination();
                this.updateSlider();
            });
        }
    }

    // Slider de Tours - Versión Simple
    class ToursSlider {
        constructor() {
            this.slider = document.getElementById('tours-slider');
            this.pagination = document.getElementById('tours-pagination');
            this.cards = this.slider ? this.slider.children : [];
            this.totalCards = this.cards.length;
            this.currentIndex = 0;
            this.slidesToShow = this.getSlidesToShow();
            this.maxIndex = Math.max(0, this.totalCards - this.slidesToShow);
            this.isTransitioning = false;
            
            if (this.slider && this.totalCards > 0) {
                this.init();
            }
        }
        
        getSlidesToShow() {
            const width = window.innerWidth;
            if (width <= 480) return 1;
            if (width <= 768) return 1;
            if (width <= 1024) return 2;
            return 3;
        }
        
        init() {
            this.createPagination();
            this.updateSlider();
            this.bindEvents();
        }
        
        createPagination() {
            if (!this.pagination) return;
            
            this.pagination.innerHTML = '';
            
            for (let i = 0; i <= this.maxIndex; i++) {
                const dot = document.createElement('span');
                dot.classList.add('dot');
                if (i === this.currentIndex) {
                    dot.classList.add('active');
                }
                dot.addEventListener('click', () => this.goToSlide(i));
                this.pagination.appendChild(dot);
            }
        }
        
        updateSlider() {
            if (!this.slider || this.isTransitioning) return;
            
            // Responsive card width calculation
            const width = window.innerWidth;
            let cardWidth, margin;
            
            if (width <= 360) {
                cardWidth = 220;
                margin = 20;
            } else if (width <= 480) {
                cardWidth = 250;
                margin = 24;
            } else if (width <= 768) {
                cardWidth = 280;
                margin = 30;
            } else if (width <= 1024) {
                cardWidth = 320;
                margin = 36;
            } else if (width <= 1200) {
                cardWidth = 340;
                margin = 40;
            } else {
                cardWidth = 370;
                margin = 50;
            }
            
            const totalCardWidth = cardWidth + margin;
            const translateX = -this.currentIndex * totalCardWidth;
            this.slider.style.transform = `translateX(${translateX}px)`;
            
            // Update pagination
            const dots = this.pagination ? this.pagination.querySelectorAll('.dot') : [];
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === this.currentIndex);
            });
        }
        
        goToSlide(slideIndex) {
            if (this.isTransitioning) return;
            
            this.currentIndex = Math.max(0, Math.min(slideIndex, this.maxIndex));
            this.updateSlider();
        }
        
        nextSlide() {
            if (this.isTransitioning) return;
            
            this.isTransitioning = true;
            this.currentIndex = Math.min(this.currentIndex + 1, this.maxIndex);
            this.updateSlider();
            
            setTimeout(() => {
                this.isTransitioning = false;
            }, 600);
        }
        
        prevSlide() {
            if (this.isTransitioning) return;
            
            this.isTransitioning = true;
            this.currentIndex = Math.max(this.currentIndex - 1, 0);
            this.updateSlider();
            
            setTimeout(() => {
                this.isTransitioning = false;
            }, 600);
        }
        
        bindEvents() {
            // Handle window resize
            window.addEventListener('resize', () => {
                this.slidesToShow = this.getSlidesToShow();
                this.maxIndex = Math.max(0, this.totalCards - this.slidesToShow);
                this.currentIndex = Math.min(this.currentIndex, this.maxIndex);
                this.createPagination();
                this.updateSlider();
            });
        }
    }

    // Función para actualizar las imágenes de certificaciones
    function updateCertificationImages(imageMap) {
        Object.keys(imageMap).forEach(certKey => {
            const certItem = document.querySelector(`[data-cert="${certKey}"]`);
            if (certItem) {
                const img = certItem.querySelector('img');
                if (img && imageMap[certKey]) {
                    img.src = imageMap[certKey];
                    img.removeAttribute('data-original-src');
                }
            }
        });
    }

    // Inicializar sliders cuando el DOM esté listo
    document.addEventListener('DOMContentLoaded', function() {
        new CertificationSlider();
        new ToursSlider();
    });