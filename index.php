<?php 
$pageTitle = "Corelix | Creative Marketing & Tech Solutions Agency";
$metaDesc = "Corelix is a leading global IT & Digital Marketing agency delivering Web Development, UI/UX Design, AI Business Automation, SEO, and Performance Marketing.";
$metaKeywords = "Corelix, IT Agency, Web Development, Digital Marketing Agency, Mobile App Development, AI Business Automation, UI/UX Design, Technical SEO, Custom CRM Development";
include 'header.php'; 
?>


<!-- Hero Section -->
<section class="relative w-full h-screen bg-brand-black overflow-hidden">
    <div class="relative w-full h-full flex items-center justify-center">
        <!-- Video Background -->
        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover">
            <source src="assets/videos/video-banner.mp4" type="video/mp4">
        </video>
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black/50"></div>
        
        <!-- Content -->
        <!-- Content -->
        <div class="relative z-10 text-center px-4 sm:px-6 w-full max-w-7xl mx-auto flex flex-col items-center justify-center h-full pt-20" data-aos="fade-up">
            <!-- Main Heading with Gradients -->
            <h1 class="text-[26px] sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-black text-white mb-4 sm:mb-6 tracking-tight font-heading drop-shadow-2xl flex flex-col items-center gap-0 sm:gap-1 lg:gap-2">
                <span class="whitespace-nowrap leading-none">Empowering Your <span class="bg-gradient-to-r from-brand-blue to-purple-400 bg-clip-text text-transparent">Business</span></span>
                <span class="leading-none pt-2 sm:pt-3">Driven by <span class="bg-gradient-to-r from-brand-blue to-brand-green bg-clip-text text-transparent">Experts</span></span>
            </h1>
            
            <!-- Subtext -->
            <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-white/95 font-medium max-w-2xl mx-auto drop-shadow-lg leading-relaxed">
                A dedicated team of experts building cutting-edge software and impactful designs to accelerate your business growth.
            </p>
            
            <!-- CTA Button -->
            <div class="mt-8">
                <a href="/contact" class="inline-flex items-center px-6 py-3 rounded-full bg-gradient-to-br from-brand-blue to-brand-green text-white font-bold text-sm sm:text-base hover:shadow-[0_0_20px_rgba(30,58,138,0.5)] transition-all duration-300 hover:-translate-y-1 group" title="Talk to Us">
                    Talk to Us
                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 17L17 7M7 7h10v10"></path></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<!-- Stats Section -->
<section class="relative z-20 -mt-20 w-full">
    <!-- White background starting below the hero -->
    <div class="absolute inset-x-0 bottom-0 top-20 bg-white rounded-t-[40px] md:rounded-t-[60px]"></div>
    
    <div class="relative px-4 sm:px-6 lg:px-8 max-w-[1536px] mx-auto pb-12">
        <div class="bg-white rounded-3xl shadow-[0_20px_50px_rgba(0,0,0,0.1)] border-t-4 border-t-brand-green p-4 sm:p-10">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-y-6 gap-x-2 sm:gap-10 lg:gap-0 lg:divide-x divide-gray-100">
                
                <!-- Stat 1 -->
                <div class="flex items-center gap-2 sm:gap-5 justify-center lg:pr-4 xl:pr-8">
                    <div class="relative w-14 h-14 sm:w-24 sm:h-24 flex-shrink-0">
                        <div class="absolute inset-0 rounded-full" style="background: conic-gradient(from 160deg, transparent 10%, #683AF2 100%); -webkit-mask-image: radial-gradient(transparent 55%, black 56%); mask-image: radial-gradient(transparent 55%, black 56%);"></div>
                        <div class="absolute inset-0 transform rotate-[15deg]">
                            <div class="absolute top-[18%] left-1/2 w-[1.5px] h-[32%] bg-gray-800 transform -translate-x-1/2"></div>
                            <div class="absolute top-1/2 left-1/2 w-2 h-2 bg-gray-800 rounded-full transform -translate-x-1/2 -translate-y-1/2"></div>
                        </div>
                    </div>
                    <div class="text-left flex flex-col justify-center">
                        <h3 class="text-xl sm:text-3xl md:text-4xl lg:text-5xl font-black text-[#1a1a2e] font-heading leading-none mb-0.5 sm:mb-1">
                            <span class="stat-counter" data-target="14">0</span><span class="text-brand-blue ml-0.5 font-bold">+</span>
                        </h3>
                        <p class="text-[7.5px] sm:text-[10px] lg:text-xs text-gray-500 font-bold uppercase tracking-widest leading-tight sm:leading-snug max-w-[65px] sm:max-w-[120px]">Years of <br>Experience</p>
                    </div>
                </div>

                <!-- Stat 2 -->
                <div class="flex items-center gap-2 sm:gap-5 justify-center lg:px-4 xl:px-8">
                    <div class="relative w-14 h-14 sm:w-24 sm:h-24 flex-shrink-0">
                        <div class="absolute inset-0 rounded-full" style="background: conic-gradient(from 160deg, transparent 10%, #FF6B00 100%); -webkit-mask-image: radial-gradient(transparent 55%, black 56%); mask-image: radial-gradient(transparent 55%, black 56%);"></div>
                        <div class="absolute inset-0 transform rotate-[45deg]">
                            <div class="absolute top-[18%] left-1/2 w-[1.5px] h-[32%] bg-gray-800 transform -translate-x-1/2"></div>
                            <div class="absolute top-1/2 left-1/2 w-2 h-2 bg-gray-800 rounded-full transform -translate-x-1/2 -translate-y-1/2"></div>
                        </div>
                    </div>
                    <div class="text-left flex flex-col justify-center">
                        <h3 class="text-xl sm:text-3xl md:text-4xl lg:text-5xl font-black text-[#1a1a2e] font-heading leading-none mb-0.5 sm:mb-1">
                            <span class="stat-counter" data-target="6">0</span><span class="text-brand-orange ml-0.5 font-bold">+</span>
                        </h3>
                        <p class="text-[7.5px] sm:text-[10px] lg:text-xs text-gray-500 font-bold uppercase tracking-widest leading-tight sm:leading-snug max-w-[65px] sm:max-w-[120px]">SaaS <br>Products</p>
                    </div>
                </div>

                <!-- Stat 3 -->
                <div class="flex items-center gap-2 sm:gap-5 justify-center lg:px-4 xl:px-8">
                    <div class="relative w-14 h-14 sm:w-24 sm:h-24 flex-shrink-0">
                        <div class="absolute inset-0 rounded-full" style="background: conic-gradient(from 160deg, transparent 10%, #10B981 100%); -webkit-mask-image: radial-gradient(transparent 55%, black 56%); mask-image: radial-gradient(transparent 55%, black 56%);"></div>
                        <div class="absolute inset-0 transform -rotate-[20deg]">
                            <div class="absolute top-[18%] left-1/2 w-[1.5px] h-[32%] bg-gray-800 transform -translate-x-1/2"></div>
                            <div class="absolute top-1/2 left-1/2 w-2 h-2 bg-gray-800 rounded-full transform -translate-x-1/2 -translate-y-1/2"></div>
                        </div>
                    </div>
                    <div class="text-left flex flex-col justify-center">
                        <h3 class="text-xl sm:text-3xl md:text-4xl lg:text-5xl font-black text-[#1a1a2e] font-heading leading-none mb-0.5 sm:mb-1">
                            <span class="stat-counter" data-target="80">0</span><span class="text-brand-green ml-0.5 font-bold">+</span>
                        </h3>
                        <p class="text-[7.5px] sm:text-[10px] lg:text-xs text-gray-500 font-bold uppercase tracking-widest leading-tight sm:leading-snug max-w-[65px] sm:max-w-[120px]">Projects <br>Delivered</p>
                    </div>
                </div>

                <!-- Stat 4 -->
                <div class="flex items-center gap-2 sm:gap-5 justify-center lg:pl-4 xl:pl-8">
                    <div class="relative w-14 h-14 sm:w-24 sm:h-24 flex-shrink-0">
                        <div class="absolute inset-0 rounded-full" style="background: conic-gradient(from 160deg, transparent 10%, #A855F7 100%); -webkit-mask-image: radial-gradient(transparent 55%, black 56%); mask-image: radial-gradient(transparent 55%, black 56%);"></div>
                        <div class="absolute inset-0 transform rotate-[60deg]">
                            <div class="absolute top-[18%] left-1/2 w-[1.5px] h-[32%] bg-gray-800 transform -translate-x-1/2"></div>
                            <div class="absolute top-1/2 left-1/2 w-2 h-2 bg-gray-800 rounded-full transform -translate-x-1/2 -translate-y-1/2"></div>
                        </div>
                    </div>
                    <div class="text-left flex flex-col justify-center">
                        <h3 class="text-xl sm:text-3xl md:text-4xl lg:text-5xl font-black text-[#1a1a2e] font-heading leading-none mb-0.5 sm:mb-1">
                            <span class="stat-counter" data-target="10">0</span><span class="text-purple-400 ml-0.5 font-bold">+</span>
                        </h3>
                        <p class="text-[7.5px] sm:text-[10px] lg:text-xs text-gray-500 font-bold uppercase tracking-widest leading-tight sm:leading-snug max-w-[65px] sm:max-w-[120px]">Global <br>Clients</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Services Sticky Stack Section -->
<section id="services-stack" class="py-24 bg-white relative border-b border-gray-200">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTMwLjUgMjEuNWgtdjEwaDEwdS0xMCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSJyZ2JhKDAsMCwwLDAuMDUpIiBzdHJva2Utd2lkdGg9IjEiLz48L3N2Zz4=')] opacity-50 pointer-events-none"></div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <!-- Header -->
        <div class="flex flex-col gap-4 mb-20" data-aos="fade-up">
            <h2 class="text-5xl md:text-6xl font-black font-heading text-[#1a1a2e] tracking-tight">Core Services</h2>
            <p class="relative z-10 text-gray-600 text-xl max-w-2xl">We design and build digital platforms that look great, perform smoothly, and turn visitors into customers. Scroll to explore our stack.</p>
        </div>

        <div class="flex flex-col gap-10">
            <!-- Card 1: Web & Mobile App Dev -->
            <article class="static min-[900px]:sticky grid grid-cols-1 min-[900px]:grid-cols-12 gap-0 min-[900px]:min-h-[58vh] bg-white border border-gray-200 rounded-[32px] overflow-hidden shadow-[0_20px_60px_-15px_rgba(0,0,0,0.1)] shadow-brand-blue/5 top-[100px]">
                <div class="col-span-1 min-[900px]:col-span-5 relative h-64 min-[900px]:h-full min-h-[300px]">
                    <img src="/assets/images/Web-Mobile-Development.jpg" class="absolute inset-0 w-full h-full object-cover" alt="Web and Mobile App Development" title="Web Mobile Development">
                </div>
                <div class="col-span-1 min-[900px]:col-span-7 relative flex flex-col gap-6 min-w-0 p-8 md:p-12 overflow-hidden">
                    <div class="absolute -top-32 -right-32 w-96 h-96 bg-brand-blue/10 rounded-full blur-[100px] pointer-events-none z-0"></div>
                    <div class="absolute bottom-0 left-0 w-72 h-72 bg-brand-blue/5 rounded-full blur-[80px] pointer-events-none z-0"></div>

                    <div class="flex items-center gap-3 relative z-10">
                        <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-brand-blue/10 text-brand-blue border border-brand-blue/20 rounded-full text-xs font-bold uppercase tracking-wider">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                            ENGINEERING & APP DEV
                        </span>
                    </div>
                    <h3 class="relative z-10 text-4xl md:text-6xl lg:text-[4.1rem] font-black font-heading text-[#1a1a2e] tracking-tight">Web & Mobile App <span class="text-brand-blue">Development</span></h3>
                    <p class="relative z-10 text-gray-600 text-lg leading-relaxed">High-performance custom web applications, native & cross-platform iOS/Android apps, and scalable cloud architectures built for speed and security.</p>
                    
                    <div class="mt-2 relative z-10">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <h4 class="text-lg font-bold text-[#1a1a2e] font-heading">Core Services</h4>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-2 bg-gray-100 border border-gray-200 rounded-full text-sm text-gray-600 hover:bg-brand-blue/5 hover:border-brand-blue/20 hover:text-brand-blue transition-colors cursor-default shadow-sm">Custom Web Apps</span>
                            <span class="px-4 py-2 bg-gray-100 border border-gray-200 rounded-full text-sm text-gray-600 hover:bg-brand-blue/5 hover:border-brand-blue/20 hover:text-brand-blue transition-colors cursor-default shadow-sm">iOS & Android Apps</span>
                            <span class="px-4 py-2 bg-gray-100 border border-gray-200 rounded-full text-sm text-gray-600 hover:bg-brand-blue/5 hover:border-brand-blue/20 hover:text-brand-blue transition-colors cursor-default shadow-sm">Enterprise SaaS</span>
                            <span class="px-4 py-2 bg-gray-100 border border-gray-200 rounded-full text-sm text-gray-600 hover:bg-brand-blue/5 hover:border-brand-blue/20 hover:text-brand-blue transition-colors cursor-default shadow-sm">API Development</span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                            <h4 class="text-lg font-bold text-[#1a1a2e] font-heading">Key Technologies</h4>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-800 shadow-sm">React / Next.js</span>
                            <span class="px-4 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-800 shadow-sm">React Native / Flutter</span>
                            <span class="px-4 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-800 shadow-sm">Node.js</span>
                            <span class="px-4 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-800 shadow-sm">AWS / GCP</span>
                        </div>
                    </div>

                    <div class="mt-6 relative z-10">
                        <a href="/services/web-mobile-app-development" class="inline-flex items-center bg-gray-900 text-white rounded-full p-1.5 pr-6 hover:bg-black hover:shadow-lg hover:shadow-brand-blue/30 transition-all duration-300 group" title="Web & Mobile App Development">
                            <div class="w-10 h-10 rounded-full bg-brand-blue text-white flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300 shadow-sm shadow-brand-blue/50">
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </div>
                            <span class="font-bold text-sm">Explore Development Solutions</span>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Card 2: SEO Services -->
            <article class="static min-[900px]:sticky grid grid-cols-1 min-[900px]:grid-cols-12 gap-0 min-[900px]:min-h-[58vh] bg-white border border-gray-200 rounded-[32px] overflow-hidden shadow-[0_20px_60px_-15px_rgba(0,0,0,0.1)] shadow-brand-green/5 top-[125px]">
                <div class="col-span-1 min-[900px]:col-span-5 relative h-64 min-[900px]:h-full min-h-[300px]">
                    <img src="/assets/images/Digital-Marketing-SEO.jpg" class="absolute inset-0 w-full h-full object-cover" alt="SEO Services" title="SEO Services">
                </div>
                <div class="col-span-1 min-[900px]:col-span-7 relative flex flex-col gap-6 min-w-0 p-8 md:p-12 overflow-hidden">
                    <div class="absolute -top-32 -right-32 w-96 h-96 bg-brand-green/10 rounded-full blur-[100px] pointer-events-none z-0"></div>
                    <div class="absolute bottom-0 left-0 w-72 h-72 bg-brand-green/5 rounded-full blur-[80px] pointer-events-none z-0"></div>

                    <div class="flex items-center gap-3 relative z-10">
                        <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-brand-green/10 text-brand-green border border-brand-green/20 rounded-full text-xs font-bold uppercase tracking-wider">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                            SEARCH ENGINE OPTIMIZATION
                        </span>
                    </div>
                    <h3 class="relative z-10 text-4xl md:text-6xl lg:text-[4.1rem] font-black font-heading text-[#1a1a2e] tracking-tight">SEO <span class="text-brand-green">Services</span></h3>
                    <p class="relative z-10 text-gray-600 text-lg leading-relaxed">Data-driven SEO strategies, advanced technical SEO audits, and high-authority link building to dominate organic rankings and drive qualified traffic.</p>
                    
                    <div class="mt-2 relative z-10">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <h4 class="text-lg font-bold text-[#1a1a2e] font-heading">Core Services</h4>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-2 bg-gray-100 border border-gray-200 rounded-full text-sm text-gray-600 hover:bg-brand-green/5 hover:border-brand-green/20 hover:text-brand-green transition-colors cursor-default shadow-sm">Technical SEO</span>
                            <span class="px-4 py-2 bg-gray-100 border border-gray-200 rounded-full text-sm text-gray-600 hover:bg-brand-green/5 hover:border-brand-green/20 hover:text-brand-green transition-colors cursor-default shadow-sm">On-Page Optimization</span>
                            <span class="px-4 py-2 bg-gray-100 border border-gray-200 rounded-full text-sm text-gray-600 hover:bg-brand-green/5 hover:border-brand-green/20 hover:text-brand-green transition-colors cursor-default shadow-sm">Link Building</span>
                            <span class="px-4 py-2 bg-gray-100 border border-gray-200 rounded-full text-sm text-gray-600 hover:bg-brand-green/5 hover:border-brand-green/20 hover:text-brand-green transition-colors cursor-default shadow-sm">Local & E-commerce SEO</span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                            <h4 class="text-lg font-bold text-[#1a1a2e] font-heading">Key Tools</h4>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-800 shadow-sm">Google Analytics 4</span>
                            <span class="px-4 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-800 shadow-sm">Semrush</span>
                            <span class="px-4 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-800 shadow-sm">Ahrefs</span>
                            <span class="px-4 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-800 shadow-sm">Search Console</span>
                        </div>
                    </div>

                    <div class="mt-6 relative z-10">
                        <a href="/services/seo-services" class="inline-flex items-center bg-gray-900 text-white rounded-full p-1.5 pr-6 hover:bg-black hover:shadow-lg hover:shadow-brand-green/30 transition-all duration-300 group" title="SEO Services">
                            <div class="w-10 h-10 rounded-full bg-brand-green text-white flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300 shadow-sm shadow-brand-green/50">
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </div>
                            <span class="font-bold text-sm">Explore SEO Solutions</span>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Card 3: Digital Marketing -->
            <article class="static min-[900px]:sticky grid grid-cols-1 min-[900px]:grid-cols-12 gap-0 min-[900px]:min-h-[58vh] bg-white border border-gray-200 rounded-[32px] overflow-hidden shadow-[0_20px_60px_-15px_rgba(0,0,0,0.1)] shadow-brand-orange/5 top-[150px]">
                <div class="col-span-1 min-[900px]:col-span-5 relative h-64 min-[900px]:h-full min-h-[300px]">
                    <img src="/assets/images/Social-Media.jpg" class="absolute inset-0 w-full h-full object-cover" alt="Digital Marketing" title="Digital Marketing">
                </div>
                <div class="col-span-1 min-[900px]:col-span-7 relative flex flex-col gap-6 min-w-0 p-8 md:p-12 overflow-hidden">
                    <div class="absolute -top-32 -right-32 w-96 h-96 bg-brand-orange/10 rounded-full blur-[100px] pointer-events-none z-0"></div>
                    <div class="absolute bottom-0 left-0 w-72 h-72 bg-brand-orange/5 rounded-full blur-[80px] pointer-events-none z-0"></div>

                    <div class="flex items-center gap-3 relative z-10">
                        <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-brand-orange/10 text-brand-orange border border-brand-orange/20 rounded-full text-xs font-bold uppercase tracking-wider">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                            PERFORMANCE & ADS
                        </span>
                    </div>
                    <h3 class="relative z-10 text-4xl md:text-6xl lg:text-[4.1rem] font-black font-heading text-[#1a1a2e] tracking-tight">Digital <span class="text-brand-orange">Marketing</span></h3>
                    <p class="relative z-10 text-gray-600 text-lg leading-relaxed">High-ROI performance marketing, conversion rate optimization, and omnichannel social media advertising designed to scale acquisition and revenue.</p>
                    
                    <div class="mt-2 relative z-10">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <h4 class="text-lg font-bold text-[#1a1a2e] font-heading">Core Services</h4>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-2 bg-gray-100 border border-gray-200 rounded-full text-sm text-gray-600 hover:bg-brand-orange/5 hover:border-brand-orange/20 hover:text-brand-orange transition-colors cursor-default shadow-sm">Google & PPC Ads</span>
                            <span class="px-4 py-2 bg-gray-100 border border-gray-200 rounded-full text-sm text-gray-600 hover:bg-brand-orange/5 hover:border-brand-orange/20 hover:text-brand-orange transition-colors cursor-default shadow-sm">Meta & Social Ads</span>
                            <span class="px-4 py-2 bg-gray-100 border border-gray-200 rounded-full text-sm text-gray-600 hover:bg-brand-orange/5 hover:border-brand-orange/20 hover:text-brand-orange transition-colors cursor-default shadow-sm">Conversion Optimization</span>
                            <span class="px-4 py-2 bg-gray-100 border border-gray-200 rounded-full text-sm text-gray-600 hover:bg-brand-orange/5 hover:border-brand-orange/20 hover:text-brand-orange transition-colors cursor-default shadow-sm">Content Marketing</span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path></svg>
                            <h4 class="text-lg font-bold text-[#1a1a2e] font-heading">Key Platforms</h4>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-800 shadow-sm">Google Ads</span>
                            <span class="px-4 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-800 shadow-sm">Meta Ads Manager</span>
                            <span class="px-4 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-800 shadow-sm">LinkedIn Ads</span>
                            <span class="px-4 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-800 shadow-sm">HubSpot</span>
                        </div>
                    </div>

                    <div class="mt-6 relative z-10">
                        <a href="/services/digital-marketing" class="inline-flex items-center bg-gray-900 text-white rounded-full p-1.5 pr-6 hover:bg-black hover:shadow-lg hover:shadow-brand-orange/30 transition-all duration-300 group" title="Digital Marketing">
                            <div class="w-10 h-10 rounded-full bg-brand-orange text-white flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300 shadow-sm shadow-brand-orange/50">
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </div>
                            <span class="font-bold text-sm">Explore Marketing Solutions</span>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Card 4: AI & Business Automation -->
            <article class="static min-[900px]:sticky grid grid-cols-1 min-[900px]:grid-cols-12 gap-0 min-[900px]:min-h-[58vh] bg-white border border-gray-200 rounded-[32px] overflow-hidden shadow-[0_20px_60px_-15px_rgba(0,0,0,0.1)] shadow-brand-red/5 top-[175px]">
                <div class="col-span-1 min-[900px]:col-span-5 relative h-64 min-[900px]:h-full min-h-[300px]">
                    <img src="/assets/images/AI-Business-Automation.jpg" class="absolute inset-0 w-full h-full object-cover" alt="AI and Business Automation" title="AI Business Automation">
                </div>
                <div class="col-span-1 min-[900px]:col-span-7 relative flex flex-col gap-6 min-w-0 p-8 md:p-12 overflow-hidden">
                    <div class="absolute -top-32 -right-32 w-96 h-96 bg-brand-red/10 rounded-full blur-[100px] pointer-events-none z-0"></div>
                    <div class="absolute bottom-0 left-0 w-72 h-72 bg-brand-red/5 rounded-full blur-[80px] pointer-events-none z-0"></div>

                    <div class="flex items-center gap-3 relative z-10">
                        <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-brand-red/10 text-brand-red border border-brand-red/20 rounded-full text-xs font-bold uppercase tracking-wider">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            AI / AUTOMATION
                        </span>
                    </div>
                    <h3 class="relative z-10 text-4xl md:text-6xl lg:text-[4.1rem] font-black font-heading text-[#1a1a2e] tracking-tight">AI & Business <span class="text-brand-red">Automation</span></h3>
                    <p class="relative z-10 text-gray-600 text-lg leading-relaxed">Intelligent WhatsApp chatbots, CRM integrations, and automated workflows to streamline operations and reduce manual tasks by up to 80%.</p>
                    
                    <div class="mt-2 relative z-10">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                            <h4 class="text-lg font-bold text-[#1a1a2e] font-heading">Core Services</h4>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-2 bg-gray-100 border border-gray-200 rounded-full text-sm text-gray-600 hover:bg-brand-red/5 hover:border-brand-red/20 hover:text-brand-red transition-colors cursor-default shadow-sm">AI Consulting</span>
                            <span class="px-4 py-2 bg-gray-100 border border-gray-200 rounded-full text-sm text-gray-600 hover:bg-brand-red/5 hover:border-brand-red/20 hover:text-brand-red transition-colors cursor-default shadow-sm">WhatsApp Automation</span>
                            <span class="px-4 py-2 bg-gray-100 border border-gray-200 rounded-full text-sm text-gray-600 hover:bg-brand-red/5 hover:border-brand-red/20 hover:text-brand-red transition-colors cursor-default shadow-sm">CRM Integration</span>
                            <span class="px-4 py-2 bg-gray-100 border border-gray-200 rounded-full text-sm text-gray-600 hover:bg-brand-red/5 hover:border-brand-red/20 hover:text-brand-red transition-colors cursor-default shadow-sm">Custom Chatbots</span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            <h4 class="text-lg font-bold text-[#1a1a2e] font-heading">Key Technologies</h4>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-800 shadow-sm">OpenAI</span>
                            <span class="px-4 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-800 shadow-sm">Make.com</span>
                            <span class="px-4 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-800 shadow-sm">Zapier</span>
                            <span class="px-4 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-800 shadow-sm">Python</span>
                        </div>
                    </div>

                    <div class="mt-6 relative z-10">
                        <a href="/services/ai-automation" class="inline-flex items-center bg-gray-900 text-white rounded-full p-1.5 pr-6 hover:bg-black hover:shadow-lg hover:shadow-brand-red/30 transition-all duration-300 group" title="AI & Business Automation">
                            <div class="w-10 h-10 rounded-full bg-brand-red text-white flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300 shadow-sm shadow-brand-red/50">
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </div>
                            <span class="font-bold text-sm">Explore AI Solutions</span>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Card 5: UI/UX & Branding -->
            <article class="static min-[900px]:sticky grid grid-cols-1 min-[900px]:grid-cols-12 gap-0 min-[900px]:min-h-[58vh] bg-white border border-gray-200 rounded-[32px] overflow-hidden shadow-[0_20px_60px_-15px_rgba(0,0,0,0.1)] shadow-purple-500/5 top-[200px]">
                <div class="col-span-1 min-[900px]:col-span-5 relative h-64 min-[900px]:h-full min-h-[300px]">
                    <img src="/assets/images/UIUX-Design-Creative.jpg" class="absolute inset-0 w-full h-full object-cover" alt="UI/UX and Branding" title="UI/UX Branding">
                </div>
                <div class="col-span-1 min-[900px]:col-span-7 relative flex flex-col gap-6 min-w-0 p-8 md:p-12 overflow-hidden">
                    <div class="absolute -top-32 -right-32 w-96 h-96 bg-purple-500/10 rounded-full blur-[100px] pointer-events-none z-0"></div>
                    <div class="absolute bottom-0 left-0 w-72 h-72 bg-purple-500/5 rounded-full blur-[80px] pointer-events-none z-0"></div>

                    <div class="flex items-center gap-3 relative z-10">
                        <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-purple-500/10 text-purple-600 border border-purple-500/20 rounded-full text-xs font-bold uppercase tracking-wider">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                            DESIGN & BRANDING
                        </span>
                    </div>
                    <h3 class="relative z-10 text-4xl md:text-6xl lg:text-[4.1rem] font-black font-heading text-[#1a1a2e] tracking-tight">UI/UX & <span class="text-purple-600">Branding</span></h3>
                    <p class="relative z-10 text-gray-600 text-lg leading-relaxed">Human-centric UI/UX design, brand identity systems, interactive wireframes, and motion design that elevate your brand and maximize user engagement.</p>
                    
                    <div class="mt-2 relative z-10">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <h4 class="text-lg font-bold text-[#1a1a2e] font-heading">Core Services</h4>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-2 bg-gray-100 border border-gray-200 rounded-full text-sm text-gray-600 hover:bg-purple-500/5 hover:border-purple-500/20 hover:text-purple-600 transition-colors cursor-default shadow-sm">UI/UX Design</span>
                            <span class="px-4 py-2 bg-gray-100 border border-gray-200 rounded-full text-sm text-gray-600 hover:bg-purple-500/5 hover:border-purple-500/20 hover:text-purple-600 transition-colors cursor-default shadow-sm">Corporate Identity</span>
                            <span class="px-4 py-2 bg-gray-100 border border-gray-200 rounded-full text-sm text-gray-600 hover:bg-purple-500/5 hover:border-purple-500/20 hover:text-purple-600 transition-colors cursor-default shadow-sm">Brand Strategy</span>
                            <span class="px-4 py-2 bg-gray-100 border border-gray-200 rounded-full text-sm text-gray-600 hover:bg-purple-500/5 hover:border-purple-500/20 hover:text-purple-600 transition-colors cursor-default shadow-sm">Wireframing & Prototyping</span>
                        </div>
                    </div>

                    <div class="mt-4">
                        <div class="flex items-center gap-2 mb-4">
                            <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path></svg>
                            <h4 class="text-lg font-bold text-[#1a1a2e] font-heading">Key Design Tools</h4>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-4 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-800 shadow-sm">Figma</span>
                            <span class="px-4 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-800 shadow-sm">Adobe XD</span>
                            <span class="px-4 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-800 shadow-sm">Illustrator</span>
                            <span class="px-4 py-2 bg-white border border-gray-200 rounded-full text-xs font-bold text-gray-800 shadow-sm">Framer</span>
                        </div>
                    </div>

                    <div class="mt-6 relative z-10">
                        <a href="/services/ui-ux-branding" class="inline-flex items-center bg-gray-900 text-white rounded-full p-1.5 pr-6 hover:bg-black hover:shadow-lg hover:shadow-purple-500/30 transition-all duration-300 group" title="UI/UX & Branding">
                            <div class="w-10 h-10 rounded-full bg-purple-600 text-white flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300 shadow-sm shadow-purple-500/50">
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </div>
                            <span class="font-bold text-sm">Explore Design & Branding</span>
                        </a>
                    </div>
                </div>
            </article>
        </div>

        <!-- View All Services Link -->
        <div class="mt-16 flex justify-center w-full" data-aos="fade-up">
            <a href="/services" class="group inline-flex items-center gap-2 text-brand-blue font-bold text-xl hover:text-brand-blue/80 transition-colors border-b-2 border-brand-blue pb-1" title="Services">
                View all services
                <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
        </div>
    </div>
</section>

<section class="py-24 text-center overflow-hidden bg-slate-950 border-t border-white/10 relative" aria-label="Platforms and Technologies">
    <!-- Background Glow -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[600px] bg-brand-blue/20 blur-[120px] rounded-full pointer-events-none"></div>
    <div class="mb-16 px-4 max-md:mb-10 relative z-10">
        <h2 class="text-4xl md:text-5xl font-black font-heading text-white tracking-tight">Platforms & Technologies</h2>
        <p class="mt-4 text-gray-400 text-lg max-w-2xl mx-auto">Whether you're starting out, growing fast or scaling big, we use the best modern stack to build your vision.</p></div><div class="flex flex-col gap-6 overflow-hidden relative w-screen ml-[calc(-50vw+50%)] mr-[calc(-50vw+50%)] py-4 before:content-[''] before:absolute before:top-0 before:bottom-0 before:w-[150px] before:z-10 before:pointer-events-none before:left-0 before:bg-gradient-to-r before:from-slate-950 before:to-transparent after:content-[''] after:absolute after:top-0 after:bottom-0 after:w-[150px] after:z-10 after:pointer-events-none after:right-0 after:bg-gradient-to-l after:from-slate-950 after:to-transparent"><div class="flex w-fit" aria-hidden="true"><div class="flex gap-6 pr-6 w-max animate-scroll-left"><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="PostgreSQL"><img src="/assets/images/postgresql.svg" alt="PostgreSQL" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Postgresql"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="MongoDB"><img src="/assets/images/mongodb.svg" alt="MongoDB" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Mongodb"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Tailwind CSS"><img src="/assets/images/tailwindcss.svg" alt="Tailwind CSS" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Tailwindcss"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Express.js"><img src="/assets/images/express.svg" alt="Express.js" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Express"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="React.js"><img src="/assets/images/react.svg" alt="React.js" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="React"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Node.js"><img src="/assets/images/nodejs.svg" alt="Node.js" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Nodejs"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Next.js"><img src="/assets/images/nextjs.svg" alt="Next.js" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Nextjs"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Google"><img src="/assets/images/google.svg" alt="Google" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Google"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Snapchat"><img src="/assets/images/snapchat.svg" alt="Snapchat" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Snapchat"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Instagram"><img src="/assets/images/instagram.svg" alt="Instagram" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Instagram"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="TikTok"><img src="/assets/images/tiktok.svg" alt="TikTok" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Tiktok"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Facebook"><img src="/assets/images/facebook.svg" alt="Facebook" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Facebook"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="LinkedIn"><img src="/assets/images/linkedin.svg" alt="LinkedIn" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Linkedin"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="YouTube"><img src="/assets/images/youtube.svg" alt="YouTube" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Youtube"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Twitter"><img src="/assets/images/twitter.svg" alt="Twitter" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Twitter"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="WhatsApp"><img src="/assets/images/whatsapp.svg" alt="WhatsApp" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Whatsapp"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Pinterest"><img src="/assets/images/pinterest.svg" alt="Pinterest" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Pinterest"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Google"><img src="/assets/images/google.svg" alt="Google" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Google"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Snapchat"><img src="/assets/images/snapchat.svg" alt="Snapchat" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Snapchat"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Instagram"><img src="/assets/images/instagram.svg" alt="Instagram" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Instagram"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="TikTok"><img src="/assets/images/tiktok.svg" alt="TikTok" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Tiktok"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Facebook"><img src="/assets/images/facebook.svg" alt="Facebook" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Facebook"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="LinkedIn"><img src="/assets/images/linkedin.svg" alt="LinkedIn" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Linkedin"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="YouTube"><img src="/assets/images/youtube.svg" alt="YouTube" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Youtube"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Twitter"><img src="/assets/images/twitter.svg" alt="Twitter" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Twitter"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="WhatsApp"><img src="/assets/images/whatsapp.svg" alt="WhatsApp" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Whatsapp"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Pinterest"><img src="/assets/images/pinterest.svg" alt="Pinterest" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Pinterest"></div></div></div><div class="flex w-fit" aria-hidden="true"><div class="flex gap-6 pr-6 w-max animate-scroll-right"><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="PostgreSQL"><img src="/assets/images/postgresql.svg" alt="PostgreSQL" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Postgresql"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="MongoDB"><img src="/assets/images/mongodb.svg" alt="MongoDB" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Mongodb"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Tailwind CSS"><img src="/assets/images/tailwindcss.svg" alt="Tailwind CSS" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Tailwindcss"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Express.js"><img src="/assets/images/express.svg" alt="Express.js" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Express"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="React.js"><img src="/assets/images/react.svg" alt="React.js" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="React"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Node.js"><img src="/assets/images/nodejs.svg" alt="Node.js" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Nodejs"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Next.js"><img src="/assets/images/nextjs.svg" alt="Next.js" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Nextjs"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="WordPress"><img src="/assets/images/wordpress.svg" alt="WordPress" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Wordpress"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Node.js"><img src="/assets/images/nodejs.svg" alt="Node.js" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Nodejs"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="React.js"><img src="/assets/images/react.svg" alt="React.js" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="React"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="JavaScript"><img src="/assets/images/javascript.svg" alt="JavaScript" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Javascript"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Next.js"><img src="/assets/images/nextjs.svg" alt="Next.js" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Nextjs"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="MongoDB"><img src="/assets/images/mongodb.svg" alt="MongoDB" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Mongodb"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="SQL"><img src="/assets/images/mysql.svg" alt="SQL" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Mysql"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Nest.js"><img src="/assets/images/nestjs.svg" alt="Nest.js" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Nestjs"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Java"><img src="/assets/images/java.svg" alt="Java" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Java"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="WordPress"><img src="/assets/images/wordpress.svg" alt="WordPress" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Wordpress"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Node.js"><img src="/assets/images/nodejs.svg" alt="Node.js" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Nodejs"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="React.js"><img src="/assets/images/react.svg" alt="React.js" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="React"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="JavaScript"><img src="/assets/images/javascript.svg" alt="JavaScript" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Javascript"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Next.js"><img src="/assets/images/nextjs.svg" alt="Next.js" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Nextjs"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="MongoDB"><img src="/assets/images/mongodb.svg" alt="MongoDB" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Mongodb"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="SQL"><img src="/assets/images/mysql.svg" alt="SQL" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Mysql"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Nest.js"><img src="/assets/images/nestjs.svg" alt="Nest.js" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Nestjs"></div><div class="group flex items-center justify-center w-[100px] h-[100px] rounded-full bg-white/5 border border-white/10 backdrop-blur-md shrink-0 transition-all duration-300 hover:-translate-y-2 hover:scale-110 hover:bg-white/10 hover:border-brand-blue/50 hover:shadow-[0_0_30px_rgba(30,58,138,0.4)]" title="Java"><img src="/assets/images/java.svg" alt="Java" width="60" height="60" class="w-[50px] h-[50px] object-contain opacity-70 transition-opacity duration-300 group-hover:opacity-100" loading="lazy" draggable="false" title="Java"></div></div></div></div></section>


<!-- No-Code & Low-Code Tools Section -->
<section class="py-24 bg-white relative z-10 border-b border-gray-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="font-mono text-sm font-bold tracking-[0.2em] text-brand-blue uppercase mb-3 block">TECHNOLOGY</span>
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-black font-heading text-[#1a1a2e] mb-6 tracking-tight">
                Next-Gen Tech Stack
            </h2>
            <p class="text-lg md:text-xl text-gray-600 font-medium">
                We combine modern development platforms with AI-driven tools to build scalable, high-performance digital solutions in record time.
            </p>
        </div>
        
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-y-10 sm:gap-y-12">
            <!-- Card 1 -->
            <div class="bg-white group pr-4 sm:pr-8 border-r border-gray-200" data-aos="fade-up" data-aos-delay="100">
                <div class="w-12 h-12 rounded-2xl bg-gray-50 flex items-center justify-center mb-5 border border-gray-100 group-hover:-translate-y-1 transition-transform shadow-sm">
                    <span class="text-2xl font-black text-black tracking-tighter">.b</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-2 font-heading">Bubble</h3>
                <p class="text-sm text-gray-500 leading-relaxed font-medium">Build web apps quickly with no code.</p>
            </div>
            
            <!-- Card 2 -->
            <div class="bg-white group pl-4 sm:pl-8 lg:px-8 lg:border-r border-gray-200" data-aos="fade-up" data-aos-delay="200">
                <div class="w-12 h-12 rounded-2xl bg-blue-50 flex items-center justify-center mb-5 border border-blue-100 group-hover:-translate-y-1 transition-transform shadow-sm">
                    <svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2 font-heading">Google Flow AI Video</h3>
                <p class="text-sm text-gray-500 leading-relaxed font-medium">Create AI-generated videos effortlessly.</p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white group pr-4 sm:pr-8 lg:px-8 border-r border-gray-200" data-aos="fade-up" data-aos-delay="300">
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-orange-50 to-rose-50 flex items-center justify-center mb-5 border border-rose-100 group-hover:-translate-y-1 transition-transform shadow-sm">
                    <svg class="w-6 h-6 text-rose-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2 font-heading">Lovable</h3>
                <p class="text-sm text-gray-500 leading-relaxed font-medium">AI-driven no-code UI</p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white group pl-4 sm:pl-8" data-aos="fade-up" data-aos-delay="400">
                <div class="w-12 h-12 rounded-2xl bg-gray-900 flex items-center justify-center mb-5 border border-gray-800 group-hover:-translate-y-1 transition-transform shadow-sm">
                    <span class="text-2xl font-bold text-white tracking-tighter">b</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-2 font-heading">Bolt</h3>
                <p class="text-sm text-gray-500 leading-relaxed font-medium">AI-powered with no code builds.</p>
            </div>

            <!-- Card 5 -->
            <div class="bg-white group pr-4 sm:pr-8 border-r border-gray-200" data-aos="fade-up" data-aos-delay="500">
                <div class="w-12 h-12 rounded-2xl bg-gray-50 flex items-center justify-center mb-5 border border-gray-200 group-hover:-translate-y-1 transition-transform shadow-sm">
                    <svg class="w-6 h-6 text-gray-800" fill="currentColor" viewBox="0 0 24 24"><polygon points="12 2 2 22 12 17 22 22"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2 font-heading">Cursor AI</h3>
                <p class="text-sm text-gray-500 leading-relaxed font-medium">AI-assisted code editor</p>
            </div>

            <!-- Card 6 -->
            <div class="bg-white group pl-4 sm:pl-8 lg:px-8 lg:border-r border-gray-200" data-aos="fade-up" data-aos-delay="600">
                <div class="w-12 h-12 rounded-2xl bg-[#F0FDF4] flex items-center justify-center mb-5 border border-[#DCFCE7] group-hover:-translate-y-1 transition-transform shadow-sm">
                    <svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2 font-heading">Google Antigravity</h3>
                <p class="text-sm text-gray-500 leading-relaxed font-medium">AI-driven application development</p>
            </div>

            <!-- Card 7 -->
            <div class="bg-white group pr-4 sm:pr-8 lg:px-8 border-r border-gray-200" data-aos="fade-up" data-aos-delay="700">
                <div class="w-12 h-12 rounded-2xl bg-purple-50 flex items-center justify-center mb-5 border border-purple-100 group-hover:-translate-y-1 transition-transform shadow-sm">
                    <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2c-4.42 0-8 3.58-8 8v9.18c0 .87.89 1.45 1.63 1.04l2.06-1.14 2.14 1.19c.64.35 1.4.35 2.04 0l2.14-1.19 2.14 1.19c.64.35 1.4.35 2.04 0l2.14-1.19 2.06 1.14c.74.41 1.63-.17 1.63-1.04V10c0-4.42-3.58-8-8-8zm-2 9c-.83 0-1.5-.67-1.5-1.5S9.17 8 10 8s1.5.67 1.5 1.5S10.83 11 10 11zm4 0c-.83 0-1.5-.67-1.5-1.5S13.17 8 14 8s1.5.67 1.5 1.5S14.83 11 14 11z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2 font-heading">KIRO</h3>
                <p class="text-sm text-gray-500 leading-relaxed font-medium">AI-powered coding assistant</p>
            </div>

            <!-- Card 8 -->
            <div class="bg-white group pl-4 sm:pl-8" data-aos="fade-up" data-aos-delay="800">
                <div class="w-12 h-12 rounded-2xl bg-cyan-50 flex items-center justify-center mb-5 border border-cyan-100 group-hover:-translate-y-1 transition-transform shadow-sm">
                    <svg class="w-6 h-6 text-cyan-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm3 11h-2v2c0 .55-.45 1-1 1s-1-.45-1-1v-2H9c-.55 0-1-.45-1-1s.45-1 1-1h2V9c0-.55.45-1 1-1s1 .45 1 1v2h2c.55 0 1 .45 1 1s-.45 1-1 1z"/></svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2 font-heading">Devin</h3>
                <p class="text-sm text-gray-500 leading-relaxed font-medium">Autonomous AI software engineer</p>
            </div>
        </div>
    </div>
</section>

<!-- Industries Slider Section -->
<section class="py-24 bg-slate-950 border-t border-white/10 relative overflow-hidden">
    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 mb-10 md:mb-16">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6" data-aos="fade-up">
            <div class="max-w-3xl text-center md:text-left">
                <h2 class="text-3xl md:text-5xl font-black font-heading text-white mb-4 md:mb-5 tracking-tight leading-[1.1]">Solutions for Every Industry</h2>
                <p class="text-gray-400 text-base md:text-xl font-medium max-w-2xl leading-relaxed mx-auto md:mx-0">Pre-engineered, customizable software solutions tailored for specific industries and on-demand delivery models to get you to market faster.</p>
            </div>
            <a href="/industry" class="inline-flex justify-center items-center px-6 py-3 rounded-full bg-white text-black font-bold hover:bg-brand-blue hover:text-white transition-all whitespace-nowrap shadow-md mt-4 md:mt-0 group" title="Industry">
                See all industry
                <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 17L17 7M7 7h10v10"></path></svg>
            </a>
        </div>
    </div>

    <!-- Swiper Container -->
    <div class="relative w-full py-6" data-aos="fade-up" data-aos-delay="200">
        <!-- Added explicit heights to prevent collapsing -->
        <div class="swiper industrySwiper w-full h-[450px] md:h-[600px]">
            <div class="swiper-wrapper h-full">
                <!-- Slide 1 -->
                <div class="swiper-slide industry-slide h-full rounded-xl md:rounded-2xl lg:rounded-3xl overflow-hidden relative bg-[#111]">
                    <img src="/assets/images/Healthcare.jpg" alt="Healthcare" class="absolute inset-0 w-full h-full object-cover opacity-90" title="Healthcare">
                    <div class="absolute inset-0 swiper-slide-overlay z-10 pointer-events-none"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/40 to-transparent flex flex-col justify-center items-start text-left p-8 md:p-16 lg:p-24 z-20 swiper-slide-content">
                        <div class="w-full max-w-2xl">
                            <h3 class="text-2xl md:text-3xl lg:text-[40px] font-bold text-white mb-6 md:mb-8 font-heading leading-tight">"Secure patient portals, telemedicine apps, and comprehensive management systems."</h3>
                            <p class="text-white font-bold text-sm md:text-base mb-1">Healthcare</p>
                            <p class="text-gray-300 text-xs md:text-sm mb-6 md:mb-8">Industry Solutions</p>
                            <a href="/industry" class="inline-flex items-center px-6 py-2.5 rounded-full bg-white text-black font-bold hover:bg-gray-200 transition-colors text-sm group" title="Healthcare">
                                See all plans
                                <svg class="w-4 h-4 ml-1.5 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 17L17 7M7 7h10v10"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide industry-slide h-full rounded-xl md:rounded-2xl lg:rounded-3xl overflow-hidden relative bg-[#111]">
                    <img src="/assets/images/Education.jpg" alt="Education" class="absolute inset-0 w-full h-full object-cover opacity-90" title="Education">
                    <div class="absolute inset-0 swiper-slide-overlay z-10 pointer-events-none"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/40 to-transparent flex flex-col justify-center items-start text-left p-8 md:p-16 lg:p-24 z-20 swiper-slide-content">
                        <div class="w-full max-w-2xl">
                            <h3 class="text-2xl md:text-3xl lg:text-[40px] font-bold text-white mb-6 md:mb-8 font-heading leading-tight">"Advanced Learning Management Systems and eLearning portals for modern education."</h3>
                            <p class="text-white font-bold text-sm md:text-base mb-1">Education</p>
                            <p class="text-gray-300 text-xs md:text-sm mb-6 md:mb-8">Industry Solutions</p>
                            <a href="/industry" class="inline-flex items-center px-6 py-2.5 rounded-full bg-white text-black font-bold hover:bg-gray-200 transition-colors text-sm group" title="Education">
                                See all plans
                                <svg class="w-4 h-4 ml-1.5 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 17L17 7M7 7h10v10"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide industry-slide h-full rounded-xl md:rounded-2xl lg:rounded-3xl overflow-hidden relative bg-[#111]">
                    <img src="/assets/images/Social-Media.jpg" alt="Social Media" class="absolute inset-0 w-full h-full object-cover opacity-90" title="Social Media">
                    <div class="absolute inset-0 swiper-slide-overlay z-10 pointer-events-none"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/40 to-transparent flex flex-col justify-center items-start text-left p-8 md:p-16 lg:p-24 z-20 swiper-slide-content">
                        <div class="w-full max-w-2xl">
                            <h3 class="text-2xl md:text-3xl lg:text-[40px] font-bold text-white mb-6 md:mb-8 font-heading leading-tight">"Scalable community platforms, social networking apps, and engagement tools."</h3>
                            <p class="text-white font-bold text-sm md:text-base mb-1">Social Media</p>
                            <p class="text-gray-300 text-xs md:text-sm mb-6 md:mb-8">Industry Solutions</p>
                            <a href="/industry" class="inline-flex items-center px-6 py-2.5 rounded-full bg-white text-black font-bold hover:bg-gray-200 transition-colors text-sm group" title="Social Media">
                                See all plans
                                <svg class="w-4 h-4 ml-1.5 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 17L17 7M7 7h10v10"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="swiper-slide industry-slide h-full rounded-xl md:rounded-2xl lg:rounded-3xl overflow-hidden relative bg-[#111]">
                    <img src="/assets/images/Manufacturing.jpg" alt="Manufacturing" class="absolute inset-0 w-full h-full object-cover opacity-90" title="Manufacturing">
                    <div class="absolute inset-0 swiper-slide-overlay z-10 pointer-events-none"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/40 to-transparent flex flex-col justify-center items-start text-left p-8 md:p-16 lg:p-24 z-20 swiper-slide-content">
                        <div class="w-full max-w-2xl">
                            <h3 class="text-2xl md:text-3xl lg:text-[40px] font-bold text-white mb-6 md:mb-8 font-heading leading-tight">"Industrial automation, custom ERP solutions, and supply chain management."</h3>
                            <p class="text-white font-bold text-sm md:text-base mb-1">Manufacturing</p>
                            <p class="text-gray-300 text-xs md:text-sm mb-6 md:mb-8">Industry Solutions</p>
                            <a href="/industry" class="inline-flex items-center px-6 py-2.5 rounded-full bg-white text-black font-bold hover:bg-gray-200 transition-colors text-sm group" title="Manufacturing">
                                See all plans
                                <svg class="w-4 h-4 ml-1.5 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 17L17 7M7 7h10v10"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Slide 5 -->
                <div class="swiper-slide industry-slide h-full rounded-xl md:rounded-2xl lg:rounded-3xl overflow-hidden relative bg-[#111]">
                    <img src="/assets/images/Beauty-and-Lifestyle.jpg" alt="Beauty & Lifestyle" class="absolute inset-0 w-full h-full object-cover opacity-90" title="Beauty And Lifestyle">
                    <div class="absolute inset-0 swiper-slide-overlay z-10 pointer-events-none"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/40 to-transparent flex flex-col justify-center items-start text-left p-8 md:p-16 lg:p-24 z-20 swiper-slide-content">
                        <div class="w-full max-w-2xl">
                            <h3 class="text-2xl md:text-3xl lg:text-[40px] font-bold text-white mb-6 md:mb-8 font-heading leading-tight">"On-demand booking systems, salon management, and lifestyle applications."</h3>
                            <p class="text-white font-bold text-sm md:text-base mb-1">Beauty & Lifestyle</p>
                            <p class="text-gray-300 text-xs md:text-sm mb-6 md:mb-8">Industry Solutions</p>
                            <a href="/industry" class="inline-flex items-center px-6 py-2.5 rounded-full bg-white text-black font-bold hover:bg-gray-200 transition-colors text-sm group" title="Beauty Lifestyle">
                                See all plans
                                <svg class="w-4 h-4 ml-1.5 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 17L17 7M7 7h10v10"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Pagination inside swiper -->
            <div class="swiper-pagination-custom absolute bottom-8 left-0 w-full z-30 flex justify-center gap-3"></div>
        </div>

        <!-- Navigation Arrows -->
        <div class="swiper-button-prev-custom industry-arrow-prev absolute top-[calc(50%-16px)] md:top-1/2 z-30 w-8 h-8 md:w-10 md:h-10 rounded-full bg-white flex items-center justify-center text-black cursor-pointer shadow-xl hover:bg-gray-200 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="9" viewBox="0 0 11 9" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.8809 4.43606C10.8806 4.04471 10.5633 3.72718 10.1719 3.72707L2.4209 3.72707L4.93849 1.2095C5.21508 0.932652 5.21505 0.484406 4.93849 0.207542C4.66158 -0.0693646 4.21248 -0.0693445 3.93556 0.207542L0.208014 3.93508C-0.0689041 4.212 -0.0689047 4.66109 0.208012 4.93801L3.93555 8.66653C4.21241 8.94319 4.6616 8.94318 4.93848 8.66653C5.2153 8.38967 5.2152 7.94052 4.93848 7.6636L2.41993 5.14504L10.1719 5.14504C10.5634 5.14494 10.8809 4.82761 10.8809 4.43606Z" fill="currentColor"></path></svg>
        </div>
        <div class="swiper-button-next-custom industry-arrow-next absolute top-[calc(50%-16px)] md:top-1/2 z-30 w-8 h-8 md:w-10 md:h-10 rounded-full bg-white flex items-center justify-center text-black cursor-pointer shadow-xl hover:bg-gray-200 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="9" viewBox="0 0 11 9" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M-5.23729e-06 4.43606C0.000232801 4.04471 0.317595 3.72718 0.708978 3.72707L8.45995 3.72707L5.94237 1.2095C5.66578 0.932652 5.66581 0.484406 5.94237 0.207542C6.21928 -0.0693646 6.66838 -0.0693445 6.9453 0.207542L10.6728 3.93508C10.9498 4.212 10.9498 4.66109 10.6728 4.93801L6.94531 8.66653C6.66845 8.94319 6.21925 8.94318 5.94238 8.66653C5.66556 8.38967 5.66566 7.94052 5.94238 7.6636L8.46093 5.14504L0.70898 5.14504C0.31745 5.14494 -4.81515e-06 4.82761 -5.23729e-06 4.43606Z" fill="currentColor"></path></svg>
        </div>
    </div>

    <!-- Include Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            try {
                const swiper = new Swiper('.industrySwiper', {
                    slidesPerView: 'auto',
                    centeredSlides: true,
                    spaceBetween: 16,
                    loop: true,
                    speed: 600,
                    navigation: {
                        nextEl: '.swiper-button-next-custom',
                        prevEl: '.swiper-button-prev-custom',
                    },
                    pagination: {
                        el: '.swiper-pagination-custom',
                        clickable: true,
                        renderBullet: function (index, className) {
                            return '<span class="' + className + ' w-2 h-2 rounded-full bg-white/30 cursor-pointer transition-all duration-300 inline-block hover:bg-white/60"></span>';
                        },
                    },
                    on: {
                        init: function () {
                            updatePaginationActive(this);
                        },
                        slideChange: function () {
                            updatePaginationActive(this);
                        }
                    }
                });

                function updatePaginationActive(s) {
                    if(!s || !s.pagination || !s.pagination.bullets) return;
                    const bullets = Array.from(s.pagination.bullets);
                    bullets.forEach(b => {
                        b.classList.remove('bg-white');
                        b.classList.add('bg-white/30');
                        if(b.classList.contains('swiper-pagination-bullet-active')) {
                            b.classList.remove('bg-white/30');
                            b.classList.add('bg-white');
                        }
                    });
                }
            } catch (error) {
                console.error("Swiper initialization error:", error);
                // Fallback: make active content visible if JS fails
                const firstSlide = document.querySelector('.industrySwiper .swiper-slide-content');
                if(firstSlide) firstSlide.style.opacity = '1';
                if(firstSlide) firstSlide.style.transform = 'none';
            }
        });
    </script>
    <style>
        .industry-slide {
            width: 92%;
        }
        .industry-arrow-prev {
            left: 2%;
            transform: translate(-50%, -50%);
        }
        .industry-arrow-next {
            right: 2%;
            transform: translate(50%, -50%);
        }
        @media (min-width: 768px) {
            .industry-slide { width: 85%; }
            .industry-arrow-prev { left: 3.5%; transform: translate(-50%, -50%); }
            .industry-arrow-next { right: 3.5%; transform: translate(50%, -50%); }
        }
        @media (min-width: 1024px) {
            .industry-slide { width: 80%; }
            .industry-arrow-prev { left: 5%; transform: translate(-50%, -50%); }
            .industry-arrow-next { right: 5%; transform: translate(50%, -50%); }
        }
        @media (min-width: 1280px) {
            .industry-slide { width: 78%; }
            .industry-arrow-prev { left: 6%; transform: translate(-50%, -50%); }
            .industry-arrow-next { right: 6%; transform: translate(50%, -50%); }
        }
        .industrySwiper {
            overflow: visible !important; /* Allow slides to peek out if needed */
            clip-path: inset(-100vw 0 -100vw 0); /* Prevent horizontal scrollbar but allow bleed */
        }
        .swiper-slide {
            transition: all 0.6s ease-in-out;
            opacity: 1 !important; /* Guarantee visibility */
            visibility: visible !important;
            transform: scale(0.85); /* Scale down inactive slides */
        }
        .swiper-slide-active,
        .swiper-slide-duplicate-active {
            transform: scale(1);
            z-index: 10;
        }
        .swiper-slide .swiper-slide-overlay {
            background-color: rgba(0, 0, 0, 0.85);
            opacity: 1;
            transition: opacity 0.6s ease-in-out;
        }
        .swiper-slide-active .swiper-slide-overlay,
        .swiper-slide-duplicate-active .swiper-slide-overlay {
            opacity: 0;
        }
        .swiper-slide .swiper-slide-content {
            opacity: 0;
            transform: translateX(-30px);
            transition: all 0.6s ease-in-out;
        }
        .swiper-slide-active .swiper-slide-content,
        .swiper-slide-duplicate-active .swiper-slide-content {
            opacity: 1;
            transform: translateX(0);
        }
        .swiper-pagination-custom .swiper-pagination-bullet {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1) !important;
        }
        .swiper-pagination-custom .swiper-pagination-bullet-active {
            background-color: #ffffff !important;
            width: 36px !important;
            border-radius: 9999px !important;
            transform: scale(1);
        }
    </style>
</section>

<!-- Process Section -->
 <section class="py-24 bg-white relative overflow-hidden" style="background-color: #ffffff;" id="our-process">
        <div class="max-w-[1280px] mx-auto px-4 sm:px-6 relative z-10">
                <div class="text-center mb-10 md:mb-24">
                        <h2 class="text-4xl md:text-5xl lg:text-6xl font-black font-heading text-[#1a1a2e] tracking-tight mb-5 md:mb-6 leading-[1.1]">
                                AI-Powered Scalable <br class="hidden lg:block"/>Software Solutions
                        </h2>
                        <p class="text-gray-500 text-sm sm:text-base md:text-xl">Design. Build. Excel. Taking your
                                business to the next level!</p>
                </div>
                <!-- The Cross Layout -->
                <div class="relative w-full max-w-5xl mx-auto">
                        <!-- Cross Lines (Visible on both Mobile and Desktop) -->
                        <div
                                class="absolute top-0 left-1/2 -translate-x-1/2 w-[1px] h-full bg-gradient-to-b from-transparent via-brand-blue/30 to-transparent z-0">
                        </div>
                        <div
                                class="absolute top-1/2 left-0 -translate-y-1/2 h-[1px] w-full bg-gradient-to-r from-transparent via-brand-blue/30 to-transparent z-0">
                        </div>
                        <!-- Center Key & Rings -->
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-20">
                                <!-- Spinning Ring 1 (Outer) -->
                                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 md:w-[140px] md:h-[140px]">
                                        <div class="w-full h-full rounded-full border border-brand-blue/20 animate-[spin_12s_linear_infinite]">
                                                <div
                                                        class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-1.5 h-1.5 md:w-2 md:h-2 bg-brand-blue rounded-full shadow-[0_0_8px_rgba(30,58,138,0.5)]">
                                                </div>
                                                <div
                                                        class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 w-1 h-1 md:w-1.5 md:h-1.5 bg-brand-green rounded-full">
                                                </div>
                                        </div>
                                </div>
                                <!-- Spinning Ring 2 (Inner) -->
                                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-10 h-10 md:w-[100px] md:h-[100px]">
                                        <div class="w-full h-full rounded-full border border-brand-green/30 animate-[spin_8s_linear_infinite_reverse]">
                                                <div
                                                        class="absolute top-1/2 right-0 translate-x-1/2 -translate-y-1/2 w-1 h-1 md:w-2 md:h-2 bg-brand-blue rounded-full shadow-[0_0_8px_rgba(30,58,138,0.5)]">
                                                </div>
                                        </div>
                                </div>
                                <!-- Center Key Icon Background -->
                                <div
                                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-8 h-8 md:w-14 md:h-14 bg-gradient-to-br from-brand-blue to-brand-green rounded-full flex items-center justify-center shadow-[0_0_20px_rgba(30,58,138,0.4)] z-30">
                                        <img title="Favicon White" src="/assets/images/favicon-white.png" alt="Corelix Icon" class="w-4 h-4 md:w-6 md:h-6 object-contain">
                                </div>
                        </div>
                        <!-- Grid Cards - ALWAYS 2 COLUMNS -->
                        <div class="grid grid-cols-2 relative z-10">
                                <!-- Quadrant 1: Sustainable Architecture -->
                                <div
                                        class="flex flex-col items-center text-center p-6 sm:p-8 md:p-14 lg:p-20 bg-[radial-gradient(circle_at_bottom_right,_var(--tw-gradient-stops))] from-brand-blue/10 via-transparent to-transparent hover:bg-brand-blue/5 transition-colors duration-500 rounded-tl-xl md:rounded-tl-none">
                                        <div
                                                class="w-8 h-8 md:w-[60px] md:h-[60px] bg-brand-blue rounded-lg md:rounded-2xl flex items-center justify-center mb-3 md:mb-6 shadow-md shadow-brand-blue/30">
                                                <svg class="w-4 h-4 md:w-7 md:h-7 text-white" fill="none"
                                                        stroke="currentColor" viewbox="0 0 24 24">
                                                        <path d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"></path>
                                                </svg>
                                        </div>
                                        <h3
                                                class="text-[11px] sm:text-sm md:text-xl font-bold text-[#222] mb-1.5 md:mb-3">
                                                Sustainable Architecture</h3>
                                        <p
                                                class="text-gray-500 text-[9px] sm:text-[11px] md:text-[0.95rem] leading-snug md:leading-relaxed">
                                                Engineered for speed, scalability, and long-term security to uncover
                                                opportunities.</p>
                                </div>
                                <!-- Quadrant 2: Agile lifecycle -->
                                <div
                                        class="flex flex-col items-center text-center p-6 sm:p-8 md:p-14 lg:p-20 bg-[radial-gradient(circle_at_bottom_left,_var(--tw-gradient-stops))] from-brand-green/10 via-transparent to-transparent hover:bg-brand-green/5 transition-colors duration-500 rounded-tr-xl md:rounded-tr-none">
                                        <div
                                                class="w-8 h-8 md:w-[60px] md:h-[60px] bg-brand-green rounded-lg md:rounded-2xl flex items-center justify-center mb-3 md:mb-6 shadow-md shadow-brand-green/30">
                                                <svg class="w-4 h-4 md:w-8 md:h-8 text-white" fill="none"
                                                        stroke="currentColor" viewbox="0 0 24 24">
                                                        <path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"></path>
                                                </svg>
                                        </div>
                                        <h3
                                                class="text-[11px] sm:text-sm md:text-xl font-bold text-[#222] mb-1.5 md:mb-3">
                                                Agile lifecycle</h3>
                                        <p
                                                class="text-gray-500 text-[9px] sm:text-[11px] md:text-[0.95rem] leading-snug md:leading-relaxed">
                                                Adapt quickly and deploy faster with secure, iterative development for
                                                maximum impact.</p>
                                </div>
                                <!-- Quadrant 3: Dedicated Team -->
                                <div
                                        class="flex flex-col items-center text-center p-6 sm:p-8 md:p-14 lg:p-20 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-brand-blue/10 via-transparent to-transparent hover:bg-brand-blue/5 transition-colors duration-500 rounded-bl-xl md:rounded-bl-none">
                                        <div
                                                class="w-8 h-8 md:w-[60px] md:h-[60px] bg-brand-blue rounded-lg md:rounded-2xl flex items-center justify-center mb-3 md:mb-6 shadow-md shadow-brand-blue/30">
                                                <svg class="w-4 h-4 md:w-8 md:h-8 text-white" fill="none"
                                                        stroke="currentColor" viewbox="0 0 24 24">
                                                        <path d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"></path>
                                                </svg>
                                        </div>
                                        <h3
                                                class="text-[11px] sm:text-sm md:text-xl font-bold text-[#222] mb-1.5 md:mb-3">
                                                Dedicated Team</h3>
                                        <p
                                                class="text-gray-500 text-[9px] sm:text-[11px] md:text-[0.95rem] leading-snug md:leading-relaxed">
                                                Work with specialists committed to your goals and project success,
                                                elevating your brand.</p>
                                </div>
                                <!-- Quadrant 4: Build -->
                                <div
                                        class="flex flex-col items-center text-center p-6 sm:p-8 md:p-14 lg:p-20 bg-[radial-gradient(circle_at_top_left,_var(--tw-gradient-stops))] from-brand-green/10 via-transparent to-transparent hover:bg-brand-green/5 transition-colors duration-500 rounded-br-xl md:rounded-br-none">
                                        <div
                                                class="w-8 h-8 md:w-[60px] md:h-[60px] bg-brand-green rounded-lg md:rounded-2xl flex items-center justify-center mb-3 md:mb-6 shadow-md shadow-brand-green/30">
                                                <svg class="w-4 h-4 md:w-8 md:h-8 text-white" fill="none"
                                                        stroke="currentColor" viewbox="0 0 24 24">
                                                        <path d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"></path>
                                                </svg>
                                        </div>
                                        <h3
                                                class="text-[11px] sm:text-sm md:text-xl font-bold text-[#222] mb-1.5 md:mb-3">
                                                Development Transparency</h3>
                                        <p
                                                class="text-gray-500 text-[9px] sm:text-[11px] md:text-[0.95rem] leading-snug md:leading-relaxed">
                                                Gain full visibility with real-time updates and seamless transactions
                                                using latest tech.</p>
                                </div>
                        </div>
                </div>
        </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 md:py-32 bg-[#F4F4F4] relative border-t border-gray-200 overflow-hidden" style="background-color: #F4F4F4;">
    <!-- Subtle background glow -->
    <div class="absolute top-1/2 left-1/4 -translate-y-1/2 w-96 h-96 bg-brand-blue/10 rounded-full blur-[120px] pointer-events-none"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-12 relative z-10">
        <!-- Header -->
        <div class="mb-12 md:mb-20">
            <h2 class="text-3xl md:text-5xl lg:text-[4rem] font-bold text-brand-black font-heading tracking-tight">
                Clients Say
            </h2>
        </div>

        <!-- Swiper Container Wrapper -->
        <div class="relative w-full">
            
            <!-- Side Navigation Arrows (Outside Swiper to prevent clipping) -->
            <button class="testi-prev absolute top-1/2 left-0 left-0 -translate-y-1/2 z-50 cursor-pointer flex items-center justify-center w-10 h-10 md:w-14 md:h-14 rounded-full bg-white text-gray-500 hover:text-brand-blue shadow-[0_5px_15px_rgba(0,0,0,0.1)] hover:shadow-[0_10px_25px_rgba(30,58,138,0.15)] hover:scale-110 transition-all duration-300 focus:outline-none">
                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
            </button>
            <button class="testi-next absolute top-1/2 right-0 right-0 -translate-y-1/2 z-50 cursor-pointer flex items-center justify-center w-10 h-10 md:w-14 md:h-14 rounded-full bg-white text-gray-500 hover:text-brand-blue shadow-[0_5px_15px_rgba(0,0,0,0.1)] hover:shadow-[0_10px_25px_rgba(30,58,138,0.15)] hover:scale-110 transition-all duration-300 focus:outline-none">
                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
            </button>
            
            <!-- Swiper Container -->
            <div class="swiper testimonialSwiper relative overflow-visible py-4 md:py-10 px-8 md:px-16 lg:px-24">
            
            <!-- Subtle Background Blurs -->
            <div class="absolute top-0 right-10 w-96 h-96 bg-[#f3e8ff]/60 rounded-full blur-3xl -z-10 pointer-events-none"></div>
            <div class="absolute bottom-10 left-10 w-96 h-96 bg-[#dcfce7]/40 rounded-full blur-3xl -z-10 pointer-events-none"></div>

            <div class="swiper-wrapper">
                <!-- Slide -->
                <div class="swiper-slide px-4 md:px-8 py-8 md:py-12">
                    <div class="w-full max-w-6xl mx-auto flex flex-col lg:flex-row items-center lg:items-center gap-10 lg:gap-16">
                        
                        <!-- Completely Separated Image -->
                        <div class="shrink-0 relative group">
                            <!-- Decorative offset shadow/shape behind the image -->
                            <div class="absolute inset-0 bg-gradient-to-br from-brand-blue/20 to-brand-green/20 rounded-full translate-x-4 translate-y-4 -z-10 group-hover:translate-x-6 group-hover:translate-y-6 transition-transform duration-500"></div>
                            
                            <div class="w-48 h-48 md:w-64 md:h-64 lg:w-72 lg:h-72 rounded-full border-[8px] md:border-[12px] border-white shadow-[0_20px_50px_rgba(0,0,0,0.1)] relative z-20 overflow-hidden bg-[#e6e9f0]">
                                <img src="/assets/images/Michael-Lawson.png" alt="Michael Lawson" class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-700" title="Michael Lawson">
                            </div>
                        </div>
                        
                        <!-- Main Card -->
                        <div class="flex-1 w-full bg-white rounded-[2rem] p-8 md:p-12 lg:p-14 shadow-[0_15px_40px_-15px_rgba(0,0,0,0.06)] relative border border-gray-100/60 z-10">
                            
                            <!-- Stacked shadow effect at bottom -->
                            <div class="absolute -bottom-3 left-6 right-6 h-full bg-white rounded-[2rem] -z-10 shadow-[0_10px_30px_rgba(0,0,0,0.03)] border border-gray-50/50"></div>
                            <div class="absolute -bottom-6 left-12 right-12 h-full bg-white rounded-[2rem] -z-20 shadow-[0_10px_30px_rgba(0,0,0,0.02)] border border-gray-50/50"></div>

                            <!-- Content -->
                            <div class="relative z-10 text-center lg:text-left">
                                <span class="text-6xl md:text-8xl text-[#eef2ff] font-serif absolute -top-8 -left-4 leading-none select-none hidden lg:block">“</span>
                                <span class="text-6xl md:text-8xl text-[#eef2ff] font-serif absolute -top-8 left-1/2 -translate-x-1/2 leading-none select-none lg:hidden">“</span>
                                
                                <p class="text-gray-700 text-base md:text-[20px] lg:text-[22px] leading-relaxed font-medium relative z-10 mb-8 pt-6 lg:pt-2">
                                    Corelix completely transformed our operations with their custom AI integration and scalable software architecture. Their ability to deliver high-performance web development on a strict agile timeline was incredible. They don't just write code; they understand our core business goals.
                                </p>
                                
                                <div class="border-t border-gray-100 pt-6 flex flex-col lg:flex-row items-center lg:items-center gap-4">
                                    <div class="w-8 h-[3px] bg-gradient-to-r from-brand-blue to-brand-green hidden lg:block rounded-full"></div>
                                    <div>
                                        <h4 class="text-lg md:text-xl font-bold text-[#1a1a2e] mb-1">Michael Lawson</h4>
                                        <span class="text-[#6366f1] font-bold uppercase tracking-widest text-[11px] md:text-xs">Chief Technology Officer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide px-4 md:px-8 py-8 md:py-12">
                    <div class="w-full max-w-6xl mx-auto flex flex-col lg:flex-row items-center lg:items-center gap-10 lg:gap-16">
                        
                        <!-- Completely Separated Image -->
                        <div class="shrink-0 relative group">
                            <!-- Decorative offset shadow/shape behind the image -->
                            <div class="absolute inset-0 bg-gradient-to-br from-brand-blue/20 to-brand-green/20 rounded-full translate-x-4 translate-y-4 -z-10 group-hover:translate-x-6 group-hover:translate-y-6 transition-transform duration-500"></div>
                            
                            <div class="w-48 h-48 md:w-64 md:h-64 lg:w-72 lg:h-72 rounded-full border-[8px] md:border-[12px] border-white shadow-[0_20px_50px_rgba(0,0,0,0.1)] relative z-20 overflow-hidden bg-[#e6e9f0]">
                                <img src="/assets/images/James-Carter.png" alt="James Carter" class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-700" title="James Carter">
                            </div>
                        </div>
                        
                        <!-- Main Card -->
                        <div class="flex-1 w-full bg-white rounded-[2rem] p-8 md:p-12 lg:p-14 shadow-[0_15px_40px_-15px_rgba(0,0,0,0.06)] relative border border-gray-100/60 z-10">
                            
                            <!-- Stacked shadow effect at bottom -->
                            <div class="absolute -bottom-3 left-6 right-6 h-full bg-white rounded-[2rem] -z-10 shadow-[0_10px_30px_rgba(0,0,0,0.03)] border border-gray-50/50"></div>
                            <div class="absolute -bottom-6 left-12 right-12 h-full bg-white rounded-[2rem] -z-20 shadow-[0_10px_30px_rgba(0,0,0,0.02)] border border-gray-50/50"></div>

                            <!-- Content -->
                            <div class="relative z-10 text-center lg:text-left">
                                <span class="text-6xl md:text-8xl text-[#eef2ff] font-serif absolute -top-8 -left-4 leading-none select-none hidden lg:block">“</span>
                                <span class="text-6xl md:text-8xl text-[#eef2ff] font-serif absolute -top-8 left-1/2 -translate-x-1/2 leading-none select-none lg:hidden">“</span>
                                
                                <p class="text-gray-700 text-base md:text-[20px] lg:text-[22px] leading-relaxed font-medium relative z-10 mb-8 pt-6 lg:pt-2">
                                    When we needed to modernize our legacy systems, the Corelix team provided exceptional UI/UX design and enterprise-level custom software development. Their engineers flawlessly handled complex API integrations, significantly boosting our digital ecosystem's efficiency.
                                </p>
                                
                                <div class="border-t border-gray-100 pt-6 flex flex-col lg:flex-row items-center lg:items-center gap-4">
                                    <div class="w-8 h-[3px] bg-gradient-to-r from-brand-blue to-brand-green hidden lg:block rounded-full"></div>
                                    <div>
                                        <h4 class="text-lg md:text-xl font-bold text-[#1a1a2e] mb-1">James Carter</h4>
                                        <span class="text-[#6366f1] font-bold uppercase tracking-widest text-[11px] md:text-xs">Lead Technical Architect</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide px-4 md:px-8 py-8 md:py-12">
                    <div class="w-full max-w-6xl mx-auto flex flex-col lg:flex-row items-center lg:items-center gap-10 lg:gap-16">
                        
                        <!-- Completely Separated Image -->
                        <div class="shrink-0 relative group">
                            <!-- Decorative offset shadow/shape behind the image -->
                            <div class="absolute inset-0 bg-gradient-to-br from-brand-blue/20 to-brand-green/20 rounded-full translate-x-4 translate-y-4 -z-10 group-hover:translate-x-6 group-hover:translate-y-6 transition-transform duration-500"></div>
                            
                            <div class="w-48 h-48 md:w-64 md:h-64 lg:w-72 lg:h-72 rounded-full border-[8px] md:border-[12px] border-white shadow-[0_20px_50px_rgba(0,0,0,0.1)] relative z-20 overflow-hidden bg-[#e6e9f0]">
                                <img src="/assets/images/Sarah-Jenkins.png" alt="Sarah Jenkins" class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-700" title="Sarah Jenkins">
                            </div>
                        </div>
                        
                        <!-- Main Card -->
                        <div class="flex-1 w-full bg-white rounded-[2rem] p-8 md:p-12 lg:p-14 shadow-[0_15px_40px_-15px_rgba(0,0,0,0.06)] relative border border-gray-100/60 z-10">
                            
                            <!-- Stacked shadow effect at bottom -->
                            <div class="absolute -bottom-3 left-6 right-6 h-full bg-white rounded-[2rem] -z-10 shadow-[0_10px_30px_rgba(0,0,0,0.03)] border border-gray-50/50"></div>
                            <div class="absolute -bottom-6 left-12 right-12 h-full bg-white rounded-[2rem] -z-20 shadow-[0_10px_30px_rgba(0,0,0,0.02)] border border-gray-50/50"></div>

                            <!-- Content -->
                            <div class="relative z-10 text-center lg:text-left">
                                <span class="text-6xl md:text-8xl text-[#eef2ff] font-serif absolute -top-8 -left-4 leading-none select-none hidden lg:block">“</span>
                                <span class="text-6xl md:text-8xl text-[#eef2ff] font-serif absolute -top-8 left-1/2 -translate-x-1/2 leading-none select-none lg:hidden">“</span>
                                
                                <p class="text-gray-700 text-base md:text-[20px] lg:text-[22px] leading-relaxed font-medium relative z-10 mb-8 pt-6 lg:pt-2">
                                    Our conversion rates skyrocketed after Corelix revamped our web presence. From SEO-optimized web development to a flawless user interface, they delivered a digital experience that truly shapes the future. Their dedicated support has been an absolute game-changer.
                                </p>
                                
                                <div class="border-t border-gray-100 pt-6 flex flex-col lg:flex-row items-center lg:items-center gap-4">
                                    <div class="w-8 h-[3px] bg-gradient-to-r from-brand-blue to-brand-green hidden lg:block rounded-full"></div>
                                    <div>
                                        <h4 class="text-lg md:text-xl font-bold text-[#1a1a2e] mb-1">Sarah Jenkins</h4>
                                        <span class="text-[#6366f1] font-bold uppercase tracking-widest text-[11px] md:text-xs">Vice President of Marketing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <!-- Slide -->
                <div class="swiper-slide px-4 md:px-8 py-8 md:py-12">
                    <div class="w-full max-w-6xl mx-auto flex flex-col lg:flex-row items-center lg:items-center gap-10 lg:gap-16">
                        
                        <!-- Completely Separated Image -->
                        <div class="shrink-0 relative group">
                            <!-- Decorative offset shadow/shape behind the image -->
                            <div class="absolute inset-0 bg-gradient-to-br from-brand-blue/20 to-brand-green/20 rounded-full translate-x-4 translate-y-4 -z-10 group-hover:translate-x-6 group-hover:translate-y-6 transition-transform duration-500"></div>
                            
                            <div class="w-48 h-48 md:w-64 md:h-64 lg:w-72 lg:h-72 rounded-full border-[8px] md:border-[12px] border-white shadow-[0_20px_50px_rgba(0,0,0,0.1)] relative z-20 overflow-hidden bg-[#e6e9f0]">
                                <img src="/assets/images/David-Chen.png" alt="David Chen" class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-700" title="David Chen">
                            </div>
                        </div>
                        
                        <!-- Main Card -->
                        <div class="flex-1 w-full bg-white rounded-[2rem] p-8 md:p-12 lg:p-14 shadow-[0_15px_40px_-15px_rgba(0,0,0,0.06)] relative border border-gray-100/60 z-10">
                            
                            <!-- Stacked shadow effect at bottom -->
                            <div class="absolute -bottom-3 left-6 right-6 h-full bg-white rounded-[2rem] -z-10 shadow-[0_10px_30px_rgba(0,0,0,0.03)] border border-gray-50/50"></div>
                            <div class="absolute -bottom-6 left-12 right-12 h-full bg-white rounded-[2rem] -z-20 shadow-[0_10px_30px_rgba(0,0,0,0.02)] border border-gray-50/50"></div>

                            <!-- Content -->
                            <div class="relative z-10 text-center lg:text-left">
                                <span class="text-6xl md:text-8xl text-[#eef2ff] font-serif absolute -top-8 -left-4 leading-none select-none hidden lg:block">“</span>
                                <span class="text-6xl md:text-8xl text-[#eef2ff] font-serif absolute -top-8 left-1/2 -translate-x-1/2 leading-none select-none lg:hidden">“</span>
                                
                                <p class="text-gray-700 text-base md:text-[20px] lg:text-[22px] leading-relaxed font-medium relative z-10 mb-8 pt-6 lg:pt-2">
                                    The automation tools built by the Corelix team completely streamlined our internal processes. Their focus on clean UI/UX and solid backend architecture saved us countless hours every week. It's rare to find a team that delivers exactly what they promise on time.
                                </p>
                                
                                <div class="border-t border-gray-100 pt-6 flex flex-col lg:flex-row items-center lg:items-center gap-4">
                                    <div class="w-8 h-[3px] bg-gradient-to-r from-brand-blue to-brand-green hidden lg:block rounded-full"></div>
                                    <div>
                                        <h4 class="text-lg md:text-xl font-bold text-[#1a1a2e] mb-1">David Chen</h4>
                                        <span class="text-[#6366f1] font-bold uppercase tracking-widest text-[11px] md:text-xs">Operations Director</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                        
                    </div>
                </div>

                </div>
            
            
        </div>
        
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if(typeof Swiper !== 'undefined') {
                new Swiper('.testimonialSwiper', {
                    slidesPerView: 1,
                    spaceBetween: 20,
                    loop: true,
                    autoHeight: false,
                    grabCursor: true,
                    
                    autoplay: {
                        delay: 6000,
                        disableOnInteraction: false,
                    },
                    navigation: {
                        nextEl: '.testi-next',
                        prevEl: '.testi-prev',
                    }
                });
            }
        });
    </script>
</section>

<!-- Partners Section -->
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Subtle blue top glow -->
    <div class="absolute top-0 left-1/4 w-1/2 h-64 bg-brand-blue/10 blur-[100px] rounded-full pointer-events-none"></div>

    <style>
        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }
        @keyframes marquee-reverse {
            0% { transform: translateX(-50%); }
            100% { transform: translateX(0%); }
        }
        .animate-marquee {
            animation: marquee 30s linear infinite;
        }
        .animate-marquee-reverse {
            animation: marquee-reverse 30s linear infinite;
        }
        .animate-marquee:hover,
        .animate-marquee-reverse:hover {
            animation-play-state: paused;
        }
        .marquee-gradient::before,
        .marquee-gradient::after {
            content: '';
            position: absolute;
            top: 0;
            width: 80px;
            height: 100%;
            z-index: 2;
            pointer-events: none;
        }
        .marquee-gradient::before {
            left: 0;
            background: linear-gradient(to right, white, transparent);
        }
        .marquee-gradient::after {
            right: 0;
            background: linear-gradient(to left, white, transparent);
        }
        @media (min-width: 768px) {
            .marquee-gradient::before,
            .marquee-gradient::after {
                width: 150px;
            }
        }
    </style>
    <div class="container mx-auto relative z-10 overflow-hidden">
        <div class="mb-12 md:mb-16 max-w-4xl px-4 sm:px-6 lg:px-8 text-center mx-auto" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-black font-heading text-[#1a1a2e] tracking-tight mb-5 md:mb-6 leading-[1.1]">Trusted by the brands<br>that shape the future.</h2>
            <p class="text-gray-500 text-lg leading-relaxed max-w-2xl mx-auto">Corelix partners with the platforms, tools, and teams powering the digital ecosystem — the names you already know and trust.</p>
        </div>
        
        <!-- Scrolling Marquee - Right to Left -->
        <div class="relative w-full marquee-gradient py-4" data-aos="fade-up" data-aos-delay="100">
            <div class="flex w-max animate-marquee items-center">
                <!-- Group 1 -->
                <div class="flex items-center justify-center gap-6 md:gap-10 px-3 md:px-5">
                    <img src="/assets/images/TVAM.png" alt="Tvam" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Tvam">
                    <img src="/assets/images/Tvasti.png" alt="Tvasti" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Tvasti">
                    <img src="/assets/images/Nutrizo-Advancis.png" alt="Nutrizo Advancis" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Nutrizo Advancis">
                    <img src="/assets/images/hhjrlogoblack.png" alt="Hhjrlogoblack" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Hhjrlogoblack">
                    <img src="/assets/images/htmlcoderunner.png" alt="Htmlcoderunner" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Htmlcoderunner">
                    <img src="/assets/images/babynameslibrary.png" alt="Babynameslibrary" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Babynameslibrary">
                    <img src="/assets/images/danagedumigrate.png" alt="Danagedumigrate" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Danagedumigrate">
                    <img src="/assets/images/astrologermaakalyani.png" alt="Astrologermaakalyani" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Astrologermaakalyani">
                </div>
                <!-- Group 2 (Clone for infinite loop) -->
                <div class="flex items-center justify-center gap-6 md:gap-10 px-3 md:px-5">
                    <img src="/assets/images/TVAM.png" alt="Tvam" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Tvam">
                    <img src="/assets/images/Tvasti.png" alt="Tvasti" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Tvasti">
                    <img src="/assets/images/Nutrizo-Advancis.png" alt="Nutrizo Advancis" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Nutrizo Advancis">
                    <img src="/assets/images/hhjrlogoblack.png" alt="Hhjrlogoblack" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Hhjrlogoblack">
                    <img src="/assets/images/htmlcoderunner.png" alt="Htmlcoderunner" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Htmlcoderunner">
                    <img src="/assets/images/babynameslibrary.png" alt="Babynameslibrary" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Babynameslibrary">
                    <img src="/assets/images/danagedumigrate.png" alt="Danagedumigrate" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Danagedumigrate">
                    <img src="/assets/images/astrologermaakalyani.png" alt="Astrologermaakalyani" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Astrologermaakalyani">
                </div>
            </div>
        </div>

        <!-- Scrolling Marquee - Left to Right -->
        <div class="relative w-full marquee-gradient py-4" data-aos="fade-up" data-aos-delay="200">
            <div class="flex w-max animate-marquee-reverse items-center">
                <!-- Group 1 -->
                <div class="flex items-center justify-center gap-6 md:gap-10 px-3 md:px-5">
                    <img src="/assets/images/Essence-51.png" alt="Htmlcoderunner" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Htmlcoderunner">
                    <img src="/assets/images/hanuwantiyatentcity.png" alt="Babynameslibrary" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Babynameslibrary">
                    <img src="/assets/images/boatshoesuk.png" alt="Danagedumigrate" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Danagedumigrate">
                    <img src="/assets/images/astrologermaakalyani.png" alt="Astrologermaakalyani" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Astrologermaakalyani">
                    <img src="/assets/images/TVAM.png" alt="Tvam" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Tvam">
                    <img src="/assets/images/Tvasti.png" alt="Tvasti" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Tvasti">
                    <img src="/assets/images/Nutrizo-Advancis.png" alt="Nutrizo Advancis" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Nutrizo Advancis">
                    <img src="/assets/images/hhjrlogoblack.png" alt="Hhjrlogoblack" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Hhjrlogoblack">
                </div>
                <!-- Group 2 (Clone for infinite loop) -->
                <div class="flex items-center justify-center gap-6 md:gap-10 px-3 md:px-5">
                    <img src="/assets/images/Essence-51.png" alt="Htmlcoderunner" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Htmlcoderunner">
                    <img src="/assets/images/hanuwantiyatentcity.png" alt="Babynameslibrary" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Babynameslibrary">
                    <img src="/assets/images/boatshoesuk.png" alt="Danagedumigrate" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Danagedumigrate">
                    <img src="/assets/images/astrologermaakalyani.png" alt="Astrologermaakalyani" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Astrologermaakalyani">
                    <img src="/assets/images/TVAM.png" alt="Tvam" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Tvam">
                    <img src="/assets/images/Tvasti.png" alt="Tvasti" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Tvasti">
                    <img src="/assets/images/Nutrizo-Advancis.png" alt="Nutrizo Advancis" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Nutrizo Advancis">
                    <img src="/assets/images/hhjrlogoblack.png" alt="Hhjrlogoblack" class="h-10 sm:h-12 md:h-16 w-auto shrink-0 object-contain hover:scale-110 transition-transform duration-300" title="Hhjrlogoblack">
                </div>
            </div>
        </div>
    </div>
    
</section>

<!-- Why Choose Us Section -->
<section class="py-24 bg-white relative overflow-hidden" style="background-color: #ffffff;" id="why-choose-us">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl lg:text-6xl font-black font-heading text-[#1a1a2e] tracking-tight mb-6">Why Choose Corelix?</h2>
            <p class="text-gray-500 text-lg md:text-xl leading-relaxed">We combine industry expertise with cutting-edge technology to deliver solutions that drive real business growth and digital transformation.</p>
        </div>

        <div class="flex flex-col lg:flex-row gap-4 lg:gap-6 h-auto lg:h-[600px] w-full">
            <!-- Card 1 -->
            <a href="/about" class="group relative flex-1 lg:hover:flex-[4.3] transition-all duration-300 ease-in-out bg-gray-50 rounded-[2rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl flex flex-col min-h-[400px] lg:min-h-0" data-aos="fade-up" data-aos-delay="0">
                <div class="px-6 pt-6 pb-4 flex items-center gap-4 bg-gray-50 shrink-0 relative z-10">
                    <div class="w-10 h-10 rounded-xl bg-brand-blue/10 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <div class="w-[200px] shrink-0">
                        <p class="text-[13px] font-bold text-gray-900 uppercase tracking-wide truncate">Expert Team</p>
                    </div>
                </div>
                <div class="w-full flex-grow relative overflow-hidden bg-gray-200">
                    <img src="/assets/images/our-mission.jpg" class="absolute inset-0 w-full h-full object-cover" alt="Expert Team" loading="lazy">
                </div>
                <div class="p-6 md:p-8 flex flex-col bg-white border-t border-gray-100 shrink-0 relative z-10 h-[180px]">
                    <div class="w-[280px] lg:w-[320px]">
                        <h3 class="text-xl md:text-2xl font-black font-heading text-brand-black mb-3 truncate">Build scalable solutions.</h3>
                        <p class="text-gray-500 text-sm md:text-base leading-relaxed line-clamp-3">Our elite team of developers and designers bring years of experience to build secure and high-performance solutions.</p>
                    </div>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="/services" class="group relative flex-1 lg:hover:flex-[4.3] transition-all duration-300 ease-in-out bg-gray-50 rounded-[2rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl flex flex-col min-h-[400px] lg:min-h-0" data-aos="fade-up" data-aos-delay="100">
                <div class="px-6 pt-6 pb-4 flex items-center gap-4 bg-gray-50 shrink-0 relative z-10">
                    <div class="w-10 h-10 rounded-xl bg-brand-green/10 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                    </div>
                    <div class="w-[200px] shrink-0">
                        <p class="text-[13px] font-bold text-gray-900 uppercase tracking-wide truncate">Innovative Solutions</p>
                    </div>
                </div>
                <div class="w-full flex-grow relative overflow-hidden bg-gray-200">
                    <img src="/assets/images/UIUX-Design-Creative.jpg" class="absolute inset-0 w-full h-full object-cover" alt="Innovative Solutions" loading="lazy">
                </div>
                <div class="p-6 md:p-8 flex flex-col bg-white border-t border-gray-100 shrink-0 relative z-10 h-[180px]">
                    <div class="w-[280px] lg:w-[320px]">
                        <h3 class="text-xl md:text-2xl font-black font-heading text-brand-black mb-3 truncate">Future-proof your business.</h3>
                        <p class="text-gray-500 text-sm md:text-base leading-relaxed line-clamp-3">We leverage the latest technologies in AI, Web3, and cloud computing to future-proof your digital infrastructure.</p>
                    </div>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="/services" class="group relative flex-1 lg:hover:flex-[4.3] transition-all duration-300 ease-in-out bg-gray-50 rounded-[2rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl flex flex-col min-h-[400px] lg:min-h-0" data-aos="fade-up" data-aos-delay="200">
                <div class="px-6 pt-6 pb-4 flex items-center gap-4 bg-gray-50 shrink-0 relative z-10">
                    <div class="w-10 h-10 rounded-xl bg-brand-orange/10 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    </div>
                    <div class="w-[200px] shrink-0">
                        <p class="text-[13px] font-bold text-gray-900 uppercase tracking-wide truncate">Agile Methodology</p>
                    </div>
                </div>
                <div class="w-full flex-grow relative overflow-hidden bg-gray-200">
                    <img src="/assets/images/Web-Mobile-Development.jpg" class="absolute inset-0 w-full h-full object-cover" alt="Agile Methodology" loading="lazy">
                </div>
                <div class="p-6 md:p-8 flex flex-col bg-white border-t border-gray-100 shrink-0 relative z-10 h-[180px]">
                    <div class="w-[280px] lg:w-[320px]">
                        <h3 class="text-xl md:text-2xl font-black font-heading text-brand-black mb-3 truncate">Deploy faster.</h3>
                        <p class="text-gray-500 text-sm md:text-base leading-relaxed line-clamp-3">Our flexible and iterative approach ensures rapid deployment, continuous feedback, and perfect alignment with goals.</p>
                    </div>
                </div>
            </a>

            <!-- Card 4 -->
            <a href="/contact" class="group relative flex-1 lg:hover:flex-[4.3] transition-all duration-300 ease-in-out bg-gray-50 rounded-[2rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl flex flex-col min-h-[400px] lg:min-h-0" data-aos="fade-up" data-aos-delay="300">
                <div class="px-6 pt-6 pb-4 flex items-center gap-4 bg-gray-50 shrink-0 relative z-10">
                    <div class="w-10 h-10 rounded-xl bg-brand-red/10 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <div class="w-[200px] shrink-0">
                        <p class="text-[13px] font-bold text-gray-900 uppercase tracking-wide truncate">Result Driven</p>
                    </div>
                </div>
                <div class="w-full flex-grow relative overflow-hidden bg-gray-200">
                    <img src="/assets/images/Digital-Marketing-SEO.jpg" class="absolute inset-0 w-full h-full object-cover" alt="Result Driven" loading="lazy">
                </div>
                <div class="p-6 md:p-8 flex flex-col bg-white border-t border-gray-100 shrink-0 relative z-10 h-[180px]">
                    <div class="w-[280px] lg:w-[320px]">
                        <h3 class="text-xl md:text-2xl font-black font-heading text-brand-black mb-3 truncate">Deliver measurable ROI.</h3>
                        <p class="text-gray-500 text-sm md:text-base leading-relaxed line-clamp-3">We don't just build software; we build solutions that increase efficiency, boost sales, and drive growth.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->


<?php include 'cta.php'; ?>
<?php include 'footer.php'; ?>


