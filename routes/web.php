<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

//user
Route::controller(UserController::class)->group(function(){
    Route::get('/', [UserController::class,'index'])->name('user');
    
    Route::get('/lihatpaket', function () {
        return view('user.pilihanpaket');
    })->name('paket');

    Route::post('/lihatpaket',[UserController::class,'store'])->name('paket.store');
    
});

Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('login.post');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
//admin
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('overviewadmin');
    Route::get('/pesan', [AdminController::class, 'pesan'])->name('pesanadmin');
    Route::get('/admin/pengguna', [AdminController::class, 'pengguna'])->name('penggunaadmin');
    Route::get('/pengaturan', [AdminController::class, 'pengaturan'])->name('pengaturanadmin');
    Route::get('/profil', [AdminController::class, 'profil'])->name('profiladmin');
    


// layanan
    Route::get('/layanan', [ServiceController::class, 'index'])->name('layananadmin');
    Route::post('/layanan', [ServiceController::class, 'store'])->name('layanan.store');
    Route::put('/layanan/{id}', [ServiceController::class, 'update'])->name('layanan.update');
    Route::get('/layanan/{id}/edit', [ServiceController::class, 'edit'])->name('layanan.edit');
    Route::delete('/layanan{id}', [ServiceController::class, 'destroy'])->name('layanan.destroy');

//portfolio
Route::get('/portofolio', [AdminController::class, 'portofolio'])->name('portofolioadmin');
Route::post('/portfolio',[PortfolioController::class, 'store'])->name('portfolio.store');
Route::delete('/portofolio{id}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');
});
