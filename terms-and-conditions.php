<?php
session_start();
define('SECURE_ACCESS', true);
$current_page = '';
$page_title = 'Terms & Conditions';
include 'includes/header.php';
?>

<section class="py-16 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl p-8 sm:p-12 border border-slate-100 shadow-sm space-y-6">
            <h1 class="text-3xl font-bold text-navy-900 font-serif border-b pb-4">Terms & Conditions</h1>
            
            <p class="text-slate-600 text-sm leading-relaxed">
                Welcome to our website. If you continue to browse and use this website, you are agreeing to comply with and be bound by the following terms and conditions of use.
            </p>

            <h3 class="text-xl font-bold text-navy-900 font-serif">1. Website Use</h3>
            <p class="text-slate-600 text-sm leading-relaxed">
                The content of the pages of this website is for your general information and use only. It is subject to change without notice.
            </p>

            <h3 class="text-xl font-bold text-navy-900 font-serif">2. Disclaimer</h3>
            <p class="text-slate-600 text-sm leading-relaxed">
                Neither we nor any third parties provide any warranty or guarantee as to the accuracy, timeliness, performance, completeness or suitability of the information and materials found or offered on this website for any particular purpose. You acknowledge that such information and materials may contain inaccuracies or errors and we expressly exclude liability for any such inaccuracies or errors to the fullest extent permitted by law.
            </p>

            <h3 class="text-xl font-bold text-navy-900 font-serif">3. Governing Law</h3>
            <p class="text-slate-600 text-sm leading-relaxed">
                Your use of this website and any dispute arising out of such use of the website is subject to the laws of England, Northern Ireland, Scotland and Wales.
            </p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
