<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'coffee_shop');
define('DB_USER', 'root');
define('DB_PASS', '');

// Application configuration
define('BASE_URL', 'http://localhost/workshop_github2/');
define('APP_NAME', 'Coffee Shop Admin');

// Paths
define('APP_ROOT', dirname(__DIR__));
define('URL_ROOT', BASE_URL);
define('URL_SUB_FOLDER', '');

// Display errors for development
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
