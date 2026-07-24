<!-- CTA Section -->
<section class="bg-white relative overflow-hidden border-t border-gray-100 rounded-b-[40px] md:rounded-b-[60px] shadow-2xl z-20" id="cta-section">
    <!-- Decorative Background Blurs (Left Side) -->
    <div class="absolute bottom-[-10%] left-[10%] w-[400px] h-[400px] bg-brand-green/10 blur-[100px] rounded-full pointer-events-none z-0"></div>

    <!-- Right Image Background (Full bleed on right with ultra-smooth fade mask) -->
    <div class="absolute inset-0 md:left-auto md:right-0 md:w-[65%] lg:w-[55%] h-full z-0" style="-webkit-mask-image: linear-gradient(to right, transparent 0%, transparent 5%, black 50%, black 100%); mask-image: linear-gradient(to right, transparent 0%, transparent 5%, black 50%, black 100%);">
        <div class="absolute inset-y-0 left-0 w-[40%] bg-gradient-to-r from-white to-transparent z-10 hidden md:block"></div>
        <img src="/assets/images/Book-a-Free-Consultation.png" class="w-full h-full object-cover object-left hidden md:block" alt="Build Scalable Software" title="Book A Free Consultation">
    </div>

    <!-- Content Container -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28 lg:py-16 relative z-20 flex items-center">
        <!-- Left Content -->
        <div class="w-full md:w-[60%] lg:w-1/2 flex flex-col justify-center text-center md:text-left pr-0 md:pr-10 lg:pr-16">
            <div class="inline-flex items-center justify-center md:justify-start gap-2 mb-6">
                <span class="w-8 h-[2px] bg-brand-green rounded-full"></span>
                <span class="text-brand-green font-bold text-sm tracking-widest uppercase">Start Your Journey</span>
            </div>
            
            <h2 class="text-4xl md:text-5xl lg:text-[56px] font-black font-heading text-[#1a1a2e] mb-6 tracking-tight leading-[1.1] lg:whitespace-nowrap">
                Build Scalable <br class="hidden lg:block">
                Software With Us
            </h2>
            <p class="text-gray-600/90 text-base sm:text-lg lg:text-xl mb-10 max-w-[480px] mx-auto md:mx-0 leading-relaxed font-medium">
                Your vision, engineered with precision. Let's build something amazing together that drives real business growth.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center md:justify-start gap-4">
                <a class="w-full sm:w-auto bg-gradient-to-br from-brand-blue to-brand-green hover:from-blue-700 hover:to-green-500 text-white px-6 py-3 rounded-full font-bold text-sm sm:text-base transition-all duration-300 shadow-[0_8px_20px_rgba(30,58,138,0.3)] hover:shadow-[0_12px_25px_rgba(30,58,138,0.4)] hover:-translate-y-1 flex items-center justify-center group" href="javascript:void(0)" onclick="openGlobalInquiryModal(event)" title="Corelix Action">
                    Book a Free Consultation
                    <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 17L17 7M7 7h10v10"></path></svg>
                </a>
            </div>
        </div>
    </div>
</section>
