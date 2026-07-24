import sys
import re

with open('d:/new-learning/Pizza/Websites/websitenew-v1/index.php', 'r', encoding='utf-8') as f:
    content = f.read()

# AI-Powered Scalable Software Solutions (Our Process)
content = content.replace('<section class="py-24 bg-white relative overflow-hidden" id="our-process">', '<section class="py-24 bg-white relative overflow-hidden" style="background-color: #ffffff;" id="our-process">')

# Clients Say
content = content.replace('<section class="py-20 md:py-32 bg-[#F4F4F4] relative border-t border-gray-200 overflow-hidden">', '<section class="py-20 md:py-32 bg-[#F4F4F4] relative border-t border-gray-200 overflow-hidden" style="background-color: #F4F4F4;">')

# Trusted by the brands
content = content.replace('<section class="py-24 bg-white relative overflow-hidden">\n          <div class="mb-12 md:mb-16', '<section class="py-24 bg-white relative overflow-hidden" style="background-color: #ffffff;">\n          <div class="mb-12 md:mb-16')

content = content.replace('<section class="py-24 bg-white relative overflow-hidden">\n      <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">', '<section class="py-24 bg-white relative overflow-hidden" style="background-color: #ffffff;">\n      <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">')

# Why Choose Corelix
content = content.replace('<section class="py-24 bg-white relative overflow-hidden" id="why-choose-us">', '<section class="py-24 bg-white relative overflow-hidden" style="background-color: #ffffff;" id="why-choose-us">')

with open('d:/new-learning/Pizza/Websites/websitenew-v1/index.php', 'w', encoding='utf-8') as f:
    f.write(content)
print("Added inline styles.")
