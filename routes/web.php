<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/migrate-now', function () {
    \Artisan::call('migrate', ['--force' => true]);
    return 'Migration complete!';
});
