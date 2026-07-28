<?php
// --- DYNAMIC SEO CONFIGURATION ---
// Set defaults if variables are not defined in the parent page
$pageTitle = isset($pageTitle) ? $pageTitle : "Corelix - Creative Marketing & Tech Solutions";
$metaDesc = isset($metaDesc) ? $metaDesc : "Corelix is a premium IT Agency offering Web & Mobile Development, UI/UX Design, Digital Marketing, and AI Business Automation.";
$metaKeywords = isset($metaKeywords) ? $metaKeywords : "IT Agency, Web Development, Mobile App Development, UI/UX Design, Digital Marketing, AI Automation, Corelix, Software Solutions";
$metaAuthor = isset($metaAuthor) ? $metaAuthor : "Corelix Team";
$metaPublisher = isset($metaPublisher) ? $metaPublisher : "Corelix";
$metaRobots = isset($metaRobots) ? $metaRobots : "index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1";

// Construct canonical URL dynamically
if (!isset($canonicalUrl)) {
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'www.corelix.com';
    $uri = isset($_SERVER['REQUEST_URI']) ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : '';
    $canonicalUrl = $protocol . $host . $uri;
}

// Open Graph / Social Media Image
$ogImage = isset($ogImage) ? $ogImage : (isset($protocol) && isset($host) ? $protocol . $host . "/assets/images/og-image.jpg" : "https://www.corelix.com/assets/images/og-image.jpg");
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Dynamic Primary Meta Tags -->
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="description" content="<?php echo htmlspecialchars($metaDesc, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($metaKeywords, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="author" content="<?php echo htmlspecialchars($metaAuthor, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="publisher" content="<?php echo htmlspecialchars($metaPublisher, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="robots" content="<?php echo htmlspecialchars($metaRobots, ENT_QUOTES, 'UTF-8'); ?>">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/images/favicon.png">
    <link rel="shortcut icon" type="image/png" href="/assets/images/favicon.png">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($metaDesc, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:site_name" content="Corelix">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($metaDesc, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:creator" content="@corelix">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'brand-blue': '#683AF2',
                        'brand-green': '#4CBB18',
                        'brand-orange': '#FD5812',
                        'brand-gray': '#CECECD',
                        'brand-black': '#000000',
                        'brand-white': '#ffffff',
                        'brand-red': '#E2252A',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Poppins', 'sans-serif'],
                    },
                    animation: {
                        'blob': 'blob 7s infinite',
                        'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
                        'marquee-process': 'marquee-process 35s linear infinite',
                        'scroll-left': 'scroll-left 30s linear infinite',
                        'scroll-right': 'scroll-right 30s linear infinite',
                        'shimmer': 'shimmer 2.5s linear infinite',
                    },
                    keyframes: {
                        'marquee-process': {
                            '0%': { transform: 'translateX(0)' },
                            '100%': { transform: 'translateX(-50%)' },
                        },
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        },
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        'scroll-left': {
                            '0%': { transform: 'translateX(0)' },
                            '100%': { transform: 'translateX(calc(-50% - 0.75rem))' },
                        },
                        'scroll-right': {
                            '0%': { transform: 'translateX(calc(-50% - 0.75rem))' },
                            '100%': { transform: 'translateX(0)' },
                        },
                        'shimmer': {
                            'from': { transform: 'translateX(-100%)' },
                            'to': { transform: 'translateX(200%)' },
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        .gradient-text {
            background: linear-gradient(135deg, #683AF2 0%, #4CBB18 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .gradient-text-alt {
            background: linear-gradient(135deg, #FD5812 0%, #683AF2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px -10px rgba(59, 130, 246, 0.15);
            border-color: rgba(59, 130, 246, 0.3);
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #000000;
        }
        ::-webkit-scrollbar-thumb {
            background: #683AF2;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #683AF2;
        }

        /* Scrolled Header Light Theme */
        #navbar.scrolled-light {
            background-color: rgba(255, 255, 255, 0.51);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 67px 19px #0000, 0 43px 17px #00000003, 0 24px 14px #0000000a, 0 11px 11px #00000012, 0 3px 6px #00000014;
        }
        #navbar.scrolled-light nav > a,
        #navbar.scrolled-light nav > div > a,
        #navbar.scrolled-light .font-heading > span,
        #navbar.scrolled-light #mobile-menu-btn {
            color: #111111 !important;
        }
        #navbar.scrolled-light nav > a:hover,
        #navbar.scrolled-light nav > div > a:hover {
            color: #683AF2 !important;
        }
        #navbar.scrolled-light #header-cta-btn {
            border-color: #683AF2 !important;
            color: #683AF2 !important;
        }
        #navbar.scrolled-light #header-cta-btn:hover {
            background-color: #683AF2 !important;
            color: #ffffff !important;
        }

        /* Custom Override for Hero Overlays */
        .bg-black\/50 {
            background-color: rgb(0 10 54 / 45%) !important;
        }
    </style>

    <!-- Schema.org JSON-LD for SEO -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "<?php echo $protocol . $host; ?>/#organization",
          "name": "Corelix",
          "url": "<?php echo $protocol . $host; ?>",
          "logo": "<?php echo htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8'); ?>",
          "description": "Premium IT Agency offering Web & Mobile Development, UI/UX Design, Digital Marketing, and AI Business Automation.",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Ahmedabad",
            "addressRegion": "Gujarat",
            "addressCountry": "IN"
          },
          "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "customer service",
            "areaServed": "IN",
            "availableLanguage": ["en", "hi"]
          }
        },
        {
          "@type": "WebPage",
          "@id": "<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>/#webpage",
          "url": "<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>",
          "name": "<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>",
          "description": "<?php echo htmlspecialchars($metaDesc, ENT_QUOTES, 'UTF-8'); ?>",
          "isPartOf": {
            "@id": "<?php echo $protocol . $host; ?>/#organization"
          }
        }
      ]
    }
    </script>
</head>
<body class="antialiased selection:bg-brand-blue selection:text-white relative bg-white">
<div class="w-full relative min-h-screen">


    <!-- Navigation -->
    <header class="fixed top-0 z-50 transition-all duration-500 w-full bg-transparent border-b border-transparent left-0 right-0 mx-auto" id="navbar">
        <div class="w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center h-20 transition-all duration-300 w-full" id="nav-inner">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="/" class="font-heading font-black text-3xl tracking-tight flex items-center gap-2" title="Corelix Home">
                        <img id="header-logo" src="/assets/images/lgoo-white.png" alt="Corelix Logo" title="Corelix" class="h-6 md:h-8 w-auto object-contain transition-all duration-300">
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <nav class="hidden md:flex space-x-8 items-center ml-10 lg:ml-16">
                    <a href="/" class="text-brand-gray hover:text-white transition-colors text-sm font-bold tracking-wide" title="Corelix Home">Home</a>
                    <a href="/about" class="text-brand-gray hover:text-white transition-colors text-sm font-bold tracking-wide" title="About">About</a>
                    
                    <div class="relative group">
                        <a href="/services" class="text-brand-gray hover:text-white transition-colors text-sm font-bold tracking-wide flex items-center gap-1 py-4" title="Services">
                            Services
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                        <!-- Dropdown Menu -->
                        <div class="absolute left-0 mt-0 w-64 rounded-xl bg-white shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 translate-y-2 group-hover:translate-y-0 overflow-hidden">
                            <div class="py-2">
                                <a href="/services/web-mobile-app-development" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-blue/5 hover:text-brand-blue transition-colors" title="Web & Mobile App Development">Web & Mobile App Development</a>
                                <a href="/services/seo-services" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-blue/5 hover:text-brand-blue transition-colors" title="SEO Services">SEO Services</a>
                                <a href="/services/digital-marketing" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-blue/5 hover:text-brand-blue transition-colors" title="Digital Marketing">Digital Marketing</a>
                                <a href="/services/ai-automation" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-blue/5 hover:text-brand-blue transition-colors" title="AI & Business Automation">AI & Business Automation</a>
                                <a href="/services/ui-ux-branding" class="block px-4 py-2 text-sm text-gray-700 hover:bg-brand-blue/5 hover:text-brand-blue transition-colors" title="UI/UX & Branding">UI/UX & Branding</a>
                            </div>
                        </div>
                    </div>

                    <a href="/industry" class="text-brand-gray hover:text-white transition-colors text-sm font-bold tracking-wide" title="Industry">Industries</a>
                    <a href="/blog" class="text-brand-gray hover:text-white transition-colors text-sm font-bold tracking-wide" title="Blog">Blog</a>
                    <a href="/careers" class="text-brand-gray hover:text-white transition-colors text-sm font-bold tracking-wide" title="Careers">Careers</a>
                    <a href="/contact" class="text-brand-gray hover:text-white transition-colors text-sm font-bold tracking-wide" title="Contact">Contact</a>
                </nav>
                
                <!-- CTA Button -->
                <div class="hidden md:flex items-center ml-auto">
                    <a href="/contact" id="header-cta-btn" class="group relative px-6 py-2.5 font-medium border rounded-full overflow-hidden transition-all text-sm border-white text-white hover:bg-white hover:text-black" title="Contact">
                        <span class="relative flex items-center gap-2">
                            Let's Talk
                            <svg class="w-4 h-4 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 17L17 7M7 7h10v10"></path></svg>
                        </span>
                    </a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center ml-auto">
                    <label id="mobile-menu-btn" for="mobile-menu-toggle" class="text-brand-gray hover:text-white focus:outline-none p-2 -mr-2 relative z-50 cursor-pointer">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </label>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Toggle Checkbox (Hidden) -->
        <input type="checkbox" id="mobile-menu-toggle" class="hidden peer">

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden peer-checked:block md:peer-checked:hidden bg-black/95 backdrop-blur-xl border-b border-white/10 absolute w-full top-full left-0 z-50">
            <div class="px-4 pt-2 pb-6 space-y-1 shadow-lg max-h-[80vh] overflow-y-auto">
                <a href="/" class="block px-3 py-3 text-base font-medium text-brand-gray hover:text-white hover:bg-white/5 rounded-md" title="Corelix Home">Home</a>
                <a href="/about" class="block px-3 py-3 text-base font-medium text-brand-gray hover:text-white hover:bg-white/5 rounded-md" title="About">About</a>
                
                <!-- Services Dropdown (Mobile) -->
                <div>
                    <button class="w-full text-left flex justify-between items-center px-3 py-3 text-base font-medium text-brand-gray hover:text-white hover:bg-white/5 rounded-md focus:outline-none" onclick="document.getElementById('mobile-services-menu').classList.toggle('hidden');">
                        Services
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div id="mobile-services-menu" class="hidden pl-6 py-2 space-y-2 border-l-2 border-brand-blue/30 ml-3">
                        <a href="/services/web-mobile-app-development" class="block px-3 py-2 text-sm font-medium text-brand-gray hover:text-white hover:bg-white/5 rounded-md" title="Web & Mobile App Development">Web & Mobile App Development</a>
                        <a href="/services/seo-services" class="block px-3 py-2 text-sm font-medium text-brand-gray hover:text-white hover:bg-white/5 rounded-md" title="SEO Services">SEO Services</a>
                        <a href="/services/digital-marketing" class="block px-3 py-2 text-sm font-medium text-brand-gray hover:text-white hover:bg-white/5 rounded-md" title="Digital Marketing">Digital Marketing</a>
                        <a href="/services/ai-automation" class="block px-3 py-2 text-sm font-medium text-brand-gray hover:text-white hover:bg-white/5 rounded-md" title="AI & Business Automation">AI & Business Automation</a>
                        <a href="/services/ui-ux-branding" class="block px-3 py-2 text-sm font-medium text-brand-gray hover:text-white hover:bg-white/5 rounded-md" title="UI/UX & Branding">UI/UX & Branding</a>
                        <a href="/services" class="block px-3 py-2 text-sm font-medium text-brand-blue hover:text-brand-blue hover:bg-white/5 rounded-md" title="Services">View All Services &rarr;</a>
                    </div>
                </div>

                <a href="/industry" class="block px-3 py-3 text-base font-medium text-brand-gray hover:text-white hover:bg-white/5 rounded-md" title="Industry">Industries</a>
                <a href="/blog" class="block px-3 py-3 text-base font-medium text-brand-gray hover:text-white hover:bg-white/5 rounded-md" title="Blog">Blog</a>
                <a href="/careers" class="block px-3 py-3 text-base font-medium text-brand-gray hover:text-white hover:bg-white/5 rounded-md" title="Careers">Careers</a>
                <a href="/contact" class="block px-3 py-3 text-base font-medium text-brand-blue hover:text-brand-blue rounded-md" title="Contact">Contact Us &rarr;</a>
            </div>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const navbar = document.getElementById('navbar');
            const navInner = document.getElementById('nav-inner');
            const headerLogo = document.getElementById('header-logo');
            
            const handleScroll = () => {
                if (window.scrollY > 50) {
                    // Scrolled state: floating pill, white blurred background, smaller height
                    navbar.classList.add('mt-4', 'w-[calc(100%-2rem)]', 'max-w-[1968px]', 'rounded-full', 'scrolled-light');
                    navbar.classList.remove('w-full', 'bg-transparent', 'border-transparent');
                    navInner.classList.remove('h-20');
                    navInner.classList.add('h-16');
                    if (headerLogo) headerLogo.src = '/assets/images/lgoo.png';
                } else {
                    // Top state: full width, transparent, original height
                    navbar.classList.remove('mt-4', 'w-[calc(100%-2rem)]', 'max-w-[1968px]', 'rounded-full', 'scrolled-light');
                    navbar.classList.add('w-full', 'bg-transparent', 'border-transparent');
                    navInner.classList.remove('h-16');
                    navInner.classList.add('h-20');
                    if (headerLogo) headerLogo.src = '/assets/images/lgoo-white.png';
                }
            };
            
            // Check immediately on page load
            handleScroll();
            
            // Listen for scroll events
            window.addEventListener('scroll', handleScroll);
        });
    </script>

    <!-- Main Content Wrapper -->
    <main class="relative z-10">
        <!-- Ambient Background Blobs -->
        <div class="fixed inset-0 z-[-1] overflow-hidden pointer-events-none">
            <div class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-brand-blue/20 rounded-full mix-blend-screen filter blur-[100px] animate-blob"></div>
            <div class="absolute top-[20%] right-[-10%] w-96 h-96 bg-brand-green/10 rounded-full mix-blend-screen filter blur-[100px] animate-blob" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-[-20%] left-[20%] w-96 h-96 bg-brand-orange/10 rounded-full mix-blend-screen filter blur-[100px] animate-blob" style="animation-delay: 4s;"></div>
        </div>


