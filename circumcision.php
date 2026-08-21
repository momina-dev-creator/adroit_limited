<?php
session_start();
define('SECURE_ACCESS', true);
$current_page = 'circumcision';
$page_title = 'Specialist Paediatric Circumcision Service';
include 'includes/header.php';
?>

<!-- Header Banner -->
<section class="bg-gradient-to-r from-navy-950 to-navy-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left space-y-3">
        <h1 class="text-4xl font-extrabold font-serif">Circumcision Clinic</h1>
        <p class="text-slate-300 max-w-2xl text-base sm:text-lg">Safe, professional paediatric circumcision service for newborns and infants using the Plastibell technique.</p>
    </div>
</section>

<!-- Overview -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left: Info -->
            <div class="lg:col-span-7 space-y-6">
                <h2 class="text-3xl font-bold text-navy-900 font-serif">Specialist Paediatric Circumcision Service</h2>
                <p class="text-slate-600 text-base leading-relaxed">
                    Adroit Limited has direct operational experience establishing and operating dedicated circumcision services. Our private clinic located within Long Eaton Health Centre offers newborn and infant male circumcision using the recognized Plastibell technique.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-2">
                    <div class="space-y-2">
                        <h4 class="font-bold text-navy-900 font-serif flex items-center gap-2">
                            <i class="fa-solid fa-user-doctor text-teal-600"></i> Experienced Clinical Team
                        </h4>
                        <p class="text-slate-500 text-sm">Procedures are undertaken by appropriately qualified and experienced medical professionals.</p>
                    </div>
                    <div class="space-y-2">
                        <h4 class="font-bold text-navy-900 font-serif flex items-center gap-2">
                            <i class="fa-solid fa-heart-pulse text-teal-600"></i> Evidence-Based Practice
                        </h4>
                        <p class="text-slate-500 text-sm">Clinical processes are designed around recognized standards of practice and patient safety.</p>
                    </div>
                    <div class="space-y-2">
                        <h4 class="font-bold text-navy-900 font-serif flex items-center gap-2">
                            <i class="fa-solid fa-circle-info text-teal-600"></i> Clear Parent Information
                        </h4>
                        <p class="text-slate-500 text-sm">Full guidance about the procedure, expected recovery milestones, and aftercare protocols.</p>
                    </div>
                    <div class="space-y-2">
                        <h4 class="font-bold text-navy-900 font-serif flex items-center gap-2">
                            <i class="fa-solid fa-hand-holding-medical text-teal-600"></i> Comfort & Safety
                        </h4>
                        <p class="text-slate-500 text-sm">The comfort and safety of every baby remain central to the design of the clinic.</p>
                    </div>
                </div>
            </div>

            <!-- Right: Map / Card -->
            <div class="lg:col-span-5">
                <div class="bg-slate-50 border border-slate-100 rounded-2xl p-6 space-y-6">
                    <!-- Interactive Google Map in place of picture -->
                    <div class="rounded-xl overflow-hidden border border-slate-200/80 shadow-md">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2406.84024346857!2d-1.267676723298642!3d52.89737150821612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4879e88bf0a012d9%3A0xc3b83ef3082b2d07!2sLong%20Eaton%20Health%20Centre!5e0!3m2!1sen!2suk!4v1700000000000!5m2!1sen!2suk" 
                            width="100%" 
                            height="224" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                    
                    <div class="space-y-3">
                        <h4 class="font-bold text-navy-900 font-serif text-lg">Location & Appointments</h4>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Long Eaton Health Centre, Midlands Street, Long Eaton, Nottingham, NG10 1RY.<br>
                            Circumcision is provided by appointment.
                        </p>
                        <div class="pt-2 flex flex-col sm:flex-row gap-3">
                            <a href="#clinical-details-section" class="text-center py-2.5 px-4 rounded-lg bg-teal-600 hover:bg-teal-700 text-white font-semibold text-xs tracking-wider uppercase transition-all">
                                PROCEDURAL INFORMATION
                            </a>
                            <a href="contact.php?service=Circumcision+Clinic" class="text-center py-2.5 px-4 rounded-lg bg-navy-900 hover:bg-navy-800 text-white font-semibold text-xs tracking-wider uppercase transition-all">
                                BOOK APPOINTMENT
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Interactive Sub-sections Section -->
<section id="clinical-details-section" class="py-20 bg-slate-50 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
            <h2 class="text-3xl font-bold text-navy-900 font-serif">Circumcision Clinic Resources</h2>
            <p class="text-slate-500 text-sm sm:text-base">Comprehensive information for parents regarding preparation, the procedure, and aftercare.</p>
        </div>

        <!-- Tabs Container -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <!-- Left Tabs Menu -->
            <div class="lg:col-span-4 flex flex-col gap-2">
                <button onclick="switchTab('tab-about')" id="btn-tab-about" class="tab-btn active text-left px-5 py-4 rounded-xl font-semibold transition-all duration-250 border border-slate-200/60 flex items-center justify-between text-navy-900 bg-white shadow-sm">
                    <span>About Circumcision</span>
                    <i class="fa-solid fa-chevron-right text-xs opacity-60"></i>
                </button>
                <button onclick="switchTab('tab-plastibell')" id="btn-tab-plastibell" class="tab-btn text-left px-5 py-4 rounded-xl font-semibold transition-all duration-250 border border-transparent flex items-center justify-between text-slate-600 hover:bg-white hover:text-teal-600">
                    <span>Plastibell Procedure</span>
                    <i class="fa-solid fa-chevron-right text-xs opacity-0"></i>
                </button>
                <button onclick="switchTab('tab-before')" id="btn-tab-before" class="tab-btn text-left px-5 py-4 rounded-xl font-semibold transition-all duration-250 border border-transparent flex items-center justify-between text-slate-600 hover:bg-white hover:text-teal-600">
                    <span>Before the Procedure</span>
                    <i class="fa-solid fa-chevron-right text-xs opacity-0"></i>
                </button>
                <button onclick="switchTab('tab-day')" id="btn-tab-day" class="tab-btn text-left px-5 py-4 rounded-xl font-semibold transition-all duration-250 border border-transparent flex items-center justify-between text-slate-600 hover:bg-white hover:text-teal-600">
                    <span>On the Day</span>
                    <i class="fa-solid fa-chevron-right text-xs opacity-0"></i>
                </button>
                <button onclick="switchTab('tab-aftercare')" id="btn-tab-aftercare" class="tab-btn text-left px-5 py-4 rounded-xl font-semibold transition-all duration-250 border border-transparent flex items-center justify-between text-slate-600 hover:bg-white hover:text-teal-600">
                    <span>Aftercare</span>
                    <i class="fa-solid fa-chevron-right text-xs opacity-0"></i>
                </button>
                <button onclick="switchTab('tab-medical-advice')" id="btn-tab-medical-advice" class="tab-btn text-left px-5 py-4 rounded-xl font-semibold transition-all duration-250 border border-transparent flex items-center justify-between text-slate-600 hover:bg-white hover:text-teal-600">
                    <span>When to Seek Medical Advice</span>
                    <i class="fa-solid fa-chevron-right text-xs opacity-0"></i>
                </button>
                <button onclick="switchTab('tab-faq')" id="btn-tab-faq" class="tab-btn text-left px-5 py-4 rounded-xl font-semibold transition-all duration-250 border border-transparent flex items-center justify-between text-slate-600 hover:bg-white hover:text-teal-600">
                    <span>Frequently Asked Questions</span>
                    <i class="fa-solid fa-chevron-right text-xs opacity-0"></i>
                </button>
            </div>

            <!-- Right Tab Content Content -->
            <div class="lg:col-span-8 bg-white p-8 rounded-2xl border border-slate-100 shadow-sm min-h-[400px]">
                
                <!-- Tab: About Circumcision -->
                <div id="tab-about" class="tab-content space-y-6">
                    <h3 class="text-2xl font-bold text-navy-900 font-serif border-b pb-3">About Paediatric Circumcision</h3>
                    <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
                        Paediatric circumcision is a minor surgical procedure to remove the foreskin covering the tip of the penis. For families seeking this procedure, we offer a dedicated service designed explicitly to prioritize infant safety, clinical precision, and patient-family comfort.
                    </p>
                    <div class="p-4 bg-teal-50 border-l-4 border-teal-600 rounded-r-lg text-sm text-slate-700">
                        Our services are tailored for newborn infants. By utilizing specialized local anesthetics and advanced techniques, we minimize discomfort and support rapid healing.
                    </div>
                </div>

                <!-- Tab: Plastibell -->
                <div id="tab-plastibell" class="tab-content hidden space-y-6">
                    <h3 class="text-2xl font-bold text-navy-900 font-serif border-b pb-3">The Plastibell Technique</h3>
                    <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
                        The Plastibell is a clear plastic ring that is placed over the head of the penis during the circumcision procedure. A sterile suture is tied securely around the ring to block blood supply to the foreskin, which then falls off naturally.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-nodes text-teal-600"></i> No stitches or sutures are left in the skin.</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-nodes text-teal-600"></i> Minimizes bleeding risks compared to conventional methods.</li>
                        <li class="flex items-center gap-2"><i class="fa-solid fa-circle-nodes text-teal-600"></i> The plastic ring falls away naturally in 5 to 10 days.</li>
                    </ul>
                </div>

                <!-- Tab: Before -->
                <div id="tab-before" class="tab-content hidden space-y-6">
                    <h3 class="text-2xl font-bold text-navy-900 font-serif border-b pb-3">Before the Procedure</h3>
                    <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
                        Preparing your baby appropriately ensures a smooth experience. Please adhere to the following checklist before attending the clinic:
                    </p>
                    <ul class="space-y-3 text-sm text-slate-600">
                        <li class="flex gap-2"><i class="fa-solid fa-circle-info text-teal-600 mt-1"></i> <span>Feed your baby about 1 hour prior to the appointment. Avoid feeding immediately before the slot.</span></li>
                        <li class="flex gap-2"><i class="fa-solid fa-circle-info text-teal-600 mt-1"></i> <span>Ensure your child is clean and dressed in comfortable, loose clothing.</span></li>
                        <li class="flex gap-2"><i class="fa-solid fa-circle-info text-teal-600 mt-1"></i> <span>Bring a red book (health record), spare nappies, baby wipes, and a ready feed/bottle.</span></li>
                    </ul>
                </div>

                <!-- Tab: Day -->
                <div id="tab-day" class="tab-content hidden space-y-6">
                    <h3 class="text-2xl font-bold text-navy-900 font-serif border-b pb-3">On the Day of the Procedure</h3>
                    <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
                        What to expect during your appointment at Long Eaton Health Centre:
                    </p>
                    <ol class="space-y-3 text-sm text-slate-600 list-decimal pl-5">
                        <li><strong>Clinical Assessment:</strong> The doctor will examine your baby to ensure he is fit for the procedure.</li>
                        <li><strong>Consent:</strong> The details will be reviewed, and you will sign the clinical consent forms.</li>
                        <li><strong>Anesthetic:</strong> Local anesthetic gel and/or injection will be applied to numb the area.</li>
                        <li><strong>Procedure:</strong> The Plastibell device is carefully fitted (takes approximately 10-15 minutes).</li>
                        <li><strong>Monitoring:</strong> We observe your baby in the clinic for a brief period post-procedure to ensure there is no bleeding before discharge.</li>
                    </ol>
                </div>

                <!-- Tab: Aftercare -->
                <div id="tab-aftercare" class="tab-content hidden space-y-6">
                    <h3 class="text-2xl font-bold text-navy-900 font-serif border-b pb-3">Aftercare Instructions</h3>
                    <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
                        Proper aftercare is essential for rapid, infection-free healing:
                    </p>
                    <ul class="space-y-3 text-sm text-slate-600">
                        <li class="flex gap-2"><i class="fa-solid fa-circle-info text-teal-600 mt-1"></i> <span>Apply a generous layer of petroleum jelly (Vaseline) to the front of the nappy or over the ring with every change to prevent sticking.</span></li>
                        <li class="flex gap-2"><i class="fa-solid fa-circle-info text-teal-600 mt-1"></i> <span>Gently wash the area with warm water only. Avoid using soap, baby wipes, or bubble baths.</span></li>
                        <li class="flex gap-2"><i class="fa-solid fa-circle-info text-teal-600 mt-1"></i> <span>The Plastibell ring should drop off on its own in 5 to 10 days. Do not pull or twist the ring under any circumstances.</span></li>
                    </ul>
                </div>

                <!-- Tab: Medical Advice -->
                <div id="tab-medical-advice" class="tab-content hidden space-y-6">
                    <h3 class="text-2xl font-bold text-navy-900 font-serif border-b pb-3 text-red-700">When to Seek Medical Advice</h3>
                    <p class="text-slate-600 leading-relaxed text-sm sm:text-base">
                        Contact us immediately or seek local emergency care if you observe any of the following symptoms:
                    </p>
                    <ul class="space-y-3 text-sm text-slate-600">
                        <li class="flex gap-2"><i class="fa-solid fa-triangle-exclamation text-red-600 mt-1"></i> <span>Active bleeding that is soaking through the nappy.</span></li>
                        <li class="flex gap-2"><i class="fa-solid fa-triangle-exclamation text-red-600 mt-1"></i> <span>Your baby has not passed urine/wet a nappy within 12 hours of the procedure.</span></li>
                        <li class="flex gap-2"><i class="fa-solid fa-triangle-exclamation text-red-600 mt-1"></i> <span>Signs of local infection (fever, increasing redness, foul-smelling discharge, or severe swelling).</span></li>
                        <li class="flex gap-2"><i class="fa-solid fa-triangle-exclamation text-red-600 mt-1"></i> <span>The Plastibell ring has slipped down the shaft of the penis or has not fallen off after 12 days.</span></li>
                    </ul>
                </div>

                <!-- Tab: FAQ -->
                <div id="tab-faq" class="tab-content hidden space-y-6">
                    <h3 class="text-2xl font-bold text-navy-900 font-serif border-b pb-3">Frequently Asked Questions</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="font-bold text-slate-800 text-sm sm:text-base">What is the best age for Plastibell circumcision?</h4>
                            <p class="text-slate-500 text-sm mt-1">It is typically performed on babies under 6 months of age or weighing under 10 kg, as the skin is thin and healing is extremely rapid.</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800 text-sm sm:text-base">Will my baby feel pain?</h4>
                            <p class="text-slate-500 text-sm mt-1">We apply local anesthetic gel and injections to numb the nerve pathways. Your baby may experience minor discomfort as the anesthetic wears off, which can be managed with infant paracetamol if advised.</p>
                        </div>
                        <div>
                            <h4 class="font-bold text-slate-800 text-sm sm:text-base">Can we bath the baby?</h4>
                            <p class="text-slate-500 text-sm mt-1">We recommend quick, warm sponge baths rather than full soaking until the plastic ring falls off.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<!-- Tabs Toggle Script -->
<script>
    function switchTab(tabId) {
        // Hide all tab contents
        const contents = document.querySelectorAll('.tab-content');
        contents.forEach(content => content.classList.add('hidden'));

        // Show selected tab content
        document.getElementById(tabId).classList.remove('hidden');

        // Reset all buttons style
        const buttons = document.querySelectorAll('.tab-btn');
        buttons.forEach(btn => {
            btn.className = 'tab-btn text-left px-5 py-4 rounded-xl font-semibold transition-all duration-250 border border-transparent flex items-center justify-between text-slate-600 hover:bg-white hover:text-teal-600';
            btn.querySelector('i').className = 'fa-solid fa-chevron-right text-xs opacity-0';
        });

        // Set active button style
        const activeBtn = document.getElementById('btn-' + tabId);
        activeBtn.className = 'tab-btn active text-left px-5 py-4 rounded-xl font-semibold transition-all duration-250 border border-slate-200/60 flex items-center justify-between text-navy-900 bg-white shadow-sm';
        activeBtn.querySelector('i').className = 'fa-solid fa-chevron-right text-xs opacity-60';
    }
</script>

<?php include 'includes/footer.php'; ?>
