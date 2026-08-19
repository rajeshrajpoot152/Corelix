<?php 
$pageTitle = "Thank You | Corelix";
$metaDesc = "Thank you for reaching out to Corelix. We have received your inquiry and will get back to you shortly.";
$metaKeywords = "Thank you, Corelix";
include 'header.php'; 
?>

<section class="pt-32 pb-20 md:pt-40 md:pb-28 bg-slate-950 min-h-[70vh] flex items-center relative overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.02)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.02)_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-brand-blue/20 rounded-full mix-blend-screen filter blur-[120px] pointer-events-none"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <div class="max-w-2xl mx-auto bg-white/5 border border-white/10 p-10 md:p-14 rounded-3xl backdrop-blur-md">
            
            <div class="w-20 h-20 bg-green-500/20 text-green-400 rounded-full flex items-center justify-center mx-auto mb-8 shadow-[0_0_30px_rgba(34,197,94,0.3)]">
                <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            
            <h1 class="text-3xl md:text-5xl font-black font-heading text-white mb-4">Thank You!</h1>
            <p class="text-gray-300 text-lg md:text-xl mb-8 leading-relaxed">
                We have received your message and our team will get back to you within 24 business hours.
            </p>
            
            <a href="index.php" class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-brand-blue to-brand-green text-white font-bold rounded-xl hover:shadow-lg hover:shadow-brand-blue/20 transition-all duration-300 hover:-translate-y-1">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Back to Home
            </a>
            
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
