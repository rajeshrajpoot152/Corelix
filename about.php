<?php 
$pageTitle = "About Us | Who We Are, Leadership & Mission - Corelix";
$metaDesc = "Learn about Corelix, our mission, vision, leadership team, and our commitment to innovating high-growth IT and marketing solutions for global enterprises.";
$metaKeywords = "About Corelix, IT Agency Leadership, Software Development Team, Digital Agency History, Our Mission, Tech Innovators, Corelix Team";
include 'header.php'; 
?>


<!-- About Hero Section -->
<!-- Premium Inner Page Hero Template -->
<section class="pt-28 pb-12 md:pt-32 md:pb-16 relative overflow-hidden bg-slate-950">
    <!-- Grid & Glow (Standard Inner Page Background) -->
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[600px] bg-brand-blue/20 rounded-full mix-blend-screen filter blur-[120px] pointer-events-none"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="zoom-out-up">
        
        <!-- SEO Page Title (Reusable for all inner pages) -->
        <h1 class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-4 md:mb-6 text-white text-xs font-bold tracking-widest uppercase shadow-sm">
            About
        </h1>
        
        <!-- Main Visual Heading -->
        <h2 class="text-3xl md:text-5xl lg:text-6xl font-black font-heading text-white mb-4 tracking-tight leading-tight md:leading-none">
            About <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue to-brand-green">Corelix</span>
        </h2>
        
        <!-- Page Subtitle -->
        <p class="text-sm md:text-base text-gray-400 max-w-2xl mx-auto font-medium">
            We are an elite team of engineers and growth strategists committed to building custom IT solutions that actively drive your revenue. We turn complex technology into simple, scalable business assets.
        </p>
        <div class="mt-8">
            <a href="javascript:void(0)" onclick="openGlobalInquiryModal(event)" class="group relative inline-flex items-center gap-2 px-6 py-2.5 font-medium border rounded-full overflow-hidden transition-all duration-300 text-sm border-white text-white hover:bg-white hover:text-black hover:shadow-[0_0_20px_rgba(255,255,255,0.3)] hover:-translate-y-1" title="Discuss Your Project">
                Discuss Your Project
                <svg class="w-4 h-4 group-hover:translate-x-1 group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 17L17 7M7 7h10v10"></path></svg>
            </a>
        </div>

    </div>
</section>

<!-- Mission & Vision -->
<section class="py-24 bg-white border-b border-gray-100">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Mission (Image Left, Text Right) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center mb-24">
            <div data-aos="fade-right">
                <div class="rounded-3xl overflow-hidden shadow-2xl relative group">
                    <img src="assets/images/our-mission.jpg" alt="Our Mission" class="w-full h-auto object-cover aspect-[4/3] transition-transform duration-700 group-hover:scale-110" loading="lazy" title="Our Mission">
                    <div class="absolute inset-0 bg-brand-blue/10 mix-blend-multiply transition-opacity duration-700 group-hover:opacity-0"></div>
                </div>
            </div>
            <div data-aos="fade-left">
                <div class="w-16 h-16 rounded-2xl bg-brand-blue/10 flex items-center justify-center text-brand-blue mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h2 class="text-3xl md:text-5xl font-black font-heading text-brand-black mb-6">Our Mission</h2>
                <p class="text-gray-600 text-lg leading-relaxed">
                    To engineer secure, high-performance software and marketing systems that solve your exact business bottlenecks. We build technology that works for you, eliminating manual effort and maximizing ROI.
                </p>
            </div>
        </div>

        <!-- Vision (Text Left, Image Right) -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="order-2 lg:order-1" data-aos="fade-right">
                <div class="w-16 h-16 rounded-2xl bg-brand-green/10 flex items-center justify-center text-brand-green mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </div>
                <h2 class="text-3xl md:text-5xl font-black font-heading text-brand-black mb-6">Our Vision</h2>
                <p class="text-gray-600 text-lg leading-relaxed">
                    To be the most trusted IT partner for businesses globally, known for building lightning-fast apps, smart AI automation, and marketing systems that consistently generate sales.
                </p>
            </div>
            <div class="order-1 lg:order-2" data-aos="fade-left">
                <div class="rounded-3xl overflow-hidden shadow-2xl relative group">
                    <img src="assets/images/our-vision.jpg" alt="Our Vision" class="w-full h-auto object-cover aspect-[4/3] transition-transform duration-700 group-hover:scale-110" loading="lazy" title="Our Vision">
                    <div class="absolute inset-0 bg-brand-green/10 mix-blend-multiply transition-opacity duration-700 group-hover:opacity-0"></div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Founder & CEO Spotlight Section (White / Light Theme) -->
<section class="py-20 md:py-28 bg-gray-50 text-slate-900 relative overflow-hidden border-b border-gray-200">
    <div class="absolute top-1/2 right-10 -translate-y-1/2 w-[500px] h-[500px] bg-brand-blue/5 blur-[120px] rounded-full pointer-events-none"></div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="max-w-5xl mx-auto">
            <div class="bg-white border border-gray-200/80 rounded-3xl p-8 md:p-12 shadow-[0_12px_40px_rgba(0,0,0,0.06)] relative overflow-hidden group" data-aos="fade-up">
                <!-- Subtle Top Accent Gradient Line -->
                <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-brand-blue via-brand-green to-brand-blue"></div>
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 md:gap-12 items-center">
                    
                    <!-- CEO Square Image (Chokor Frame) -->
                    <div class="lg:col-span-5 flex justify-center">
                        <div class="relative w-full max-w-[320px] aspect-square rounded-3xl overflow-hidden bg-slate-900 border-2 border-gray-200 shadow-2xl group/photo">
                            <img src="/assets/images/Rahul-Tripathi.png" 
                                 alt="Rahul Tripathi - Founder & CEO" 
                                 title="Rahul Tripathi - Founder & CEO" 
                                 loading="lazy" 
                                 class="w-full h-full object-cover object-top transition-transform duration-700 group-hover/photo:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                            <div class="absolute bottom-4 left-4 right-4 text-center sm:text-left">
                                <span class="px-3.5 py-1.5 bg-brand-blue text-white text-xs font-bold rounded-full uppercase tracking-wider shadow-md inline-block">
                                    Founder & CEO
                                </span>
                            </div>
                        </div>
                    </div>

                    <!-- CEO Content & Message -->
                    <div class="lg:col-span-7 text-center lg:text-left">
                        <span class="font-mono text-xs md:text-sm font-bold tracking-[0.2em] text-brand-blue uppercase mb-3 block">
                            LEADERSHIP & VISION
                        </span>
                        <h2 class="text-3xl md:text-5xl font-black font-heading text-slate-900 mb-2 tracking-tight">
                            Rahul Tripathi
                        </h2>
                        <p class="text-brand-blue text-base md:text-lg font-bold mb-6">
                            Founder & Chief Executive Officer
                        </p>
                        <blockquote class="text-slate-600 text-base md:text-lg leading-relaxed mb-8 italic border-l-0 lg:border-l-4 lg:border-brand-blue/30 lg:pl-5">
                            "At Corelix, we believe technology should be a direct growth engine for businesses. Our mission is to engineer high-velocity digital solutions, smart automation, and profitable marketing that deliver measurable impact."
                        </blockquote>
                        
                        <!-- Actions & LinkedIn -->
                        <div class="flex flex-wrap items-center justify-center lg:justify-start gap-4">
                            <a href="https://www.linkedin.com/in/rahultripathi/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2.5 px-7 py-3.5 rounded-full bg-[#0A66C2] hover:bg-[#084e96] text-white text-sm font-bold transition-all duration-300 shadow-lg shadow-[#0A66C2]/20 hover:shadow-[0_8px_25px_rgba(10,102,194,0.35)] hover:-translate-y-0.5" title="Connect with Rahul Tripathi on LinkedIn">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                                <span>Connect on LinkedIn</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<!-- Our Team & Leadership Section -->
<section class="py-16 md:py-24 text-center overflow-hidden bg-slate-950 border-t border-white/10 relative">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[600px] bg-brand-blue/20 blur-[120px] rounded-full pointer-events-none"></div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12 md:mb-16" data-aos="fade-up">
            <span class="font-mono text-sm font-bold tracking-[0.2em] text-brand-blue uppercase mb-4 block">Our Team</span>
            <h2 class="text-4xl md:text-5xl font-black font-heading text-white mb-6 tracking-tight">The Experts Driving Your Success</h2>
            <p class="text-gray-400 text-lg leading-relaxed">A passionate team of developers, designers, and strategists dedicated to delivering digital excellence and bringing your vision to life.</p>
        </div>
        <?php
        $teamMembers = [
             ['name' => 'Rajesh Rajpoot', 'role' => 'Frontend Tech Lead', 'image' => 'Rajesh-Rajpoot.jpg', 'linkedin' => 'https://www.linkedin.com/in/rajesh-rajpoot/'],
             ['name' => 'Vinod Prajapati', 'role' => 'Frontend Developer', 'image' => 'Vinod-Prajapati.jpg', 'linkedin' => 'https://www.linkedin.com/in/vinod-prajapati12/'],
             ['name' => 'Bhargav Panchal', 'role' => 'Sr. Web Developer', 'image' => 'bhargav-panchal.jpg', 'linkedin' => 'https://www.linkedin.com/in/panchal-bhargav-831614155/'],
             ['name' => 'Gajendra Kushwah', 'role' => 'Web Developer', 'image' => 'Gajendra-kushwah.jpg', 'linkedin' => 'https://www.linkedin.com/in/gajendra-kushwah-5297361a0/'],
             ['name' => 'Jayeshkumar Jansari', 'role' => 'Head of Marketing', 'image' => 'Jayeshkumar-Jansari.jpeg', 'linkedin' => 'https://www.linkedin.com/in/jayeshjansari/']
        ];
        ?>

        <!-- Team Grid (Chokor / Square Images) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8 max-w-5xl mx-auto">
            <?php foreach($teamMembers as $index => $member): ?>
            <div class="group/card w-full border border-white/10 rounded-3xl p-6 bg-white/5 backdrop-blur-md overflow-hidden hover:border-brand-blue/50 hover:shadow-[0_15px_35px_rgba(0,102,255,0.15)] hover:-translate-y-1.5 transition-all duration-500 flex flex-col items-center" data-aos="fade-up" data-aos-delay="<?= $index * 100 ?>">
                <!-- Chokor / Square Image Frame -->
                <div class="aspect-square w-full max-w-[260px] rounded-2xl overflow-hidden mb-5 bg-slate-900 border border-white/10 relative shadow-lg">
                    <img src="/assets/images/<?= htmlspecialchars($member['image']) ?>" alt="<?= htmlspecialchars($member['name']) ?>" class="w-full h-full object-cover object-top transition-transform duration-700 group-hover/card:scale-105" loading="lazy" title="<?= htmlspecialchars($member['name']) ?>">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent opacity-0 group-hover/card:opacity-100 transition-opacity duration-300"></div>
                </div>
                <!-- Details & LinkedIn -->
                <div class="text-center w-full">
                    <h3 class="text-white font-bold text-xl mb-1 group-hover/card:text-brand-blue transition-colors"><?= htmlspecialchars($member['name']) ?></h3>
                    <p class="text-brand-blue text-sm font-medium mb-3"><?= htmlspecialchars($member['role']) ?></p>
                    <a href="<?= htmlspecialchars($member['linkedin']) ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 px-4 py-1.5 rounded-full bg-[#0A66C2]/15 hover:bg-[#0A66C2] text-[#388bfd] hover:text-white border border-[#0A66C2]/30 hover:border-[#0A66C2] text-xs font-semibold transition-all duration-300 shadow-sm hover:shadow-[0_0_15px_rgba(10,102,194,0.4)]" title="Connect on LinkedIn">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                            <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                        </svg>
                        <span>LinkedIn</span>
                    </a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Global Reach Section -->
<section class="py-24 bg-white border-t border-gray-100 relative z-10">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="text-brand-blue text-sm font-bold tracking-[0.2em] uppercase mb-4 block">GLOBAL REACH. LOCAL EXPERTISE.</span>
            <h2 class="text-4xl md:text-5xl font-black font-heading text-brand-black mb-6">Global Reach, Local Impact</h2>
            <p class="text-gray-600 text-lg leading-relaxed">We empower businesses worldwide with cutting-edge IT solutions, from custom web development and SaaS products to result-driven digital marketing. Rooted in India, we deliver scalable digital experiences that drive global growth.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 lg:gap-6" data-aos="fade-up" data-aos-delay="100">
            <!-- India -->
            <div class="group relative rounded-2xl overflow-hidden bg-[#111319] border border-white/5 hover:border-white/20 transition-all duration-300 shadow-lg">
                <div class="aspect-[4/5] overflow-hidden bg-gray-900">
                    <img src="/assets/images/INDIA.jpg" alt="India" class="w-full h-full object-cover transition-all duration-500 group-hover:grayscale group-hover:scale-110" loading="lazy" title="India">
                </div>
                <div class="absolute bottom-0 w-full p-4 bg-[#111319]/95 backdrop-blur border-t border-white/10 text-center">
                    <span class="text-white font-bold text-sm tracking-wider uppercase"><img src="https://flagcdn.com/in.svg" class="inline-block h-4 w-auto mr-2 rounded-[2px] shadow-sm" alt="IN">INDIA</span>
                </div>
            </div>

            <!-- USA -->
            <div class="group relative rounded-2xl overflow-hidden bg-[#111319] border border-white/5 hover:border-white/20 transition-all duration-300 shadow-lg">
                <div class="aspect-[4/5] overflow-hidden bg-gray-900">
                    <img src="/assets/images/UNITED-STATES.jpg" alt="United States" class="w-full h-full object-cover transition-all duration-500 group-hover:grayscale group-hover:scale-110" loading="lazy" title="United States">
                </div>
                <div class="absolute bottom-0 w-full p-4 bg-[#111319]/95 backdrop-blur border-t border-white/10 text-center">
                    <span class="text-white font-bold text-sm tracking-wider uppercase"><img src="https://flagcdn.com/us.svg" class="inline-block h-4 w-auto mr-2 rounded-[2px] shadow-sm" alt="US">UNITED STATES</span>
                </div>
            </div>

            <!-- Canada -->
            <div class="group relative rounded-2xl overflow-hidden bg-[#111319] border border-white/5 hover:border-white/20 transition-all duration-300 shadow-lg">
                <div class="aspect-[4/5] overflow-hidden bg-gray-900">
                    <img src="/assets/images/CANADA.jpg" alt="Canada" class="w-full h-full object-cover transition-all duration-500 group-hover:grayscale group-hover:scale-110" loading="lazy" title="Canada">
                </div>
                <div class="absolute bottom-0 w-full p-4 bg-[#111319]/95 backdrop-blur border-t border-white/10 text-center">
                    <span class="text-white font-bold text-sm tracking-wider uppercase"><img src="https://flagcdn.com/ca.svg" class="inline-block h-4 w-auto mr-2 rounded-[2px] shadow-sm" alt="CA">CANADA</span>
                </div>
            </div>

            <!-- UAE -->
            <div class="group relative rounded-2xl overflow-hidden bg-[#111319] border border-white/5 hover:border-white/20 transition-all duration-300 shadow-lg">
                <div class="aspect-[4/5] overflow-hidden bg-gray-900">
                    <img src="/assets/images/AEUAE.jpg" alt="UAE" class="w-full h-full object-cover transition-all duration-500 group-hover:grayscale group-hover:scale-110" loading="lazy" title="Aeuae">
                </div>
                <div class="absolute bottom-0 w-full p-4 bg-[#111319]/95 backdrop-blur border-t border-white/10 text-center">
                    <span class="text-white font-bold text-sm tracking-wider uppercase"><img src="https://flagcdn.com/ae.svg" class="inline-block h-4 w-auto mr-2 rounded-[2px] shadow-sm" alt="AE">UAE</span>
                </div>
            </div>

            <!-- Australia -->
            <div class="group relative rounded-2xl overflow-hidden bg-[#111319] border border-white/5 hover:border-white/20 transition-all duration-300 shadow-lg">
                <div class="aspect-[4/5] overflow-hidden bg-gray-900">
                    <img src="/assets/images/AUSTRALIA.jpg" alt="Australia" class="w-full h-full object-cover transition-all duration-500 group-hover:grayscale group-hover:scale-110" loading="lazy" title="Australia">
                </div>
                <div class="absolute bottom-0 w-full p-4 bg-[#111319]/95 backdrop-blur border-t border-white/10 text-center">
                    <span class="text-white font-bold text-sm tracking-wider uppercase"><img src="https://flagcdn.com/au.svg" class="inline-block h-4 w-auto mr-2 rounded-[2px] shadow-sm" alt="AU">AUSTRALIA</span>
                </div>
            </div>
            <!-- UK -->
            <div class="group relative rounded-2xl overflow-hidden bg-[#111319] border border-white/5 hover:border-white/20 transition-all duration-300 shadow-lg">
                <div class="aspect-[4/5] overflow-hidden bg-gray-900">
                    <img src="/assets/images/UK.jpg" alt="United Kingdom" class="w-full h-full object-cover transition-all duration-500 group-hover:grayscale group-hover:scale-110" loading="lazy" title="United Kingdom">
                </div>
                <div class="absolute bottom-0 w-full p-4 bg-[#111319]/95 backdrop-blur border-t border-white/10 text-center">
                    <span class="text-white font-bold text-sm tracking-wider uppercase"><img src="https://flagcdn.com/gb.svg" class="inline-block h-4 w-auto mr-2 rounded-[2px] shadow-sm" alt="UK">UNITED KINGDOM</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="py-12 relative bg-white border-t border-gray-100">
    <div class="relative px-4 sm:px-6 lg:px-8 max-w-[1536px] mx-auto pb-0 sm:pb-12">
        <div class="p-4 sm:p-10">
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
                        <h3 class="text-2xl sm:text-4xl md:text-5xl lg:text-6xl text-[#1a1a2e] leading-none mb-0.5 sm:mb-1 flex items-baseline">
                            <span class="stat-counter font-light" data-target="14" style="font-family: 'Inter', sans-serif;">0</span><span class="text-brand-blue ml-0.5 font-light">+</span>
                        </h3>
                        <p class="text-[7.5px] sm:text-[10px] lg:text-xs text-[#1a1a2e]/70 font-bold uppercase tracking-widest leading-tight sm:leading-snug max-w-[65px] sm:max-w-[120px]">Years of <br>Experience</p>
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
                        <h3 class="text-2xl sm:text-4xl md:text-5xl lg:text-6xl text-[#1a1a2e] leading-none mb-0.5 sm:mb-1 flex items-baseline">
                            <span class="stat-counter font-light" data-target="6" style="font-family: 'Inter', sans-serif;">0</span><span class="text-brand-orange ml-0.5 font-light">+</span>
                        </h3>
                        <p class="text-[7.5px] sm:text-[10px] lg:text-xs text-[#1a1a2e]/70 font-bold uppercase tracking-widest leading-tight sm:leading-snug max-w-[65px] sm:max-w-[120px]">SaaS <br>Products</p>
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
                        <h3 class="text-2xl sm:text-4xl md:text-5xl lg:text-6xl text-[#1a1a2e] leading-none mb-0.5 sm:mb-1 flex items-baseline">
                            <span class="stat-counter font-light" data-target="80" style="font-family: 'Inter', sans-serif;">0</span><span class="text-brand-green ml-0.5 font-light">+</span>
                        </h3>
                        <p class="text-[7.5px] sm:text-[10px] lg:text-xs text-[#1a1a2e]/70 font-bold uppercase tracking-widest leading-tight sm:leading-snug max-w-[65px] sm:max-w-[120px]">Projects <br>Delivered</p>
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
                        <h3 class="text-2xl sm:text-4xl md:text-5xl lg:text-6xl text-[#1a1a2e] leading-none mb-0.5 sm:mb-1 flex items-baseline">
                            <span class="stat-counter font-light" data-target="10" style="font-family: 'Inter', sans-serif;">0</span><span class="text-purple-400 ml-0.5 font-light">+</span>
                        </h3>
                        <p class="text-[7.5px] sm:text-[10px] lg:text-xs text-[#1a1a2e]/70 font-bold uppercase tracking-widest leading-tight sm:leading-snug max-w-[65px] sm:max-w-[120px]">Global <br>Clients</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include 'cta.php'; ?>
<?php include 'footer.php'; ?>
