<?php
session_start();
define('SECURE_ACCESS', true);
$current_page = '';
$page_title = 'Privacy Policy';
include 'includes/header.php';
?>

<section class="py-16 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl p-8 sm:p-12 border border-slate-100 shadow-sm space-y-6">
            <h1 class="text-3xl font-bold text-navy-900 font-serif border-b pb-4">Privacy Policy</h1>
            
            <p class="text-slate-600 text-sm leading-relaxed">
                Adroit Limited ("we", "our", or "us") is committed to protecting and respecting your privacy. This policy sets out the basis on which any personal data we collect from you, or that you provide to us, will be processed by us.
            </p>

            <h3 class="text-xl font-bold text-navy-900 font-serif">1. Information We May Collect From You</h3>
            <p class="text-slate-600 text-sm leading-relaxed">
                We may collect and process information that you fill in on our forms on our website. This includes information provided at the time of registering an enquiry, requesting information, or booking consultations (e.g. Name, Profession, Email, and Telephone).
            </p>

            <h3 class="text-xl font-bold text-navy-900 font-serif">2. How We Use Your Information</h3>
            <ul class="list-disc pl-5 text-slate-600 text-sm space-y-2">
                <li>To provide you with information, products, or services that you request from us.</li>
                <li>To carry out our obligations arising from any contracts entered into between you and us.</li>
                <li>To notify you about changes to our consultancy services.</li>
            </ul>

            <h3 class="text-xl font-bold text-navy-900 font-serif">3. Contact</h3>
            <p class="text-slate-600 text-sm leading-relaxed">
                Questions, comments, and requests regarding this privacy policy are welcomed and should be addressed to <a href="mailto:info@adroit-limited.uk" class="text-teal-600 underline">info@adroit-limited.uk</a>.
            </p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
