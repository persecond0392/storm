<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

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

Route::get('/',function () {
    return view ('rooms.index');
} )->name('index');

Route::get('/login',function() {
    return view ('auth.login');
});

Route::get('/forgot-password',function() {
    return view ('auth.reset-password');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/top', function() {
        return view ('rooms.top');
    });
    Route::get('index',function() {
        return view('rooms.index');
    });
    Route::get('/create' , function() {
        return view('rooms.create');
    });
    Route::post('/posts' , [RoomController::class , 'store']);
    
    Route::get('/{key}' , [RoomController::class , 'host']);
    
    Route::post('/{key}/comment', [RoomController::class ,'comment'])->name('add');
    
    Route::post('/enter' ,  [RoomController::class , 'enter']);
    
});


require __DIR__.'/auth.php';

// Route::get('/enter' ,  [RoomController::class , 'enter']);
    
// Route::get('/{key}' , [RoomController::class , 'host']);






