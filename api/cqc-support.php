<?php
session_start();
define('SECURE_ACCESS', true);
$current_page = 'cqc';
$page_title = 'CQC Registration & Support | Inspection Readiness';
include '../includes/header.php';
?>

<!-- Header Banner -->
<section class="bg-gradient-to-r from-navy-950 to-navy-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left space-y-3">
        <h1 class="text-4xl font-extrabold font-serif">CQC Support & Inspection Readiness</h1>
        <p class="text-slate-300 max-w-2xl text-base sm:text-lg">Preparing clinical services and managers to meet regulatory requirements and pass audits.</p>
    </div>
</section>

<!-- Section 1: Overview -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left: List -->
            <div class="lg:col-span-7 space-y-6">
                <h2 class="text-3xl font-bold text-navy-900 font-serif">CQC Registration & Preparation Support</h2>
                <p class="text-slate-600 text-base leading-relaxed">
                    We provide practical, structured support to help healthcare professionals prepare their services for CQC registration and ongoing regulatory scrutiny.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                    <div class="p-4 bg-slate-50 rounded-xl border border-slate-100 flex items-start gap-2.5">
                        <i class="fa-solid fa-circle-check text-teal-600 mt-1"></i>
                        <span class="text-sm text-slate-700">CQC registration and regulated activities scoping</span>
                    </div>
                    <div class="p-4 bg-slate-50 rounded-xl border border-slate-100 flex items-start gap-2.5">
                        <i class="fa-solid fa-circle-check text-teal-500 mt-1"></i>
                        <span class="text-sm text-slate-700">Statement of Purpose and provider documentation review</span>
                    </div>
                    <div class="p-4 bg-slate-50 rounded-xl border border-slate-100 flex items-start gap-2.5">
                        <i class="fa-solid fa-circle-check text-teal-500 mt-1"></i>
                        <span class="text-sm text-slate-700">Registered Manager and provider preparation support</span>
                    </div>
                    <div class="p-4 bg-slate-50 rounded-xl border border-slate-100 flex items-start gap-2.5">
                        <i class="fa-solid fa-circle-check text-teal-500 mt-1"></i>
                        <span class="text-sm text-slate-700">Governance, safeguarding, consent and complaints processes</span>
                    </div>
                    <div class="p-4 bg-slate-50 rounded-xl border border-slate-100 flex items-start gap-2.5">
                        <i class="fa-solid fa-circle-check text-teal-500 mt-1"></i>
                        <span class="text-sm text-slate-700">Infection control, medicine safety and emergency protocols</span>
                    </div>
                    <div class="p-4 bg-slate-50 rounded-xl border border-slate-100 flex items-start gap-2.5">
                        <i class="fa-solid fa-circle-check text-teal-500 mt-1"></i>
                        <span class="text-sm text-slate-700">Staffing, recruitment, DBS checks and training matrix review</span>
                    </div>
                    <div class="p-4 bg-slate-50 rounded-xl border border-slate-100 flex items-start gap-2.5 sm:col-span-2">
                        <i class="fa-solid fa-circle-check text-teal-500 mt-1"></i>
                        <span class="text-sm text-slate-700">Clinical risk assessments, business continuity planning and quality assurance systems</span>
                    </div>
                </div>
            </div>

            <!-- Right: Image -->
            <div class="lg:col-span-5">
                <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?auto=format&fit=crop&w=800&q=80" 
                     alt="Modern clinic corridor and reception area" 
                     class="w-full h-96 object-cover rounded-2xl shadow-lg border border-slate-100">
            </div>

        </div>
    </div>
</section>

<!-- Section 2: Interview Prep & Gap Analysis -->
<section class="py-20 bg-slate-50 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            
            <!-- CQC Interview Prep -->
            <div class="bg-white rounded-2xl p-8 border border-slate-100 shadow-sm flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-lg bg-teal-50 text-teal-600 flex items-center justify-center text-xl">
                        <i class="fa-solid fa-clipboard-user"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-navy-900 font-serif">CQC Interview Preparation</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Structured preparation can include mock interviews, likely questioning areas, regulated activities mapping, safeguarding, governance and patient-safety scenarios, complaints/incidents management, Duty of Candour, staff competency, clinical risk management and evidence portfolios you should have available.
                    </p>
                </div>
                <div>
                    <a href="contact.php?service=CQC+Interview+Preparation" class="inline-block py-3 px-6 rounded-lg bg-teal-600 hover:bg-teal-700 text-white font-semibold text-sm transition-colors w-full text-center">
                        BOOK CQC PREPARATION
                    </a>
                </div>
            </div>

            <!-- Inspection Readiness & Gap Analysis -->
            <div class="bg-white rounded-2xl p-8 border border-slate-100 shadow-sm flex flex-col justify-between space-y-6">
                <div class="space-y-4">
                    <div class="w-12 h-12 rounded-lg bg-teal-50 text-teal-600 flex items-center justify-center text-xl">
                        <i class="fa-solid fa-magnifying-glass-chart"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-navy-900 font-serif">Inspection Readiness & Gap Analysis</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        We can review governance, policies, patient records, consent, complaints, incidents, safeguarding, recruitment/DBS/professional registration, staff training, emergency procedures, medicines, infection prevention, risk assessments, equipment records, clinical audit, patient feedback, quality improvement and business continuity.
                    </p>
                    <p class="text-slate-500 text-xs">
                        Following the review, we identify areas requiring attention and help develop a realistic improvement action plan.
                    </p>
                </div>
                <div>
                    <a href="contact.php?service=CQC+Inspection+Preparation" class="inline-block py-3 px-6 rounded-lg bg-navy-900 hover:bg-navy-800 text-white font-semibold text-sm transition-colors w-full text-center">
                        REQUEST A READINESS REVIEW
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

