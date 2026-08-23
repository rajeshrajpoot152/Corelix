<?php 
$pageTitle = "Page Not Found - 404";
include 'header.php'; 
?>
<!-- Header Spacer -->
<div class="h-24 sm:h-32 bg-[#0B0F19]"></div>

<main class="bg-gray-50 min-h-screen py-16 flex items-center justify-center">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-3xl text-center">
        <div class="mb-8">
            <h1 class="text-9xl font-black font-heading text-transparent bg-clip-text bg-gradient-to-r from-brand-blue to-brand-green drop-shadow-sm">404</h1>
        </div>
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6 font-heading">Oops! Dead End</h2>
        <p class="text-lg text-gray-600 mb-10 max-w-xl mx-auto">
            Even the best algorithms hit a snag sometimes. The page you're looking for doesn't exist, but we can still help you build something extraordinary.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="/" class="inline-flex items-center justify-center px-8 py-3.5 bg-brand-blue text-white rounded-full font-bold hover:bg-brand-blue/90 hover:shadow-lg hover:shadow-brand-blue/30 transition-all duration-300" title="GrowAutoAi Home">
                Back to Home
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="/contact" class="inline-flex items-center justify-center px-8 py-3.5 bg-white border border-gray-200 text-gray-700 rounded-full font-bold hover:bg-gray-50 hover:border-gray-300 transition-all duration-300" title="Contact Us">
                Contact Support
            </a>
        </div>
    </div>
</main>
<?php include 'footer.php'; ?>
