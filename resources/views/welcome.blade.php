<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- BUSQUEDA GOOGLE -->
            <title>aerolineas del sur</title>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta name="description" content="" />
            <meta name="keywords" content="" />
            <meta name="author" content="" />
        <!-- CONEXION A TIPOGRAFIAS -->
            <!-- Playfair Display Preconexión para fuentes de Google (mejora velocidad de carga) -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <!-- Precarga de ambas fuentes (Google + local) -->
            <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap">
            <link rel="preload" as="font" href="/fonts/playfair-display.woff2" type="font/woff2" crossorigin>
            <!-- Carga el CSS de fuentes de forma no bloqueante -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" media="print" onload="this.media='all'">
            <!-- Fallback para navegadores sin JavaScript -->
            <noscript>
                <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap">
            </noscript>
        <!-- CONEXION A ESTILOS 
            <link rel="stylesheet" href="/css/princi.css">
            <link rel="stylesheet" href="/js/princi.js">-->
        
        <!-- METAETIQUETAS -->
            <!-- Open Graph (FACEBOOK) -->
            <meta property="og:title" content="Aerolineas del Sur - Viajes VIP">
            <meta property="og:description" content="Descubre experiencias únicas y personalizadas.">
            <meta property="og:image" content="https://tusitio.com/imagenes/og-image.jpg"><!-- Fala -->
            <meta property="og:url" content="https://russellexperienceperutravel.com"><!-- Fala -->
            <meta property="og:type" content="website"><!-- Fala -->
            <meta property="og:site_name" content="Russell Experience">
            <meta property="og:locale" content="es_PE">
            <meta property="og:locale:alternate" content="en_US">
            <meta property="og:locale:alternate" content="fr_FR">
            
            <!-- Twitter Card 
            <meta name="twitter:card" content="summary_large_image">
            <meta name="twitter:title" content="Russell Experience - Turismo Sostenible en Perú">
            <meta name="twitter:description" content="Descubre experiencias únicas y personalizadas en Perú con Russell Experience.">
            <meta name="twitter:image" content="https://tusitio.com/imagenes/twitter-image.jpg">
            /* Datos estructurados (JSON-LD)*/
            <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Organization",
                "name": "Russell Experience",
                "url": "https://tusitio.com",
                "logo": "https://tusitio.com/imagenes/logo.png",
                "contactPoint": {
                    "@type": "ContactPoint",
                    "telephone": "+51 946 033 024",
                    "contactType": "Customer Service"
                }
            } 
            </script>-->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <!--<link rel="stylesheet" id="frase-style-css" href="./style.css" media="all">-->
            <style>
                :root {
            /* Paleta de colores de lujo */
            --primary-black: #000000;
            --primary-gold: #C9A227;
            --primary-gold-alt: #FFD700;
            --secondary-white: #FFFFFF;
            --secondary-charcoal: #1C1C1C;
            --secondary-charcoal-alt: #2B2B2B;
            --secondary-pearl: #E6E6E6;
            --secondary-burgundy: #800020;
            --secondary-bottle-green: #0B3D2E;
            
            /* Variables principales */
            --primary: var(--primary-black);
            --accent: var(--primary-gold);
            --accent-light: var(--primary-gold-alt);
            --white: var(--secondary-white);
            --charcoal: var(--secondary-charcoal);
            --charcoal-alt: var(--secondary-charcoal-alt);
            --pearl: var(--secondary-pearl);
            --burgundy: var(--secondary-burgundy);
            --bottle-green: var(--secondary-bottle-green);
            
            /* Fondos de cristal con elegancia */
            --glass-bg: rgba(28, 28, 28, 0.9);
            --glass-bg-solid: rgba(0, 0, 0, 0.95);
            --glass-bg-light: rgba(230, 230, 230, 0.9);
            
            /* Sombras elegantes */
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.3), 0 2px 4px -1px rgba(0, 0, 0, 0.2);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.4), 0 10px 10px -5px rgba(0, 0, 0, 0.2);
            --shadow-gold: 0 8px 25px rgba(201, 162, 39, 0.4);
            
            --transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            --header-height: 80px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Space Grotesk', sans-serif;
            background: linear-gradient(135deg, var(--primary-black) 0%, var(--charcoal) 50%, var(--charcoal-alt) 100%);
            color: var(--white);
            line-height: 1.6;
            overflow-x: hidden;
            padding-top: var(--header-height);
        }

        /* STICKY HEADER */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 50;
            background: var(--glass-bg);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--accent);
            box-shadow: var(--shadow-lg);
            transition: var(--transition);
            height: var(--header-height);
        }
        
        .header.scrolled {
            background: var(--glass-bg-solid);
            box-shadow: var(--shadow-lg);
            height: 70px;
            border-bottom: 2px solid var(--accent);
        }

        .header:hover {
            box-shadow: var(--shadow-gold);
            border-bottom-color: var(--accent-light);
        }

        .header-container {
            padding: 16px 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1400px;
            margin: 0 auto;
            height: 100%;
            transition: var(--transition);
        }
        
        .header.scrolled .header-container {
            padding: 10px 32px;
        }

        /* ANIMATED LOGO */
        .logo {
            font-size: 28px;
            font-weight: 700;
            color: var(--accent);
            text-decoration: none;
            letter-spacing: -0.03em;
            position: relative;
            transition: var(--transition);
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .header.scrolled .logo {
            font-size: 24px;
        }

        .logo::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--accent) 0%, var(--accent-light) 100%);
            border-radius: 2px;
            transition: var(--transition);
            box-shadow: 0 2px 8px rgba(201, 162, 39, 0.4);
        }

        .logo:hover::after {
            width: 100%;
        }

        .logo:hover {
            transform: translateY(-1px);
            color: var(--accent-light);
            text-shadow: 0 4px 8px rgba(255, 215, 0, 0.3);
        }

        /* PILL NAVIGATION */
        .nav {
            display: flex;
            align-items: center;
            gap: 8px;
            background: rgba(28, 28, 28, 0.8);
            border-radius: 16px;
            padding: 8px;
            backdrop-filter: blur(10px);
            border: 1px solid var(--accent);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            color: var(--pearl);
            text-decoration: none;
            font-weight: 500;
            font-size: 15px;
            padding: 12px 20px;
            border-radius: 12px;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            gap: 6px;
            cursor: pointer;
        }
        
        .header.scrolled .nav-link {
            padding: 10px 16px;
            font-size: 14px;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, var(--accent) 0%, var(--accent-light) 100%);
            transition: var(--transition);
            z-index: -1;
        }

        .nav-link:hover::before {
            left: 0;
        }

        .nav-link:hover {
            color: var(--primary-black);
            transform: translateY(-2px);
            box-shadow: var(--shadow-gold);
            font-weight: 600;
        }

        .nav-arrow {
            width: 16px;
            height: 16px;
            transition: var(--transition);
        }

        .nav-item:hover .nav-arrow {
            transform: rotate(180deg);
        }

        .pricing-link {
            color: var(--pearl);
            text-decoration: none;
            font-weight: 500;
            font-size: 15px;
            padding: 12px 20px;
            border-radius: 12px;
            transition: var(--transition);
        }

        .pricing-link:hover {
            color: var(--primary-black);
            background: linear-gradient(90deg, var(--accent) 0%, var(--accent-light) 100%);
            transform: translateY(-2px);
            box-shadow: var(--shadow-gold);
            font-weight: 600;
        }

        /* FUTURISTIC DROPDOWNS */
        .dropdown {
            position: absolute;
            top: calc(100% + 20px);
            left: 50%;
            transform: translateX(-50%);
            width: 720px;
            background: rgba(28, 28, 28, 0.95);
            backdrop-filter: blur(20px);
            border: 2px solid var(--accent);
            border-radius: 24px;
            padding: 32px;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            z-index: 1000;
            box-shadow: var(--shadow-lg), 0 0 30px rgba(201, 162, 39, 0.3);
        }

        .nav-item:hover .dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }

        .dropdown-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 32px;
        }

        .dropdown-section {
            
        }

        .dropdown-title {
            color: var(--accent);
            font-size: 16px;
            font-weight: 600;
            margin: 0 0 20px 0;
            display: flex;
            align-items: center;
            gap: 8px;
            letter-spacing: -0.01em;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .dropdown-title svg {
            width: 20px;
            height: 20px;
            stroke: var(--accent-light);
        }

        .dropdown-links {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .dropdown-link {
            display: flex;
            align-items: flex-start;
            gap: 16px;
            padding: 16px;
            border-radius: 16px;
            text-decoration: none;
            transition: var(--transition);
            background: rgba(43, 43, 43, 0.6);
            border: 1px solid rgba(201, 162, 39, 0.3);
        }

        .dropdown-link:hover {
            background: rgba(201, 162, 39, 0.15);
            border-color: var(--accent);
            transform: translateY(-2px);
            box-shadow: var(--shadow-gold);
        }

        .dropdown-icon {
            width: 48px;
            height: 48px;
            background: rgba(201, 162, 39, 0.15);
            border: 1px solid var(--accent);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: var(--transition);
        }

        .dropdown-link:hover .dropdown-icon {
            background: rgba(201, 162, 39, 0.3);
            border-color: var(--accent-light);
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(201, 162, 39, 0.4);
        }

        .dropdown-icon svg {
            width: 20px;
            height: 20px;
            stroke: var(--accent);
        }

        .dropdown-content h4 {
            color: var(--white);
            font-size: 16px;
            font-weight: 600;
            margin: 0 0 6px 0;
            letter-spacing: -0.01em;
        }

        .dropdown-content p {
            color: var(--pearl);
            font-size: 14px;
            margin: 0;
            line-height: 1.4;
            font-weight: 400;
        }

        /* FEATURED CARD IN DROPDOWN */
        .featured-card {
            background: linear-gradient(135deg, rgba(128, 0, 32, 0.2) 0%, rgba(11, 61, 46, 0.15) 100%);
            border: 2px solid var(--burgundy);
            border-radius: 20px;
            padding: 24px;
            display: flex;
            align-items: flex-start;
            gap: 20px;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .featured-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(201, 162, 39, 0.1) 0%, rgba(255, 215, 0, 0.05) 100%);
            opacity: 0;
            transition: var(--transition);
        }

        .featured-card:hover::before {
            opacity: 1;
        }

        .featured-card:hover {
            border-color: var(--accent);
            transform: translateY(-2px);
            box-shadow: var(--shadow-gold), 0 0 20px rgba(128, 0, 32, 0.3);
        }

        .featured-badge {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
            border-radius: 16px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            color: var(--primary-black);
            font-size: 12px;
            position: relative;
            z-index: 1;
            box-shadow: 0 4px 12px rgba(201, 162, 39, 0.4);
        }

        .featured-content {
            position: relative;
            z-index: 1;
        }

        .featured-content h4 {
            color: var(--white);
            font-size: 16px;
            font-weight: 600;
            margin: 0 0 8px 0;
            letter-spacing: -0.01em;
        }

        .featured-content p {
            color: var(--pearl);
            font-size: 14px;
            margin: 0;
            line-height: 1.5;
            font-weight: 400;
        }

        /* GRADIENT BUTTONS */
        .header-cta {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .btn-login {
            color: var(--pearl);
            text-decoration: none;
            font-weight: 500;
            font-size: 15px;
            padding: 12px 20px;
            border-radius: 12px;
            transition: var(--transition);
            border: 1px solid var(--accent);
            background: rgba(28, 28, 28, 0.8);
        }

        .btn-login:hover {
            background: var(--charcoal-alt);
            color: var(--accent);
            transform: translateY(-2px);
            box-shadow: var(--shadow-gold);
            border-color: var(--accent-light);
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
            color: var(--primary-black);
            text-decoration: none;
            font-weight: 600;
            font-size: 15px;
            padding: 12px 24px;
            border-radius: 12px;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            border: 2px solid transparent;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, var(--accent-light) 0%, var(--accent) 100%);
            opacity: 0;
            transition: var(--transition);
        }

        .btn-primary:hover::before {
            opacity: 1;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-gold);
            border-color: var(--accent-light);
        }

        .btn-primary span {
            position: relative;
            z-index: 1;
        }

        /* FLOATING MOBILE BUTTON */
        .mobile-menu-btn {
            display: none;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            background: rgba(28, 28, 28, 0.9);
            border: 1px solid var(--accent);
            border-radius: 16px;
            cursor: pointer;
            transition: var(--transition);
            backdrop-filter: blur(10px);
            color: var(--accent);
        }
        
        .header.scrolled .mobile-menu-btn {
            width: 42px;
            height: 42px;
        }

        .mobile-menu-btn:hover {
            background: var(--charcoal-alt);
            transform: scale(1.05);
            box-shadow: var(--shadow-gold);
            border-color: var(--accent-light);
        }

        .mobile-menu-btn svg {
            transition: var(--transition);
        }

        .mobile-menu-btn.active svg {
            transform: rotate(90deg);
        }

        /* FLOATING MOBILE MENU */
        .mobile-menu {
            position: fixed;
            top: var(--header-height);
            left: 50%;
            transform: translateX(-50%) translateY(-20px);
            width: calc(100% - 32px);
            max-width: 400px;
            background: rgba(28, 28, 28, 0.95);
            backdrop-filter: blur(20px);
            border: 2px solid var(--accent);
            border-radius: 24px;
            padding: 24px;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition);
            z-index: 40;
            box-shadow: var(--shadow-lg), 0 0 30px rgba(201, 162, 39, 0.3);
        }

        .mobile-menu.active {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }

        .mobile-nav {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .mobile-nav-link {
            color: var(--pearl);
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            padding: 16px 20px;
            border-radius: 16px;
            transition: var(--transition);
            background: rgba(43, 43, 43, 0.6);
            border: 1px solid rgba(201, 162, 39, 0.3);
            text-align: center;
        }

        .mobile-nav-link:hover {
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
            color: var(--primary-black);
            transform: translateY(-2px);
            box-shadow: var(--shadow-gold);
        }

        .mobile-cta {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid var(--accent);
        }

        .mobile-btn {
            padding: 16px 24px;
            text-align: center;
            text-decoration: none;
            font-weight: 600;
            border-radius: 16px;
            transition: var(--transition);
            font-size: 16px;
        }

        .mobile-btn-login {
            color: var(--pearl);
            background: rgba(28, 28, 28, 0.8);
            border: 1px solid var(--accent);
        }

        .mobile-btn-login:hover {
            background: var(--charcoal-alt);
            color: var(--accent);
            box-shadow: var(--shadow-gold);
        }

        .mobile-btn-primary {
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
            color: var(--primary-black);
            border: 2px solid transparent;
        }

        .mobile-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-gold);
            border-color: var(--accent-light);
        }

        /* HERO CONTENT */
        .demo-content {
            margin-top: 40px;
            padding: 100px 24px 120px;
            text-align: center;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            position: relative;
        }

        .demo-content::before {
            content: '';
            position: absolute;
            top: -50px;
            left: 50%;
            transform: translateX(-50%);
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(0, 255, 148, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            z-index: -1;
        }

        .demo-content h1 {
            font-size: clamp(36px, 5vw, 64px);
            font-weight: 700;
            color: var(--white);
            margin: 0 0 24px 0;
            line-height: 1.1;
            letter-spacing: -0.03em;
            text-shadow: 0 0 30px rgba(201, 162, 39, 0.3);
        }

        .demo-content .highlight {
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .demo-content p {
            font-size: 20px;
            color: var(--pearl);
            margin: 0 0 48px 0;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 400;
        }

        .demo-cta {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 20px 40px;
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
            color: var(--primary-black);
            text-decoration: none;
            font-weight: 600;
            font-size: 18px;
            border-radius: 20px;
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            border: 2px solid transparent;
        }

        .demo-cta::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, var(--accent-light) 0%, var(--accent) 100%);
            opacity: 0;
            transition: var(--transition);
        }

        .demo-cta:hover::before {
            opacity: 1;
        }

        .demo-cta:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-gold), 0 0 40px rgba(201, 162, 39, 0.4);
            border-color: var(--accent-light);
        }

        .demo-cta span {
            position: relative;
            z-index: 1;
        }

        .demo-cta svg {
            position: relative;
            z-index: 1;
            transition: var(--transition);
        }

        .demo-cta:hover svg {
            transform: translateX(4px);
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .header {
                top: 12px;
                width: calc(100% - 24px);
            }
            
            .header-container {
                padding: 12px 20px;
            }
            
            .nav {
                display: none;
            }
            
            .header-cta {
                display: none;
            }
            
            .mobile-menu-btn {
                display: flex;
            }
            
            .demo-content {
                margin-top: 100px;
                padding: 60px 20px 80px;
            }
            
            .demo-content p {
                font-size: 18px;
            }
            
            .demo-cta {
                padding: 16px 32px;
                font-size: 16px;
            }
        }

        @media (min-width: 769px) {
            .mobile-menu {
                display: none;
            }
        }
        
        @media (max-width: 1024px) {
            .footer-links {
                grid-template-columns: repeat(3, 1fr);
                gap: 32px;
            }
        }
        
        @media (max-width: 768px) {
            .footer-links {
                grid-template-columns: repeat(2, 1fr);
                gap: 32px;
            }
            
            .newsletter-content {
                grid-template-columns: 1fr;
                gap: 24px;
            }
        }
        
        @media (max-width: 480px) {
            .footer-links {
                grid-template-columns: 1fr;
                gap: 32px;
            }
            
            .footer-bottom {
                flex-direction: column;
                gap: 24px;
            }
            
            .footer-legal {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            
            .legal-links {
                flex-direction: column;
                align-items: center;
                gap: 12px;
            }
        }

        /* ANIMATIONS */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .logo:hover {
            animation: float 2s ease-in-out infinite;
        }

        /* PREMIUM FOOTER */
        .footer {
            background: linear-gradient(135deg, var(--primary-black) 0%, var(--charcoal) 100%);
            color: var(--white);
            position: relative;
            overflow: hidden;
            border-top: 2px solid var(--accent);
        }

        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 80%, rgba(201, 162, 39, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(201, 162, 39, 0.05) 0%, transparent 50%);
            pointer-events: none;
        }

        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 80px 32px 32px;
            position: relative;
            z-index: 1;
        }

        /* Main Footer Content */
        .footer-main {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 80px;
            margin-bottom: 60px;
        }

        .footer-brand {
            max-width: 400px;
        }

        .footer-logo {
            font-size: 36px;
            font-weight: 700;
            color: var(--white);
            margin-bottom: 24px;
            letter-spacing: -0.03em;
        }

        .footer-tagline {
            font-size: 16px;
            color: var(--pearl);
            line-height: 1.6;
            margin-bottom: 32px;
            font-weight: 400;
        }

        .footer-social {
            display: flex;
            gap: 16px;
        }

        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            background: rgba(43, 43, 43, 0.6);
            border-radius: 12px;
            color: var(--pearl);
            text-decoration: none;
            transition: var(--transition);
            backdrop-filter: blur(10px);
            border: 1px solid var(--accent);
        }

        .social-link:hover {
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
            color: var(--primary-black);
            transform: translateY(-2px);
            border-color: var(--accent-light);
            box-shadow: var(--shadow-gold);
        }

        /* Footer Links Grid */
        .footer-links {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 24px;
        }

        .footer-column {
            display: flex;
            flex-direction: column;
        }

        .footer-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--white);
            margin-bottom: 20px;
            letter-spacing: -0.01em;
        }

        .footer-list {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .footer-list li {
            margin-bottom: 12px;
        }

        .footer-link {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            font-size: 15px;
            font-weight: 400;
            transition: var(--transition);
            position: relative;
            display: inline-block;
        }

        .footer-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: linear-gradient(90deg, var(--accent) 0%, var(--accent-light) 100%);
            transition: var(--transition);
        }

        .footer-link:hover {
            color: var(--white);
            transform: translateX(4px);
        }

        .footer-link:hover::after {
            width: 100%;
        }

        /* Newsletter Section */
        .footer-newsletter {
            background: rgba(43, 43, 43, 0.6);
            border: 2px solid var(--accent);
            border-radius: 24px;
            padding: 40px;
            margin-bottom: 60px;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 30px rgba(201, 162, 39, 0.2);
        }

        .newsletter-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .newsletter-text h3 {
            font-size: 24px;
            font-weight: 600;
            color: var(--white);
            margin-bottom: 12px;
            letter-spacing: -0.02em;
        }

        .newsletter-text p {
            color: var(--pearl);
            font-size: 16px;
            line-height: 1.5;
        }

        .newsletter-form {
            width: 100%;
        }

        .input-group {
            display: flex;
            gap: 12px;
            margin-bottom: 12px;
        }

        .newsletter-input {
            flex: 1;
            padding: 16px 20px;
            background: rgba(28, 28, 28, 0.8);
            border: 1px solid var(--accent);
            border-radius: 12px;
            color: var(--white);
            font-size: 15px;
            outline: none;
            transition: var(--transition);
            backdrop-filter: blur(10px);
        }

        .newsletter-input::placeholder {
            color: var(--pearl);
        }

        .newsletter-input:focus {
            border-color: var(--accent-light);
            background: var(--charcoal-alt);
            box-shadow: var(--shadow-gold);
        }

        .newsletter-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 16px 24px;
            background: linear-gradient(135deg, var(--accent) 0%, var(--accent-light) 100%);
            color: var(--primary-black);
            border: 2px solid transparent;
            border-radius: 12px;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            transition: var(--transition);
            white-space: nowrap;
        }

        .newsletter-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-gold);
            border-color: var(--accent-light);
        }

        .newsletter-disclaimer {
            color: var(--pearl);
            font-size: 13px;
            text-align: right;
        }

        /* Footer Bottom */
        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 32px;
            border-top: 1px solid var(--accent);
        }

        .footer-legal {
            display: flex;
            align-items: center;
            gap: 32px;
        }

        .copyright {
            color: var(--pearl);
            font-size: 14px;
            margin: 0;
        }

        .legal-links {
            display: flex;
            gap: 24px;
        }

        .legal-link {
            color: var(--pearl);
            text-decoration: none;
            font-size: 14px;
            transition: var(--transition);
        }

        .legal-link:hover {
            color: var(--accent);
        }

        .footer-badges {
            display: flex;
            gap: 24px;
        }

        .badge {
            display: flex;
            align-items: center;
            gap: 8px;
            color: rgba(255, 255, 255, 0.6);
            font-size: 13px;
            font-weight: 500;
        }

        .badge svg {
            color: var(--accent);
        }

        /* Responsive Footer */
        @media (max-width: 1200px) {
            .footer-main {
                grid-template-columns: 1fr;
                gap: 60px;
            }

            .footer-links {
                grid-template-columns: repeat(3, 1fr);
                gap: 40px;
            }

            .newsletter-content {
                grid-template-columns: 1fr;
                gap: 32px;
            }
        }

        @media (max-width: 1024px) {
            .footer-links {
                grid-template-columns: repeat(2, 1fr);
                gap: 40px;
            }
        }

        @media (max-width: 768px) {
            .footer-container {
                padding: 60px 24px 24px;
            }

            .footer-main {
                gap: 48px;
            }

            .footer-links {
                grid-template-columns: repeat(2, 1fr);
                gap: 32px 20px; /* Reducir el espacio horizontal entre columnas */
                row-gap: 40px; /* Aumentar el espacio vertical entre filas */
            }

            .footer-column {
                padding-right: 10px; /* Añadir un poco de espacio a la derecha */
            }

            .footer-newsletter {
                padding: 32px 24px;
                margin-bottom: 40px;
            }

            .newsletter-text h3 {
                font-size: 20px;
            }

            .input-group {
                flex-direction: column;
                gap: 16px;
            }

            .newsletter-input {
                width: 100%;
            }

            .newsletter-btn {
                width: 100%;
                justify-content: center;
            }

            .newsletter-disclaimer {
                text-align: left;
                margin-top: 16px;
            }

            .footer-bottom {
                flex-direction: column;
                gap: 24px;
                align-items: flex-start;
            }

            .footer-legal {
                flex-direction: column;
                gap: 16px;
                align-items: flex-start;
                width: 100%;
            }

            .legal-links {
                flex-wrap: wrap;
                gap: 16px;
                width: 100%;
            }

            .footer-badges {
                flex-direction: column;
                gap: 12px;
                width: 100%;
            }
        }

        /* Específico para tablets con resolución 768x872 */
        @media (min-width: 768px) and (max-width: 872px) {
            .footer-links {
                grid-template-columns: repeat(2, 1fr);
                gap: 30px 15px;
            }

            .footer-column {
                padding-right: 5px;
            }

            .footer-title {
                font-size: 16px;
                margin-bottom: 16px;
            }

            .footer-link {
                font-size: 14px;
            }

            .newsletter-content {
                grid-template-columns: 1fr;
                gap: 24px;
            }

            .newsletter-text h3 {
                font-size: 18px;
            }

            .newsletter-text p {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .footer-container {
                padding: 40px 16px 16px;
            }

            .footer-main {
                margin-bottom: 40px;
            }

            .footer-brand {
                max-width: 100%;
            }

            .footer-logo {
                font-size: 28px;
                margin-bottom: 16px;
            }

            .footer-tagline {
                font-size: 14px;
                margin-bottom: 24px;
            }

            .footer-social {
                gap: 12px;
            }

            .social-link {
                width: 40px;
                height: 40px;
                border-radius: 8px;
            }

            .footer-links {
                grid-template-columns: 1fr;
                gap: 0;
                margin-top: 32px;
            }

            .footer-column {
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                padding: 12px 0;
            }

            .footer-title {
                margin-bottom: 0;
                font-size: 16px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                cursor: pointer;
                padding: 8px 0;
            }

            .footer-title::after {
                content: '+';
                font-size: 18px;
                transition: transform 0.3s ease;
            }

            .footer-column.active .footer-title::after {
                content: '-';
            }

            .footer-list {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.3s ease;
                margin-top: 0;
            }

            .footer-column.active .footer-list {
                max-height: 200px;
                margin-top: 12px;
                padding-left: 8px;
            }

            .footer-list li {
                margin-bottom: 8px;
            }

            .footer-link {
                font-size: 14px;
            }

            .footer-newsletter {
                padding: 20px 16px;
                border-radius: 16px;
                margin-bottom: 32px;
            }

            .newsletter-text h3 {
                font-size: 18px;
                margin-bottom: 8px;
            }

            .newsletter-text p {
                font-size: 14px;
                line-height: 1.4;
            }

            .newsletter-input,
            .newsletter-btn {
                padding: 12px 16px;
                font-size: 14px;
                border-radius: 8px;
            }

            .copyright {
                font-size: 12px;
            }

            .legal-link {
                font-size: 12px;
            }

            .badge {
                font-size: 12px;
            }
        }
            </style>
    </head>
    <body>
        <header class="header">
        <div class="header-container">
            <!-- Logo -->
            <a href="/" class="logo">Frase</a>

            <!-- Pill Navigation -->
            <nav class="nav">
                
				<a href="#" class="nav-link pricing-link">Nosotros</a>
				<a href="#" class="nav-link pricing-link">Flota Aerea</a>
				<!-- Product Dropdown -->
                <div class="nav-item">
                    <div class="nav-link">
                        <span>Servicio</span>
                        <svg class="nav-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="6,9 12,15 18,9"></polyline>
                        </svg>
                    </div>
                    
                    <div class="dropdown">
                        <div class="dropdown-grid">
                            <div class="dropdown-section">
                                <h3 class="dropdown-title">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14,2 14,8 20,8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10,9 9,9 8,9"></polyline>
                                    </svg>
                                    Content Creation
                                </h3>
                                <div class="dropdown-links">
                                    <a href="#" class="dropdown-link">
                                        <div class="dropdown-icon">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M12 2L2 7v10c0 5.55 3.84 10 9 11 1.16-.21 2.31-.48 3.38-.84"></path>
                                                <circle cx="12" cy="10" r="3"></circle>
                                            </svg>
                                        </div>
                                        <div class="dropdown-content">
                                            <h4>AI Article Writer</h4>
                                            <p>Create SEO-optimized content in minutes with advanced AI</p>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-link">
                                        <div class="dropdown-icon">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                            </svg>
                                        </div>
                                        <div class="dropdown-content">
                                            <h4>Brand Voice</h4>
                                            <p>Maintain consistent messaging across all content</p>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-link">
                                        <div class="dropdown-icon">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                        </div>
                                        <div class="dropdown-content">
                                            <h4>Content Editor</h4>
                                            <p>Advanced editing tools with real-time optimization</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown-section">
                                <h3 class="dropdown-title">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <path d="m21 21-4.35-4.35"></path>
                                    </svg>
                                    SEO & Analytics
                                </h3>
                                <div class="dropdown-links">
                                    <a href="#" class="dropdown-link">
                                        <div class="dropdown-icon">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M9 12l2 2 4-4"></path>
                                                <path d="M21 12c.552 0 1-.448 1-1V9a2 2 0 0 0-1.11-1.791l-7-3.5a2 2 0 0 0-1.78 0l-7 3.5A2 2 0 0 0 3 9v2c0 .552.448 1 1 1h16z"></path>
                                            </svg>
                                        </div>
                                        <div class="dropdown-content">
                                            <h4>Keyword Research</h4>
                                            <p>Discover high-value keywords and track rankings</p>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-link">
                                        <div class="dropdown-icon">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <polyline points="22,12 18,12 15,21 9,3 6,12 2,12"></polyline>
                                            </svg>
                                        </div>
                                        <div class="dropdown-content">
                                            <h4>Content Optimization</h4>
                                            <p>Real-time SEO scoring and improvement suggestions</p>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-link">
                                        <div class="dropdown-icon">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M3 3v5h5"></path>
                                                <path d="M3 5a9 9 0 0 1 9-9 9 9 0 0 1 9 9"></path>
                                                <path d="M21 21v-5h-5"></path>
                                                <path d="M21 19a9 9 0 0 1-9 9 9 9 0 0 1-9-9"></path>
                                            </svg>
                                        </div>
                                        <div class="dropdown-content">
                                            <h4>Performance Analytics</h4>
                                            <p>Track content performance and ROI metrics</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="featured-card">
                            <div class="featured-badge">NEW</div>
                            <div class="featured-content">
                                <h4>AI Content Clusters</h4>
                                <p>Generate topic clusters automatically and build content authority with interconnected articles that boost your domain expertise.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Solutions Dropdown -->
                <div class="nav-item">
                    <div class="nav-link">
                        <span>Agencia</span>
                        <svg class="nav-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="6,9 12,15 18,9"></polyline>
                        </svg>
                    </div>
                    
                    <div class="dropdown">
                        <div class="dropdown-grid">
                            <div class="dropdown-section">
                                <h3 class="dropdown-title">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    By Role
                                </h3>
                                <div class="dropdown-links">
                                    <a href="#" class="dropdown-link">
                                        <div class="dropdown-icon">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                        </div>
                                        <div class="dropdown-content">
                                            <h4>Content Marketers</h4>
                                            <p>Scale content creation with AI-powered tools</p>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-link">
                                        <div class="dropdown-icon">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <path d="m21 21-4.35-4.35"></path>
                                            </svg>
                                        </div>
                                        <div class="dropdown-content">
                                            <h4>SEO Specialists</h4>
                                            <p>Advanced SEO tools and competitive analysis</p>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-link">
                                        <div class="dropdown-icon">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="3"></circle>
                                                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1 1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                            </svg>
                                        </div>
                                        <div class="dropdown-content">
                                            <h4>Marketing Managers</h4>
                                            <p>Streamline workflows and team collaboration</p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="dropdown-section">
                                <h3 class="dropdown-title">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                    By Company Size
                                </h3>
                                <div class="dropdown-links">
                                    <a href="#" class="dropdown-link">
                                        <div class="dropdown-icon">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                                <line x1="3" y1="18" x2="21" y2="18"></line>
                                            </svg>
                                        </div>
                                        <div class="dropdown-content">
                                            <h4>Marketing Agencies</h4>
                                            <p>Scalable solutions for client management</p>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-link">
                                        <div class="dropdown-icon">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                                <polyline points="9,22 9,12 15,12 15,22"></polyline>
                                            </svg>
                                        </div>
                                        <div class="dropdown-content">
                                            <h4>Enterprise</h4>
                                            <p>Advanced features for large organizations</p>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-link">
                                        <div class="dropdown-icon">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                            </svg>
                                        </div>
                                        <div class="dropdown-content">
                                            <h4>Small Business</h4>
                                            <p>Affordable tools for growing companies</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="featured-card">
                            <div class="featured-badge">⭐</div>
                            <div class="featured-content">
                                <h4>Success Story: TechCorp</h4>
                                <p>See how TechCorp increased their organic traffic by 400% in 6 months using Frase's AI-powered content strategy and optimization tools.</p>
                            </div>
                        </div>
                    </div>
                </div>
				<a href="#" class="nav-link pricing-link">Blog</a>
            </nav>

            <!-- Gradient Buttons -->
            <div class="header-cta">
                <a href="#" class="btn-login">Login</a>
                <a href="#" class="btn-primary">
                    <span>Contactanos</span>
                </a>
            </div>

            <!-- Floating Mobile Button -->
            <button class="mobile-menu-btn" onclick="toggleMobileMenu()">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>

        <!-- Floating Mobile Menu -->
        <div class="mobile-menu" id="mobileMenu">
            <nav class="mobile-nav">
				<a href="#" class="mobile-nav-link">Nosotros</a>
				<a href="#" class="mobile-nav-link">Flota Aerea</a>
                <a href="#" class="mobile-nav-link">Servicio</a>
                <a href="#" class="mobile-nav-link">Agencia</a>
                <a href="#" class="mobile-nav-link">Blog</a>

                <div class="mobile-cta">
                    <a href="#" class="mobile-btn mobile-btn-primary">Contact</a>
                </div>
            </nav>
        </div>
    </header>
            <!-- Main Content -->
            @yield('content')
            
            <section>

            </section>
            <!-- Footer -->
            <footer class="site-footer">
                <div class="container">
                    <div class="footer-grid">
                        <!-- Sección Navegación -->
                        <div class="footer-section">
                            <h5>NAVEGACIÓN</h5>
                            <ul class="footer-links">
                                <li><a href="/"><i class="fas fa-home"></i> INICIO</a></li>
                                <li><a href="/nosotros"><i class="fas fa-users"></i> SOBRE NOSOTROS</a></li>
                                <li><a href="/servicios"><i class="fas fa-concierge-bell"></i> SERVICIOS</a></li>
                                <li><a href="/contact"><i class="fas fa-envelope"></i> CONTACTO</a></li>
                            </ul>
                        </div>

                        <!-- Sección Legal -->
                        <div class="footer-section">
                            <h5>LEGAL</h5>
                            <ul class="footer-links">
                                <li><a href="/Privacidad"><i class="fas fa-shield-alt"></i> Política de Privacidad</a></li>
                                <li><a href="/Terminos"><i class="fas fa-file-contract"></i> Términos de Servicio</a></li>
                                <li><a href="#"><i class="fas fa-certificate"></i> Certificaciones</a></li>
                            </ul>
                        </div>

                        <!-- Sección Contacto -->
                        <div class="footer-section">
                            <h5>CONTACTO</h5>
                            <ul class="footer-contact">
                                <li>
                                    <a href="mailto:info@russellexperienceperutravel.com">info@russellexperienceperutravel.com</a>
                                </li>
                                <li>
                                    <a href="https://goo.gl/maps/xyz" target="_blank">Urb. LA PLANICIE E19, Cusco 08006</a>
                                </li>
                                <li>
                                    <a href="tel:+51946033024">+51 946 033 024</a>
                                </li>
                            </ul>
                        </div>

                        <!-- Sección Redes Sociales y Reclamos -->
                        <div class="footer-section">
                            <h5 class="horario-title"><i></i> HORARIO DE ATENCIÓN</h5>
                            <ul class="horario-list">
                                <li>Lunes a Sábado: 09:00 - 19:00</li>
                                <li>Domingo: 09:00 - 13:00</li>
                            </ul>
                            
                            <div class="reclamo-btn-container">
                                <a href="/libro" class="reclamo-btn" target="_blank" aria-label="Libro de reclamaciones">
                                    <img src="img/libro/libro.png" alt="Libro de Reclamaciones" width="180">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Copyright -->
                    <div class="footer-copyright">
                        <p>&copy; <span id="current-year"></span> RUSSELL EXPERIENCE. Todos los derechos reservados.</p>
                        <p class="dev-credit">Desarrollado por <a href="#" target="_blank">TuAgenciaDigital</a></p>
                    </div>
                </div>
            </footer>
        </form>

                    {{-- Dark Mode 12 SVG --}}
                    <svg class="w-[448px] max-w-none relative -mt-[4.9rem] -ml-8 lg:ml-0 lg:-mt-[6.6rem] hidden dark:block" viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" fill="black"/>
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" fill="black"/>
                            <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" fill="#391800"/>
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" fill="#391800"/>
                            <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" fill="#733000"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" fill="#733000"/>
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.726 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#FF750F" stroke-width="1"/>
                            <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                            <path d="M188.467 355.363L188.798 355.363C195.644 348.478 205.969 339.393 219.772 328.11C233.133 316.826 243.181 307.837 249.917 301.144C253.696 297.217 256.792 293.166 259.205 288.991C261.024 285.845 262.455 282.628 263.499 279.341C265.928 271.691 264.768 263.753 260.02 255.529C254.719 246.349 247.265 238.985 237.657 233.438C228.16 227.7 218.111 224.831 207.51 224.83C197.13 224.83 190.339 227.603 187.137 233.149C183.824 238.504 184.929 245.963 190.45 255.527L125.851 255.524C116.574 239.458 112.598 225.114 113.923 212.491C114.615 206.836 116.261 201.756 118.859 197.253C122.061 191.704 126.709 187.03 132.805 183.229C143.958 176.153 158.81 172.615 177.362 172.616C196.797 172.617 216.067 176.156 235.171 183.233C254.164 190.119 271.502 199.874 287.183 212.497C302.864 225.121 315.343 239.466 324.62 255.532C333.233 270.45 337.044 283.551 336.05 294.835C335.46 303.459 333.16 311.245 329.151 318.194C327.915 320.337 326.515 322.4 324.953 324.384C318.549 332.799 308.611 343.127 295.139 355.367L377.297 355.37L406.121 405.289L217.29 405.282L188.467 355.363Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M9.32197 225.972L-13.5365 225.971L-42.5255 175.765L43.2765 175.768L175.798 405.282L112.854 405.279L9.32197 225.972Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M345.247 111.915C329.566 99.2919 312.229 89.5371 293.235 82.6512L235.167 183.228C254.161 190.114 271.498 199.869 287.179 212.492L345.247 111.915Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M382.686 154.964C373.41 138.898 360.931 124.553 345.25 111.93L287.182 212.506C302.863 225.13 315.342 239.475 324.618 255.541L382.686 154.964Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M293.243 82.6472C274.139 75.57 254.869 72.031 235.434 72.0303L177.366 172.607C196.801 172.608 216.071 176.147 235.175 183.224L293.243 82.6472Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M394.118 194.257C395.112 182.973 391.301 169.872 382.688 154.953L324.619 255.53C333.233 270.448 337.044 283.55 336.05 294.834L394.118 194.257Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M235.432 72.0311C216.88 72.0304 202.027 75.5681 190.875 82.6442L132.806 183.221C143.959 176.145 158.812 172.607 177.363 172.608L235.432 72.0311Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M265.59 124.25C276.191 124.251 286.24 127.12 295.737 132.858L237.669 233.435C228.172 227.697 218.123 224.828 207.522 224.827L265.59 124.25Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M295.719 132.859C305.326 138.406 312.78 145.77 318.081 154.95L260.013 255.527C254.712 246.347 247.258 238.983 237.651 233.436L295.719 132.859Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M387.218 217.608C391.227 210.66 393.527 202.874 394.117 194.25L336.049 294.827C335.459 303.451 333.159 311.237 329.15 318.185L387.218 217.608Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M245.211 132.577C248.413 127.03 255.204 124.257 265.584 124.258L207.516 224.835C197.136 224.834 190.345 227.607 187.143 233.154L245.211 132.577Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M318.094 154.945C322.842 163.17 324.002 171.107 321.573 178.757L263.505 279.334C265.934 271.684 264.774 263.746 260.026 255.522L318.094 154.945Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M176.925 96.6737C180.127 91.1249 184.776 86.4503 190.871 82.6499L132.803 183.227C126.708 187.027 122.059 191.702 118.857 197.25L176.925 96.6737Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M387.226 217.606C385.989 219.749 384.59 221.813 383.028 223.797L324.96 324.373C326.522 322.39 327.921 320.326 329.157 318.183L387.226 217.606Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M317.269 188.408C319.087 185.262 320.519 182.045 321.562 178.758L263.494 279.335C262.451 282.622 261.019 285.839 259.201 288.985L317.269 188.408Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M245.208 132.573C241.895 137.928 243 145.387 248.522 154.95L190.454 255.527C184.932 245.964 183.827 238.505 187.14 233.15L245.208 132.573Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M176.93 96.6719C174.331 101.175 172.686 106.255 171.993 111.91L113.925 212.487C114.618 206.831 116.263 201.752 118.862 197.249L176.93 96.6719Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M317.266 188.413C314.853 192.589 311.757 196.64 307.978 200.566L249.91 301.143C253.689 297.216 256.785 293.166 259.198 288.99L317.266 188.413Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M464.198 304.708L435.375 254.789L377.307 355.366L406.13 405.285L464.198 304.708Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M353.209 254.787C366.68 242.548 376.618 232.22 383.023 223.805L324.955 324.382C318.55 332.797 308.612 343.124 295.141 355.364L353.209 254.787Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M435.37 254.787L353.212 254.784L295.144 355.361L377.302 355.364L435.37 254.787Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M183.921 154.947L248.521 154.95L190.453 255.527L125.853 255.524L183.921 154.947Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M171.992 111.914C170.668 124.537 174.643 138.881 183.92 154.947L125.852 255.524C116.575 239.458 112.599 225.114 113.924 212.491L171.992 111.914Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M307.987 200.562C301.251 207.256 291.203 216.244 277.842 227.528L219.774 328.105C233.135 316.821 243.183 307.832 249.919 301.139L307.987 200.562Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M15.5469 75.1797L44.5359 125.386L-13.5321 225.963L-42.5212 175.756L15.5469 75.1797Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M277.836 227.536C264.033 238.82 253.708 247.904 246.862 254.789L188.794 355.366C195.64 348.481 205.965 339.397 219.768 328.113L277.836 227.536Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M275.358 304.706L464.189 304.713L406.12 405.29L217.29 405.283L275.358 304.706Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M44.5279 125.39L67.3864 125.39L9.31834 225.967L-13.5401 225.966L44.5279 125.39Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M101.341 75.1911L233.863 304.705L175.795 405.282L43.2733 175.768L101.341 75.1911ZM15.5431 75.19L-42.525 175.767L43.277 175.77L101.345 75.1932L15.5431 75.19Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M246.866 254.784L246.534 254.784L188.466 355.361L188.798 355.361L246.866 254.784Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M246.539 254.781L275.362 304.701L217.294 405.277L188.471 355.358L246.539 254.781Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M67.3906 125.391L170.923 304.698L112.855 405.275L9.32257 225.967L67.3906 125.391Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                            <path d="M170.921 304.699L233.865 304.701L175.797 405.278L112.853 405.276L170.921 304.699Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" fill="#4B0600"/>
                            <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="round"/>
                        </g>
                        <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" fill="#4B0600"/>
                            <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" stroke="#FF750F" stroke-width="1"/>
                        </g>
                    </svg>
                    <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"></div>
                </div>
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
