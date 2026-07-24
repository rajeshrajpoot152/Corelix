import os
import re

directory = r"d:\new-learning\Pizza\Websites\websitenew-v1"
exclude_files = ['index.php', 'header.php', 'footer.php', 'contact.php', 'cta.php', 'router.php', 'process_contact.php', 'process_career.php', 'generate.php', 'sitemap.php', 'thanks.php', '404.php', 'privacy-policy.php', 'terms-of-service.php', 'blog-detail.php']

for filename in os.listdir(directory):
    if filename.endswith(".php") and filename not in exclude_files:
        filepath = os.path.join(directory, filename)
        with open(filepath, 'r', encoding='utf-8') as f:
            content = f.read()
            
        # Find the h2 inside the Premium Inner Page Hero
        h2_pattern = re.compile(r'(<h2 class="text-3xl md:text-5xl lg:text-6xl font-black font-heading text-white mb-4 tracking-tight leading-tight md:leading-none">)(.*?)(</h2>)', re.DOTALL | re.IGNORECASE)
        
        match = h2_pattern.search(content)
        if not match:
            # Maybe the class is slightly different, let's just search for the h2 near the top.
            h2_pattern2 = re.compile(r'(<!-- Main Visual Heading -->\s*<h2[^>]*>)(.*?)(</h2>)', re.DOTALL | re.IGNORECASE)
            match = h2_pattern2.search(content)
            if not match:
                print(f"Skipping {filename} - no h2 found")
                continue
                
        h2_open = match.group(1)
        h2_inner = match.group(2).strip()
        h2_close = match.group(3)
        
        # Check if it already has a span
        span_pattern = re.compile(r'<span[^>]*>(.*?)</span>', re.DOTALL | re.IGNORECASE)
        if span_pattern.search(h2_inner):
            # Replace the span classes
            new_inner = re.sub(r'<span[^>]*>', r'<span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue to-brand-green">', h2_inner)
        else:
            # Wrap the last word
            words = h2_inner.split(' ')
            if len(words) > 1:
                last_word = words.pop()
                # Check if last word contains <br> or something weird
                if '<br' in last_word:
                    # Don't try to wrap if it's complex HTML
                    new_inner = h2_inner
                else:
                    new_inner = ' '.join(words) + ' <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue to-brand-green">' + last_word + '</span>'
            else:
                new_inner = '<span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-blue to-brand-green">' + h2_inner + '</span>'
                
        if new_inner != h2_inner:
            new_content = content[:match.start()] + h2_open + '\n            ' + new_inner + '\n        ' + h2_close + content[match.end():]
            with open(filepath, 'w', encoding='utf-8') as f:
                f.write(new_content)
            print(f"Updated {filename}")
        else:
            print(f"No changes needed for {filename}")
