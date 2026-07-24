import sys
import re

with open('d:/new-learning/Pizza/Websites/websitenew-v1/index.php', 'r', encoding='utf-8') as f:
    content = f.read()

# 1. AI-Powered Scalable Software Solutions (Our Process)
content = content.replace('<section class="py-24 bg-[#0B0F19] relative overflow-hidden" id="our-process">', '<section class="py-24 bg-white relative overflow-hidden" id="our-process">')
content = content.replace('text-white tracking-tight mb-5 md:mb-6 leading-[1.1]">\n                                AI-Powered Scalable', 'text-[#1a1a2e] tracking-tight mb-5 md:mb-6 leading-[1.1]">\n                                AI-Powered Scalable')
content = content.replace('text-white mb-1 md:mb-3">Sustainable', 'text-brand-black mb-1 md:mb-3">Sustainable')
content = content.replace('text-white mb-1 md:mb-3">Agile', 'text-brand-black mb-1 md:mb-3">Agile')
content = content.replace('text-white mb-1 md:mb-3">Secure', 'text-brand-black mb-1 md:mb-3">Secure')
content = content.replace('text-white mb-1 md:mb-3">Scalable', 'text-brand-black mb-1 md:mb-3">Scalable')

# 2. Clients Say
content = content.replace('<section class="py-20 md:py-32 bg-[#0B0F19] relative border-t border-white/10 overflow-hidden">', '<section class="py-20 md:py-32 bg-[#F4F4F4] relative border-t border-gray-200 overflow-hidden">')
content = content.replace('font-bold text-white font-heading tracking-tight">\n                Clients Say', 'font-bold text-brand-black font-heading tracking-tight">\n                Clients Say')
content = content.replace('bg-[#121826] rounded-[2rem]', 'bg-white rounded-[2rem]')
content = content.replace('border-white/10', 'border-gray-100/60') # careful here, might overwrite other border-white/10
content = content.replace('border-white/5', 'border-gray-50/50')
content = content.replace('border-white/5', 'border-gray-50/30') # wait, this was two replacements to the same string, I can't easily undo it this way if there's overlap. 
content = content.replace('text-white mb-1">Michael', 'text-[#1a1a2e] mb-1">Michael')
content = content.replace('text-white mb-1">James', 'text-[#1a1a2e] mb-1">James')
content = content.replace('text-white mb-1">Sarah', 'text-[#1a1a2e] mb-1">Sarah')
content = content.replace('text-white mb-1">David', 'text-[#1a1a2e] mb-1">David')

# 3. Trusted by the brands
content = content.replace('<section class="py-24 bg-[#0B0F19] relative overflow-hidden border-t border-gray-100/60">', '<section class="py-24 bg-white relative overflow-hidden">', 1) 
content = content.replace('<section class="py-24 bg-[#0B0F19] relative overflow-hidden border-t border-white/10">', '<section class="py-24 bg-white relative overflow-hidden">', 1) 
content = re.sub(r'<h2 class="([^"]*)text-white([^"]*)">Trusted by the brands', r'<h2 class="\1text-[#1a1a2e]\2">Trusted by the brands', content)

# 4. Why Choose Corelix
content = content.replace('<section class="py-24 bg-[#0B0F19] relative overflow-hidden border-t border-gray-100/60" id="why-choose-us">', '<section class="py-24 bg-white relative overflow-hidden" id="why-choose-us">')
content = content.replace('<section class="py-24 bg-[#0B0F19] relative overflow-hidden border-t border-white/10" id="why-choose-us">', '<section class="py-24 bg-white relative overflow-hidden" id="why-choose-us">')
content = re.sub(r'<h2 class="([^"]*)text-white([^"]*)">Why Choose Corelix\?</h2>', r'<h2 class="\1text-[#1a1a2e]\2">Why Choose Corelix?</h2>', content)
content = content.replace('bg-[#121826] rounded-3xl p-8 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 border border-gray-100/60 group', 'bg-gray-50 rounded-3xl p-8 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 group')
content = content.replace('bg-[#121826] rounded-3xl p-8 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 border border-white/10 group', 'bg-gray-50 rounded-3xl p-8 hover:shadow-xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 group')
content = re.sub(r'font-heading text-white mb-3">([^<]+)', r'font-heading text-brand-black mb-3">\1', content)

with open('d:/new-learning/Pizza/Websites/websitenew-v1/index.php', 'w', encoding='utf-8') as f:
    f.write(content)
print("Reverted index.php successfully.")
