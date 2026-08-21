<?php
session_start();
define('SECURE_ACCESS', true);

// Parse the request URL path
$request_uri = $_SERVER['REQUEST_URI'] ?? '/';
$path = parse_url($request_uri, PHP_URL_PATH);

// Normalize path (remove leading/trailing slashes and get basename)
# If hosted in a subdirectory like /adroit_limited/, strip that from the path
$subDir = '/adroit_limited';
if (strpos($path, $subDir) === 0) {
    $path = substr($path, strlen($subDir));
}
$path = trim($path, '/');

// If root, load index page content
if ($path === '' || $path === 'index.php') {
    $current_page = 'home';
    $page_title = 'Turn Your Clinical Expertise Into a Private Practice';
    include 'index_content.php';
    exit;
}

// Map path to content file
$route_map = [
    'about.php' => ['about_content.php', 'about', 'About Us | Practical Healthcare Consultancy'],
    'clinic-setup.php' => ['clinic-setup_content.php', 'clinic-setup', 'Private Clinic Setup Support'],
    'clinical-rooms.php' => ['clinical-rooms_content.php', 'clinical-rooms', 'Clinical Rooms & Hospital Partners'],
    'cqc-support.php' => ['cqc-support_content.php', 'cqc', 'CQC Registration & Support | Inspection Readiness'],
    'policies.php' => ['policies_content.php', 'policies', 'Healthcare Policies & Compliance Support'],
    'circumcision.php' => ['circumcision_content.php', 'circumcision', 'Specialist Paediatric Circumcision Service'],
    'contact.php' => ['contact_content.php', 'contact', 'Contact Us | Start Your Consultation'],
    'privacy-policy.php' => ['privacy-policy_content.php', '', 'Privacy Policy'],
    'cookie-policy.php' => ['cookie-policy_content.php', '', 'Cookie Policy'],
    'terms-and-conditions.php' => ['terms-and-conditions_content.php', '', 'Terms & Conditions'],
    'complaints.php' => ['complaints_content.php', '', 'Complaints Procedure'],
    'accessibility.php' => ['accessibility_content.php', '', 'Accessibility Statement']
];

// Clean path in case of clean URLs (e.g. "about" instead of "about.php")
$clean_path = $path;
if (substr($clean_path, -4) !== '.php' && !isset($route_map[$clean_path])) {
    $clean_path .= '.php';
}

if (isset($route_map[$clean_path])) {
    $route = $route_map[$clean_path];
    $current_page = $route[1];
    $page_title = $route[2];
    include $route[0];
    exit;
}

// Handle Form Submission
if ($path === 'submit-enquiry.php') {
    include 'submit-enquiry_content.php';
    exit;
}

// Fallback 404
http_response_code(404);
echo "404 Not Found";
