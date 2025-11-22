<?php
require_once 'config/config.php';

// Simple routing
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// Map pages to view files
$pages = [
    'dashboard' => 'app/views/dashboard/index.php',
    'products' => 'app/views/products/index.php',
    'forms' => 'app/views/forms/index.php',
    'login' => 'app/views/auth/login.php',
    'register' => 'app/views/auth/register.php',
];

// Load the requested page or default to dashboard
if (array_key_exists($page, $pages) && file_exists($pages[$page])) {
    require_once $pages[$page];
} else {
    require_once 'app/views/dashboard/index.php';
}
?>
