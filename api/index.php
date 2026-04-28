<?php
// 1. Tampilkan error supaya tidak cuma layar putih
ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Paksa folder-folder bermasalah ke folder sementara (/tmp)
putenv('VIEW_COMPILED_PATH=/tmp');
putenv('SESSION_DRIVER=cookie');
putenv('LOG_CHANNEL=stderr');
putenv('APP_CONFIG_CACHE=/tmp/config.php');
putenv('APP_ROUTES_CACHE=/tmp/routes.php');

require __DIR__ . '/../public/index.php';