<?php
// Tampilkan error biar kita tidak menebak-nebak
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Paksa Laravel menggunakan folder /tmp untuk cache karena folder lain di-lock
putenv('VIEW_COMPILED_PATH=/tmp');
putenv('SESSION_DRIVER=cookie');
putenv('LOG_CHANNEL=stderr');

require __DIR__ . '/../public/index.php';