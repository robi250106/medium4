<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\SignController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\WriteController;
use App\Http\Controllers\GetStartedController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/membership', [MembershipController::class,'index'])->name('member');
Route::get('/sign-up', [SignController::class,'index'])->name('sign');
Route::get('/login', [SignController::class,'index'])->name('login');
Route::get('/story', [StoryController::class,'index'])->name('story');

Route::controller(WriteController::class)->group(function(){
    Route::get('/write', 'index')->name('write');
    Route::post('/write', 'store')->name('write.store');
});
Route::get('/get-started', [GetStartedController::class, 'index'])->name('get-started');
