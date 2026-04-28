<?php
// 1. Tampilkan error supaya tidak layar putih doang
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Paksa Laravel pakai folder /tmp (satu-satunya tempat yang bisa nulis di Vercel)
$tmpPath = '/tmp/storage/framework/';
$folders = ['views', 'sessions', 'cache'];
foreach ($folders as $folder) {
    if (!is_dir($tmpPath . $folder)) {
        mkdir($tmpPath . $folder, 0777, true);
    }
}

putenv("VIEW_COMPILED_PATH=/tmp/storage/framework/views");

// 3. Panggil Laravel
require __DIR__ . '/../public/index.php';