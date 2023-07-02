<?php

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
});

Route::get('/', function () {
    return view('user/tugas');
});

// Tugas 9
use App\Http\Controllers\tugas9Controller;

Route::get('tugas9', 
    [tugas9Controller::class, 'index']);


Route::post('tugas9/selesai',
    [tugas9Controller::class, 'selesai'])->name('tugas9/selesai');


Route::get('/form', function () {
    return view('form');
});

Route::get('/HELLO/{nama}/{alamat}', function ($nama, $alamat) {
    return "<h2> Hello $nama dari $alamat </h2>";
});

Route::get('/produk/{id}', function ($id) {
    return view('produk/index', ['id'=>$id]);
});


use App\Http\Controllers\UserController;
Route::get('/user', 
    [UserController::class, 'index']);

    Route::get('/user/daftar',
    [UserController::class, 'daftar']
);



Route::post('/user/checkup',
[UserController::class, 'checkup'])->name('user/checkup');

use App\Http\Controllers\TokoController;

Route::prefix('toko')->group(function(){
    Route::get('/',
    [TokoController::class, 'index']);
    
Route::get('/detail',
    [TokoController::class, 'detail']);


// p10
Route::get('/about', 
    [TokoController::class, 'about']);

Route::get('/admin',
    [TokoController::class, 'admin'])->name('produk.admin');

Route::get('/customer',
    [TokoController::class,'customer'])->name('customer.customer');

Route::prefix('produk')->group(function () {
    Route::get('create', 
        [TokoController::class, 'create'])->name('produk.create');

    Route::post('/', 
        [TokoController::class, 'store'])->name('produk.store');

    Route::get('/{product}/edit',
    [TokoController::class, 'edit'])->name('produk.edit');

    Route::delete('/{product}',
    [TokoController::class, 'destroy'])->name('produk.destroy');

    Route::put('/{product}',
    [TokoController::class, 'update'])->name('produk.update');
    });

Route::prefix('customer')->group(function () {
    Route::get('create',            
        [TokoController::class, 'createC'  ])  ->name  ('customer.create');
    Route::post('/',                

        [TokoController::class, 'storeC'   ])  ->name  ('customer.store');

    Route::get('/{customer}/edit',  
        [TokoController::class, 'editC'    ])  ->name  ('customer.edit');

    Route::delete('/{customer}',    
        [TokoController::class, 'destroyC' ])  ->name  ('customer.destroy');
        
    Route::put('/{customer}',       
        [TokoController::class, 'updateC'  ])  ->name  ('customer.update');
    });

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
