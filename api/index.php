<?php
session_start();
define('SECURE_ACCESS', true);
$current_page = 'home';
$page_title = 'Turn Your Clinical Expertise Into a Private Practice';
include '../includes/header.php';
?>

<!-- Hero Section -->
<section class="relative bg-gradient-to-r from-navy-950 to-navy-800 text-white overflow-hidden py-20 lg:py-32">
    <!-- Background overlay decoration -->
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#14b8a6_1px,transparent_1px)] [background-size:16px_16px]"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Hero Content -->
            <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                <span class="inline-flex items-center gap-1.5 py-1.5 px-3 rounded-full text-xs font-semibold bg-teal-500/10 text-teal-400 border border-teal-500/20 uppercase tracking-wider">
                    <i class="fa-solid fa-user-doctor"></i> Private Healthcare Consultancy
                </span>
                
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight font-serif">
                    Turn Your Clinical Expertise Into a <span class="text-teal-400">Private Practice</span>
                </h1>
                
                <p class="text-lg text-slate-300 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                    Adroit Limited provides practical consultancy and support to healthcare professionals establishing, developing or preparing private clinical services. We help with premises, governance, policies, patient pathways, documentation, staffing, CQC preparation and operational readiness.
                </p>
                
                <div class="flex flex-wrap justify-center lg:justify-start gap-4 pt-4">
                    <a href="clinic-setup.php" class="py-3.5 px-8 rounded-lg bg-teal-600 hover:bg-teal-700 text-white font-semibold shadow-lg transition-all transform hover:-translate-y-0.5">
                        START YOUR CLINIC
                    </a>
                    <a href="contact.php" class="py-3.5 px-8 rounded-lg bg-white/10 hover:bg-white/20 text-white font-semibold border border-white/20 transition-all">
                        BOOK A CONSULTATION
                    </a>
                </div>
            </div>
            
            <!-- Hero Image -->
            <div class="lg:col-span-5">
                <div class="relative max-w-md mx-auto lg:max-w-none">
                    <!-- Accent decoration -->
                    <div class="absolute -inset-1.5 bg-gradient-to-tr from-teal-500 to-teal-600 rounded-2xl blur-lg opacity-30"></div>
                    <!-- Frame -->
                    <div class="relative bg-navy-900 border border-slate-700/50 rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=800&q=80" 
                             alt="Healthcare professional using laptop in clinic" 
                             class="w-full h-80 object-cover opacity-90">
                        <div class="p-6 bg-navy-950 border-t border-slate-800">
                            <div class="flex items-center gap-3">
                                <div class="bg-teal-500/20 text-teal-400 p-2 rounded-lg">
                                    <i class="fa-solid fa-shield-halved text-xl"></i>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-white">Full-Scale Operational Readiness</p>
                                    <p class="text-xs text-slate-400">Guiding you step-by-step from idea to launch.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- Homepage CTA Banner -->
<section class="bg-teal-50 border-y border-teal-100 py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="text-center md:text-left space-y-1">
                <h3 class="text-lg font-bold text-navy-900 font-serif">Thinking About Starting a Private Clinic?</h3>
                <p class="text-sm text-slate-600">Speak to Adroit before you start to understand the practical steps and build a clear pathway.</p>
            </div>
            <a href="contact.php" class="whitespace-nowrap py-3 px-6 rounded-lg bg-teal-600 hover:bg-teal-700 text-white font-semibold text-sm transition-colors shadow-sm">
                BOOK AN INITIAL CONSULTATION
            </a>
        </div>
    </div>
</section>

<!-- How We Can Help (Icon Cards) -->
<section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center space-y-4 mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-navy-900 font-serif">How We Can Help</h2>
            <p class="text-slate-500 max-w-2xl mx-auto text-sm sm:text-base">We provide end-to-end practical guidance and frameworks to operationalize your private clinic.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Card 1: Private Clinic Setup -->
            <div class="bg-white rounded-xl p-8 border border-slate-100 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-lg bg-teal-50 text-teal-600 flex items-center justify-center text-xl font-bold">
                        <i class="fa-solid fa-hospital-user"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 font-serif">Private Clinic Setup</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Practical guidance from initial clinic concept and specialty scoping to an operational clinical service.
                    </p>
                </div>
                <a href="clinic-setup.php" class="mt-6 text-teal-600 hover:text-teal-700 font-semibold text-sm inline-flex items-center gap-1.5">
                    Read more <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- Card 2: CQC Preparation & Interviews -->
            <div class="bg-white rounded-xl p-8 border border-slate-100 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-lg bg-teal-50 text-teal-600 flex items-center justify-center text-xl font-bold">
                        <i class="fa-solid fa-clipboard-question"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 font-serif">CQC Preparation & Interviews</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Registration preparation, documentation review, Registered Manager and provider training, and mock interview testing.
                    </p>
                </div>
                <a href="cqc-support.php" class="mt-6 text-teal-600 hover:text-teal-700 font-semibold text-sm inline-flex items-center gap-1.5">
                    Read more <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- Card 3: Policies & Governance -->
            <div class="bg-white rounded-xl p-8 border border-slate-100 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-lg bg-teal-50 text-teal-600 flex items-center justify-center text-xl font-bold">
                        <i class="fa-solid fa-folder-open"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 font-serif">Policies & Governance</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Custom policies, operational procedures, risk assessments and governance documentation appropriate to your clinical service.
                    </p>
                </div>
                <a href="policies.php" class="mt-6 text-teal-600 hover:text-teal-700 font-semibold text-sm inline-flex items-center gap-1.5">
                    Read more <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- Card 4: Clinical Rooms -->
            <div class="bg-white rounded-xl p-8 border border-slate-100 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-lg bg-teal-50 text-teal-600 flex items-center justify-center text-xl font-bold">
                        <i class="fa-solid fa-house-medical"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 font-serif">Clinical Rooms</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Help identifying suitable consulting or treatment rooms through healthcare providers and partner client hospitals.
                    </p>
                </div>
                <a href="clinical-rooms.php" class="mt-6 text-teal-600 hover:text-teal-700 font-semibold text-sm inline-flex items-center gap-1.5">
                    Read more <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- Card 5: Inspection Readiness -->
            <div class="bg-white rounded-xl p-8 border border-slate-100 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-lg bg-teal-50 text-teal-600 flex items-center justify-center text-xl font-bold">
                        <i class="fa-solid fa-square-poll-vertical"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 font-serif">Inspection Readiness</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Structured gap analysis reviews to identify risks before regulatory inspections, with customized action plans.
                    </p>
                </div>
                <a href="cqc-support.php" class="mt-6 text-teal-600 hover:text-teal-700 font-semibold text-sm inline-flex items-center gap-1.5">
                    Read more <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <!-- Card 6: Circumcision Clinic -->
            <div class="bg-white rounded-xl p-8 border border-slate-100 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-lg bg-teal-50 text-teal-600 flex items-center justify-center text-xl font-bold">
                        <i class="fa-solid fa-baby-carriage"></i>
                    </div>
                    <h3 class="text-xl font-bold text-navy-900 font-serif">Circumcision Clinic</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Our dedicated circumcision clinic in Long Eaton provides expert newborn circumcision using the Plastibell technique.
                    </p>
                </div>
                <a href="circumcision.php" class="mt-6 text-teal-600 hover:text-teal-700 font-semibold text-sm inline-flex items-center gap-1.5">
                    Read more <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- Who We Work With -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <div class="space-y-6">
                <h2 class="text-3xl sm:text-4xl font-bold text-navy-900 font-serif">Who We Work With</h2>
                <p class="text-slate-600 leading-relaxed text-base">
                    Adroit Limited partners with a broad spectrum of healthcare practitioners, groups, and medical premises operators looking to design and maintain excellent private care pathways.
                </p>
                
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex items-center gap-2.5">
                        <i class="fa-solid fa-circle-check text-teal-500"></i>
                        <span class="text-sm font-semibold text-slate-800">Doctors & GPs</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <i class="fa-solid fa-circle-check text-teal-500"></i>
                        <span class="text-sm font-semibold text-slate-800">Consultants</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <i class="fa-solid fa-circle-check text-teal-500"></i>
                        <span class="text-sm font-semibold text-slate-800">Nurses & ACPs</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <i class="fa-solid fa-circle-check text-teal-500"></i>
                        <span class="text-sm font-semibold text-slate-800">Allied Health (AHPs)</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <i class="fa-solid fa-circle-check text-teal-500"></i>
                        <span class="text-sm font-semibold text-slate-800">Therapists</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <i class="fa-solid fa-circle-check text-teal-500"></i>
                        <span class="text-sm font-semibold text-slate-800">Healthcare Companies</span>
                    </div>
                </div>
            </div>
            
            <div>
                <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?auto=format&fit=crop&w=800&q=80" 
                     alt="Clinical governance and team meeting" 
                     class="w-full h-80 object-cover rounded-2xl shadow-lg">
            </div>
            
        </div>
    </div>
</section>

<!-- Ideas Section CTA -->
<section class="bg-navy-900 text-white py-16 relative">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:24px_24px]"></div>
    <div class="max-w-4xl mx-auto text-center px-4 relative z-10 space-y-6">
        <h2 class="text-3xl sm:text-4xl font-extrabold font-serif">From Idea to Clinic</h2>
        <p class="text-lg text-slate-300 max-w-2xl mx-auto">
            You provide the clinical expertise. We help you build the service around it.
        </p>
        <div class="pt-4">
            <a href="contact.php" class="inline-block py-3.5 px-8 rounded-lg bg-teal-600 hover:bg-teal-700 text-white font-semibold shadow-lg transition-all transform hover:-translate-y-0.5">
                DISCUSS YOUR CLINIC
            </a>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

