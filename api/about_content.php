<?php
session_start();
define('SECURE_ACCESS', true);
$current_page = 'about';
$page_title = 'About Us | Practical Healthcare Consultancy';
include '../includes/header.php';
?>

<!-- Header Banner -->
<section class="bg-gradient-to-r from-navy-950 to-navy-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left space-y-3">
        <h1 class="text-4xl font-extrabold font-serif">About Adroit</h1>
        <p class="text-slate-300 max-w-2xl text-base sm:text-lg">Practical Healthcare Consultancy helping clinical professionals grow safely and effectively.</p>
    </div>
</section>

<!-- Main Details -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <!-- Left Column: Content -->
            <div class="space-y-6">
                <h2 class="text-3xl font-bold text-navy-900 font-serif">Practical Healthcare Consultancy</h2>
                <div class="text-slate-600 space-y-4 text-sm sm:text-base leading-relaxed">
                    <p>
                        Adroit Limited specialises in helping healthcare professionals establish and develop private clinical services. Our experience includes establishing and operating private clinical services.
                    </p>
                    <p>
                        We provide specialized care in setting up private circumcision clinics and we are successfully running a private clinic in Long Eaton, Derbyshire. This direct operational experience ensures our advice is realistic, tested, and ready to implement.
                    </p>
                </div>
                
                <div class="bg-teal-50 border-l-4 border-teal-600 p-6 rounded-r-xl">
                    <h3 class="text-lg font-bold text-navy-900 font-serif mb-2">Our Objective</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        To make establishing a professionally organised private healthcare service clearer and more manageable for healthcare professionals.
                    </p>
                </div>
            </div>

            <!-- Right Column: Image -->
            <div>
                <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=800&q=80" 
                     alt="Doctor consulting with patient" 
                     class="w-full h-[400px] object-cover rounded-2xl shadow-lg border border-slate-100">
            </div>

        </div>
    </div>
</section>

<!-- Our Approach -->
<section class="py-20 bg-slate-50 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
            <h2 class="text-3xl font-bold text-navy-900 font-serif">Our Approach</h2>
            <p class="text-slate-500 text-sm sm:text-base">We work systematically with you to prepare, structure, and operationalize your clinical activities.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Step 1 -->
            <div class="bg-white p-8 rounded-xl border border-slate-100 shadow-sm flex gap-4">
                <div class="text-teal-600 text-2xl font-extrabold font-serif">01</div>
                <div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">Understand</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Understand your proposed service, treatments, specialty, and clinical goals.</p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="bg-white p-8 rounded-xl border border-slate-100 shadow-sm flex gap-4">
                <div class="text-teal-600 text-2xl font-extrabold font-serif">02</div>
                <div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">Identify</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Identify what is required regarding premises, regulatory compliance, and governance frameworks.</p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="bg-white p-8 rounded-xl border border-slate-100 shadow-sm flex gap-4">
                <div class="text-teal-600 text-2xl font-extrabold font-serif">03</div>
                <div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">Develop</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Develop a structured, actionable plan mapped to your timeline and targets.</p>
                </div>
            </div>

            <!-- Step 4 -->
            <div class="bg-white p-8 rounded-xl border border-slate-100 shadow-sm flex gap-4">
                <div class="text-teal-600 text-2xl font-extrabold font-serif">04</div>
                <div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">Prepare</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Help prepare the physical service, internal operational pathways, and infrastructure.</p>
                </div>
            </div>

            <!-- Step 5 -->
            <div class="bg-white p-8 rounded-xl border border-slate-100 shadow-sm flex gap-4">
                <div class="text-teal-600 text-2xl font-extrabold font-serif">05</div>
                <div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">Regulatory Scrutiny</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Prepare policies and personnel for registration audits and regulatory inspection criteria.</p>
                </div>
            </div>

            <!-- Step 6 -->
            <div class="bg-white p-8 rounded-xl border border-slate-100 shadow-sm flex gap-4">
                <div class="text-teal-600 text-2xl font-extrabold font-serif">06</div>
                <div>
                    <h3 class="text-lg font-bold text-navy-900 mb-2">Ongoing Support</h3>
                    <p class="text-slate-500 text-sm leading-relaxed">Support the clinical service with operational feedback and quality systems as it grows.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<?php include '../includes/footer.php'; ?>

