<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
    return view('dashboard.index');
});

// Route::get('login', [AuthController::class, 'loginindex']);
// Route::post('login', [AuthControlller::class, 'logincheck']);
// Route::get('logout', [AuthController::class, 'logout']);

// Route::middleware(['auth'])->group(function () {
//     Route::group(['prefix' => 'admin', 'middleware' => 'Role:admin'], function () {
//         Route::resource('/dashboard', DashboardController::class);
//         Route::resource('/detailpembayaran', DashboardController::class);
//         Route::resource('/jenismenu', JenismenuController::class);
//         Route::resource('/menu', MenuController::class);
//         Route::resource('/pembayaran', PembayaranController::class);
//     });

//     Route::group(['prefix' => 'pegawai', 'middleware' => 'Role:pedawai'], function () {
//         Route::resource('/pembayaran', [PembayaranController::class]);
//         Route::resource('/menu', MenuController::class);
//     });
// });
