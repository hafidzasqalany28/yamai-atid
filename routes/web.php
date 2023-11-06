<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FaunaController;
use App\Http\Controllers\FloraController;
use App\Http\Controllers\EntityController;
use App\Http\Controllers\QRCodeController;
use App\Http\Controllers\QRScanController;
use App\Http\Controllers\AdminQRController;
use App\Http\Controllers\BarbodeController;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\AdminFaunaController;
use App\Http\Controllers\QRCodeScannerController;
use App\Http\Controllers\AdminDashboardController;

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



Auth::routes();
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/our-fauna', [FaunaController::class, 'index'])->name('our.fauna');
Route::get('/fauna/{id}', [FaunaController::class, 'show'])->name('fauna.show');
Route::get('/our-flora', [FloraController::class, 'index'])->name('our.flora');
Route::get('/flora/{id}', [FloraController::class, 'show'])->name('flora.show');
Route::get('/scan-qr', [QRCodeScannerController::class, 'index'])->name('scan.qr');



// Grup rute admin yang hanya dapat diakses oleh pengguna dengan peran "admin"
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('admin/entities', EntityController::class);
    Route::post('admin/entities/generate-all-qrcodes', [QRCodeController::class, 'generateAllQRCodes'])->name('entities.generate-all-qrcodes');
    Route::get('/entities/{id}/download-qrcode', [EntityController::class, 'downloadQRCode'])->name('entities.download-qrcode');
    Route::get('/admin/barcodes', [BarcodeController::class, 'index'])->name('admin.barcodes');
});
