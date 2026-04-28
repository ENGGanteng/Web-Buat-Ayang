<?php

// Tampilkan error jika ada masalah
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Paksa path storage ke folder /tmp (hanya folder ini yang bisa ditulis di Vercel)
putenv('VIEW_COMPILED_PATH=/tmp');

require __DIR__ . '/../public/index.php';