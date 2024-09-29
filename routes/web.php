<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TellerController;
use App\Http\Controllers\TellerForumController;
use App\Http\Controllers\CustomerServiceController;

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

Route::get('/customer_service', [CustomerServiceController::class, 'index'])->name('customer_service');

Route::get('/teller_forum', [TellerForumController::class, 'index'])->name('teller_forum');

Route::get('/', function () {
    return view('beranda');  
});




// Route::get('/teller', function () {
//     return view('teller');  
// });
    
// ganti "beranda" nya kalau merubah rute
