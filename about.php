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
            We are a team of passionate developers, designers, and marketers committed to transforming your ideas into powerful digital realities. We bridge the gap between complex technology and business growth.
        </p>
    </div>
</section>



<!-- Mission & Vision -->
<section class="py-24 bg-white border-y border-gray-100">
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
                    To deliver scalable, innovative, and high-performance digital solutions that solve real-world business challenges. We believe in creating technology that works for you, not the other way around.
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
                    To be the leading global IT agency recognized for pushing boundaries in Web Development, AI, and Digital Marketing, shaping the future of how businesses interact with their customers online.
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
<!-- Our Team Section -->
<!-- <section class="py-16 md:py-24 text-center overflow-hidden bg-slate-950 border-t border-white/10 relative">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[600px] bg-brand-blue/20 blur-[120px] rounded-full pointer-events-none"></div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
            <span class="font-mono text-sm font-bold tracking-[0.2em] text-brand-blue uppercase mb-4 block">Our Team</span>
            <h2 class="text-4xl md:text-5xl font-black font-heading text-white mb-6 tracking-tight">The Experts Driving Your Success</h2>
            <p class="text-gray-400 text-lg leading-relaxed">A passionate team of developers, designers, and strategists dedicated to delivering digital excellence and bringing your vision to life.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8 mb-16 md:mb-20 max-w-5xl mx-auto">
            <div class="group/card w-full border border-white/10 rounded-3xl p-6 md:p-8 bg-white/5 backdrop-blur-sm overflow-hidden" data-aos="fade-up" data-aos-delay="0">
                <div class="mb-6 relative flex justify-center">
                    <img src="assets/images/Rahul-Tripathi.png" alt="Rahul Tripathi" class="h-auto transition-transform duration-500 group-hover/card:scale-110" loading="lazy" title="Rahul Tripathi">
                </div>
                <div class="text-center">
                    <h3 class="text-white font-bold text-xl mb-1">Rahul Tripathi</h3>
                    <p class="text-brand-blue text-sm font-medium">Founder & CEO</p>
                </div>
            </div>
            <div class="group/card w-full border border-white/10 rounded-3xl p-6 md:p-8 bg-white/5 backdrop-blur-sm overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                <div class="mb-6 relative flex justify-center">
                    <img src="assets/images/Bhavin-Sathawara.png" alt="Bhavin Sathawara" class="h-auto transition-transform duration-500 group-hover/card:scale-110" loading="lazy" title="Bhavin Sathawara">
                </div>
                <div class="text-center">
                    <h3 class="text-white font-bold text-xl mb-1">Bhavin Sathawara</h3>
                    <p class="text-brand-blue text-sm font-medium">Chief Operating Officer</p>
                </div>
            </div>
            <div class="group/card w-full border border-white/10 rounded-3xl p-6 md:p-8 bg-white/5 backdrop-blur-sm overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                <div class="mb-6 relative flex justify-center">
                    <img src="assets/images/Neha-Verma.png" alt="Neha Verma" class="h-auto transition-transform duration-500 group-hover/card:scale-110" loading="lazy" title="Neha Verma">
                </div>
                <div class="text-center">
                    <h3 class="text-white font-bold text-xl mb-1">Neha Verma</h3>
                    <p class="text-brand-blue text-sm font-medium">Digital Marketing Manager</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full overflow-hidden relative flex group mt-8 md:mt-12">
        <div class="flex gap-4 md:gap-8 px-4 animate-scroll-left group-hover:[animation-play-state:paused] w-max">
            
            <?php
            $scrollTeam = [
                // ['name' => 'Rajesh Rajpoot', 'role' => 'Frontend Tech Lead', 'image' => 'Rajesh-Rajpoot.png'],
                // ['name' => 'Priya Sharma', 'role' => 'UI/UX Designer', 'image' => 'Priya-Sharma.png'],
                // ['name' => 'Karan Desai', 'role' => 'Full-Stack Developer', 'image' => 'Karan-Desai.png'],
                // ['name' => 'Rahul Singh', 'role' => 'SEO Specialist', 'image' => 'Rahul-Singh.png'],
                // ['name' => 'Vikram Joshi', 'role' => 'Business Development Manager (BDM)', 'image' => 'Vikram-Joshi.png'],
                // ['name' => 'Sneha Gupta', 'role' => 'Project Manager / QA', 'image' => 'Sneha-Gupta.png'],
                // ['name' => 'Bhargav Panchal', 'role' => 'Sr. Web developer', 'image' => 'Bhargav-Panchal.png']
            ];
            
            for($i=0; $i<2; $i++) {
                foreach($scrollTeam as $member) {
                    echo '
                    <div class="group/card w-[150px] md:w-[200px] flex-shrink-0 border border-white/10 rounded-2xl p-4 bg-white/5 backdrop-blur-sm overflow-hidden">
                        <div class="mb-6 relative flex justify-center">
                            <img src="assets/images/'.$member['image'].'" alt="Corelix Image'.$member['name'].'" class="h-auto transition-transform duration-500 group-hover/card:scale-110" loading="lazy" title="Corelix Image">
                        </div>
                        <div class="text-center">
                            <h3 class="text-white font-bold text-lg mb-1">'.$member['name'].'</h3>
                            <p class="text-brand-blue text-sm">'.$member['role'].'</p>
                        </div>
                    </div>';
                }
            }
            ?>

        </div>
    </div>
</section> -->

<!-- Global Reach Section -->
<section class="py-24 bg-white border-t border-gray-100 relative z-10">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
            <span class="text-brand-blue text-sm font-bold tracking-[0.2em] uppercase mb-4 block">GLOBAL REACH. LOCAL EXPERTISE.</span>
            <h2 class="text-4xl md:text-5xl font-black font-heading text-brand-black mb-6">Global Reach, Local Impact</h2>
            <p class="text-gray-600 text-lg leading-relaxed">We empower businesses worldwide with cutting-edge IT solutions, from custom web development and SaaS products to result-driven digital marketing. Rooted in Ahmedabad, we deliver scalable digital experiences that drive global growth.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4 lg:gap-6" data-aos="fade-up" data-aos-delay="100">
            <!-- India -->
            <div class="group relative rounded-2xl overflow-hidden bg-[#111319] border border-white/5 hover:border-white/20 transition-all duration-300 shadow-lg">
                <div class="aspect-[4/5] overflow-hidden bg-gray-900">
                    <img src="/assets/images/INDIA.avif" alt="India" class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-500 group-hover:scale-110" loading="lazy" title="India">
                </div>
                <div class="absolute bottom-0 w-full p-4 bg-[#111319]/95 backdrop-blur border-t border-white/10 text-center">
                    <span class="text-white font-bold text-sm tracking-wider uppercase"><span class="text-brand-gray mr-2 text-xs">IN</span>INDIA</span>
                </div>
            </div>

            <!-- USA -->
            <div class="group relative rounded-2xl overflow-hidden bg-[#111319] border border-white/5 hover:border-white/20 transition-all duration-300 shadow-lg">
                <div class="aspect-[4/5] overflow-hidden bg-gray-900">
                    <img src="/assets/images/UNITED-STATES.avif" alt="United States" class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-500 group-hover:scale-110" loading="lazy" title="United States">
                </div>
                <div class="absolute bottom-0 w-full p-4 bg-[#111319]/95 backdrop-blur border-t border-white/10 text-center">
                    <span class="text-white font-bold text-sm tracking-wider uppercase"><span class="text-brand-gray mr-2 text-xs">US</span>UNITED STATES</span>
                </div>
            </div>

            <!-- Canada -->
            <div class="group relative rounded-2xl overflow-hidden bg-[#111319] border border-white/5 hover:border-white/20 transition-all duration-300 shadow-lg">
                <div class="aspect-[4/5] overflow-hidden bg-gray-900">
                    <img src="/assets/images/CANADA.avif" alt="Canada" class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-500 group-hover:scale-110" loading="lazy" title="Canada">
                </div>
                <div class="absolute bottom-0 w-full p-4 bg-[#111319]/95 backdrop-blur border-t border-white/10 text-center">
                    <span class="text-white font-bold text-sm tracking-wider uppercase"><span class="text-brand-gray mr-2 text-xs">CA</span>CANADA</span>
                </div>
            </div>

            <!-- UAE -->
            <div class="group relative rounded-2xl overflow-hidden bg-[#111319] border border-white/5 hover:border-white/20 transition-all duration-300 shadow-lg">
                <div class="aspect-[4/5] overflow-hidden bg-gray-900">
                    <img src="/assets/images/AEUAE.avif" alt="UAE" class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-500 group-hover:scale-110" loading="lazy" title="Aeuae">
                </div>
                <div class="absolute bottom-0 w-full p-4 bg-[#111319]/95 backdrop-blur border-t border-white/10 text-center">
                    <span class="text-white font-bold text-sm tracking-wider uppercase"><span class="text-brand-gray mr-2 text-xs">AE</span>UAE</span>
                </div>
            </div>

            <!-- Australia -->
            <div class="group relative rounded-2xl overflow-hidden bg-[#111319] border border-white/5 hover:border-white/20 transition-all duration-300 shadow-lg">
                <div class="aspect-[4/5] overflow-hidden bg-gray-900">
                    <img src="/assets/images/AUSTRALIA.avif" alt="Australia" class="w-full h-full object-cover filter grayscale group-hover:grayscale-0 transition-all duration-500 group-hover:scale-110" loading="lazy" title="Australia">
                </div>
                <div class="absolute bottom-0 w-full p-4 bg-[#111319]/95 backdrop-blur border-t border-white/10 text-center">
                    <span class="text-white font-bold text-sm tracking-wider uppercase"><span class="text-brand-gray mr-2 text-xs">AU</span>AUSTRALIA</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats -->
<section class="py-12 relative bg-white border-t border-gray-100">
    <div class="relative px-4 sm:px-6 lg:px-8 max-w-[1536px] mx-auto pb-12">
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
                        <h3 class="text-2xl sm:text-4xl md:text-5xl lg:text-6xl text-gray-900 leading-none mb-0.5 sm:mb-1 flex items-baseline">
                            <span class="stat-counter font-light" data-target="14" style="font-family: 'Inter', sans-serif;">0</span><span class="text-brand-blue ml-0.5 font-light">+</span>
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
                        <h3 class="text-2xl sm:text-4xl md:text-5xl lg:text-6xl text-gray-900 leading-none mb-0.5 sm:mb-1 flex items-baseline">
                            <span class="stat-counter font-light" data-target="6" style="font-family: 'Inter', sans-serif;">0</span><span class="text-brand-orange ml-0.5 font-light">+</span>
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
                        <h3 class="text-2xl sm:text-4xl md:text-5xl lg:text-6xl text-gray-900 leading-none mb-0.5 sm:mb-1 flex items-baseline">
                            <span class="stat-counter font-light" data-target="80" style="font-family: 'Inter', sans-serif;">0</span><span class="text-brand-green ml-0.5 font-light">+</span>
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
                        <h3 class="text-2xl sm:text-4xl md:text-5xl lg:text-6xl text-gray-900 leading-none mb-0.5 sm:mb-1 flex items-baseline">
                            <span class="stat-counter font-light" data-target="10" style="font-family: 'Inter', sans-serif;">0</span><span class="text-purple-400 ml-0.5 font-light">+</span>
                        </h3>
                        <p class="text-[7.5px] sm:text-[10px] lg:text-xs text-gray-500 font-bold uppercase tracking-widest leading-tight sm:leading-snug max-w-[65px] sm:max-w-[120px]">Global <br>Clients</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php include 'cta.php'; ?>
<?php include 'footer.php'; ?>
