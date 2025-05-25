<?php
// config/environment.php
// Environment configuration for optimization

// Environment detection
$server_name = $_SERVER['SERVER_NAME'] ?? 'localhost';
$is_localhost = in_array($server_name, ['localhost', '127.0.0.1', '::1']);
$is_staging = strpos($server_name, 'staging') !== false;

// Set environment constants
if ($is_localhost) {
    define('ENVIRONMENT', 'development');
} elseif ($is_staging) {
    define('ENVIRONMENT', 'staging');
} else {
    define('ENVIRONMENT', 'production');
}

// Asset versioning for cache busting
define('ASSET_VERSION', '1.2.0'); // Update this when assets change

// Performance settings
define('ENABLE_COMPRESSION', ENVIRONMENT === 'production');
define('ENABLE_CACHING', ENVIRONMENT !== 'development');
define('MINIFY_HTML', ENVIRONMENT === 'production');

// Image optimization settings
define('WEBP_SUPPORT', true);
define('LAZY_LOADING', true);
define('RESPONSIVE_IMAGES', true);

// JavaScript optimization
define('DEFER_JS', true);
define('INLINE_CRITICAL_JS', ENVIRONMENT === 'production');

// Feature flags
define('NEEDS_INFIELD_JS', false); // Set to true only for pages that need it
define('ENABLE_SERVICE_WORKER', ENVIRONMENT === 'production');
define('ENABLE_PERFORMANCE_MONITORING', ENVIRONMENT === 'production');

// CDN settings (if using)
define('USE_CDN', ENVIRONMENT === 'production');
define('CDN_URL', 'https://cdn.example.com');

// Compression settings
if (ENABLE_COMPRESSION && function_exists('ob_gzhandler')) {
    ob_start('ob_gzhandler');
} else {
    ob_start();
}

// Set cache headers for static assets
if (ENABLE_CACHING) {
    $request_uri = $_SERVER['REQUEST_URI'] ?? '';
    
    // Cache static assets for 1 year
    if (preg_match('/\.(css|js|png|jpg|jpeg|gif|ico|svg|woff|woff2|ttf|eot)$/i', $request_uri)) {
        header('Cache-Control: public, max-age=31536000, immutable');
        header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 31536000) . ' GMT');
    }
    
    // Cache HTML for 1 hour in production
    if (ENVIRONMENT === 'production' && !preg_match('/\.(css|js|png|jpg|jpeg|gif|ico|svg)$/i', $request_uri)) {
        header('Cache-Control: public, max-age=3600');
        header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');
    }
}

// Security headers
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: DENY');
header('X-XSS-Protection: 1; mode=block');
header('Referrer-Policy: strict-origin-when-cross-origin');

if (ENVIRONMENT === 'production') {
    header('Strict-Transport-Security: max-age=31536000; includeSubDomains');
}
?>