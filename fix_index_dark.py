import sys
import re

with open('d:/new-learning/Pizza/Websites/websitenew-v1/index.php', 'r', encoding='utf-8') as f:
    content = f.read()

# 1. AI-Powered Scalable Software Solutions (Our Process)
content = content.replace('<section class="py-24 bg-white relative overflow-hidden" id="our-process">', '<section class="py-24 bg-[#0B0F19] relative overflow-hidden" id="our-process">')
content = content.replace('text-[#1a1a2e] tracking-tight mb-5 md:mb-6 leading-[1.1]">\n                                AI-Powered Scalable', 'text-white tracking-tight mb-5 md:mb-6 leading-[1.1]">\n                                AI-Powered Scalable')
content = content.replace('text-brand-black mb-1 md:mb-3">Sustainable', 'text-white mb-1 md:mb-3">Sustainable')
content = content.replace('text-brand-black mb-1 md:mb-3">Agile', 'text-white mb-1 md:mb-3">Agile')
content = content.replace('text-brand-black mb-1 md:mb-3">Secure', 'text-white mb-1 md:mb-3">Secure')
content = content.replace('text-brand-black mb-1 md:mb-3">Scalable', 'text-white mb-1 md:mb-3">Scalable')
# In case the whitespace differs
content = re.sub(r'<h3 class="([^"]*)text-brand-black([^"]*)">([^<]+)</h3>', r'<h3 class="\1text-white\2">\3</h3>', content)

# 2. Clients Say
content = content.replace('<section class="py-20 md:py-32 bg-[#F4F4F4] relative border-t border-gray-200 overflow-hidden">', '<section class="py-20 md:py-32 bg-[#0B0F19] relative border-t border-white/10 overflow-hidden">')
content = re.sub(r'font-bold text-brand-black font-heading tracking-tight">\s+Clients Say', 'font-bold text-white font-heading tracking-tight">\n                Clients Say', content)
content = content.replace('bg-white rounded-[2rem]', 'bg-[#121826] rounded-[2rem]')
content = content.replace('border-gray-100/60', 'border-white/10')
content = content.replace('border-gray-50/50', 'border-white/5')
content = content.replace('border-gray-50/30', 'border-white/5')
content = content.replace('text-[#1a1a2e] mb-1">Michael', 'text-white mb-1">Michael')
content = content.replace('text-[#1a1a2e] mb-1">James', 'text-white mb-1">James')
content = content.replace('text-[#1a1a2e] mb-1">Sarah', 'text-white mb-1">Sarah')
content = content.replace('text-[#1a1a2e] mb-1">David', 'text-white mb-1">David')
# Fix client quote texts
content = re.sub(r'text-gray-900', r'text-white', content) # Generic text-gray-900 to text-white

# 3. Trusted by the brands
content = content.replace('<section class="py-24 bg-white relative overflow-hidden">', '<section class="py-24 bg-[#0B0F19] relative overflow-hidden border-t border-white/10">', 1) 
content = re.sub(r'<h2 class="([^"]*)text-\[\#1a1a2e\]([^"]*)">Trusted by the brands', r'<h2 class="\1text-white\2">Trusted by the brands', content)

# 4. Why Choose Corelix
content = content.replace('<section class="py-24 bg-white relative overflow-hidden" id="why-choose-us">', '<section class="py-24 bg-[#0B0F19] relative overflow-hidden border-t border-white/10" id="why-choose-us">')
content = re.sub(r'<h2 class="([^"]*)text-\[\#1a1a2e\]([^"]*)">Why Choose Corelix\?</h2>', r'<h2 class="\1text-white\2">Why Choose Corelix?</h2>', content)
content = content.replace('bg-gray-50 rounded-3xl p-8 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 group', 'bg-[#121826] rounded-3xl p-8 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 border border-white/10 group')
content = re.sub(r'font-heading text-brand-black mb-3">([^<]+)', r'font-heading text-white mb-3">\1', content)

with open('d:/new-learning/Pizza/Websites/websitenew-v1/index.php', 'w', encoding='utf-8') as f:
    f.write(content)
print("Updated index.php successfully.")
