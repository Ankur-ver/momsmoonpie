<?php

require __DIR__.'/auth.php';
require_once 'admin-routes.php';
require_once 'front-routes.php';

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

Route::get('/debug-log', function () {

    if (app()->environment('production')) {
        abort(403, 'Access denied.');
    }

    $logPath = storage_path('logs/laravel.log');

    if (!file_exists($logPath)) {
        return 'Log file not found.';
    }
    $lines = [];
    $f = fopen($logPath, 'r');
    while (!feof($f)) {
        $lines[] = fgets($f);
        if (count($lines) > 200) {
            array_shift($lines);
        }
    }
    fclose($f);

    return Response::make('<pre>' . e(implode('', $lines)) . '</pre>');
});
