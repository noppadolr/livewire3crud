<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

//Route::get('dashboard', function () {
//    return 'admin dashboard';
//});

Route::controller(AdminController::class)->group(function () {
    Route::get('dashboard', 'dashboard')->name('dashboard');
});


require __DIR__.'/auth.php';
