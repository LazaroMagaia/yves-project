<?php

use App\Http\Controllers\{ProfileController,
    ArticleController,
    FrontendController
};
use Illuminate\Support\Facades\Route;

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



//Role
Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
});

// permissao
Route::group(['middleware' => ['permission:edit articles']], function () {
    Route::get('/edit-article', function () {
        // Somente usuários com a permissão "edit articles" podem acessar esta rota
    });
});
//Role e permissao
Route::group(['middleware' => ['role_or_permission:admin|edit articles']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';
