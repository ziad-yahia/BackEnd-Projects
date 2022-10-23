<?php

use App\Http\Controllers\DashbordController;
use App\Http\Controllers\ProductdController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});




Route::prefix('dashbord')->middleware('verified')->name('dashbord')->group(function(){

Route::get('/',[DashbordController::class,'index']);

Route::controller(ProductdController::class)->prefix('/product')->name('.product.')->group(function(){

Route::get('/','index')->name('index');
Route::get('/create','create')->name('create');
Route::get('/edit/{Products}','edit')->name('edit');
Route::post('/store','store')->name('store');
Route::put('/update/{Products}','update')->name('update');
Route::delete('/destroy/{Products}','destroy')->name('destroy');



});

});



Auth::routes(['verify'=> true , 'register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
