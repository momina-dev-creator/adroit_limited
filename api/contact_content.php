<?php
$current_page = 'contact';
$page_title = 'Contact Us | Start Your Consultation';
include __DIR__ . '/../includes/header.php';
?>

<!-- Header Banner -->
<section class="bg-gradient-to-r from-navy-950 to-navy-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left space-y-3">
        <h1 class="text-4xl font-extrabold font-serif">Contact Us</h1>
        <p class="text-slate-300 max-w-2xl text-base sm:text-lg">Get in touch to discuss your private clinic setup, policies, CQC preparation, or room availability.</p>
    </div>
</section>

<!-- Content Grid -->
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Info Panel -->
            <div class="lg:col-span-5 space-y-8">
                <div>
                    <h2 class="text-3xl font-bold text-navy-900 font-serif mb-4">Let's Discuss Your Private Clinic</h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Whether you already operate an established healthcare business or simply have a new idea for a private service, speak to Adroit about how we may be able to help you.
                    </p>
                </div>

                <!-- Contact Points -->
                <div class="space-y-4">
                    <div class="flex items-start gap-4 p-5 bg-white rounded-xl border border-slate-200/60 shadow-sm">
                        <div class="text-teal-600 text-xl mt-1"><i class="fa-solid fa-location-dot"></i></div>
                        <div>
                            <strong class="text-navy-900 block font-serif text-base">Our Main Office</strong>
                            <span class="text-slate-500 text-sm leading-relaxed block mt-1">
                                Long Eaton Health Centre, Midlands Street, Long Eaton, Nottingham, NG10 1RY
                            </span>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-5 bg-white rounded-xl border border-slate-200/60 shadow-sm">
                        <div class="text-teal-600 text-xl mt-1"><i class="fa-solid fa-phone"></i></div>
                        <div>
                            <strong class="text-navy-900 block font-serif text-base">Call Us</strong>
                            <div class="mt-1 space-y-1">
                                <a href="tel:07722122806" class="text-slate-500 text-sm hover:text-teal-600 transition-colors block">
                                    Mobile: 07722 122806
                                </a>
                                <a href="tel:01158554000" class="text-slate-500 text-sm hover:text-teal-600 transition-colors block">
                                    Landline: 0115 855 4000
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 p-5 bg-white rounded-xl border border-slate-200/60 shadow-sm">
                        <div class="text-teal-600 text-xl mt-1"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <strong class="text-navy-900 block font-serif text-base">Email & Messaging</strong>
                            <div class="mt-1 space-y-1">
                                <a href="mailto:info@adroit-limited.uk" class="text-slate-500 text-sm hover:text-teal-600 transition-colors block">
                                    info@adroit-limited.uk
                                </a>
                                <a href="https://wa.me/447722122806" target="_blank" rel="noopener noreferrer" class="text-slate-500 text-sm hover:text-teal-600 transition-colors block flex items-center gap-1">
                                    <i class="fa-brands fa-whatsapp text-emerald-500"></i> WhatsApp: 07722 122806
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mini Map Representation/Visual -->
                <div class="rounded-xl overflow-hidden shadow-sm border border-slate-200/60">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2406.84024346857!2d-1.267676723298642!3d52.89737150821612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4879e88bf0a012d9%3A0xc3b83ef3082b2d07!2sLong%20Eaton%20Health%20Centre!5e0!3m2!1sen!2suk!4v1700000000000!5m2!1sen!2suk" 
                        width="100%" 
                        height="200" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- Right Contact Form -->
            <div class="lg:col-span-7">
                <?php include __DIR__ . '/../includes/contact-form.php'; ?>
            </div>

        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

