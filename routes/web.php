<?php

use App\Http\Controllers\AddArticles;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Models\Article;
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




Route::get('/dashboard', function () {
    $articles = Article::all();
    return view('dashboard',compact('articles'));
})->name('dashboard');

// add article and edit and delete the article throughout the resource
Route::resource('articles',AddArticles::class);

Route::get('/', [Controller::class, 'home'])->name('home');
Route::get('/single/{id}', [Controller::class, 'single'])->name('single');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





require __DIR__.'/auth.php';
