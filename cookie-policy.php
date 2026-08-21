<?php
session_start();
define('SECURE_ACCESS', true);
$current_page = '';
$page_title = 'Cookie Policy';
include 'includes/header.php';
?>

<section class="py-16 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl p-8 sm:p-12 border border-slate-100 shadow-sm space-y-6">
            <h1 class="text-3xl font-bold text-navy-900 font-serif border-b pb-4">Cookie Policy</h1>
            
            <p class="text-slate-600 text-sm leading-relaxed">
                Our website uses cookies to distinguish you from other users of our website. This helps us to provide you with a good experience when you browse our website and also allows us to improve our site.
            </p>

            <h3 class="text-xl font-bold text-navy-900 font-serif">What is a Cookie?</h3>
            <p class="text-slate-600 text-sm leading-relaxed">
                A cookie is a small file of letters and numbers that we store on your browser or the hard drive of your computer if you agree. Cookies contain information that is transferred to your computer's hard drive.
            </p>

            <h3 class="text-xl font-bold text-navy-900 font-serif">Managing Cookies</h3>
            <p class="text-slate-600 text-sm leading-relaxed">
                You can block cookies by activating the setting on your browser that allows you to refuse the setting of all or some cookies. However, if you use your browser settings to block all cookies (including essential cookies) you may not be able to access all or parts of our site.
            </p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
