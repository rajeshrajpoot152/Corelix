import os
import glob
import re

dir_path = "d:/new-learning/Pizza/Websites/websitenew-v1"
php_files = glob.glob(os.path.join(dir_path, "*.php"))

exclude_files = ["cta.php", "footer.php", "header.php", "generate.php", "router.php", "process_contact.php", "404.php", "thanks.php", "privacy-policy.php", "terms-of-service.php", "sitemap.php"]

cta_include = "<?php include 'cta.php'; ?>\n"
footer_include = "<?php include 'footer.php'; ?>"

cta_html_regex = re.compile(r'<!-- CTA Section -->\s*<section class="bg-white relative overflow-hidden border-t border-gray-100 rounded-b-\[40px\] md:rounded-b-\[60px\] shadow-2xl z-20" id="cta-section">.*?</section>', re.DOTALL)

for file in php_files:
    basename = os.path.basename(file)
    if basename in exclude_files:
        continue
        
    with open(file, 'r', encoding='utf-8') as f:
        content = f.read()
        
    # If the file is index.php, we need to remove the HTML block first
    if basename == "index.php":
        if "id=\"cta-section\"" in content:
            # Replace the huge block with nothing, then we will add the include before footer
            content = cta_html_regex.sub('', content)
            
    # Check if we already have the cta included
    if "include 'cta.php'" not in content and "include \"cta.php\"" not in content:
        # Replace footer include with cta include + footer include
        if footer_include in content:
            content = content.replace(footer_include, cta_include + footer_include)
            with open(file, 'w', encoding='utf-8') as f:
                f.write(content)
            print(f"Injected CTA into {basename}")
        else:
            # Maybe it uses different spacing
            if "include 'footer.php'" in content:
                content = content.replace("include 'footer.php'", "include 'cta.php'; ?>\n<?php include 'footer.php'")
                with open(file, 'w', encoding='utf-8') as f:
                    f.write(content)
                print(f"Injected CTA into {basename}")

print("Done.")
