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
            <link rel="stylesheet" href="/css/princi.css">
<!--
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
</style> -->
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
            
    <!-- Premium Footer -->
    <footer class="footer">
        <div class="footer-container">
            <!-- Main Footer Content -->
            <div class="footer-main">
                <div class="footer-brand">
                    <div class="footer-logo">Frase</div>
                    <p class="footer-tagline">The future of content creation is here. Build, optimize, and scale your SEO strategy with AI-powered precision.</p>
                    
                    <div class="footer-social">
                        <a href="#" class="social-link" aria-label="Twitter">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                            </svg>
                        </a>
                        <a href="#" class="social-link" aria-label="LinkedIn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                <rect x="2" y="9" width="4" height="12"></rect>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg>
                        </a>
                        <a href="#" class="social-link" aria-label="GitHub">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                            </svg>
                        </a>
                        <a href="#" class="social-link" aria-label="YouTube">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path>
                                <polygon points="9.75,15.02 15.5,11.75 9.75,8.48"></polygon>
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="footer-links">
                    <div class="footer-column">
                        <h3 class="footer-title">Product</h3>
                        <ul class="footer-list">
                            <li><a href="#" class="footer-link">AI Writer</a></li>
                            <li><a href="#" class="footer-link">SEO Tools</a></li>
                            <li><a href="#" class="footer-link">Analytics</a></li>
                            <li><a href="#" class="footer-link">Integrations</a></li>
                            <li><a href="#" class="footer-link">API</a></li>
                        </ul>
                    </div>

                    <div class="footer-column">
                        <h3 class="footer-title">Solutions</h3>
                        <ul class="footer-list">
                            <li><a href="#" class="footer-link">Agencies</a></li>
                            <li><a href="#" class="footer-link">Enterprise</a></li>
                            <li><a href="#" class="footer-link">Freelancers</a></li>
                            <li><a href="#" class="footer-link">E-commerce</a></li>
                            <li><a href="#" class="footer-link">SaaS</a></li>
                        </ul>
                    </div>

                    <div class="footer-column">
                        <h3 class="footer-title">Resources</h3>
                        <ul class="footer-list">
                            <li><a href="#" class="footer-link">Blog</a></li>
                            <li><a href="#" class="footer-link">Case Studies</a></li>
                            <li><a href="#" class="footer-link">Help Center</a></li>
                            <li><a href="#" class="footer-link">Webinars</a></li>
                            <li><a href="#" class="footer-link">Templates</a></li>
                        </ul>
                    </div>

                    <div class="footer-column">
                        <h3 class="footer-title">Servicios</h3>
                        <ul class="footer-list">
                            <li><a href="#" class="footer-link">Vuelos Privados</a></li>
                            <li><a href="#" class="footer-link">Conexiones Regionales</a></li>
                            <li><a href="#" class="footer-link">Carga Aérea</a></li>
                            <li><a href="#" class="footer-link">Nosotros</a></li>
                            <li><a href="#" class="footer-link">Políticas</a></li>
                        </ul>
                    </div>

                    <div class="footer-column">
                        <h3 class="footer-title">Legal</h3>
                        <ul class="footer-list">
                            <li><a href="#" class="footer-link">Code Esnna</a></li>
                            <li><a href="#" class="footer-link">Métodos de Pago</a></li>
                            <li><a href="#" class="footer-link">Políticas de Privacidad</a></li>
                            <li><a href="#" class="footer-link">Términos y Condiciones</a></li>
                            <li><a href="#" class="footer-link">Contáctanos</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Newsletter Subscription -->
            <div class="footer-newsletter">
                <div class="newsletter-content">
                    <div class="newsletter-text">
                        <h3>Stay ahead of the curve</h3>
                        <p>Get the latest SEO insights, product updates, and growth strategies delivered to your inbox.</p>
                    </div>
                    <div class="newsletter-form">
                        <div class="input-group">
                            <input type="email" placeholder="Enter your email" class="newsletter-input">
                            <button class="newsletter-btn">
                                <span>Subscribe</span>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12,5 19,12 12,19"></polyline>
                                </svg>
                            </button>
                        </div>
                        <p class="newsletter-disclaimer">No spam. Unsubscribe at any time.</p>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="footer-legal">
                    <p class="copyright">&copy; 2025 Frase. All rights reserved.</p>
                    <div class="legal-links">
                        <a href="#" class="legal-link">Privacy Policy</a>
                        <a href="#" class="legal-link">Terms of Service</a>
                        <a href="#" class="legal-link">Cookie Settings</a>
                        <a href="#" class="legal-link">GDPR</a>
                    </div>
                </div>
                
                <div class="footer-badges">
                    <div class="badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                        <span>SOC 2 Compliant</span>
                    </div>
                    <div class="badge">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <circle cx="12" cy="16" r="1"></circle>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                        <span>256-bit SSL</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        class CertificationSlider {
            constructor() {
                this.currentSlide = 0;
                this.slidesPerPage = this.calculateSlidesPerPage();
                this.totalSlides = document.querySelectorAll('.certification-item').length;
                this.isTransitioning = false;
                this.init();
            }

            calculateSlidesPerPage() {
                const viewport = document.querySelector('.certificaciones-viewport');
                if (!viewport) return 3;
                
                const viewportWidth = viewport.offsetWidth;
                const itemWidth = 210; // 160px + 50px margin
                return Math.floor(viewportWidth / itemWidth);
            }

            init() {
                this.createPagination();
                this.updateSlider();
                this.bindEvents();
                
                // Handle window resize
                window.addEventListener('resize', () => {
                    this.slidesPerPage = this.calculateSlidesPerPage();
                    this.createPagination();
                    this.updateSlider();
                });
            }

            createPagination() {
                const pagination = document.querySelector('.cert-pagination');
                if (!pagination) return;
                
                pagination.innerHTML = '';
                const totalPages = Math.ceil(this.totalSlides / this.slidesPerPage);
                
                for (let i = 0; i < totalPages; i++) {
                    const dot = document.createElement('div');
                    dot.className = 'dot';
                    if (i === Math.floor(this.currentSlide / this.slidesPerPage)) {
                        dot.classList.add('active');
                    }
                    dot.addEventListener('click', () => {
                        this.goToSlide(i * this.slidesPerPage);
                    });
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
                    dot.classList.toggle('active', index === Math.floor(this.currentSlide / this.slidesPerPage));
                });
            }

            goToSlide(slideIndex) {
                if (this.isTransitioning) return;
                this.currentSlide = slideIndex;
                this.updateSlider();
            }

            nextSlide() {
                if (this.isTransitioning) return;
                
                this.isTransitioning = true;
                this.currentSlide++;
                
                // Si llegamos al final, volver al inicio (bucle infinito)
                if (this.currentSlide >= this.totalSlides) {
                    this.currentSlide = 0;
                }
                
                this.updateSlider();
                
                // Reset transition flag
                setTimeout(() => {
                    this.isTransitioning = false;
                }, 400); // Match CSS transition duration
            }

            prevSlide() {
                if (this.isTransitioning) return;
                
                this.isTransitioning = true;
                this.currentSlide--;
                
                // Si llegamos al inicio, ir al final (bucle infinito)
                if (this.currentSlide < 0) {
                    this.currentSlide = this.totalSlides - 1;
                }
                
                this.updateSlider();
                
                // Reset transition flag
                setTimeout(() => {
                    this.isTransitioning = false;
                }, 400); // Match CSS transition duration
            }

            bindEvents() {
                const prevBtn = document.getElementById('cert-prev');
                const nextBtn = document.getElementById('cert-next');
                
                if (prevBtn) {
                    prevBtn.addEventListener('click', () => {
                        this.prevSlide();
                    });
                }
                
                if (nextBtn) {
                    nextBtn.addEventListener('click', () => {
                        this.nextSlide();
                    });
                }
            }
        }

        // Initialize slider when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            new CertificationSlider();
            new ToursSlider();
        });

        // Tours Slider Class with Group Navigation
        class ToursSlider {
            constructor() {
                this.slider = document.getElementById('tours-slider');
                this.pagination = document.getElementById('tours-pagination');
                this.cards = this.slider ? this.slider.children : [];
                this.totalCards = this.cards.length;
                this.groupSize = 3; // Siempre mover de 3 en 3
                this.currentIndex = 0;
                this.isTransitioning = false;
                
                if (this.slider && this.totalCards > 0) {
                    this.init();
                }
            }
            
            getVisibleCards() {
                const width = window.innerWidth;
                if (width <= 480) return 1;
                if (width <= 768) return 1;
                if (width <= 1024) return 2;
                if (width <= 1200) return 2;
                return 3;
            }
            
            init() {
                this.createPagination();
                this.updateSlider();
                this.bindEvents();
            }
            
            createPagination() {
                if (!this.pagination) return;
                
                // Calcular número de grupos
                const totalGroups = Math.ceil(this.totalCards / this.groupSize);
                
                this.pagination.innerHTML = '';
                for (let i = 0; i < totalGroups; i++) {
                    const dot = document.createElement('span');
                    dot.classList.add('dot');
                    if (i === 0) dot.classList.add('active');
                    dot.addEventListener('click', () => this.goToGroup(i));
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
                    margin = 20; // 10px each side
                } else if (width <= 480) {
                    cardWidth = 250;
                    margin = 24; // 12px each side
                } else if (width <= 768) {
                    cardWidth = 280;
                    margin = 30; // 15px each side
                } else if (width <= 1024) {
                    cardWidth = 320;
                    margin = 36; // 18px each side
                } else if (width <= 1200) {
                    cardWidth = 340;
                    margin = 40; // 20px each side
                } else {
                    cardWidth = 370;
                    margin = 50; // 25px each side
                }
                
                const totalCardWidth = cardWidth + margin;
                const translateX = -this.currentIndex * totalCardWidth;
                this.slider.style.transform = `translateX(${translateX}px)`;
                
                // Update pagination
                const currentGroup = Math.floor(this.currentIndex / this.groupSize);
                const dots = this.pagination ? this.pagination.querySelectorAll('.dot') : [];
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentGroup);
                });
            }
            
            goToGroup(groupIndex) {
                if (this.isTransitioning) return;
                
                this.currentIndex = groupIndex * this.groupSize;
                // Asegurar que no exceda el número total de tarjetas
                if (this.currentIndex >= this.totalCards) {
                    this.currentIndex = this.totalCards - 1;
                }
                this.updateSlider();
            }
            
            nextGroup() {
                if (this.isTransitioning) return;
                
                this.isTransitioning = true;
                
                // Mover 3 posiciones hacia adelante
                this.currentIndex += this.groupSize;
                
                // Si excede el total, volver al inicio (bucle)
                if (this.currentIndex >= this.totalCards) {
                    this.currentIndex = 0;
                }
                
                this.updateSlider();
                
                setTimeout(() => {
                    this.isTransitioning = false;
                }, 600); // Match CSS transition duration
            }
            
            prevGroup() {
                if (this.isTransitioning) return;
                
                this.isTransitioning = true;
                
                // Mover 3 posiciones hacia atrás
                this.currentIndex -= this.groupSize;
                
                // Si es menor que 0, ir al final (bucle)
                if (this.currentIndex < 0) {
                    // Calcular la última posición válida
                    const totalGroups = Math.ceil(this.totalCards / this.groupSize);
                    this.currentIndex = (totalGroups - 1) * this.groupSize;
                }
                
                this.updateSlider();
                
                setTimeout(() => {
                    this.isTransitioning = false;
                }, 600);
            }
            
            // Métodos de autoplay removidos - ahora solo navegación manual
            
            bindEvents() {
                // Handle window resize
                window.addEventListener('resize', () => {
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

        // Ejemplo de uso (descomentar y modificar cuando tengas las imágenes reales):
        /*
        const certificationImages = {
            'iata': 'path/to/real/iata-logo.png',
            'icao': 'path/to/real/icao-logo.png',
            'iso9001': 'path/to/real/iso9001-logo.png',
            'iosa': 'path/to/real/iosa-logo.png',
            'anac': 'path/to/real/anac-logo.png',
            'skytrax': 'path/to/real/skytrax-logo.png',
            'apex': 'path/to/real/apex-logo.png',
            'greensky': 'path/to/real/greensky-logo.png'
        };
        
        // Llamar esta función cuando tengas las imágenes reales
        window.addEventListener('load', () => {
            updateCertificationImages(certificationImages);
        });
        */
    </script>

    <!-- Botones Verticales de Redes Sociales -->
    <div class="social-sidebar">
        <div class="social-line top-line"></div>
        <div class="social-buttons-vertical">
            <a href="https://facebook.com" target="_blank" class="social-btn-minimal facebook" title="Facebook">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
            </a>
            <a href="https://instagram.com" target="_blank" class="social-btn-minimal instagram" title="Instagram">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </a>
            <a href="https://tiktok.com" target="_blank" class="social-btn-minimal tiktok" title="TikTok">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-.88-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-.04-.1z"/>
                </svg>
            </a>
            <a href="https://tripadvisor.com" target="_blank" class="social-btn-minimal tripadvisor" title="TripAdvisor">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1.5 3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5S9 7.83 9 7s.67-1.5 1.5-1.5zm3 0c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5S12 7.83 12 7s.67-1.5 1.5-1.5zM12 18.5c-2.5 0-4.71-1.28-6-3.22.65-.14 1.29-.28 2-.28 1.5 0 2.5 1 4 1s2.5-1 4-1c.71 0 1.35.14 2 .28-1.29 1.94-3.5 3.22-6 3.22z"/>
                    <circle cx="8.5" cy="12" r="1.5"/>
                    <circle cx="15.5" cy="12" r="1.5"/>
                </svg>
            </a>
        </div>
        <div class="social-line bottom-line"></div>
    </div>
<!--
    <style>
        /* Estilos para botones verticales minimalistas de redes sociales */
        .social-sidebar {
            position: fixed;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1000;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0;
        }

        .social-line {
            width: 2px;
            background: linear-gradient(180deg, var(--accent) 0%, var(--accent-light) 100%);
            opacity: 0.6;
        }

        .social-line.top-line {
            height: 80px;
            margin-bottom: 20px;
        }

        .social-line.bottom-line {
            height: 80px;
            margin-top: 20px;
        }

        .social-buttons-vertical {
            display: flex;
            flex-direction: column;
            gap: 20px;
            align-items: center;
        }

        .social-btn-minimal {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: #666;
            font-size: 18px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }

        .social-btn-minimal::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.1);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .social-btn-minimal:hover {
            transform: translateY(-3px) scale(1.1);
            color: white;
            border-color: rgba(255, 255, 255, 0.4);
        }

        .social-btn-minimal:hover::before {
            opacity: 1;
        }

        .social-btn-minimal.facebook:hover {
            background: #1877f2;
            box-shadow: 0 8px 25px rgba(24, 119, 242, 0.3);
            border-color: #1877f2;
        }

        .social-btn-minimal.instagram:hover {
            background: linear-gradient(135deg, #e4405f 0%, #fd1d1d 50%, #fcb045 100%);
            box-shadow: 0 8px 25px rgba(228, 64, 95, 0.3);
            border-color: #e4405f;
        }

        .social-btn-minimal.tiktok:hover {
            background: #000000;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            border-color: #000000;
        }

        .social-btn-minimal.tripadvisor:hover {
            background: #00af87;
            box-shadow: 0 8px 25px rgba(0, 175, 135, 0.3);
            border-color: #00af87;
        }

        /* Animación de entrada */
        .social-btn-minimal {
            animation: fadeInUp 0.6s cubic-bezier(0.4, 0, 0.2, 1) forwards;
            opacity: 0;
            transform: translateY(20px);
        }

        .social-btn-minimal:nth-child(1) { animation-delay: 0.1s; }
        .social-btn-minimal:nth-child(2) { animation-delay: 0.2s; }
        .social-btn-minimal:nth-child(3) { animation-delay: 0.3s; }
        .social-btn-minimal:nth-child(4) { animation-delay: 0.4s; }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .social-sidebar {
                left: 20px;
            }
            
            .social-btn-minimal {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }
            
            .social-line.top-line,
            .social-line.bottom-line {
                height: 60px;
            }
        }

        @media (max-width: 480px) {
            .social-sidebar {
                left: 15px;
            }
            
            .social-btn-minimal {
                width: 35px;
                height: 35px;
                font-size: 14px;
            }
            
            .social-line.top-line,
            .social-line.bottom-line {
                height: 50px;
            }
            
            .social-buttons-vertical {
                gap: 15px;
            }
        }

    </style> -->



        <!-- WhatsApp Floating Button -->
        <div class="whatsapp-float">
            <a href="https://wa.me/1234567890" target="_blank" class="whatsapp-btn">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.465 3.516" fill="currentColor"/>
                </svg>
            </a>
        </div>
<!-- 
        <style>
            .whatsapp-float {
                position: fixed;
                bottom: 20px;
                right: 20px;
                z-index: 1000;
                animation: whatsappPulse 2s infinite;
            }

            .whatsapp-btn {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 60px;
                height: 60px;
                background: linear-gradient(135deg, #25D366, #128C7E);
                border-radius: 50%;
                color: white;
                text-decoration: none;
                box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
                transition: all 0.3s ease;
                backdrop-filter: blur(10px);
            }

            .whatsapp-btn:hover {
                transform: scale(1.1);
                box-shadow: 0 6px 25px rgba(37, 211, 102, 0.6);
                background: linear-gradient(135deg, #128C7E, #25D366);
            }

            .whatsapp-btn svg {
                transition: transform 0.3s ease;
            }

            .whatsapp-btn:hover svg {
                transform: scale(1.1);
            }

            @keyframes whatsappPulse {
                0% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(1.05);
                }
                100% {
                    transform: scale(1);
                }
            }

            /* Responsive design */
            @media (max-width: 768px) {
                .whatsapp-float {
                    bottom: 15px;
                    right: 15px;
                }
                
                .whatsapp-btn {
                    width: 50px;
                    height: 50px;
                }
                
                .whatsapp-btn svg {
                    width: 20px;
                    height: 20px;
                }
            }

            @media (max-width: 480px) {
                .whatsapp-float {
                    bottom: 10px;
                    right: 10px;
                }
                
                .whatsapp-btn {
                    width: 45px;
                    height: 45px;
                }
                
                .whatsapp-btn svg {
                    width: 18px;
                    height: 18px;
                }
            }
        </style> -->
    </body>
</html>
