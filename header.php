<?php
// --- DYNAMIC SEO CONFIGURATION ---
// Set defaults if variables are not defined in the parent page
$pageTitle = isset($pageTitle) ? $pageTitle : "GrowAutoAi - Creative Marketing & Tech Solutions";
$metaDesc = isset($metaDesc) ? $metaDesc : "GrowAutoAi is a premium IT Agency offering Web & Mobile Development, UI/UX Design, Digital Marketing, and AI Business Automation.";
$metaKeywords = isset($metaKeywords) ? $metaKeywords : "IT Agency, Web Development, Mobile App Development, UI/UX Design, Digital Marketing, AI Automation, GrowAutoAi, Software Solutions";
$metaAuthor = isset($metaAuthor) ? $metaAuthor : "GrowAutoAi Team";
$metaPublisher = isset($metaPublisher) ? $metaPublisher : "GrowAutoAi";
// Staging mode: prevent search engines from indexing/crawling
$metaRobots = isset($metaRobots) ? $metaRobots : "index, follow";

// Construct canonical URL dynamically
if (!isset($canonicalUrl)) {
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'www.growautoai.com';
    $uri = isset($_SERVER['REQUEST_URI']) ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : '';
    $canonicalUrl = $protocol . $host . $uri;
}

// Open Graph / Social Media Image
$ogImage = isset($ogImage) ? $ogImage : (isset($protocol) && isset($host) ? $protocol . $host . "/assets/images/og-image.jpg" : "https://www.growautoai.com/assets/images/og-image.jpg");
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
    <!-- Googlebot dynamically inherits meta robots -->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9JS95PFG2V"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-9JS95PFG2V');
    </script>

    <!-- Google Search Console -->
    <meta name="google-site-verification" content="aNhtONlstDkZdfb5ql7AsF8hciYFTTINiRxZ3-cr9Ic" />

    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">

    <!-- Hreflang Tags -->
    <link rel="alternate" hreflang="en" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>" />
    <link rel="alternate" hreflang="x-default" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>" />

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/assets/images/favicon.png">
    <link rel="shortcut icon" type="image/png" href="/assets/images/favicon.png">

    <!-- Global CSS -->
    <?php if (basename($_SERVER['PHP_SELF']) !== 'industry.php'): ?>
    <link rel="stylesheet" href="/assets/main.css">
    <?php endif; ?>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($metaDesc, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:site_name" content="GrowAutoAi">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@growautoai">
    <meta name="twitter:url" content="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($metaDesc, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:creator" content="@growautoai">
    
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
    <link href="/assets/aos.css" rel="stylesheet">
    
    <!-- Schema.org JSON-LD for SEO -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "<?php echo $protocol . $host; ?>/#organization",
          "name": "GrowAutoAi",
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
                    <a href="/" class="font-heading font-black text-3xl tracking-tight flex items-center gap-2" title="GrowAutoAi Home">
                        <img id="header-logo" src="/assets/images/logo-white.png" alt="GrowAutoAi Logo" title="GrowAutoAi" class="h-6 md:h-8 w-auto object-contain transition-all duration-300">
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <nav class="hidden md:flex space-x-8 items-center ml-10 lg:ml-16">
                    <a href="/" class="text-brand-gray hover:text-white transition-colors text-sm font-bold tracking-wide" title="GrowAutoAi Home">Home</a>
                    <a href="/about" class="text-brand-gray hover:text-white transition-colors text-sm font-bold tracking-wide" title="About">About</a>
                    
                    <div class="relative group">
                        <a href="/services" class="text-brand-gray hover:text-white transition-colors text-sm font-bold tracking-wide flex items-center gap-1 py-4" title="Services">
                            Services
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </a>
                        <!-- Dropdown Menu (Premium UI) -->
                        <div class="absolute -left-12 mt-0 w-[360px] rounded-3xl bg-white shadow-[0_20px_50px_rgba(0,0,0,0.15)] opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 translate-y-2 group-hover:translate-y-0 border border-gray-100 p-3 grid gap-1 z-50">
                            
                            <a href="/services/web-mobile-app-development" class="flex items-center gap-4 p-3 rounded-2xl hover:bg-gray-50 transition-colors group/item" title="Web & Mobile App Development">
                                <div class="w-11 h-11 rounded-xl bg-blue-50/50 text-brand-blue flex items-center justify-center flex-shrink-0 group-hover/item:bg-brand-blue group-hover/item:text-white group-hover/item:shadow-md transition-all">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-[15px] font-bold text-gray-900 group-hover/item:text-brand-blue transition-colors">Web & Mobile Apps</h4>
                                    <p class="text-[13px] text-gray-500 mt-0.5 font-medium">Custom software development</p>
                                </div>
                            </a>

                            <a href="/services/seo-services" class="flex items-center gap-4 p-3 rounded-2xl hover:bg-gray-50 transition-colors group/item" title="SEO Services">
                                <div class="w-11 h-11 rounded-xl bg-green-50/50 text-brand-green flex items-center justify-center flex-shrink-0 group-hover/item:bg-brand-green group-hover/item:text-white group-hover/item:shadow-md transition-all">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-[15px] font-bold text-gray-900 group-hover/item:text-brand-green transition-colors">SEO Services</h4>
                                    <p class="text-[13px] text-gray-500 mt-0.5 font-medium">Rank higher on search engines</p>
                                </div>
                            </a>

                            <a href="/services/digital-marketing" class="flex items-center gap-4 p-3 rounded-2xl hover:bg-gray-50 transition-colors group/item" title="Digital Marketing">
                                <div class="w-11 h-11 rounded-xl bg-orange-50/50 text-brand-orange flex items-center justify-center flex-shrink-0 group-hover/item:bg-brand-orange group-hover/item:text-white group-hover/item:shadow-md transition-all">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-[15px] font-bold text-gray-900 group-hover/item:text-brand-orange transition-colors">Digital Marketing</h4>
                                    <p class="text-[13px] text-gray-500 mt-0.5 font-medium">Ads, Leads & Brand Growth</p>
                                </div>
                            </a>

                            <a href="/services/ai-automation" class="flex items-center gap-4 p-3 rounded-2xl hover:bg-gray-50 transition-colors group/item" title="AI & Business Automation">
                                <div class="w-11 h-11 rounded-xl bg-purple-50/50 text-purple-500 flex items-center justify-center flex-shrink-0 group-hover/item:bg-purple-500 group-hover/item:text-white group-hover/item:shadow-md transition-all">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-[15px] font-bold text-gray-900 group-hover/item:text-purple-500 transition-colors">AI & Automation</h4>
                                    <p class="text-[13px] text-gray-500 mt-0.5 font-medium">Smart workflows & AI Bots</p>
                                </div>
                            </a>

                            <a href="/services/ui-ux-branding" class="flex items-center gap-4 p-3 rounded-2xl hover:bg-gray-50 transition-colors group/item" title="UI/UX & Branding">
                                <div class="w-11 h-11 rounded-xl bg-pink-50/50 text-pink-500 flex items-center justify-center flex-shrink-0 group-hover/item:bg-pink-500 group-hover/item:text-white group-hover/item:shadow-md transition-all">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-[15px] font-bold text-gray-900 group-hover/item:text-pink-500 transition-colors">UI/UX & Branding</h4>
                                    <p class="text-[13px] text-gray-500 mt-0.5 font-medium">Premium brand identities</p>
                                </div>
                            </a>
                            
                        </div>
                    </div>

                    <a href="/industry" class="text-brand-gray hover:text-white transition-colors text-sm font-bold tracking-wide" title="Industry">Industries</a>
                    <a href="/blog" class="text-brand-gray hover:text-white transition-colors text-sm font-bold tracking-wide" title="Blog">Blog</a>
                    <a href="/careers" class="text-brand-gray hover:text-white transition-colors text-sm font-bold tracking-wide" title="Careers">Careers</a>
                    <a href="/contact" class="text-brand-gray hover:text-white transition-colors text-sm font-bold tracking-wide" title="Contact">Contact</a>
                </nav>
                
                <!-- CTA Button -->
                <div class="hidden md:flex items-center ml-auto">
                    <a href="javascript:void(0)" onclick="openGlobalInquiryModal(event)" id="header-cta-btn" class="group relative px-6 py-2.5 font-medium border rounded-full overflow-hidden transition-all text-sm border-white text-white hover:bg-white hover:text-black" title="Contact">
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
                <a href="/" class="block px-3 py-3 text-base font-medium text-brand-gray hover:text-white hover:bg-white/5 rounded-md" title="GrowAutoAi Home">Home</a>
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
                    if (headerLogo) headerLogo.src = '/assets/images/logo.png';
                } else {
                    // Top state: full width, transparent, original height
                    navbar.classList.remove('mt-4', 'w-[calc(100%-2rem)]', 'max-w-[1968px]', 'rounded-full', 'scrolled-light');
                    navbar.classList.add('w-full', 'bg-transparent', 'border-transparent');
                    navInner.classList.remove('h-16');
                    navInner.classList.add('h-20');
                    if (headerLogo) headerLogo.src = '/assets/images/logo-white.png';
                }
            };
            
            // Check immediately on page load
            handleScroll();
            
            // Listen for scroll events
            window.addEventListener('scroll', handleScroll);
        });
    </script>

    <!-- Main Content Wrapper -->
    <main class="relative">
        <!-- Ambient Background Blobs -->
        <div class="fixed inset-0 z-[-1] overflow-hidden pointer-events-none">
            <div class="absolute top-[-10%] left-[-10%] w-96 h-96 bg-brand-blue/20 rounded-full mix-blend-screen filter blur-[100px] animate-blob"></div>
            <div class="absolute top-[20%] right-[-10%] w-96 h-96 bg-brand-green/10 rounded-full mix-blend-screen filter blur-[100px] animate-blob" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-[-20%] left-[20%] w-96 h-96 bg-brand-orange/10 rounded-full mix-blend-screen filter blur-[100px] animate-blob" style="animation-delay: 4s;"></div>
        </div>


