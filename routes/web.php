<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('starter');
})-> name('page.starter');


Route::get('user', function () {
    return view('user');
})-> name('page.user');


Route::middleware(['auth','verified'])->group(function (){
     Route::get('/welcome',function (){
        return view('welcome');
     })->name('page.welcome');

     Route::get('/home', function (){
    return view('home');
})->name('page.home');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
