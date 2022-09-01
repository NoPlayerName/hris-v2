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
    return redirect()->route('ski');

    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/ski', function () {
    return view('pms.ski.index');
})->name('ski');

Route::get('/pa', function () {
    return view('pms.pa.index');
})->name('pa');

Route::prefix('inertia')->name('inertia.')->group(function ($route) {
    $route->get('/ski', function () {
        return Inertia::render('SKI');
    })->name('ski');

    $route->get('/pa', function () {
        return Inertia::render('PA');
    })->name('pa');
});

require __DIR__.'/auth.php';
