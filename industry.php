<?php 
$pageTitle = "Industries We Serve";
$metaDesc = "Corelix provides premium Industries We Serve. Partner with our expert team for cutting-edge digital transformation and business growth.";
$metaKeywords = "Industries We Serve, Corelix Industries We Serve, Industries We Serve Agency, Best Industries We Serve, Industries We Serve Services";
?>
<?php include 'header.php'; ?>

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
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <?php
            $industries = [
                ['title' => 'Healthcare', 'url' => '/healthcare.php'],
                ['title' => 'Legal', 'url' => '/legal.php'],
                ['title' => 'Logistics', 'url' => '/logistics.php'],
                ['title' => 'Finance', 'url' => '/finance.php'],
                ['title' => 'Education', 'url' => '/education.php'],
                ['title' => 'Social Media', 'url' => '/social-media.php'],
                ['title' => 'Media & OTT', 'url' => '/media-ott.php'],
                ['title' => 'Insurance', 'url' => '/insurance.php'],
                ['title' => 'Travel', 'url' => '/travel.php'],
                ['title' => 'Retail', 'url' => '/retail.php'],
                ['title' => 'Manufacturing', 'url' => '/manufacturing.php'],
                ['title' => 'Construction', 'url' => '/construction.php'],
                ['title' => 'Beauty & Lifestyle', 'url' => '/beauty-lifestyle.php'],
                ['title' => 'Sports', 'url' => '/sports.php'],
                ['title' => 'On Demand', 'url' => '/on-demand.php'],
                ['title' => 'Marketplace', 'url' => '/marketplace.php'],
                ['title' => 'IT & Telecom', 'url' => '/it-telecom.php'],
                ['title' => 'Automotive', 'url' => '/automotive.php'],
                ['title' => 'Real Estate', 'url' => '/real-estate.php'],
                ['title' => 'Energy & Utilities', 'url' => '/energy-utilities.php'],
            ];

            foreach ($industries as $sol) {
                echo '<a href="'.$sol['url'].'" class="group block p-6 bg-gray-50 rounded-2xl border border-gray-100 hover:border-brand-blue hover:shadow-xl transition-all hover:-translate-y-1" title="Corelix Link">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-white rounded-xl shadow-sm flex items-center justify-center text-brand-blue group-hover:bg-brand-blue group-hover:text-white transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                            <h3 class="font-bold text-gray-900 group-hover:text-brand-blue transition-colors">'.$sol['title'].'</h3>
                        </div>
                      </a>';
            }
            ?>
        </div>

    </div>
</section>

<?php include 'cta.php'; ?>
<?php include 'footer.php'; ?>
