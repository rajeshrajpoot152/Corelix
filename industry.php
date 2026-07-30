<?php 
$pageTitle = "Industries We Serve | Enterprise IT & Marketing - Corelix";
$metaDesc = "Corelix delivers tailored digital transformation, custom software, and marketing strategies across 20+ industries including Healthcare, Finance, Retail, Logistics, and Real Estate.";
$metaKeywords = "Healthcare IT Solutions, Legal Tech, FinTech Software, Retail eCommerce, Manufacturing Automation, Enterprise IT Industries, Corelix Industries";
include 'header.php'; 
?>


<!-- Page Header -->
<!-- Premium Inner Page Hero Template -->
<section class="pt-28 pb-12 md:pt-32 md:pb-16 relative overflow-hidden bg-slate-950">
    <!-- Grid & Glow (Standard Inner Page Background) -->
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[600px] bg-brand-blue/20 rounded-full mix-blend-screen filter blur-[120px] pointer-events-none"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="zoom-out-up">
        
        <!-- SEO Page Title (Reusable for all inner pages) -->
        <h1 class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-4 md:mb-6 text-white text-xs font-bold tracking-widest uppercase shadow-sm">
            Industry
        </h1>
        
        <!-- Main Visual Heading -->
        <h2 class="text-3xl md:text-5xl lg:text-6xl font-black font-heading text-white mb-4 tracking-tight leading-tight md:leading-none">
            Solutions for Every <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue to-brand-green">Industry</span>
        </h2>
        
        <!-- Page Subtitle -->
        <p class="text-sm md:text-base text-gray-400 max-w-2xl mx-auto font-medium">
            Explore our wide range of custom software solutions tailored for specific industries and on-demand delivery models.
        </p>
    </div>
</section>


<!-- Industries Section -->
<section class="py-24 bg-white relative min-h-screen">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8" data-aos="fade-up">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $industries = [
                [
                    'title' => 'Healthcare',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>',
                    'desc' => 'Build secure and compliant digital health platforms. We develop patient-centric telemedicine apps, EHR integrations, and smart hospital management systems to transform modern healthcare.'
                ],
                [
                    'title' => 'Legal',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>',
                    'desc' => 'Secure digital solutions for law firms. We create confidential client portals, case management software, and high-end corporate websites that build trust and streamline legal processes.'
                ],
                [
                    'title' => 'Logistics',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>',
                    'desc' => 'Optimize your supply chain with intelligent software. We build real-time fleet tracking apps, warehouse management systems, and custom ERPs to ensure faster and smarter deliveries.'
                ],
                [
                    'title' => 'Finance',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
                    'desc' => 'Empower your financial services with robust technology. We develop secure banking portals, fintech apps, insurance dashboards, and custom payment gateways tailored to your needs.'
                ],
                [
                    'title' => 'Education',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>',
                    'desc' => 'Transform learning with scalable digital platforms. We design interactive e-learning apps, student management systems, and comprehensive LMS portals for modern education.'
                ],
                [
                    'title' => 'Social Media',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>',
                    'desc' => 'Connect people with highly scalable networking apps. We build custom social platforms, real-time chat applications, and engaging community forums focused on user retention.'
                ],
                [
                    'title' => 'Media & OTT',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>',
                    'desc' => 'Deliver seamless entertainment globally. We engineer high-performance video streaming apps, content delivery networks (CDN), and dynamic digital publishing platforms.'
                ],
                [
                    'title' => 'Insurance',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>',
                    'desc' => 'Modernize your insurance workflows. We develop automated claims processing systems, insurtech mobile apps, and secure policy management software to serve your customers better.'
                ],
                [
                    'title' => 'Travel',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
                    'desc' => 'Elevate the booking experience for travelers. We build custom hotel booking engines, travel agency CRMs, and robust ticketing software for the modern hospitality industry.'
                ],
                [
                    'title' => 'Retail',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>',
                    'desc' => 'Boost your online sales with end-to-end eCommerce development. We create omnichannel POS systems and robust inventory management solutions for growing retail brands.'
                ],
                [
                    'title' => 'Manufacturing',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>',
                    'desc' => 'Streamline your factory operations with smart technology. We develop custom ERP solutions, industrial automation software, and IoT integrations for the manufacturing sector.'
                ],
                [
                    'title' => 'Construction',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>',
                    'desc' => 'Manage complex projects with ease. We build on-site tracking software, contractor bidding platforms, and custom ERPs designed specifically for the construction industry.'
                ],
                [
                    'title' => 'Beauty & Lifestyle',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>',
                    'desc' => 'Engage your audience with stunning digital experiences. We create custom salon booking apps, AR try-on solutions, and lifestyle eCommerce portals that drive brand growth.'
                ],
                [
                    'title' => 'Sports',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
                    'desc' => 'Bring fans closer to the game. We develop live scoring applications, fantasy sports platforms, and team management software with real-time analytics.'
                ],
                [
                    'title' => 'On Demand',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
                    'desc' => 'Deliver services instantly with reliable on-demand apps. We build food delivery platforms, taxi booking solutions, and hyper-local service apps engineered for speed.'
                ],
                [
                    'title' => 'Marketplace',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>',
                    'desc' => 'Connect buyers and sellers effortlessly. We specialize in multi-vendor marketplace development, B2B trading platforms, and seamless C2C auction websites.'
                ],
                [
                    'title' => 'IT & Telecom',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>',
                    'desc' => 'Upgrade your telecom infrastructure with robust software. We develop network monitoring tools, secure billing integrations, and scalable VoIP communication platforms.'
                ],
                [
                    'title' => 'Automotive',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 16a2 2 0 11-4 0 2 2 0 014 0zm10 0a2 2 0 11-4 0 2 2 0 014 0zm-8-3V9m0 4h6m-6 0H6a2 2 0 01-2-2v-1c0-.6.4-1 1-1h1l2-4h8l2 4h1c.6 0 1 .4 1 1v1a2 2 0 01-2 2h-2"></path>',
                    'desc' => 'Drive innovation in the automotive sector. We build smart dealership management software, connected car applications, and EV technology integrations.'
                ],
                [
                    'title' => 'Real Estate',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>',
                    'desc' => 'Modernize property management and sales. We develop innovative listing portals, virtual VR tours, and scalable CRM systems for real estate professionals.'
                ],
                [
                    'title' => 'Energy & Utilities',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>',
                    'desc' => 'Optimize energy consumption with smart software. We build renewable energy tracking dashboards, smart grid monitoring tools, and custom utility billing solutions.'
                ],
            ];

            $colors = [
                // Dark Brand Theme
                [
                    'bg' => 'bg-slate-900',
                    'sub' => 'text-slate-400',
                    'title' => 'text-white group-hover:text-brand-orange',
                    'desc' => 'text-slate-300'
                ],
                // Clean White Theme
                [
                    'bg' => 'bg-white',
                    'sub' => 'text-slate-500',
                    'title' => 'text-slate-900 group-hover:text-brand-orange',
                    'desc' => 'text-slate-600'
                ],
                // Primary Brand Theme
                [
                    'bg' => 'bg-brand-orange',
                    'sub' => 'text-orange-200',
                    'title' => 'text-white',
                    'desc' => 'text-orange-50'
                ],
                // Soft Orange Theme
                [
                    'bg' => 'bg-orange-50',
                    'sub' => 'text-brand-orange',
                    'title' => 'text-slate-900',
                    'desc' => 'text-slate-600'
                ]
            ];

            foreach ($industries as $index => $sol) {
                $color = $colors[$index % count($colors)];
                
                // Construct the local image filename dynamically based on the title
                $baseFilename = 'in-' . str_replace([' & ', ' '], ['-', '-'], $sol['title']);
                $jpgPath = 'assets/images/' . $baseFilename . '.jpg';
                $pngPath = 'assets/images/' . $baseFilename . '.png';
                
                // Check for both .jpg and .png extensions, then fallback
                if (file_exists($jpgPath)) {
                    $imageUrl = $jpgPath;
                } elseif (file_exists($pngPath)) {
                    $imageUrl = $pngPath;
                } else {
                    $imageUrl = "assets/images/og-image.jpg"; // Local fallback image
                }
                
                echo '<div class="group flex flex-col rounded-3xl overflow-hidden hover:-translate-y-2 transition-transform duration-500 shadow-sm hover:shadow-2xl h-full border border-gray-100/50">
                        
                        <!-- Image Top Section -->
                        <div class="h-56 relative overflow-hidden bg-gray-900">
                            <img src="'.$imageUrl.'" alt="'.$sol['title'].'" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-110 transition-all duration-700">
                            
                            <!-- Overlay Gradient for smooth blend -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                            
                            <!-- Floating Icon -->
                            <div class="absolute bottom-4 right-4 w-14 h-14 bg-white/10 backdrop-blur-md rounded-2xl flex items-center justify-center text-white shadow-xl border border-white/20 transform group-hover:rotate-6 transition-transform duration-300">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">'.$sol['icon'].'</svg>
                            </div>
                        </div>
                        
                        <!-- Content Bottom Section -->
                        <div class="flex-grow p-8 sm:p-10 '.$color['bg'].' flex flex-col relative overflow-hidden transition-colors duration-500">
                            <!-- Decorative background blur -->
                            <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full blur-3xl -mr-10 -mt-10 pointer-events-none"></div>
                            
                            <div class="relative z-10 flex-grow flex flex-col">
                                <div class="text-xs font-bold tracking-widest uppercase mb-4 '.$color['sub'].'">INDUSTRY</div>
                                <h3 class="text-2xl font-bold font-heading mb-4 tracking-tight transition-colors '.$color['title'].'">'.$sol['title'].'</h3>
                                <p class="leading-relaxed text-[15px] mb-0 opacity-90 '.$color['desc'].'">'.$sol['desc'].'</p>
                            </div>
                        </div>
                        
                      </div>';
            }
            ?>
        </div>

    </div>
</section>

<?php include 'cta.php'; ?>
<?php include 'footer.php'; ?>
