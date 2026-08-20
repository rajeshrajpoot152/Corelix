<?php 
$pageTitle = "Our Services | Digital Marketing, Web Dev & AI Automation - Corelix";
$metaDesc = "Explore Corelix's comprehensive suite of digital services: Web & Mobile App Development, SEO Services, Digital Marketing, AI & Business Automation, and UI/UX Branding.";
$metaKeywords = "Corelix Services, Web & Mobile App Development, SEO Services, Digital Marketing, AI & Business Automation, UI/UX & Branding, IT Solutions, Custom Software";
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
            Corelix Ecosystem
        </h1>
        
        <!-- Main Visual Heading -->
        <h2 class="text-3xl md:text-5xl lg:text-6xl font-black font-heading text-white mb-4 tracking-tight leading-tight md:leading-none">
            Our <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue to-brand-green">Services</span>
        </h2>
        
        <!-- Page Subtitle -->
        <p class="text-sm md:text-base text-gray-400 max-w-2xl mx-auto font-medium leading-relaxed">
            End-to-end digital engineering and marketing solutions designed to scale your operations, reduce costs, and drive revenue growth.
        </p>
        
        <!-- CTA Button -->
        <div class="mt-8">
            <a href="javascript:void(0)" onclick="openGlobalInquiryModal(event)" class="group relative inline-flex items-center gap-2 px-6 py-2.5 font-medium border rounded-full overflow-hidden transition-all duration-300 text-sm border-white text-white hover:bg-white hover:text-black hover:shadow-[0_0_20px_rgba(255,255,255,0.3)] hover:-translate-y-1" title="Consult Our Experts">
                Consult Our Experts
                <svg class="w-4 h-4 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 17L17 7M7 7h10v10"></path></svg>
            </a>
        </div>
    </div>
</section>

<main class="py-20 bg-gray-50 min-h-screen relative z-10">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-[1536px]">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- 1. Web & Mobile App Development -->
            <a href="/services/web-mobile-app-development" class="block bg-white rounded-3xl border border-gray-100 hover:border-brand-blue transition-all duration-300 group shadow-xl hover:shadow-2xl flex flex-col overflow-hidden" title="Web and Mobile App Development">
                <div class="w-full h-56 overflow-hidden">
                    <img src="/assets/images/Web-Mobile-Development.jpg" alt="Web and Mobile App Development" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
                <div class="p-8 md:p-10 flex-grow flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-brand-blue/10 flex items-center justify-center text-brand-blue mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold font-heading text-gray-900 mb-4 group-hover:text-brand-blue transition-colors">Web & Mobile App Development</h3>
                    <p class="text-gray-600 text-base mb-6 leading-relaxed">High-performance custom web applications, native & cross-platform mobile apps, enterprise portals, and scalable API architectures.</p>
                    
                    <div class="flex flex-wrap gap-2 mb-8">
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">Custom Web Development</span>
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">eCommerce Development</span>
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">Mobile App Development</span>
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">API Development & Integration</span>
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">WordPress Development & Support</span>
                    </div>
                </div>
                <div class="inline-flex items-center text-brand-blue font-bold text-sm group-hover:translate-x-1 transition-transform">
                    Explore Service &rarr;
                </div>
            </div>
            </a>

            <!-- 2. SEO Services -->
            <a href="/services/seo-services" class="block bg-white rounded-3xl border border-gray-100 hover:border-brand-green transition-all duration-300 group shadow-xl hover:shadow-2xl flex flex-col overflow-hidden" title="SEO Services">
                <div class="w-full h-56 overflow-hidden">
                    <img src="/assets/images/seo-organic-search-ranking-growth.png" alt="SEO Services" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
                <div class="p-8 md:p-10 flex-grow flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-brand-green/10 flex items-center justify-center text-brand-green mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold font-heading text-gray-900 mb-4 group-hover:text-brand-green transition-colors">SEO Services</h3>
                    <p class="text-gray-600 text-base mb-6 leading-relaxed">Data-driven SEO strategies, technical SEO audits, global authority, local search rankings, and AI-powered SEO solutions.</p>
                    
                    <div class="flex flex-wrap gap-2 mb-8">
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">Technical SEO</span>
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">Global SEO</span>
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">Local SEO Services</span>
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">eCommerce SEO</span>
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">AI SEO Services</span>
                    </div>
                </div>
                <div class="inline-flex items-center text-brand-green font-bold text-sm group-hover:translate-x-1 transition-transform">
                    Explore Service &rarr;
                </div>
            </div>
            </a>

            <!-- 3. Digital Marketing -->
            <a href="/services/digital-marketing" class="block bg-white rounded-3xl border border-gray-100 hover:border-brand-orange transition-all duration-300 group shadow-xl hover:shadow-2xl flex flex-col overflow-hidden" title="Digital Marketing">
                <div class="w-full h-56 overflow-hidden">
                    <img src="/assets/images/Focus-on-Sales-Growth.jpg" alt="Digital Marketing" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
                <div class="p-8 md:p-10 flex-grow flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-brand-orange/10 flex items-center justify-center text-brand-orange mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold font-heading text-gray-900 mb-4 group-hover:text-brand-orange transition-colors">Digital Marketing</h3>
                    <p class="text-gray-600 text-base mb-6 leading-relaxed">High-ROI performance marketing, conversion optimization, social media advertising, and automated email marketing campaigns.</p>
                    
                    <div class="flex flex-wrap gap-2 mb-8">
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">PPC & Performance Marketing</span>
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">Conversion Rate Optimization (CRO)</span>
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">Social Media Marketing</span>
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">Email Marketing</span>
                    </div>
                </div>
                <div class="inline-flex items-center text-brand-orange font-bold text-sm group-hover:translate-x-1 transition-transform">
                    Explore Service &rarr;
                </div>
            </div>
            </a>

            <!-- 4. AI & Business Automation -->
            <a href="/services/ai-automation" class="block bg-white rounded-3xl border border-gray-100 hover:border-brand-red transition-all duration-300 group shadow-xl hover:shadow-2xl flex flex-col overflow-hidden" title="AI and Business Automation">
                <div class="w-full h-56 overflow-hidden">
                    <img src="/assets/images/Modern-Tech-AI-Solutions.jpg" alt="AI and Business Automation" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
                <div class="p-8 md:p-10 flex-grow flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-brand-red/10 flex items-center justify-center text-brand-red mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold font-heading text-gray-900 mb-4 group-hover:text-brand-red transition-colors">AI & Business Automation</h3>
                    <p class="text-gray-600 text-base mb-6 leading-relaxed">Intelligent WhatsApp chatbots, custom GPT & Claude agents, CRM development, and workflow automation to streamline operations.</p>
                    
                    <div class="flex flex-wrap gap-2 mb-8">
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">AI Consulting & Development</span>
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">Custom CRM Development</span>
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">WhatsApp Automation & Chatbots</span>
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">Workflow Automation</span>
                    </div>
                </div>
                <div class="inline-flex items-center text-brand-red font-bold text-sm group-hover:translate-x-1 transition-transform">
                    Explore Service &rarr;
                </div>
            </div>
            </a>

            <!-- 5. UI/UX & Branding -->
            <a href="/services/ui-ux-branding" class="block bg-white rounded-3xl border border-gray-100 hover:border-purple-600 transition-all duration-300 group shadow-xl hover:shadow-2xl flex flex-col overflow-hidden" title="UI/UX and Branding">
                <div class="w-full h-56 overflow-hidden">
                    <img src="/assets/images/UIUX-Design-Creative.jpg" alt="UI/UX and Branding" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
                <div class="p-8 md:p-10 flex-grow flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 rounded-2xl bg-purple-600/10 flex items-center justify-center text-purple-600 mb-6 group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold font-heading text-gray-900 mb-4 group-hover:text-purple-600 transition-colors">UI/UX & Branding</h3>
                    <p class="text-gray-600 text-base mb-6 leading-relaxed">Human-centric UI/UX design, brand identity systems, corporate branding, and professional video production services.</p>
                    
                    <div class="flex flex-wrap gap-2 mb-8">
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">UI/UX Design Services</span>
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">Corporate Branding</span>
                        <span class="px-3 py-1 bg-gray-50 border border-gray-200 rounded-full text-xs font-semibold text-gray-700">Video Production Services</span>
                    </div>
                </div>
                <div class="inline-flex items-center text-purple-600 font-bold text-sm group-hover:translate-x-1 transition-transform">
                    Explore Service &rarr;
                </div>
            </div>
            </a>

        </div>

    </div>
</main>

<?php include 'cta.php'; ?>
<?php include 'footer.php'; ?>
