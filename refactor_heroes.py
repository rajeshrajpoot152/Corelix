import os
import re

directory = r"d:\new-learning\Pizza\Websites\websitenew-v1"
exclude_files = ['index.php', 'header.php', 'footer.php', 'contact.php', 'cta.php', 'router.php', 'process_contact.php', 'process_career.php', 'generate.php', 'sitemap.php', 'thanks.php', '404.php', 'privacy-policy.php', 'terms-of-service.php']

def get_breadcrumb(filename):
    name = filename.replace('.php', '')
    words = name.split('-')
    return ' '.join(word.capitalize() for word in words)

new_hero_template = """<!-- Premium Inner Page Hero Template -->
<section class="pt-28 pb-12 md:pt-32 md:pb-16 relative overflow-hidden bg-slate-950">
    <!-- Grid & Glow (Standard Inner Page Background) -->
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[600px] bg-brand-blue/20 rounded-full mix-blend-screen filter blur-[120px] pointer-events-none"></div>
    
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center" data-aos="zoom-out-up">
        
        <!-- SEO Page Title (Reusable for all inner pages) -->
        <h1 class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/5 border border-white/10 backdrop-blur-md mb-4 md:mb-6 text-white text-xs font-bold tracking-widest uppercase shadow-sm">
            {breadcrumb}
        </h1>
        
        <!-- Main Visual Heading -->
        <h2 class="text-3xl md:text-5xl lg:text-6xl font-black font-heading text-white mb-4 tracking-tight leading-tight md:leading-none">
            {heading}
        </h2>
        
        <!-- Page Subtitle -->
        <p class="text-sm md:text-base text-gray-400 max-w-2xl mx-auto font-medium">
            {paragraph}
        </p>
    </div>
</section>
"""

for filename in os.listdir(directory):
    if filename.endswith(".php") and filename not in exclude_files:
        filepath = os.path.join(directory, filename)
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
            
        header_pattern = r'<\?php include \'header\.php\'; \?>'
        header_match = re.search(header_pattern, content)
        if not header_match:
            print(f"Skipping {filename} - no header.php include")
            continue
            
        header_end = header_match.end()
        
        section_pattern = re.compile(r'<section[^>]*>(.*?)</section>', re.DOTALL | re.IGNORECASE)
        section_match = section_pattern.search(content, header_end)
        
        if not section_match:
            print(f"Skipping {filename} - no section found")
            continue
            
        hero_html = section_match.group(0)
        
        h1_pattern = re.compile(r'<h1[^>]*>(.*?)</h1>', re.DOTALL | re.IGNORECASE)
        p_pattern = re.compile(r'<p[^>]*>(.*?)</p>', re.DOTALL | re.IGNORECASE)
        
        h1_match = h1_pattern.search(hero_html)
        p_match = p_pattern.search(hero_html)
        
        if not h1_match or not p_match:
            print(f"Skipping {filename} - missing h1 or p in first section")
            continue
            
        heading = h1_match.group(1).strip()
        paragraph = p_match.group(1).strip()
        breadcrumb = get_breadcrumb(filename)
        
        new_hero = new_hero_template.format(breadcrumb=breadcrumb, heading=heading, paragraph=paragraph)
        
        new_content = content[:section_match.start()] + new_hero + content[section_match.end():]
        
        with open(filepath, 'w', encoding='utf-8') as f:
            f.write(new_content)
        
        print(f"Updated {filename}")
