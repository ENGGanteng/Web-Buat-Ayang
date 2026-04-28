<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Paksa folder storage ke /tmp agar tidak error saat boot
$storageFolders = [
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/cache',
    '/tmp/storage/logs'
];
foreach ($storageFolders as $folder) {
    if (!is_dir($folder)) mkdir($folder, 0777, true);
}

putenv('VIEW_COMPILED_PATH=/tmp/storage/framework/views');

// Panggil autoloader
require __DIR__ . '/../vendor/autoload.php';

// Jalankan Laravel
$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);