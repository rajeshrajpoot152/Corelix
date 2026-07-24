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
        <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-6 font-heading">Oops! Page Not Found</h2>
        <p class="text-lg text-gray-600 mb-10 max-w-xl mx-auto">
            The page you are looking for might have been removed, had its name changed, or is temporarily unavailable. Let's get you back on track.
        </p>
        <a href="/" class="inline-flex items-center justify-center px-8 py-4 bg-brand-blue text-white rounded-full font-bold hover:bg-brand-blue/90 hover:shadow-lg hover:shadow-brand-blue/30 transition-all duration-300" title="Corelix Home">
            Back to Home
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>
    </div>
</main>
<?php include 'footer.php'; ?>
