<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'auth', 'as' => 'auth.', 'middleware' => 'guest'], function() {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'check'])->name('login.check');
});

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => 'auth'], function() {
    Route::redirect('', '/dashboard/home')->name('dashboard.home.redirect');
    Route::get('home', [DashboardController::class, 'index'])->name('home');

    Route::group(['prefix' => 'jurusan', 'as' => 'jurusan.'], function() {
        Route::get('', [JurusanController::class, 'index'])->name('table');
        Route::post('create', [JurusanController::class, 'store'])->name('create');
        Route::post('update/{jurusan}', [JurusanController::class, 'update'])->name('edit');
        Route::delete('delete/{jurusan}', [JurusanController::class, 'destroy'])->name('delete');
    });

    Route::group(['prefix' => 'guru', 'as' => 'guru.'], function () {
        Route::get('', [GuruController::class, 'index'])->name('table');
        Route::post('create', [GuruController::class, 'store'])->name('create');
        Route::post('update/{guru}', [GuruController::class, 'update'])->name('edit');
        Route::delete('delete/{guru}', [GuruController::class, 'destroy'])->name('delete');
    });

    Route::group(['prefix' => 'kelas', 'as' => 'kelas.'], function() {
        Route::get('', [KelasController::class, 'index'])->name('table');
        Route::post('create', [KelasController::class, 'store'])->name('create');
        Route::post('update/{kelas}', [KelasController::class, 'update'])->name('edit');
        Route::delete('delete/{kelas}', [KelasController::class, 'destroy'])->name('delete');
    });

    Route::group(['prefix' => 'siswa', 'as' => 'siswa.'], function() {
        Route::get('', [SiswaController::class, 'index'])->name('table');
        Route::post('create', [SiswaController::class, 'store'])->name('create');
        Route::post('update/{siswa}', [SiswaController::class, 'update'])->name('edit');
        Route::delete('delete/{siswa}', [SiswaController::class, 'destroy'])->name('delete');
    });

    Route::group(['prefix' => 'industri', 'as' => 'industri.'], function() {
        Route::get('', [PerusahaanController::class, 'index'])->name('table');
        Route::post('create', [PerusahaanController::class, 'store'])->name('create');
        Route::post('update/{perusahaan}', [PerusahaanController::class, 'update'])->name('edit');
        Route::delete('delete/{perusahaan}', [PerusahaanController::class, 'destroy'])->name('delete');
    });
});