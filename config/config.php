<?php
const DB_HOST ='localhost';
const DB_NAME ='nkap_commerce';
const DB_USER ='root';
const DB_PASSWORD ='';

define ('SITE_ROOT', realpath(dirname(__FILE__).'/..'));

function normalizePath($path) {
    // Remplacer toutes les barres obliques inversées par des barres obliques standard
    return str_replace(['\\', '/'], '/', $path);
}