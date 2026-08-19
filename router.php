<?php
// router.php for PHP built-in server to simulate .htaccess rules
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$path = ltrim($path, '/');

// Remove trailing slash
$path = rtrim($path, '/');

// If the requested file actually exists, serve it directly
if ($path && file_exists(__DIR__ . '/' . $path) && !is_dir(__DIR__ . '/' . $path)) {
    return false;
}

// Serve index.php for root
if ($path === '') {
    include __DIR__ . '/index.php';
    exit;
}

// Custom route for /blog/slug
if (preg_match('#^blog/([a-zA-Z0-9-]+)/?$#', $path, $matches)) {
    $_GET['slug'] = $matches[1];
    include __DIR__ . '/blog-detail.php';
    exit;
}

// Custom route for extensionless .php files at ROOT level (e.g., /about -> about.php)
if (file_exists(__DIR__ . '/' . $path . '.php')) {
    include __DIR__ . '/' . $path . '.php';
    exit;
}

// Custom route for SUBFOLDER extensionless .php files
// e.g., /services/ui-ux-branding -> services/ui-ux-branding.php
$parts = explode('/', $path);
if (count($parts) >= 2) {
    $folder = $parts[0];
    $file   = implode('/', array_slice($parts, 1));
    $fullPath = __DIR__ . '/' . $folder . '/' . $file . '.php';
    if (file_exists($fullPath)) {
        include $fullPath;
        exit;
    }
}

// 404 fallback
if (file_exists(__DIR__ . '/404.php')) {
    http_response_code(404);
    include __DIR__ . '/404.php';
    exit;
}

return false;
