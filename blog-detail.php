<?php
// Get slug from URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

if (empty($slug)) {
    header("Location: /blog");
    exit();
}

// Fetch Blog Data
$jsonFile = 'assets/data/blogs.json';
$blogs = [];
$currentBlog = null;

if (file_exists($jsonFile)) {
    $jsonData = file_get_contents($jsonFile);
    $blogs = json_decode($jsonData, true);
    
    // Find the blog
    foreach ($blogs as $blog) {
        if ($blog['slug'] === $slug) {
            $currentBlog = $blog;
            break;
        }
    }
}

// If blog not found, redirect or show 404
if (!$currentBlog) {
    header("HTTP/1.0 404 Not Found");
    $pageTitle = "404 Not Found - Corelix";
    include 'header.php';
    echo '<div class="pt-40 pb-20 text-center"><h1 class="text-4xl text-white">Blog Post Not Found</h1><a href="/blog" class="text-brand-blue mt-4 block" title="Blog">Return to Blog</a></div>';
    include 'footer.php';
    exit();
}

// Set dynamic SEO variables before including header
$pageTitle = $currentBlog['title'] . " | Corelix Blog";
$metaDesc = $currentBlog['excerpt'];
$metaKeywords = $currentBlog['title'] . ", " . $currentBlog['category'] . ", Corelix Blog, Tech News, IT Insights";
$ogImage = "https://www.corelix.com" . $currentBlog['image'];

// Schema configuration
$schemaJson = '{
  "@context": "https://schema.org",
  "@type": "BlogPosting",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://www.corelix.com/blog/' . $slug . '"
  },
  "headline": "' . addslashes($currentBlog['title']) . '",
  "description": "' . addslashes($currentBlog['excerpt']) . '",
  "image": "https://www.corelix.com' . $currentBlog['image'] . '",
  "author": {
    "@type": "Person",
    "name": "' . addslashes($currentBlog['author']) . '"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Corelix",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.corelix.com/assets/images/favicon.png"
    }
  },
  "datePublished": "' . date("Y-m-d", strtotime($currentBlog['date'])) . '",
  "dateModified": "' . date("Y-m-d", strtotime($currentBlog['date'])) . '"
}';

include 'header.php';
?>

<!-- Article Schema -->
<script type="application/ld+json">
<?php echo $schemaJson; ?>
</script>

<!-- Premium Inner Page Hero Template -->
<section class="pt-28 pb-12 md:pt-32 md:pb-16 relative overflow-hidden bg-slate-950">
    <!-- Grid & Glow (Standard Inner Page Background) -->
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[600px] bg-brand-blue/20 rounded-full mix-blend-screen filter blur-[120px] pointer-events-none"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl relative z-10" data-aos="zoom-out-up">
        
        <div class="flex justify-center flex-wrap items-center gap-4 mb-4 md:mb-6">
            <a href="/blog" class="text-brand-gray hover:text-brand-blue transition-colors text-sm flex items-center gap-1" title="Blog">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Back to Blog
            </a>
            <span class="text-white/20">|</span>
            <!-- SEO Page Title (Reusable for all inner pages) -->
            <h1 class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 backdrop-blur-md text-brand-blue text-xs font-bold tracking-widest uppercase shadow-sm">
                <?php echo $currentBlog['category']; ?>
            </h1>
        </div>
        
        <!-- Main Visual Heading -->
        <h2 class="text-3xl md:text-5xl lg:text-6xl font-black font-heading text-white text-center mb-8 tracking-tight leading-tight md:leading-none">
            <?php
                $title_words = explode(' ', trim($currentBlog['title']));
                if (count($title_words) > 1) {
                    $last_word = array_pop($title_words);
                    echo implode(' ', $title_words) . ' <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue to-brand-green">' . $last_word . '</span>';
                } else {
                    echo '<span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue to-brand-green">' . $currentBlog['title'] . '</span>';
                }
            ?>
        </h2>
        
        <div class="flex justify-center items-center gap-6 border-b border-white/10 pb-8 mb-8">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 rounded-full bg-brand-gray/20 flex items-center justify-center font-bold text-white text-lg"><?php echo substr($currentBlog['author'], 0, 1); ?></div>
                <div class="text-left">
                    <span class="block text-white font-bold"><?php echo $currentBlog['author']; ?></span>
                    <span class="block text-brand-gray text-xs">Corelix Expert</span>
                </div>
            </div>
            <div class="h-8 w-px bg-white/10"></div>
            <div class="flex items-center gap-2 text-brand-gray text-sm">
                <svg class="w-5 h-5 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                <?php echo $currentBlog['date']; ?>
            </div>
        </div>
        
    </div>
</section>

<!-- Blog Content -->
<section class="pb-24 relative z-10 bg-[#0B0F19]">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-4xl pt-16">
        
        <!-- Featured Image -->
        <div class="w-full h-auto md:h-[500px] rounded-3xl overflow-hidden mb-12 shadow-2xl border border-white/5" data-aos="fade-up" data-aos-delay="100">
            <img title="<" alt="<" src="<?php echo $currentBlog['image']; ?>" alt="<?php echo htmlspecialchars($currentBlog['title']); ?>" title="<?php echo htmlspecialchars($currentBlog['title']); ?>" class="w-full h-full object-cover">
        </div>

        <!-- Article Content -->
        <article class="prose prose-invert prose-lg max-w-none font-sans" data-aos="fade-up" data-aos-delay="200">
            <?php echo $currentBlog['content']; ?>
        </article>
        
        <!-- Share Post -->
        <div class="mt-16 pt-8 border-t border-white/10 flex items-center justify-between">
            <span class="text-white font-bold">Share this article:</span>
            <div class="flex gap-4">
                <a href="https://twitter.com/intent/tweet?url=https://www.corelix.com/blog/<?php echo $slug; ?>&text=<?php echo urlencode($currentBlog['title']); ?>" target="_blank" class="w-10 h-10 rounded-full bg-white/5 hover:bg-brand-blue flex items-center justify-center text-white transition-colors" title="Share on Twitter">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                </a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.corelix.com/blog/<?php echo $slug; ?>&title=<?php echo urlencode($currentBlog['title']); ?>" target="_blank" class="w-10 h-10 rounded-full bg-white/5 hover:bg-brand-blue flex items-center justify-center text-white transition-colors" title="Share on LinkedIn">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>
            </div>
        </div>
        
    </div>
</section>

<?php include 'cta.php'; ?>
<?php include 'footer.php'; ?>
