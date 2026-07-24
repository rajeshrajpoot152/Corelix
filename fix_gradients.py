import os
import glob

dir_path = "d:/new-learning/Pizza/Websites/websitenew-v1"
php_files = glob.glob(os.path.join(dir_path, "*.php"))

replacements = {
    "from-brand-green to-brand-blue": "from-brand-blue to-brand-green",
    "from-brand-green to-red-500": "from-brand-blue to-brand-green",
}

for file in php_files:
    with open(file, 'r', encoding='utf-8') as f:
        content = f.read()
        
    original_content = content
    for old, new in replacements.items():
        content = content.replace(old, new)
        
    if content != original_content:
        with open(file, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f"Updated gradients in {os.path.basename(file)}")

print("Done.")
