<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Police\PoliceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
})->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    // Routes accessible only by admins
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/reports/{report}/approve', [AdminController::class, 'approveReport'])->name('admin.approve');
    Route::post('/admin/reports/{report}/reject', [AdminController::class, 'rejectReport'])->name('admin.reject');
});

Route::middleware(['auth', 'role:police'])->group(function () {
    // Routes accessible only by police officers
    Route::get('/police/dashboard', [PoliceController::class, 'dashboard'])->name('police.dashboard');

    Route::post('/reports/{report}/update-status', [App\Http\Controllers\Police\ReportController::class, 'updateStatus']);
    Route::post('/police/reports/{report}/accept', [PoliceController::class, 'acceptReport'])->name('police.accept');
    Route::post('/police/reports/{report}/reject', [PoliceController::class, 'rejectReport'])->name('police.reject');
    Route::post('/police/reports/{report}/archive', [PoliceController::class, 'archiveReport'])->name('police.archive');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    // Routes accessible only by users
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    Route::get('/report', [App\Http\Controllers\ReportController::class, 'index'])->name('report.view');
    Route::get('/report/{report}', [\App\Http\Controllers\ReportController::class, 'show'])->name('report.show');
    Route::get('/report/create', [App\Http\Controllers\ReportController::class, 'create'])->name('create-report-form');
    Route::post('/report/create', [App\Http\Controllers\ReportController::class, 'createReport'])->name('create-report');
});


require __DIR__.'/auth.php';
