<?php

$core_services = [
    'custom-web-development.php' => 'Custom Web & Portal Development',
    'mobile-app-development.php' => 'Mobile App Development',
    'ecommerce-development.php' => 'eCommerce Website Development',
    'wordpress-maintenance.php' => 'WordPress Speed & Maintenance',
    'saas-api-development.php' => 'SaaS & API Development',
    'ui-ux-design-branding.php' => 'UI/UX Design & Branding',
    'corporate-identity-design.php' => 'Corporate Identity Design',
    'video-production-content.php' => 'Video Production & Content Creation',
    'advanced-seo-services.php' => 'Advanced SEO Services',
    'performance-marketing-ads.php' => 'Performance Marketing & Ads',
    'conversion-rate-optimization.php' => 'Conversion Rate Optimization',
    'social-media-management.php' => 'Social Media Management',
    'ai-consulting-integration.php' => 'AI Consulting & Integration',
    'whatsapp-automation-chatbots.php' => 'WhatsApp Automation & Chatbots',
    'workflow-automation-crm.php' => 'Workflow Automation & CRM Integration'
];

$solutions = [
    'healthcare-app-development.php' => 'Healthcare Software Solution',
    'education-app-development.php' => 'eLearning Software Solution',
    'fintech-software-development.php' => 'Fintech Software Solution',
    'fleet-management-software-development.php' => 'Fleet Management System',
    'telecom-software-development.php' => 'Telecom Software Solution',
    'hotel-booking-app-development.php' => 'Hotel Booking Software',
    'ecommerce-app-development.php' => 'eCommerce Software Solution',
    'taxi-booking-app-development.php' => 'Taxi Booking Software',
    'travel-app-development.php' => 'Travel Booking Software',
    'real-estate-app-development.php' => 'Real-estate Management Software',
    'retail-app-development.php' => 'Online Retail Store',
    'industrial-manufacturing-automation.php' => 'Manufacturing Automation System',
    'power-plant.php' => 'Power Plant Solutions',
    'grocery-delivery-app-development.php' => 'Grocery Delivery Software',
    'food-delivery-app-development.php' => 'Food Delivery Software',
    'laundry-app-development.php' => 'On-demand Laundry Services',
    'ev-charging-app-development.php' => 'EV Charging Software',
    'home-service-app-development.php' => 'On-demand Home Services',
    'medicine-delivery-app-development.php' => 'Medicine Delivery Software',
    'ewallet-app-development.php' => 'e-Wallet Software Solution',
    'fitness-app-development.php' => 'Fitness & Wellness Solution',
    'sports-app-development.php' => 'Sport & Fantasy Application',
    'dating-app-development.php' => 'Online Dating Solution',
    'doctor-appointment-app-development.php' => 'Doctor Appointment Software',
    'ott-app-development.php' => 'OTT Streaming Platform',
    'beauty-salon-app-development.php' => 'Beauty & Salon Booking System',
    'alcohol-delivery-app-development.php' => 'Alcohol Delivery System',
    'pizza-delivery-app-development.php' => 'Pizza Delivery System'
];

function getTemplate($title, $is_solution = false) {
    $header_path = $is_solution ? '../header.php' : 'header.php';
    $footer_path = $is_solution ? '../footer.php' : 'footer.php';
    
    return "<?php include '$header_path'; ?>

<!-- Hero Section -->
<section class=\"relative pt-32 pb-20 overflow-hidden bg-[#000000]\">
    <div class=\"absolute inset-0 bg-brand-blue/5\"></div>
    <div class=\"container mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center\" data-aos=\"fade-up\">
        <div class=\"inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 mb-8 backdrop-blur-md\">
            <span class=\"w-2 h-2 rounded-full bg-brand-blue animate-pulse\"></span>
            <span class=\"text-sm font-medium tracking-wide text-brand-gray uppercase\">Corelix Services</span>
        </div>
        <h1 class=\"text-4xl md:text-6xl font-black font-heading text-white mb-6\">$title</h1>
        <p class=\"text-xl text-brand-gray max-w-2xl mx-auto leading-relaxed\">Premium, scalable solutions engineered for your business needs and designed to drive growth.</p>
    </div>
</section>

<!-- Content Section -->
<section class=\"py-24 bg-white relative\">
    <div class=\"max-w-3xl mx-auto px-4 sm:px-6 lg:px-8\" data-aos=\"fade-up\">
        <div class=\"prose prose-lg max-w-none text-gray-600\">
            <h2 class=\"text-3xl font-heading font-bold text-gray-900 mb-6\">Transform Your Business with $title</h2>
            <p class=\"mb-6\">Our expert team delivers top-tier solutions designed to scale your operations, enhance your digital presence, and drive sustainable growth in today's competitive landscape.</p>
            <ul class=\"space-y-4 mb-8\">
                <li class=\"flex items-start\"><span class=\"w-2 h-2 mt-2 mr-3 rounded-full bg-brand-blue flex-shrink-0\"></span> Customized strategies tailored for your specific business goals.</li>
                <li class=\"flex items-start\"><span class=\"w-2 h-2 mt-2 mr-3 rounded-full bg-brand-blue flex-shrink-0\"></span> Built using industry-leading technologies and modern frameworks.</li>
                <li class=\"flex items-start\"><span class=\"w-2 h-2 mt-2 mr-3 rounded-full bg-brand-blue flex-shrink-0\"></span> Comprehensive support, maintenance, and scalable architecture.</li>
            </ul>
            <p>Ready to get started? <a href=\"/contact.php\" class=\"text-brand-blue font-semibold hover:underline\" title=\"Corelix Link\">Contact us today</a> for a free consultation and project estimate.</p>
        </div>
    </div>
</section>

<!-- CTA Section -->


<?php include '$footer_path'; ?>
";
}

// Generate Core Services
foreach ($core_services as $filename => $title) {
    file_put_contents(__DIR__ . '/' . $filename, getTemplate($title, false));
    echo "Created: $filename\n";
}

// Create Solution directory if it doesn't exist
$solution_dir = __DIR__ . '/solution';
if (!is_dir($solution_dir)) {
    mkdir($solution_dir, 0777, true);
}

// Generate Solutions
foreach ($solutions as $filename => $title) {
    file_put_contents($solution_dir . '/' . $filename, getTemplate($title, true));
    echo "Created: solution/$filename\n";
}

echo "All pages generated successfully!\n";
