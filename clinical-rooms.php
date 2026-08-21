<?php
session_start();
define('SECURE_ACCESS', true);
$current_page = 'clinical-rooms';
$page_title = 'Clinical Rooms & Hospital Partners';
include 'includes/header.php';
?>

<!-- Header Banner -->
<section class="bg-gradient-to-r from-navy-950 to-navy-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left space-y-3">
        <h1 class="text-4xl font-extrabold font-serif">Clinical Rooms & Hospital Partners</h1>
        <p class="text-slate-300 max-w-2xl text-base sm:text-lg">Connecting independent clinicians with high-quality, compliant consulting and treatment rooms.</p>
    </div>
</section>

<!-- Content Grid: Practitioners -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left: Info -->
            <div class="lg:col-span-7 space-y-6">
                <h2 class="text-3xl font-bold text-navy-900 font-serif">Find Clinical Space for Your Private Practice</h2>
                <p class="text-slate-600 text-base leading-relaxed">
                    Adroit works with registered healthcare providers and client hospitals to help doctors, consultants, and therapists identify professional clinical rooms available for private healthcare sessions.
                </p>

                <div class="space-y-4">
                    <h3 class="text-lg font-bold text-navy-900 font-serif">Suitable For:</h3>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-slate-600">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-teal-600"></i> Private consultations</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-teal-600"></i> Specialist clinics</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-teal-600"></i> Follow-up appointments</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-teal-600"></i> Diagnostic services</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-teal-600"></i> Therapy sessions</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-teal-600"></i> Minor procedures (subject to compliance)</li>
                    </ul>
                </div>

                <div class="space-y-3 bg-slate-50 p-6 rounded-xl border border-slate-100">
                    <h3 class="text-lg font-bold text-navy-900 font-serif">Flexible Clinical Space Options:</h3>
                    <p class="text-slate-600 text-sm">
                        Depending on availability, arrangements can include sessional room bookings, regular weekly block clinics, part-time usage, or longer-term exclusive agreements.
                    </p>
                </div>

                <div class="pt-2">
                    <a href="contact.php?service=Clinical+Room+Rental" class="inline-block py-3.5 px-8 rounded-lg bg-teal-600 hover:bg-teal-700 text-white font-semibold text-sm transition-colors shadow-md">
                        I NEED A CLINICAL ROOM
                    </a>
                </div>
            </div>

            <!-- Right: Image -->
            <div class="lg:col-span-5">
                <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=800&q=80" 
                     alt="Clean clinical room setup" 
                     class="w-full h-96 object-cover rounded-2xl shadow-lg border border-slate-100">
            </div>

        </div>
    </div>
</section>

<!-- Content Grid: Hospital Providers -->
<section class="py-20 bg-slate-50 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left: Image -->
            <div class="lg:col-span-5 order-last lg:order-first">
                <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=800&q=80" 
                     alt="Modern hospital reception room" 
                     class="w-full h-96 object-cover rounded-2xl shadow-lg border border-slate-100">
            </div>

            <!-- Right: Info -->
            <div class="lg:col-span-7 space-y-6">
                <h2 class="text-3xl font-bold text-navy-900 font-serif">For Hospitals & Clinical Premises</h2>
                <p class="text-slate-600 text-base leading-relaxed">
                    Hospitals, medical centres, and healthcare organisations with underutilised or vacant clinical rooms can partner with Adroit to connect with reputable independent healthcare professionals seeking room rentals.
                </p>

                <div class="space-y-4">
                    <h3 class="text-lg font-bold text-navy-900 font-serif">Potential Arrangements:</h3>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-slate-600">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-teal-600"></i> Standard consulting rooms</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-teal-600"></i> Specialized treatment rooms</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-teal-600"></i> Sessional and block room rentals</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-teal-600"></i> Evening & weekend clinics</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-teal-600"></i> Specialized clinic partnerships</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-teal-600"></i> Direct referral networks</li>
                    </ul>
                </div>

                <div class="flex flex-wrap gap-4 pt-4">
                    <a href="contact.php?service=Hospital+/+Room+Provider" class="py-3 px-6 rounded-lg bg-navy-900 hover:bg-navy-800 text-white font-semibold text-sm transition-colors shadow-sm">
                        I HAVE CLINICAL ROOMS AVAILABLE
                    </a>
                    <a href="contact.php?service=Hospital+/+Room+Provider" class="py-3 px-6 rounded-lg bg-white hover:bg-slate-100 text-slate-800 border border-slate-200 font-semibold text-sm transition-colors">
                        LIST YOUR CLINICAL ROOMS WITH ADROIT
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
