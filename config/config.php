<?php
// Vérifiez si la constante n'a pas déjà été définie
if (!defined('DB_HOST')) {
    define('DB_HOST', 'localhost');
}
if (!defined('DB_NAME')) {
    define('DB_NAME', 'nkap_commerce');
}
if (!defined('DB_USER')) {
    define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
    define('DB_PASSWORD', '');
}

if (!defined('SITE_ROOT')) {
    define('SITE_ROOT', realpath(dirname(__FILE__).'/..'));
}

// Vérifiez si la fonction n'a pas déjà été déclarée
if (!function_exists('normalizePath')) {
    function normalizePath($path) {
        // Remplacer toutes les barres obliques inversées par des barres obliques standard
        return str_replace(['\\', '/'], '/', $path);
    }
}
?>

