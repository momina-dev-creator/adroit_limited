<?php
session_start();
define('SECURE_ACCESS', true);
$current_page = 'policies';
$page_title = 'Healthcare Policies & Compliance Support';
include 'includes/header.php';

// List of policies from the document
$policies = [
    'Safeguarding Children & Adults', 'Consent', 'Complaints', 'Duty of Candour', 
    'Incident Reporting', 'Significant Events', 'Infection Prevention & Control', 
    'Medicines Management', 'Medical Emergencies', 'Health & Safety', 'Fire Safety', 
    'Business Continuity', 'Information Governance', 'Confidentiality', 'Data Protection', 
    'Record Keeping', 'Chaperones', 'Recruitment', 'Staff Training', 'Freedom to Speak Up', 
    'Equality & Diversity', 'Lone Working', 'Clinical Audit', 'Risk Management', 
    'Patient Feedback', 'Equipment Management'
];
?>

<!-- Header Banner -->
<section class="bg-gradient-to-r from-navy-950 to-navy-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center sm:text-left space-y-3">
        <h1 class="text-4xl font-extrabold font-serif">Policies & Compliance</h1>
        <p class="text-slate-300 max-w-2xl text-base sm:text-lg">Developing and refining robust governance frameworks tailored to your actual clinical operations.</p>
    </div>
</section>

<!-- Section: Details -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Content -->
            <div class="lg:col-span-7 space-y-6">
                <h2 class="text-3xl font-bold text-navy-900 font-serif">Healthcare Policies Designed Around Your Service</h2>
                <p class="text-slate-600 text-base leading-relaxed">
                    Generic policies downloaded from online templates rarely reflect how your clinic actually operates. We work closely with providers to design, draft, and implement governance structures that protect patients and satisfy regulators.
                </p>
                
                <div class="bg-teal-50 border border-teal-100 p-6 rounded-xl space-y-3">
                    <h3 class="text-lg font-bold text-navy-900 font-serif">Policy Review Service</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Already have policies? We can review your existing policy set and identify potential gaps or areas requiring updating to meet current UK guidelines.
                    </p>
                    <div class="pt-2">
                        <a href="contact.php?service=Policies+%26+Compliance" class="inline-block py-2.5 px-6 rounded-lg bg-teal-600 hover:bg-teal-700 text-white font-semibold text-xs tracking-wider uppercase transition-colors">
                            DISCUSS YOUR POLICIES
                        </a>
                    </div>
                </div>
            </div>

            <!-- Image -->
            <div class="lg:col-span-5">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80" 
                     alt="Close up of medical documentation and tablet on desk" 
                     class="w-full h-80 object-cover rounded-2xl shadow-lg border border-slate-100">
            </div>

        </div>
    </div>
</section>

<!-- Policies Grid -->
<section class="py-20 bg-slate-50 border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="text-center max-w-3xl mx-auto space-y-4 mb-16">
            <h2 class="text-3xl font-bold text-navy-900 font-serif">Policies We Help Develop</h2>
            <p class="text-slate-500 text-sm sm:text-base">A non-exhaustive list of the key operational frameworks we write and review for private clinics.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <?php foreach ($policies as $policy): ?>
                <div class="bg-white p-4 rounded-lg border border-slate-100 shadow-sm flex items-center gap-3">
                    <div class="text-teal-600 text-lg flex-shrink-0"><i class="fa-solid fa-file-shield"></i></div>
                    <span class="text-sm font-semibold text-slate-700"><?php echo htmlspecialchars($policy); ?></span>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
