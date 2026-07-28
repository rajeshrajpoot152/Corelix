<?php 
$pageTitle = "Privacy Policy - Corelix";
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
            Data Protection
        </h1>
        
        <!-- Main Visual Heading -->
        <h2 class="text-3xl md:text-5xl lg:text-6xl font-black font-heading text-white mb-4 tracking-tight leading-tight md:leading-none">
            Privacy <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue to-brand-green">Policy</span>
        </h2>
        
        <!-- Subtitle -->
        <p class="text-sm md:text-base text-gray-400 max-w-2xl mx-auto font-medium">
            Learn how Corelix collects, protects, and handles your personal data across our digital ecosystem.
        </p>
    </div>
</section>

<main class="bg-[#080B12] min-h-screen py-16 relative z-10">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-[1536px]">
        <div class="bg-brand-black/90 backdrop-blur-md rounded-3xl shadow-2xl border border-white/10 p-8 sm:p-12 text-white">
            <div class="prose prose-lg max-w-none text-gray-300">
                <p class="text-sm text-gray-400 border-b border-white/10 pb-4 mb-8">Last updated: <?php echo date('F d, Y'); ?></p>
                
                <h3 class="text-2xl font-bold text-white mt-8 mb-4 font-heading">1. Introduction</h3>
                <p class="mb-6 leading-relaxed">At Corelix, we respect your privacy and are committed to protecting your personal data. This privacy policy will inform you as to how we look after your personal data when you visit our website and tell you about your privacy rights and how the law protects you.</p>
                
                <h3 class="text-2xl font-bold text-white mt-8 mb-4 font-heading">2. The Data We Collect About You</h3>
                <p class="mb-4 leading-relaxed">We may collect, use, store and transfer different kinds of personal data about you which we have grouped together as follows:</p>
                <ul class="list-disc pl-5 mb-6 space-y-2 text-gray-300">
                    <li><strong class="text-white">Identity Data</strong> includes first name, last name, username or similar identifier.</li>
                    <li><strong class="text-white">Contact Data</strong> includes billing address, email address and telephone numbers.</li>
                    <li><strong class="text-white">Technical Data</strong> includes internet protocol (IP) address, browser type and version, time zone setting and location, operating system and platform, and other technology on the devices you use to access this website.</li>
                </ul>

                <h3 class="text-2xl font-bold text-white mt-8 mb-4 font-heading">3. How We Use Your Personal Data</h3>
                <p class="mb-4 leading-relaxed">We will only use your personal data when the law allows us to. Most commonly, we will use your personal data in the following circumstances:</p>
                <ul class="list-disc pl-5 mb-6 space-y-2 text-gray-300">
                    <li>Where we need to perform the contract we are about to enter into or have entered into with you.</li>
                    <li>Where it is necessary for our legitimate interests (or those of a third party) and your interests and fundamental rights do not override those interests.</li>
                    <li>Where we need to comply with a legal obligation.</li>
                </ul>

                <h3 class="text-2xl font-bold text-white mt-8 mb-4 font-heading">4. Contact Us</h3>
                <p class="mb-4 leading-relaxed">If you have any questions about this privacy policy or our privacy practices, please contact us in the following ways:</p>
                <p class="mb-4 leading-relaxed">Email address: <a href="mailto:info@corelix.com" class="text-brand-blue hover:underline font-medium" title="Email Corelix">info@corelix.com</a></p>
            </div>
        </div>
    </div>
</main>
<?php include 'footer.php'; ?>
