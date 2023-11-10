<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SupirController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AgreementController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\UserController;

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


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::middleware('auth')->group(function () {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

        Route::middleware('login:1')->group(function (){

            Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

            Route::get('/user', [UserController::class, 'index'])->name('user');
            Route::put('/user/approve/{id}', [UserController::class, 'approve'])->name('user.approve');
            Route::put('/user/reject/{id}', [UserController::class, 'reject'])->name('user.reject');

            Route::get('/kendaraan', [KendaraanController::class, 'index'])->name('kendaraan.index');
            Route::get('/kendaraan/create', [KendaraanController::class, 'create'])->name('kendaraan.create');
            Route::post('/kendaraan', [KendaraanController::class, 'store'])->name('kendaraan.store');
            Route::get('/kendaraan/edit/{id}', [KendaraanController::class, 'edit'])->name('kendaraan.edit');
            Route::put('/kendaraan/edit/{id}', [KendaraanController::class, 'update'])->name('kendaraan.update');
            Route::get('/kendaraan/delete/{id}', [KendaraanController::class, 'destroy'])->name('kendaraan.destroy');

            Route::get('/supir', [SupirController::class, 'index'])->name('supir.index');
            Route::post('/supir', [SupirController::class, 'store'])->name('supir.store');
            Route::get('/supir/edit/{id}', [SupirController::class, 'edit'])->name('supir.edit');
            Route::put('/supir/edit/{id}', [SupirController::class, 'update'])->name('supir.update');
            Route::get('/supir/delete/{id}', [SupirController::class, 'destroy'])->name('supir.destroy');

            Route::get('/ekspor', [OrderController::class, 'ekspor'])->name('ekspor');
            // Route::get('/pivot', [OrderController::class, 'pivot'])->name('pivot');

            Route::get('/order', [OrderController::class, 'index'])->name('order.index');
            Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');
            Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');
            Route::post('/order', [OrderController::class, 'store'])->name('order.store');
            Route::get('/order/edit/{id}', [OrderController::class, 'edit'])->name('order.edit');
            Route::put('/order/edit/{id}', [OrderController::class, 'update'])->name('order.update');
            Route::get('/order/delete/{id}', [OrderController::class, 'destroy'])->name('order.destroy');

            Route::middleware('role:Kabag')->group(function () {
                Route::get('/persetujuan', [AgreementController::class, 'index'])->name('agreement.index');
                Route::put('/persetujuan/approve/{id}', [AgreementController::class, 'approved'])->name('order.approved');
                Route::put('/persetujuan/reject/{id}', [AgreementController::class, 'reject'])->name('order.reject');

    });
        });

});
