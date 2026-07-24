import sys
import re

with open('d:/new-learning/Pizza/Websites/websitenew-v1/index.php', 'r', encoding='utf-8') as f:
    content = f.read()

# Fix Stats numbers (14, 6, 80, 10)
content = content.replace(
    '<h3 class="text-xl sm:text-3xl md:text-4xl lg:text-5xl font-black text-white font-heading leading-none mb-0.5 sm:mb-1">',
    '<h3 class="text-xl sm:text-3xl md:text-4xl lg:text-5xl font-black text-[#1a1a2e] font-heading leading-none mb-0.5 sm:mb-1">'
)

# Fix Service titles
content = content.replace('font-black font-heading text-white tracking-tight">Web & Mobile', 'font-black font-heading text-[#1a1a2e] tracking-tight">Web & Mobile')
content = content.replace('font-black font-heading text-white tracking-tight">UI/UX', 'font-black font-heading text-[#1a1a2e] tracking-tight">UI/UX')
content = content.replace('font-black font-heading text-white tracking-tight">Digital <span', 'font-black font-heading text-[#1a1a2e] tracking-tight">Digital <span')
content = content.replace('font-black font-heading text-white tracking-tight">AI & Business <span', 'font-black font-heading text-[#1a1a2e] tracking-tight">AI & Business <span')

# Fix Core Services / Key Technologies
content = content.replace('<h4 class="text-lg font-bold text-white font-heading">Core Services</h4>', '<h4 class="text-lg font-bold text-[#1a1a2e] font-heading">Core Services</h4>')
content = content.replace('<h4 class="text-lg font-bold text-white font-heading">Key Technologies</h4>', '<h4 class="text-lg font-bold text-[#1a1a2e] font-heading">Key Technologies</h4>')

with open('d:/new-learning/Pizza/Websites/websitenew-v1/index.php', 'w', encoding='utf-8') as f:
    f.write(content)
print("Fixed text colors.")
