<?php
if (!defined('SECURE_ACCESS')) exit;

// Generate form status messages if they exist in session
$status_type = $_SESSION['contact_status_type'] ?? '';
$status_msg = $_SESSION['contact_status_msg'] ?? '';

// Clear session variables after reading
unset($_SESSION['contact_status_type']);
unset($_SESSION['contact_status_msg']);
?>

<div class="bg-white shadow-xl rounded-2xl p-8 border border-slate-100">
    <h3 class="text-2xl font-bold text-navy-900 mb-2 font-serif">Enquiry Form</h3>
    <p class="text-slate-500 mb-6 text-sm">Fill in the details below, and our team will get back to you shortly.</p>

    <?php if ($status_msg): ?>
        <div class="mb-6 p-4 rounded-lg text-sm <?php echo $status_type === 'success' ? 'bg-emerald-50 text-emerald-800 border border-emerald-200' : 'bg-red-50 text-red-800 border border-red-200'; ?>">
            <div class="flex items-center gap-2">
                <i class="fa-solid <?php echo $status_type === 'success' ? 'fa-circle-check text-emerald-500' : 'fa-circle-exclamation text-red-500'; ?>"></i>
                <span><?php echo htmlspecialchars($status_msg); ?></span>
            </div>
        </div>
    <?php endif; ?>

    <form action="submit-enquiry.php" method="POST" class="space-y-5">
        <div>
            <label for="name" class="block text-sm font-semibold text-slate-700 mb-1">Name</label>
            <input type="text" id="name" name="name" required 
                   class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 transition-all text-slate-800 text-sm">
        </div>

        <div>
            <label for="profession" class="block text-sm font-semibold text-slate-700 mb-1">Profession</label>
            <input type="text" id="profession" name="profession" required placeholder="e.g. Doctor, GP, Nurse, Consultant"
                   class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 transition-all text-slate-800 text-sm">
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label for="email" class="block text-sm font-semibold text-slate-700 mb-1">Email Address</label>
                <input type="email" id="email" name="email" required 
                       class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 transition-all text-slate-800 text-sm">
            </div>
            <div>
                <label for="telephone" class="block text-sm font-semibold text-slate-700 mb-1">Telephone</label>
                <input type="tel" id="telephone" name="telephone" required 
                       class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 transition-all text-slate-800 text-sm">
            </div>
        </div>

        <div>
            <label for="service" class="block text-sm font-semibold text-slate-700 mb-1">Service Required</label>
            <select id="service" name="service" required
                    class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 bg-white transition-all text-slate-800 text-sm">
                <option value="" disabled selected>-- Select a Service --</option>
                <option value="Private Clinic Setup">Private Clinic Setup</option>
                <option value="CQC Registration Support">CQC Registration Support</option>
                <option value="CQC Interview Preparation">CQC Interview Preparation</option>
                <option value="CQC Inspection Preparation">CQC Inspection Preparation</option>
                <option value="Policies & Compliance">Policies & Compliance</option>
                <option value="Clinical Room Rental">Clinical Room Rental</option>
                <option value="Circumcision Clinic">Circumcision Clinic</option>
                <option value="Hospital / Room Provider">Hospital / Room Provider</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div>
            <label for="message" class="block text-sm font-semibold text-slate-700 mb-1">Tell us briefly about your proposed service</label>
            <textarea id="message" name="message" rows="4" required placeholder="Describe your service idea, clinical specialty, or current situation..."
                      class="w-full px-4 py-2.5 rounded-lg border border-slate-200 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500 transition-all text-slate-800 text-sm"></textarea>
        </div>

        <button type="submit" 
                class="w-full py-3 px-6 rounded-lg bg-teal-600 hover:bg-teal-700 text-white font-semibold text-sm transition-colors shadow-md hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2">
            SUBMIT ENQUIRY
        </button>
    </form>
</div>
