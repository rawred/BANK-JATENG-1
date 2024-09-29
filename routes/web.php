<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TellerController;
use App\Http\Controllers\TellerForumController;
use App\Http\Controllers\CustomerServiceController;
use App\Http\Controllers\CustomerServiceForumController;
use App\Http\Controllers\SatpamController;
use App\Http\Controllers\SatpamForumController;


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
Route::get('/teller', [TellerController::class, 'index'])->name('teller');

Route::get('/teller_forum', [TellerForumController::class, 'index'])->name('teller_forum');

Route::get('/customer_service', [CustomerServiceController::class, 'index'])->name('customer_service');

Route::get('/customerservice_forum', [CustomerServiceForumController::class, 'index'])->name('customerservice_forum');

Route::get('/satpam', [SatpamController::class, 'index'])->name('satpam');

Route::get('/satpam_forum', [SatpamForumController::class, 'index'])->name('satpam_forum');

Route::get('/', function () {
    return view('beranda');  
});




// Route::get('/teller', function () {
//     return view('teller');  
// });
    
// ganti "beranda" nya kalau merubah rute
