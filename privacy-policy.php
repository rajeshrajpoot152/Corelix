<?php 
$pageTitle = "Privacy Policy | Data Security & Protection - GrowAutoAi";
$metaDesc = "GrowAutoAi's Privacy Policy explains how we collect, safeguard, and use client and user data in compliance with global data protection standards (GDPR, CCPA).";
$metaKeywords = "GrowAutoAi Privacy Policy, GDPR Compliance, Data Security, Personal Data Protection, Privacy Practices, Cookie Policy";
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
            Learn how GrowAutoAi collects, protects, and handles your personal data across our digital ecosystem.
        </p>
        <!-- CTA Button -->
        <div class="mt-8">
            <a href="/contact" class="group relative inline-flex items-center gap-2 px-6 py-2.5 font-medium border rounded-full overflow-hidden transition-all duration-300 text-sm border-white text-white hover:bg-white hover:text-black hover:shadow-[0_0_20px_rgba(255,255,255,0.3)] hover:-translate-y-1" title="Contact Privacy Team">
                Contact Privacy Team
                <svg class="w-4 h-4 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </a>
        </div>
    </div>
</section>

<main class="bg-gray-50 min-h-screen py-16 md:py-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-[1536px]">
        
        <div class="bg-white rounded-3xl shadow-xl border border-gray-100 p-8 md:p-14 lg:p-16">
            
            <!-- Document Metadata Header -->
            <div class="flex flex-wrap items-center justify-between gap-4 pb-8 mb-10 border-b border-gray-100">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-green/10 text-brand-green text-xs font-bold uppercase tracking-wider">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    <span>Data Privacy Standards</span>
                </div>
                <div class="text-xs font-semibold text-gray-500 bg-gray-100 px-4 py-1.5 rounded-full">
                    Last Updated: <?php echo date('F d, Y'); ?>
                </div>
            </div>

            <!-- Section 1 -->
            <div class="mb-8 p-6 md:p-8 rounded-2xl bg-gray-50/70 border border-gray-100 hover:border-gray-200 transition-colors">
                <div class="flex items-center gap-4 mb-4">
                    <span class="w-9 h-9 rounded-xl bg-brand-green text-white font-bold text-sm flex items-center justify-center flex-shrink-0 shadow-md">01</span>
                    <h3 class="text-xl md:text-2xl font-bold font-heading text-gray-900">Introduction & Commitment</h3>
                </div>
                <p class="text-gray-600 leading-relaxed text-base">
                    At GrowAutoAi, we respect your privacy and are committed to protecting your personal data. This privacy policy informs you as to how we safeguard your personal data when you visit our website, communicate with our team, or utilize our digital solutions, while outlining your privacy rights under applicable data protection laws.
                </p>
            </div>

            <!-- Section 2 -->
            <div class="mb-8 p-6 md:p-8 rounded-2xl bg-gray-50/70 border border-gray-100 hover:border-gray-200 transition-colors">
                <div class="flex items-center gap-4 mb-4">
                    <span class="w-9 h-9 rounded-xl bg-brand-green text-white font-bold text-sm flex items-center justify-center flex-shrink-0 shadow-md">02</span>
                    <h3 class="text-xl md:text-2xl font-bold font-heading text-gray-900">The Data We Collect About You</h3>
                </div>
                <p class="text-gray-600 leading-relaxed text-base mb-6">
                    We may collect, use, store, and transfer different kinds of personal data about you, categorized as follows:
                </p>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Identity Data -->
                    <div class="p-5 rounded-xl bg-white border border-gray-100 shadow-sm">
                        <div class="w-8 h-8 rounded-lg bg-brand-blue/10 text-brand-blue flex items-center justify-center mb-3">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-1">Identity Data</h4>
                        <p class="text-xs text-gray-500">First name, last name, username, or similar professional identifiers.</p>
                    </div>

                    <!-- Contact Data -->
                    <div class="p-5 rounded-xl bg-white border border-gray-100 shadow-sm">
                        <div class="w-8 h-8 rounded-lg bg-brand-green/10 text-brand-green flex items-center justify-center mb-3">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-1">Contact Data</h4>
                        <p class="text-xs text-gray-500">Corporate email address, telephone numbers, and billing location.</p>
                    </div>

                    <!-- Technical Data -->
                    <div class="p-5 rounded-xl bg-white border border-gray-100 shadow-sm">
                        <div class="w-8 h-8 rounded-lg bg-brand-orange/10 text-brand-orange flex items-center justify-center mb-3">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                        </div>
                        <h4 class="font-bold text-gray-900 mb-1">Technical Data</h4>
                        <p class="text-xs text-gray-500">IP address, browser type/version, operating system, and platform diagnostics.</p>
                    </div>
                </div>
            </div>

            <!-- Section 3 -->
            <div class="mb-8 p-6 md:p-8 rounded-2xl bg-gray-50/70 border border-gray-100 hover:border-gray-200 transition-colors">
                <div class="flex items-center gap-4 mb-4">
                    <span class="w-9 h-9 rounded-xl bg-brand-green text-white font-bold text-sm flex items-center justify-center flex-shrink-0 shadow-md">03</span>
                    <h3 class="text-xl md:text-2xl font-bold font-heading text-gray-900">How We Use Your Personal Data</h3>
                </div>
                <p class="text-gray-600 leading-relaxed text-base mb-4">
                    We only use your personal data when the law allows us to. Most commonly, we process your data under the following legal circumstances:
                </p>
                <div class="space-y-3">
                    <div class="flex items-start gap-3">
                        <div class="w-5 h-5 rounded-full bg-brand-green/10 text-brand-green flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <p class="text-sm text-gray-600"><strong class="text-gray-900 font-semibold">Contractual Necessity:</strong> Where we need to perform the contract we are about to enter into or have entered into with you.</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-5 h-5 rounded-full bg-brand-green/10 text-brand-green flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <p class="text-sm text-gray-600"><strong class="text-gray-900 font-semibold">Legitimate Interests:</strong> Where necessary for our business operations, security, and service improvement without overriding your fundamental rights.</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-5 h-5 rounded-full bg-brand-green/10 text-brand-green flex items-center justify-center flex-shrink-0 mt-0.5">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        <p class="text-sm text-gray-600"><strong class="text-gray-900 font-semibold">Legal Obligation:</strong> Where we need to comply with regulatory, financial, or statutory reporting requirements.</p>
                    </div>
                </div>
            </div>

            <!-- Section 4 -->
            <div class="mb-10 p-6 md:p-8 rounded-2xl bg-gray-50/70 border border-gray-100 hover:border-gray-200 transition-colors">
                <div class="flex items-center gap-4 mb-4">
                    <span class="w-9 h-9 rounded-xl bg-brand-green text-white font-bold text-sm flex items-center justify-center flex-shrink-0 shadow-md">04</span>
                    <h3 class="text-xl md:text-2xl font-bold font-heading text-gray-900">Your Privacy Rights</h3>
                </div>
                <p class="text-gray-600 leading-relaxed text-base">
                    Under applicable data protection laws, you have rights including access to your personal data, correction of inaccurate data, request for deletion, and restriction of processing. To exercise any of these rights, please contact our Privacy Team.
                </p>
            </div>

            <!-- Dedicated Privacy Support Help Box -->
            <div class="p-8 rounded-2xl bg-gradient-to-r from-brand-green/5 via-brand-blue/5 to-transparent border border-brand-green/10 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-6">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-brand-green/10 text-brand-green flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900 text-lg mb-1">Have privacy or data inquiries?</h4>
                        <p class="text-sm text-gray-600">Our Data Protection Officer is ready to assist you.</p>
                    </div>
                </div>
                <a href="mailto:hello@growautoai.com" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-brand-black text-white hover:bg-brand-green transition-colors font-bold text-sm shadow-md" title="Email GrowAutoAi Privacy">
                    <span>Contact Privacy Officer</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>

        </div>

    </div>
</main>
<?php include 'footer.php'; ?>
