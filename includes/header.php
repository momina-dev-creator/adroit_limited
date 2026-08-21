<?php
// Prevent direct access
if (!defined('SECURE_ACCESS')) {
    define('SECURE_ACCESS', true);
}

// Helper to determine active link class for the new dark navy menu bar
function active_class($page_name, $current_page) {
    return ($page_name === $current_page) 
        ? 'bg-teal-600 text-white font-bold px-4 py-3 rounded-md shadow-sm' 
        : 'text-slate-100 hover:bg-navy-800 hover:text-white font-semibold px-4 py-3 rounded-md transition-all duration-200';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . " | Adroit Limited" : "Adroit Limited | Private Healthcare Consultancy & Clinical Services"; ?></title>
    <meta name="description" content="Adroit Limited provides practical consultancy and support to healthcare professionals establishing, developing or preparing private clinical services.">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: {
                            700: '#334155',
                            800: '#1E293B',
                            900: '#0F172A',
                            950: '#020617',
                        },
                        teal: {
                            500: '#14B8A6',
                            600: '#0D9488',
                            700: '#0F766E',
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Google Fonts (Inter & Playfair Display for headers) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-white min-h-screen flex flex-col">

    <!-- TIER 1: Top Address and Contact Banner -->
    <div class="bg-slate-100 text-slate-700 py-2.5 px-4 text-xs border-b border-slate-200">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-2 text-center lg:text-left">
                <i class="fa-solid fa-location-dot text-teal-600"></i>
                <span class="font-medium text-slate-800">Long Eaton Health Centre, Midlands Street, Long Eaton, Nottingham, NG10 1RY</span>
            </div>
            <div class="flex flex-wrap justify-center items-center gap-x-6 gap-y-1">
                <a href="tel:07722122806" class="hover:text-teal-600 font-semibold transition-colors flex items-center gap-1.5">
                    <i class="fa-solid fa-phone text-teal-600"></i> <span>07722 122806</span>
                </a>
                <span class="text-slate-300 hidden sm:inline">|</span>
                <a href="tel:01158554000" class="hover:text-teal-600 font-semibold transition-colors flex items-center gap-1.5">
                    <i class="fa-solid fa-phone-flip text-teal-600"></i> <span>0115 855 4000</span>
                </a>
                <span class="text-slate-300 hidden sm:inline">|</span>
                <a href="mailto:info@adroit-limited.uk" class="hover:text-teal-600 font-semibold transition-colors flex items-center gap-1.5">
                    <i class="fa-solid fa-envelope text-teal-600"></i> <span>info@adroit-limited.uk</span>
                </a>
            </div>
        </div>
    </div>

    <!-- TIER 2: Brand/Logo and Action Row -->
    <div class="bg-white py-5 px-4 max-w-7xl mx-auto w-full flex justify-between items-center">
        <!-- Logo -->
        <a href="index.php" class="flex items-center gap-3 group">
            <div class="group-hover:scale-105 transition-transform duration-300">
                <img src="assets/images/logo.png" alt="Adroit Limited Logo" class="h-14 w-auto object-contain">
            </div>
            <div>
                <span class="text-2xl font-bold tracking-tight text-navy-900 block font-serif">ADROIT LIMITED</span>
                <span class="text-xs uppercase tracking-wider text-teal-600 font-bold block">Private Healthcare Consultancy & Services</span>
            </div>
        </a>

        <!-- Premium CTA Button in Brand Header -->
        <div class="hidden lg:block">
            <a href="contact.php" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-teal-600 hover:bg-teal-700 text-white font-bold text-sm tracking-wide uppercase transition-all shadow-md hover:shadow-lg">
                <i class="fa-solid fa-calendar-check"></i> Book Consultation
            </a>
        </div>

        <!-- Mobile Menu Hamburger (Visible on Mobile/Tablet) -->
        <div class="flex items-center lg:hidden">
            <button type="button" id="mobile-menu-btn" class="text-navy-900 hover:text-teal-600 focus:outline-none p-2 rounded-xl hover:bg-slate-100 transition-colors" aria-expanded="false">
                <i class="fa-solid fa-bars text-2xl" id="menu-icon-bars"></i>
                <i class="fa-solid fa-xmark text-2xl hidden" id="menu-icon-close"></i>
            </button>
        </div>
    </div>

    <!-- TIER 3: Dedicated Full-Width Navigation Section -->
    <header class="bg-navy-900 text-white sticky top-0 z-40 shadow-lg hidden lg:block border-y border-navy-850">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center h-14">
                <!-- Navigation menu: full width distribution -->
                <nav class="w-full flex justify-between items-center py-1">
                    <a href="index.php" class="<?php echo active_class('home', $current_page ?? 'home'); ?>">Home</a>
                    <a href="about.php" class="<?php echo active_class('about', $current_page ?? ''); ?>">About Us</a>
                    <a href="clinic-setup.php" class="<?php echo active_class('clinic-setup', $current_page ?? ''); ?>">Clinic Setup</a>
                    <a href="clinical-rooms.php" class="<?php echo active_class('clinical-rooms', $current_page ?? ''); ?>">Clinical Rooms</a>
                    <a href="cqc-support.php" class="<?php echo active_class('cqc', $current_page ?? ''); ?>">CQC Support</a>
                    <a href="policies.php" class="<?php echo active_class('policies', $current_page ?? ''); ?>">Policies & Compliance</a>
                    <a href="circumcision.php" class="<?php echo active_class('circumcision', $current_page ?? ''); ?>">Circumcision Clinic</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Mobile Navigation Drawer -->
    <div class="hidden lg:hidden bg-navy-950 text-white border-t border-slate-800 shadow-xl" id="mobile-menu">
        <div class="px-4 py-6 space-y-2">
            <a href="index.php" class="block px-4 py-3 rounded-xl text-base font-bold <?php echo ($current_page ?? 'home') === 'home' ? 'bg-teal-600 text-white' : 'text-slate-300 hover:bg-navy-900 hover:text-white'; ?>">Home</a>
            <a href="about.php" class="block px-4 py-3 rounded-xl text-base font-bold <?php echo ($current_page ?? '') === 'about' ? 'bg-teal-600 text-white' : 'text-slate-300 hover:bg-navy-900 hover:text-white'; ?>">About Us</a>
            <a href="clinic-setup.php" class="block px-4 py-3 rounded-xl text-base font-bold <?php echo ($current_page ?? '') === 'clinic-setup' ? 'bg-teal-600 text-white' : 'text-slate-300 hover:bg-navy-900 hover:text-white'; ?>">Clinic Setup</a>
            <a href="clinical-rooms.php" class="block px-4 py-3 rounded-xl text-base font-bold <?php echo ($current_page ?? '') === 'clinical-rooms' ? 'bg-teal-600 text-white' : 'text-slate-300 hover:bg-navy-900 hover:text-white'; ?>">Clinical Rooms</a>
            <a href="cqc-support.php" class="block px-4 py-3 rounded-xl text-base font-bold <?php echo ($current_page ?? '') === 'cqc' ? 'bg-teal-600 text-white' : 'text-slate-300 hover:bg-navy-900 hover:text-white'; ?>">CQC Support</a>
            <a href="policies.php" class="block px-4 py-3 rounded-xl text-base font-bold <?php echo ($current_page ?? '') === 'policies' ? 'bg-teal-600 text-white' : 'text-slate-300 hover:bg-navy-900 hover:text-white'; ?>">Policies & Compliance</a>
            <a href="circumcision.php" class="block px-4 py-3 rounded-xl text-base font-bold <?php echo ($current_page ?? '') === 'circumcision' ? 'bg-teal-600 text-white' : 'text-slate-300 hover:bg-navy-900 hover:text-white'; ?>">Circumcision Clinic</a>
            <a href="contact.php" class="block px-4 py-3.5 mt-4 rounded-xl bg-teal-600 text-white text-center font-extrabold shadow-md hover:bg-teal-700 transition-colors uppercase tracking-wider text-sm">
                <i class="fa-solid fa-calendar-check mr-1.5"></i> Book Consultation
            </a>
        </div>
    </div>

    <!-- Main Content Area -->
    <main class="flex-grow">
