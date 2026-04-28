<?php

// Tampilkan error biar kita tahu masalah aslinya kalau gagal
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Paksa Laravel abaikan config cache
putenv('APP_CONFIG_CACHE=/tmp/config.php');
putenv('APP_ROUTES_CACHE=/tmp/routes.php');

require __DIR__ . '/../public/index.php';