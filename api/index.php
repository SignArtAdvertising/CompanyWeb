<?php
// Karena Vercel bersifat Serverless dan Read-Only, kita harus mengarahkan folder cache dan view ke /tmp (satu-satunya folder yang bisa ditulis)
$_ENV['APP_CONFIG_CACHE'] = '/tmp/config.php';
$_ENV['APP_EVENTS_CACHE'] = '/tmp/events.php';
$_ENV['APP_PACKAGES_CACHE'] = '/tmp/packages.php';
$_ENV['APP_ROUTES_CACHE'] = '/tmp/routes.php';
$_ENV['APP_SERVICES_CACHE'] = '/tmp/services.php';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp';

// Memanggil file index utama Laravel
require __DIR__ . '/../public/index.php';
