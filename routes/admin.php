<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

//Route::get('dashboard', function () {
//    return 'admin dashboard';
//});

Route::controller(AdminController::class)->group(function () {
    Route::middleware(['auth', 'verified'])->group( function () {
        Route::get('admin/dashboard', 'dashboard')->name('admin.dashboard');
        Route::get('admin/logout','adminLogout')->name('admin.logout');
    });
});




require __DIR__.'/auth.php';
