<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ComicController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

Route::get('/test-route', function() {
    return "テスト成功！ルートは生きています。";
});
Route::get('/comic/titleview/{id}',[TestController::class,'titleview']);
// Route::get('/comic/titleview/{id}',[ComicController::class,'titleview']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//コミック一覧
Route::get('/search', [ComicController::class, 'search'])->name('comics.search');

require __DIR__.'/auth.php';
