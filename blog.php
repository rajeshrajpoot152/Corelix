<?php 
$pageTitle = "Blog - Insights on AI, Web Dev & Marketing | Corelix";
$metaDesc = "Read the latest insights, strategies, and news on Artificial Intelligence, Web Development, SEO, and Digital Marketing from the Corelix experts.";
$metaKeywords = "Corelix Blog, Tech Insights, AI News, Web Development Trends, Digital Marketing Tips, IT Agency Blog, Software Strategy Articles";
include 'header.php'; 

// Fetch Blog Data
$jsonFile = 'assets/data/blogs.json';
$blogs = [];
if (file_exists($jsonFile)) {
    $jsonData = file_get_contents($jsonFile);
    $blogs = json_decode($jsonData, true);
}
?>

<!-- Premium Inner Page Hero Template -->
<section class="pt-28 pb-12 md:pt-32 md:pb-16 relative overflow-hidden bg-slate-950">
    <!-- Grid & Glow (Standard Inner Page Background) -->
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[600px] bg-brand-blue/20 rounded-full mix-blend-screen filter blur-[120px] pointer-events-none"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="zoom-out-up">
        
        <!-- Eyebrow Label -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-4 md:mb-6 text-white text-xs font-bold tracking-widest uppercase shadow-sm">
            Our Blog
        </div>
        
        <!-- Main SEO Heading (H1) -->
        <h1 class="text-3xl md:text-5xl lg:text-6xl font-black font-heading text-white mb-4 tracking-tight leading-tight md:leading-none">
            Latest <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue to-brand-green">Insights.</span>
        </h1>
        
        <!-- Page Subtitle -->
        <p class="text-sm md:text-base text-gray-400 max-w-2xl mx-auto font-medium">
            Explore our thoughts on the future of AI, actionable SEO strategies, and the evolving landscape of Web Development.
        </p>
    </div>
</section>

<!-- Blog Grid -->
<section class="py-16 relative z-10 bg-[#0B0F19]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <?php if(empty($blogs)): ?>
            <div class="text-center py-20 text-brand-gray">No blogs found.</div>
        <?php else: ?>
            
            <!-- Featured Blog (First Post) -->
            <?php $featured = $blogs[0]; ?>
            <div class="mb-16" data-aos="fade-up">
                <a href="/blog/<?php echo $featured['slug']; ?>" class="group block relative rounded-3xl overflow-hidden bg-[#111319] border border-white/5 hover:border-white/20 transition-all duration-300 shadow-2xl flex flex-col lg:flex-row h-auto lg:h-[450px]">
                    <div class="w-full lg:w-3/5 h-64 lg:h-full relative overflow-hidden">
                        <img src="<?php echo $featured['image']; ?>" alt="<?php echo htmlspecialchars($featured['title']); ?>" title="<?php echo htmlspecialchars($featured['title']); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 lg:bg-gradient-to-r lg:from-transparent lg:to-[#111319] to-transparent"></div>
                    </div>
                    <div class="w-full lg:w-2/5 p-8 lg:p-12 flex flex-col justify-center relative z-10">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="px-3 py-1 bg-brand-blue/20 text-brand-blue text-xs font-bold uppercase tracking-wider rounded-full"><?php echo $featured['category']; ?></span>
                            <span class="text-brand-gray text-xs"><?php echo $featured['date']; ?></span>
                        </div>
                        <h2 class="text-3xl lg:text-4xl font-bold font-heading text-white mb-4 group-hover:text-brand-blue transition-colors"><?php echo $featured['title']; ?></h2>
                        <p class="text-gray-400 mb-6 line-clamp-3 text-lg"><?php echo $featured['excerpt']; ?></p>
                        <div class="flex items-center gap-3 mt-auto">
                            <div class="w-10 h-10 rounded-full bg-brand-gray/20 flex items-center justify-center font-bold text-white"><?php echo substr($featured['author'], 0, 1); ?></div>
                            <span class="text-brand-gray font-medium text-sm"><?php echo $featured['author']; ?></span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Standard Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php 
                // Loop through remaining blogs
                for($i = 1; $i < count($blogs); $i++): 
                    $blog = $blogs[$i];
                ?>
                <div data-aos="fade-up" data-aos-delay="<?php echo ($i * 100); ?>">
                    <a href="/blog/<?php echo $blog['slug']; ?>" class="group block h-full rounded-2xl overflow-hidden bg-[#111319] border border-white/5 hover:border-white/20 transition-all duration-300 flex flex-col shadow-lg hover:shadow-brand-blue/5">
                        <div class="h-56 w-full relative overflow-hidden">
                            <img src="<?php echo $blog['image']; ?>" alt="<?php echo htmlspecialchars($blog['title']); ?>" title="<?php echo htmlspecialchars($blog['title']); ?>" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" loading="lazy">
                            <div class="absolute inset-0 bg-brand-black/20 group-hover:bg-transparent transition-colors duration-300"></div>
                            <div class="absolute top-4 left-4">
                                <span class="px-3 py-1 bg-black/70 backdrop-blur text-white text-xs font-bold uppercase tracking-wider rounded-full border border-white/10"><?php echo $blog['category']; ?></span>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <span class="text-brand-gray text-xs mb-3 flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <?php echo $blog['date']; ?>
                            </span>
                            <h3 class="text-xl font-bold font-heading text-white mb-3 group-hover:text-brand-green transition-colors line-clamp-2"><?php echo $blog['title']; ?></h3>
                            <p class="text-gray-400 text-sm mb-6 line-clamp-3 flex-grow"><?php echo $blog['excerpt']; ?></p>
                            
                            <div class="flex items-center justify-between mt-auto pt-4 border-t border-white/5">
                                <span class="text-brand-gray font-medium text-xs">By <?php echo $blog['author']; ?></span>
                                <span class="text-brand-blue text-sm font-bold flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                                    Read 
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
                <?php endfor; ?>
            </div>
            
        <?php endif; ?>
    </div>
</section>

<?php include 'cta.php'; ?>
<?php include 'footer.php'; ?>
