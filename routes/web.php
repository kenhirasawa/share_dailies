<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DiaryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FollowController;

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

Route::get('/', function () { return view('welcome'); });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/diaries',[DiaryController::class,'index']);
    Route::get('/diaries/create',[DiaryController::class,'create']);
    Route::post('/diaries',[DiaryController::class,'store']);
    Route::get('/diaries/{diary}',[DiaryController::class,'show']);
    Route::get('/diaries/{diary}/edit',[DiaryController::class,'edit']);
    Route::put('/diaries/{diary}',[DiaryController::class,'update']);
    Route::delete('/diaries/{diary}', [DiaryController::class,'delete']);
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/follows',[FollowController::class,'index']);
});

require __DIR__.'/auth.php';
