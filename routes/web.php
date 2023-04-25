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
    'redirectByRole',
    'verified'
])->group(function () {

    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])
            ->name('admin.dashboard');

        Route::get('/admin/reports', [App\Http\Controllers\ReportController::class, 'adminReports'])
            ->name('admin.reports');

        Route::put('/admin/reports/{report}/approve', [App\Http\Controllers\ReportController::class, 'approveReport'])
            ->name('admin.approve_report');

        Route::put('/admin/reports/{report}/reject', [App\Http\Controllers\ReportController::class, 'rejectReport'])
            ->name('admin.reject_report');
    });


    Route::middleware(['role:police'])->group(function () {
        Route::get('/police/dashboard', [App\Http\Controllers\Police\DashboardController::class, 'index'])
            ->name('police.dashboard');

        Route::get('/police/reports', [App\Http\Controllers\Police\ReportController::class, 'index'])
            ->name('police.reports');
        Route::get('/police/reports/accept/{report}', [App\Http\Controllers\Police\ReportController::class, 'accept'])
            ->name('police.accept_reports');
    });


    Route::middleware(['role:user'])->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])
            ->name('dashboard');

        Route::get('/newreports', function () {
            $categories = App\Models\Category::all();
            return view('newreports', ['categories' => $categories]);
        })->name('newreports');

        Route::get('/user/reports', [App\Http\Controllers\ReportController::class, 'userReports'])
            ->name('user.reports');

        Route::resource('reports', App\Http\Controllers\ReportController::class);
    });
});
