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
                    'title' => 'Healthcare & HealthTech',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>',
                    'desc' => 'Custom IT solutions for Healthcare, telemedicine platforms, hospital management systems, and HIPAA-compliant medical software development.'
                ],
                [
                    'title' => 'Finance & FinTech',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
                    'desc' => 'Secure enterprise portals, custom banking software, insurance platforms, and modern payment gateway integrations for the financial sector.'
                ],
                [
                    'title' => 'Retail & eCommerce',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>',
                    'desc' => 'End-to-end custom eCommerce development, robust inventory management solutions, and omnichannel POS systems for modern retail.'
                ],
                [
                    'title' => 'Logistics & Supply Chain',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>',
                    'desc' => 'Advanced real-time tracking apps, fleet management software, and custom ERP systems engineered for logistics and supply chain efficiency.'
                ],
                [
                    'title' => 'Real Estate & PropTech',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>',
                    'desc' => 'Innovative property listing portals, virtual VR tours, and scalable Real Estate CRM systems built to modernize property management.'
                ],
                [
                    'title' => 'Education & EdTech',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>',
                    'desc' => 'Scalable e-learning platforms, comprehensive Learning Management Systems (LMS), and interactive online course portals.'
                ],
                [
                    'title' => 'Manufacturing & Industrial',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>',
                    'desc' => 'Industrial automation software, custom ERP solutions, and IoT integrations designed to streamline factory and plant operations.'
                ],
                [
                    'title' => 'Media, Entertainment & OTT',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>',
                    'desc' => 'High-performance video streaming apps, content delivery networks (CDN), and dynamic digital publishing platforms.'
                ],
                [
                    'title' => 'Travel & Hospitality',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
                    'desc' => 'Custom hotel booking engines, travel agency CRMs, and robust ticketing software for the modern hospitality industry.'
                ],
                [
                    'title' => 'Automotive & Mobility',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 16a2 2 0 11-4 0 2 2 0 014 0zm10 0a2 2 0 11-4 0 2 2 0 014 0zm-8-3V9m0 4h6m-6 0H6a2 2 0 01-2-2v-1c0-.6.4-1 1-1h1l2-4h8l2 4h1c.6 0 1 .4 1 1v1a2 2 0 01-2 2h-2"></path>', 
                    'desc' => 'Dealership management software, EV (Electric Vehicle) technology integrations, and smart connected car applications.'
                ],
                [
                    'title' => 'Professional & Legal Services',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>',
                    'desc' => 'High-end corporate websites, secure client communication portals, and document management systems for law firms and agencies.'
                ],
                [
                    'title' => 'Non-Profit & Government',
                    'icon' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>',
                    'desc' => 'Secure public portals, donation management platforms, and accessible digital solutions for NGOs and government bodies.'
                ],
            ];

            foreach ($industries as $sol) {
                echo '<div class="group relative flex flex-col p-8 sm:p-10 bg-white rounded-3xl shadow-sm hover:shadow-2xl border border-gray-100 hover:border-brand-orange/30 transition-all duration-500 hover:-translate-y-2 z-10 h-full">
                        <!-- Subtle hover gradient background -->
                        <div class="absolute inset-0 bg-gradient-to-br from-brand-orange/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl -z-10"></div>
                        
                        <!-- Icon -->
                        <div class="w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center text-[#F97316] group-hover:bg-brand-orange group-hover:text-white transition-colors duration-500 mb-6 shadow-sm border border-orange-100/50 shrink-0">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">'.$sol['icon'].'</svg>
                        </div>
                        
                        <!-- Content -->
                        <div class="flex-grow flex flex-col">
                            <h3 class="text-xl font-bold font-heading text-gray-900 mb-3 group-hover:text-brand-orange transition-colors">'.$sol['title'].'</h3>
                            <p class="text-gray-500 text-sm leading-relaxed mb-0">'.$sol['desc'].'</p>
                        </div>
                      </div>';
            }
            ?>
        </div>

    </div>
</section>

<?php include 'cta.php'; ?>
<?php include 'footer.php'; ?>
