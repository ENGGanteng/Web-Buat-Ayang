<?php
// Tampilkan error biar kita tahu masalahnya apa
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Paksa folder storage ke /tmp karena Vercel itu read-only
putenv('VIEW_COMPILED_PATH=/tmp');

require __DIR__ . '/../public/index.php';