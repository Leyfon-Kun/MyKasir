<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailPembayaranController;
use App\Http\Controllers\JenisMenuController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\UserController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Route::get('login', [AuthController::class, 'loginindex'])->name('login');
Route::post('login', [AuthController::class, 'logincheck']);
Route::get('logout', [AuthController::class, 'logout']);

Route::middleware(['auth'])->group(function () {

    Route::group(['prefix' => 'admin', 'middleware' => 'Role:admin'], function () {
        Route::resource('/users', UserController::class);
        Route::resource('/menu', MenuController::class);
        Route::resource('/jenismenu', JenisMenuController::class);
    });

    //Point of sale
    Route::resource('/dashboard', DashboardController::class);
    Route::resource('/pembayaran', PembayaranController::class);
    Route::post('/cari', [PembayaranController::class, 'caribarang']);
    Route::post('/hapus/{id}', [PembayaranController::class, 'destroy']);
    Route::post('/updateJumlah/{id}', [PembayaranController::class, 'updateJumlah']);
    Route::resource('/detailpembayaran', DetailPembayaranController::class);
});
