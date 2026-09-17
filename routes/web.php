<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BillboardController;

Route::get('/', function () { return view('welcome'); });
Route::get('/services', function () { return view('services'); });
Route::get('/billboards', [BillboardController::class, 'indexPublic'])->name('billboards.public.index');
Route::get('/billboards/{slug}', [BillboardController::class, 'showPublic'])->name('billboards.public.show');
Route::get('/about', function () { return view('about'); });
Route::get('/contact', function () { return view('contact'); });

// Admin Panel Routes
Route::prefix('management')->group(function () {
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('admin.login.post');
    Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');
    
    Route::middleware('auth')->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::resource('billboards', BillboardController::class);
    });
});

// Route otomatis untuk mencegah database Supabase "tertidur"
Route::get('/api/keep-alive', function () {
    \Illuminate\Support\Facades\DB::table('users')->first();
    return response()->json(['status' => 'Database is awake!']);
});
