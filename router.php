<?php
// router.php for PHP built-in server to simulate .htaccess rules
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$path = ltrim($path, '/');

// If the requested file actually exists, serve it directly
if ($path && file_exists(__DIR__ . '/' . $path) && !is_dir(__DIR__ . '/' . $path)) {
    return false;
}

// Custom route for /blog/slug
if (preg_match('#^blog/([a-zA-Z0-9-]+)/?$#', $path, $matches)) {
    $_GET['slug'] = $matches[1];
    include __DIR__ . '/blog-detail.php';
    exit;
}

// Custom route for extensionless .php files (e.g., /about -> about.php)
if ($path && file_exists(__DIR__ . '/' . $path . '.php')) {
    include __DIR__ . '/' . $path . '.php';
    exit;
}

// Default fallback (404 etc)
return false;
