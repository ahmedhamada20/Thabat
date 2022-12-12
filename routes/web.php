<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Website\HomeController;
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


require __DIR__.'/auth.php';

############################  Start Routes WebSite ##############################
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('shop',[HomeController::class,'shop'])->name('shop');
Route::get('listProducts',[HomeController::class,'listproducts'])->name('listproducts');
Route::get('contact',[HomeController::class,'contact'])->name('contact');
Route::get('about',[HomeController::class,'about'])->name('about');
Route::get('productDetails',[HomeController::class,'details'])->name('productDetails');


############################## End Routes WebSite  ##############################


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


