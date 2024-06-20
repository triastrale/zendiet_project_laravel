<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

// Homepage route yang bisa diakses oleh guest
Route::get('/', [HomeController::class, 'homepage'])->name('home.homepage');

// Route untuk semua halaman lain yang membutuhkan autentikasi
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/post_details/{id}', [HomeController::class, 'post_details'])->name('home.post_details');

    // Route untuk profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Calculator route
    Route::get('/calculator/bmi', function () {
        return view('calculator.bmi');
    })->name('calculator.bmi');

    // User routes
    Route::get('/user/home', [UserController::class, 'home'])->name('user.home');

    // Admin routes
    Route::prefix('admin')->middleware('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/posts', [AdminController::class, 'posts'])->name('admin.posts');
        Route::get('/categories', [AdminController::class, 'categories'])->name('admin.categories');
        Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
        Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
        Route::post('/add_post', [AdminController::class, 'add_post'])->name('admin.add_post');
        Route::get('/show_post', [AdminController::class, 'show_post'])->name('admin.show_post');
        Route::delete('/delete_post/{post}', [AdminController::class, 'delete_post'])->name('admin.delete_post');
        Route::get('/edit_page/{id}', [AdminController::class, 'edit_page'])->name('admin.edit_page');
        Route::post('/update_post/{id}', [AdminController::class, 'update_post'])->name('admin.update_post');
        Route::post('/add_food', [AdminController::class, 'add_food'])->name('admin.add_food');
        Route::get('/show_food', [AdminController::class, 'show_food'])->name('admin.show_food');
        Route::delete('/delete_food/{food}', [AdminController::class, 'delete_food'])->name('admin.delete_food');
        Route::get('/edit_food/{id}', [AdminController::class, 'edit_food'])->name('admin.edit_food');
        Route::post('/update_food/{id}', [AdminController::class, 'update_food'])->name('admin.update_food');
    });

    // Food routes
    Route::get('/categories/fnv', [FoodController::class, 'showFruitsAndVeggies'])->name('categories.fnv');
    Route::get('/categories/mdp', [FoodController::class, 'showMilkAndDairy'])->name('categories.mdp');
    Route::get('/categories/meat', [FoodController::class, 'showMeat'])->name('categories.meat');

    // Article routes
    Route::get('/articles', [ArticleController::class, 'showPosts'])->name('articles.posts');

    // Contact routes
    Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');
    Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
});

require __DIR__ . '/auth.php';
