<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\İletisimController;
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

Route::get('/', "AllController@index")->name("index");

Route::get('/iletisim', "AllController@iletisim")->name("iletisim");

Route::get('/hakkimda', "AllController@hakkimda")->name("hakkimda");


// Route::get('/index', function () {
//     return view('index');
// });

// Route::get('/iletisim', [İletisimController::class, "iletisim"]);
// Route::get('/iletisim', "İletisimController@iletisim");