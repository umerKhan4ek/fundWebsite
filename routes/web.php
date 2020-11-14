<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class,'homepage']);
Route::get('/admin',[HomeController::class,'index'])->middleware('auth');;
Route::get('/Funds',[HomeController::class,'Funds'])->middleware('auth')->name('fund');
Route::post('/addfund',[HomeController::class,'addfund'])->middleware('auth');
Route::get('/deletefund/{id}',[HomeController::class,'deletefund']);
Route::get('/Fundpage/{id}',[HomeController::class,'fundpage']);

// Editable Funds
Route::get('/EditFundpage/{id}',[HomeController::class,'editfund'])->name('editfund');
Route::post('EditFundpage/{id}',[HomeController::class,'storeEditableFunds'])->name('storeEditableFunds');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('admin');
})->name('dashboard');
Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
});
Route::post('/subsscribe',[HomeController::class,'subsscribe']);
