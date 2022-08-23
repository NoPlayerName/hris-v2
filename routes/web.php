<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/ski', function () {
    return view('pms.ski.index');
})->middleware(['auth', 'verified'])->name('ski');

Route::get('/pa', function () {
    return view('pms.pa.index');
})->middleware(['auth', 'verified'])->name('pa');

Route::prefix('inertia')->name('inertia.')->group(function ($route) {
    $route->get('/ski', function () {
        return Inertia::render('SKI');
    })->middleware(['auth', 'verified'])->name('ski');

    $route->get('/pa', function () {
        return Inertia::render('PA');
    })->middleware(['auth', 'verified'])->name('pa');
});

require __DIR__.'/auth.php';
