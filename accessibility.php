<?php
session_start();
define('SECURE_ACCESS', true);
$current_page = '';
$page_title = 'Accessibility Statement';
include 'includes/header.php';
?>

<section class="py-16 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl p-8 sm:p-12 border border-slate-100 shadow-sm space-y-6">
            <h1 class="text-3xl font-bold text-navy-900 font-serif border-b pb-4">Accessibility Statement</h1>
            
            <p class="text-slate-600 text-sm leading-relaxed">
                Adroit Limited is committed to providing a website that is accessible to the widest possible audience, regardless of technology or ability. We are actively working to increase the accessibility and usability of our website.
            </p>

            <h3 class="text-xl font-bold text-navy-900 font-serif">Standards</h3>
            <p class="text-slate-600 text-sm leading-relaxed">
                We endeavour to conform to level Double-A of the World Wide Web Consortium (W3C) Web Content Accessibility Guidelines 2.1. These guidelines explain how to make web content more accessible for people with disabilities.
            </p>

            <h3 class="text-xl font-bold text-navy-900 font-serif">Feedback</h3>
            <p class="text-slate-600 text-sm leading-relaxed">
                Should you experience any difficulty in accessing the Adroit Limited website, please don't hesitate to contact us at <a href="mailto:info@adroit-limited.uk" class="text-teal-600 underline">info@adroit-limited.uk</a>.
            </p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
