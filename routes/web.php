<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])
            ->name('admin.dashboard');
    });
    Route::middleware(['role:police'])->group(function () {
        Route::get('/police/dashboard', [App\Http\Controllers\Police\DashboardController::class, 'index'])
            ->name('police.dashboard');
    });
    Route::middleware(['role:user'])->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])
            ->name('dashboard');

        Route::get('/newreports', function () {
            $categories = App\Models\Category::all();
            return view('newreports', ['categories' => $categories]);
        })->name('newreports');

        Route::resource('reports', App\Http\Controllers\ReportController::class);
    });
});
