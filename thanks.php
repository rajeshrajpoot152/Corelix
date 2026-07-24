<?php 
$pageTitle = "Thank You - Corelix";
include 'header.php'; 
?>
<!-- Header Spacer -->
<div class="h-24 sm:h-32 bg-[#0B0F19]"></div>

<main class="bg-gray-50 min-h-screen py-16 flex items-center justify-center">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-3xl text-center">
        <div class="w-24 h-24 bg-brand-green/10 rounded-full flex items-center justify-center mx-auto mb-8">
            <svg class="w-12 h-12 text-brand-green" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
        </div>
        <h1 class="text-4xl sm:text-5xl font-black font-heading text-gray-900 mb-6">Thank You!</h1>
        <p class="text-lg text-gray-600 mb-10 max-w-xl mx-auto leading-relaxed">
            Your message has been successfully sent. Our team will review your inquiry and get back to you as soon as possible.
        </p>
        <a href="/" class="inline-flex items-center justify-center px-8 py-4 bg-gray-900 text-white rounded-full font-bold hover:bg-black hover:shadow-lg transition-all duration-300" title="Corelix Home">
            Back to Home
        </a>
    </div>
</main>
<?php include 'footer.php'; ?>
