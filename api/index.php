<?php

// Menampilkan error jika ada masalah (biar kita tahu salahnya di mana)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Jembatan utama ke Laravel
require __DIR__ . '/../public/index.php';