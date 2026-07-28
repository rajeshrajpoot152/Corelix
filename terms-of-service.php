<?php 
$pageTitle = "Terms of Service - Corelix";
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
            Legal Agreement
        </h1>
        
        <!-- Main Visual Heading -->
        <h2 class="text-3xl md:text-5xl lg:text-6xl font-black font-heading text-white mb-4 tracking-tight leading-tight md:leading-none">
            Terms of <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue to-brand-green">Service</span>
        </h2>
        
        <!-- Subtitle -->
        <p class="text-sm md:text-base text-gray-400 max-w-2xl mx-auto font-medium">
            Please read these terms carefully before accessing or using our platform and digital services.
        </p>
    </div>
</section>

<main class="bg-[#080B12] min-h-screen py-16 relative z-10">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-[1536px]">
        <div class="bg-brand-black/90 backdrop-blur-md rounded-3xl shadow-2xl border border-white/10 p-8 sm:p-12 text-white">
            <div class="prose prose-lg max-w-none text-gray-300">
                <p class="text-sm text-gray-400 border-b border-white/10 pb-4 mb-8">Last updated: <?php echo date('F d, Y'); ?></p>
                
                <h3 class="text-2xl font-bold text-white mt-8 mb-4 font-heading">1. Agreement to Terms</h3>
                <p class="mb-6 leading-relaxed">By accessing or using our services, you agree to be bound by these Terms. If you disagree with any part of the terms, then you may not access the service.</p>
                
                <h3 class="text-2xl font-bold text-white mt-8 mb-4 font-heading">2. Intellectual Property</h3>
                <p class="mb-6 leading-relaxed">The Service and its original content, features, and functionality are and will remain the exclusive property of Corelix and its licensors. The Service is protected by copyright, trademark, and other laws of both the country and foreign countries.</p>

                <h3 class="text-2xl font-bold text-white mt-8 mb-4 font-heading">3. Links To Other Web Sites</h3>
                <p class="mb-4 leading-relaxed">Our Service may contain links to third-party web sites or services that are not owned or controlled by Corelix.</p>
                <p class="mb-6 leading-relaxed">Corelix has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Corelix shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services.</p>

                <h3 class="text-2xl font-bold text-white mt-8 mb-4 font-heading">4. Termination</h3>
                <p class="mb-6 leading-relaxed">We may terminate or suspend your access immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>
                
                <h3 class="text-2xl font-bold text-white mt-8 mb-4 font-heading">5. Changes</h3>
                <p class="mb-6 leading-relaxed">We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 days' notice prior to any new terms taking effect.</p>

                <h3 class="text-2xl font-bold text-white mt-8 mb-4 font-heading">6. Contact Us</h3>
                <p class="mb-4 leading-relaxed">If you have any questions about these Terms, please contact us at <a href="mailto:info@corelix.com" class="text-brand-blue hover:underline font-medium" title="Email Corelix">info@corelix.com</a>.</p>
            </div>
        </div>
    </div>
</main>
<?php include 'footer.php'; ?>
