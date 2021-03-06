<?php

use Illuminate\Support\Facades\Route;

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
Route::prefix(LaravelLocalization::setLocale())->middleware(['localeSessionRedirect', 'localizationRedirect'])->group(function () {
    Route::get('/', function () {
        return view('create');
    });

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth'])->name('dashboard');

    Route::middleware('auth')
        ->prefix('admin')
        ->name('admin.')
        ->namespace('App\Http\Controllers')
        ->group(function (){
            Route::get('/', function () {return view('admin.layouts.dashboard');})->name('dashboard');

            Route::resource('users', 'UserController');
        });
});

Route::get('/bc', function () {
    return view('BC');
});
require __DIR__.'/auth.php';
