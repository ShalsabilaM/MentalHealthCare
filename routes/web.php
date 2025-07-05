<?php

use Illuminate\Support\Facades\Route;

// Import semua controller yang akan digunakan
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController; // Asumsi ada controller untuk dashboard
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\SesiKonselingController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CatatanKonselingController;
use App\Models\registrasi;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini Anda dapat mendaftarkan rute web untuk aplikasi Anda. Rute-rute
| ini dimuat oleh RouteServiceProvider dan semuanya akan
| ditetapkan ke grup middleware "web".
|
*/

// Rute Halaman Utama / Landing Page
Route::get('/', function () {
    return view('welcome'); // Mengarahkan ke view 'welcome.blade.php'
});

// --- RUTE AUTENTIKASI ---
// Jika Anda menggunakan Laravel UI, Anda bisa menggunakan Auth::routes();
// Namun, ini adalah contoh jika didefinisikan secara manual.
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('register', [registrasiController::class, 'showRegistrationForm'])->name('register');
// Route::post('register', [RegisterController::class, 'register']);


// --- RUTE YANG MEMERLUKAN LOGIN (TERLINDUNGI) ---
// Semua rute di dalam grup ini hanya bisa diakses oleh user yang sudah login.
Route::middleware(['auth'])->group(function () {

    // Rute untuk Dashboard
    // Anda bisa membuat DashboardController dengan perintah: php artisan make:controller DashboardController
    Route::get('/dashboard', function() {
        return view('dashboard'); // Mengarahkan ke view 'dashboard.blade.php'
    })->name('dashboard');

    // Rute Resource untuk semua modul CRUD
    // Laravel akan secara otomatis membuat URL untuk setiap fungsi di controller.
    // Contoh untuk User: /users (index), /users/create (create), /users/{user} (show), dll.
    
    Route::resource('users', UserController::class);
    Route::resource('artikel', ArtikelController::class);
    Route::resource('sesi-konseling', SesiKonselingController::class);
    Route::resource('pembayaran', PembayaranController::class);
    Route::resource('feedback', FeedbackController::class);
    Route::resource('catatan-konseling', CatatanKonselingController::class);

});
