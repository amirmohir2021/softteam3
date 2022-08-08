<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\OurportfolioController;
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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('page', [PagesController::class,'home']);
Route::prefix('admin')->name('admin.')->middleware(['web', 'auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('ourportfolio', \App\Http\Controllers\OurportfolioController::class);
    Route::resource('select', \App\Http\Controllers\SelectController::class);
    Route::resource('team', \App\Http\Controllers\TeamController::class);
    Route::resource('contact', \App\Http\Controllers\ContactController::class);
    Route::resource('servisec',\App\Http\Controllers\ServisecController::class);
});

Route::get('/index', [\App\Http\Controllers\ViewController::class, 'index'])->name('index');
Route::get('/about',[\App\Http\Controllers\AboutController::class,'about'])->name('about');
Route::get('/contac',[\App\Http\Controllers\ContacController::class,'contac'])->name('contac');
Route::get('/servic',[\App\Http\Controllers\ServicController::class,'servic'])->name('servic');
Route::get('/portfolio',[\App\Http\Controllers\PortfolioController::class,'portfolio'])->name('portfolio');
Route::get('/single',[\App\Http\Controllers\SingleController::class,'single'])->name('single');
