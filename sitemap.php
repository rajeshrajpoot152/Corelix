<?php 
$pageTitle = "Sitemap - Corelix";
include 'header.php'; 
?>
<!-- Inner Page Hero Banner -->
<section class="pt-28 pb-12 md:pt-36 md:pb-20 relative overflow-hidden bg-slate-950">
    <!-- Grid & Glow -->
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[600px] bg-brand-blue/20 rounded-full mix-blend-screen filter blur-[120px] pointer-events-none"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="zoom-out-up">
        <!-- Badge -->
        <h1 class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-4 md:mb-6 text-white text-xs font-bold tracking-widest uppercase shadow-sm">
            Navigation Overview
        </h1>
        
        <!-- Main Visual Heading -->
        <h2 class="text-3xl md:text-5xl lg:text-6xl font-black font-heading text-white mb-4 tracking-tight leading-tight md:leading-none">
            Corelix <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue to-brand-green">Sitemap</span>
        </h2>
        
        <!-- Subtitle -->
        <p class="text-sm md:text-base text-gray-400 max-w-2xl mx-auto font-medium">
            Explore all sections, pages, and services available across our digital ecosystem.
        </p>
    </div>
</section>

<main class="bg-[#080B12] min-h-screen py-16 relative z-10">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-[1536px]">
        <div class="bg-brand-black/90 backdrop-blur-md rounded-3xl shadow-2xl border border-white/10 p-8 sm:p-12 mb-12 overflow-hidden">

            <!-- Section 01: Company -->
            <div class="relative mb-20 pt-8">
                <!-- Large background number -->
                <div class="absolute -top-6 left-0 text-[12rem] sm:text-[14rem] leading-none font-black text-white/5 pointer-events-none select-none z-0 tracking-tighter">01</div>
                
                <h2 class="relative text-3xl sm:text-4xl font-bold text-white mb-12 z-10 font-heading pl-2 sm:pl-4">Company</h2>
                
                <div class="relative z-10 px-2 sm:px-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-6 gap-x-8 border-b border-white/10 pb-10">
                        <a href="/" class="text-gray-300 hover:text-brand-orange transition-colors text-sm font-medium" title="Corelix Home">Home</a>
                        <a href="/about" class="text-gray-300 hover:text-brand-orange transition-colors text-sm font-medium" title="About">About Us</a>
                        <a href="/contact" class="text-gray-300 hover:text-brand-orange transition-colors text-sm font-medium" title="Contact">Contact Us</a>
                        <a href="/careers" class="text-gray-300 hover:text-brand-orange transition-colors text-sm font-medium" title="Careers">Careers</a>
                        <a href="/industry" class="text-gray-300 hover:text-brand-orange transition-colors text-sm font-medium" title="Industry">Industries</a>
                    </div>

                    <div class="mt-10">
                        <h3 class="text-lg font-bold text-white mb-6 font-heading border-b border-white/10 pb-3">Legal</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-y-6 gap-x-8">
                            <a href="/terms-of-service" class="text-gray-300 hover:text-brand-orange transition-colors text-sm font-medium" title="Terms Of Service">Terms of Use</a>
                            <a href="/privacy-policy" class="text-gray-300 hover:text-brand-orange transition-colors text-sm font-medium" title="Privacy Policy">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section 02: Services -->
            <div class="relative pt-8 pb-10">
                <!-- Large background number -->
                <div class="absolute -top-6 left-0 text-[12rem] sm:text-[14rem] leading-none font-black text-white/5 pointer-events-none select-none z-0 tracking-tighter">02</div>
                
                <h2 class="relative text-3xl sm:text-4xl font-bold text-white mb-12 z-10 font-heading pl-2 sm:pl-4">Services</h2>
                
                <div class="relative z-10 px-2 sm:px-4">
                    <h3 class="text-lg font-bold text-white mb-6 font-heading border-b border-white/10 pb-3">Core Services</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-y-6 gap-x-8">
                        <a href="/services" class="text-gray-300 hover:text-brand-orange transition-colors text-sm font-medium" title="Services Overview">Services Overview</a>
                        <a href="/services/web-mobile-app-development" class="text-gray-300 hover:text-brand-blue transition-colors text-sm font-medium" title="Web & Mobile App Development">Web & Mobile App Development</a>
                        <a href="/services/seo-services" class="text-gray-300 hover:text-brand-green transition-colors text-sm font-medium" title="SEO Services">SEO Services</a>
                        <a href="/services/digital-marketing" class="text-gray-300 hover:text-brand-orange transition-colors text-sm font-medium" title="Digital Marketing">Digital Marketing</a>
                        <a href="/services/ai-automation" class="text-gray-300 hover:text-brand-red transition-colors text-sm font-medium" title="AI & Business Automation">AI & Business Automation</a>
                        <a href="/services/ui-ux-branding" class="text-gray-300 hover:text-purple-400 transition-colors text-sm font-medium" title="UI/UX & Branding">UI/UX & Branding</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
<?php include 'footer.php'; ?>
