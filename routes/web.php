<?php


use App\Models\User;


use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;


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
// Route Halaman Home
Route::get('/', function () {
    return view('home', [
        "tittle"=> "Beranda",
    ]);
});

// Route Halaman About
Route::get('/about',function(){
    return view('about', 
    [
        "tittle"=> "Tentang Kami"
    ]);
});

// Route Halaman Fitur
Route::get('/fitur',function(){
    return view('fitur', 
    [
        "tittle"=> "Fitur"
    ]);
});



// Route Halaman Posts
Route::get('/posts', [PostController::class , 'index']);

// Route Halaman Single Post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// Route Mendapatkan halaman categories
Route::get('/categories', function(){
    return view ('categories',[
        "tittle" => "Kategori",
        "categories" => Category::all(),
    ]);
});


// Route Halaman Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Route Halaman Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


// Route Halaman Dashboard
Route::get('/dashboard', function(){
    return view ('dashboard.index');
})->middleware('auth');


// Route untuk menampung request dari slug
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

// Route Crud Dashboard Post
Route::resource('dashboard/posts', DashboardPostController::class)->middleware('auth');

// Route for admin category
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

// Route untuk menampung request dari slug
Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('auth');

//Route For Login With Google
Route::get('/auth/google', [GoogleController::class , 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [GoogleController::class , 'handleGoogleCallback']);