<?php
/**
 * Craft web bootstrap file
 */

// Set path constants
define('CRAFT_BASE_PATH', dirname(__DIR__));
// define('CRAFT_BASE_PATH', '/var/www/habla.dk/blog');
define('CRAFT_VENDOR_PATH', CRAFT_BASE_PATH.'/vendor');

// echo CRAFT_BASE_PATH;
// echo CRAFT_VENDOR_PATH;

// Load Composer's autoloader
require_once CRAFT_VENDOR_PATH.'/autoload.php';

// Load dotenv?
if (file_exists(CRAFT_BASE_PATH.'/.env')) {
    (new Dotenv\Dotenv(CRAFT_BASE_PATH))->load();
}

// Load and run Craft
define('CRAFT_ENVIRONMENT', getenv('ENVIRONMENT') ?: 'production');

$app = require CRAFT_VENDOR_PATH.'/craftcms/cms/bootstrap/web.php';
$app->run();
