<?php
if (!defined('SECURE_ACCESS')) exit;
?>
    </main>

    <!-- Footer Section -->
    <footer class="bg-navy-950 text-slate-300 pt-16 pb-8 border-t-4 border-teal-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                
                <!-- Column 1: Company Profile -->
                <div>
                    <h3 class="text-white text-lg font-bold mb-4 font-serif">ADROIT LIMITED</h3>
                    <p class="text-slate-400 text-sm mb-4 leading-relaxed">
                        Helping Healthcare Professionals Build, Prepare and Grow Private Clinical Services with practical consultancy and governance support.
                    </p>
                    <div class="flex items-start gap-2 text-sm text-slate-400">
                        <i class="fa-solid fa-location-dot mt-1 text-teal-500"></i>
                        <span>Long Eaton Health Centre,<br>Midlands Street, Long Eaton,<br>Nottingham, NG10 1RY</span>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div>
                    <h3 class="text-white text-lg font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="about.php" class="hover:text-teal-400 transition-colors">About Us</a></li>
                        <li><a href="clinic-setup.php" class="hover:text-teal-400 transition-colors">Clinic Setup Support</a></li>
                        <li><a href="clinical-rooms.php" class="hover:text-teal-400 transition-colors">Clinical Room Rental</a></li>
                        <li><a href="cqc-support.php" class="hover:text-teal-400 transition-colors">CQC Preparation & Support</a></li>
                        <li><a href="policies.php" class="hover:text-teal-400 transition-colors">Policies & Compliance</a></li>
                        <li><a href="circumcision.php" class="hover:text-teal-400 transition-colors">Circumcision Clinic</a></li>
                        <li><a href="contact.php" class="hover:text-teal-400 transition-colors">Contact Us</a></li>
                    </ul>
                </div>

                <!-- Column 3: Contact Info -->
                <div>
                    <h3 class="text-white text-lg font-bold mb-4">Contact Info</h3>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-phone text-teal-500 w-5"></i>
                            <a href="tel:07722122806" class="hover:text-teal-400 transition-colors">07722 122806</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-phone-flip text-teal-500 w-5"></i>
                            <a href="tel:01158554000" class="hover:text-teal-400 transition-colors">0115 855 4000</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fa-solid fa-envelope text-teal-500 w-5"></i>
                            <a href="mailto:info@adroit-limited.uk" class="hover:text-teal-400 transition-colors">info@adroit-limited.uk</a>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fa-brands fa-whatsapp text-teal-500 w-5 text-base"></i>
                            <a href="https://wa.me/447722122806" target="_blank" rel="noopener noreferrer" class="hover:text-teal-400 transition-colors">WhatsApp: 07722 122806</a>
                        </li>
                    </ul>
                </div>

                <!-- Column 4: Legal & Policies -->
                <div>
                    <h3 class="text-white text-lg font-bold mb-4">Legal Information</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="privacy-policy.php" class="hover:text-teal-400 transition-colors">Privacy Policy</a></li>
                        <li><a href="cookie-policy.php" class="hover:text-teal-400 transition-colors">Cookie Policy</a></li>
                        <li><a href="terms-and-conditions.php" class="hover:text-teal-400 transition-colors">Terms & Conditions</a></li>
                        <li><a href="complaints.php" class="hover:text-teal-400 transition-colors">Complaints Policy</a></li>
                        <li><a href="accessibility.php" class="hover:text-teal-400 transition-colors">Accessibility Statement</a></li>
                    </ul>
                </div>

            </div>

            <!-- Regulatory Disclaimer -->
            <div class="border-t border-slate-800 pt-8 mt-8">
                <div class="bg-navy-900 border border-slate-800 rounded-lg p-6 mb-8 text-xs text-slate-400 leading-relaxed">
                    <p class="font-bold text-slate-300 uppercase tracking-wider mb-2 flex items-center gap-2">
                        <i class="fa-solid fa-circle-info text-teal-500 text-sm"></i> Important Regulatory Disclaimer
                    </p>
                    Adroit Limited provides healthcare consultancy, preparation and support services. Regulatory registration, approval, assessment and inspection decisions remain solely with the relevant regulatory authority. Adroit Limited does not guarantee CQC registration, approval or inspection outcomes. Where CQC registration is required, healthcare providers remain responsible for appropriate registration and ongoing compliance with applicable legislation and regulatory requirements.
                </div>

                <div class="flex flex-col md:flex-row justify-between items-center text-xs text-slate-500 gap-4">
                    <p>&copy; <?php echo date('Y'); ?> Adroit Limited. All rights reserved. Private Healthcare Consultancy.</p>
                    <p>Company Registered in England & Wales</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Floating WhatsApp and Enquire Now Buttons -->
    <div class="floating-widgets">
        <!-- WhatsApp Button -->
        <a href="https://wa.me/447722122806" target="_blank" rel="noopener noreferrer" class="floating-btn bg-emerald-500 text-white hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-emerald-400 focus:ring-offset-2" aria-label="Chat on WhatsApp" title="WhatsApp: 07722 122806">
            <i class="fa-brands fa-whatsapp text-3xl"></i>
        </a>
        <!-- Enquire Button -->
        <a href="contact.php" class="floating-btn bg-teal-600 text-white hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:ring-offset-2" aria-label="Enquire Now" title="Send Enquiry">
            <i class="fa-solid fa-paper-plane text-xl"></i>
        </a>
    </div>

    <!-- Mobile Menu Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');
            const bars = document.getElementById('menu-icon-bars');
            const close = document.getElementById('menu-icon-close');

            btn.addEventListener('click', function() {
                const isExpanded = btn.getAttribute('aria-expanded') === 'true';
                btn.setAttribute('aria-expanded', !isExpanded);
                menu.classList.toggle('hidden');
                bars.classList.toggle('hidden');
                close.classList.toggle('hidden');
            });
        });
    </script>
</body>
</html>
