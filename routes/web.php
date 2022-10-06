<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PMS\PAController;
use App\Http\Controllers\PMS\SKIController;
use App\Http\Controllers\SkiTugasController;
use App\Http\Controllers\SkiSkController;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use PhpParser\Builder\Class_;

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

Route::get('/login', [LoginController::class, 'loginSSO'])->name('login');
Route::get('/callback', [LoginController::class, 'callback'])->name('login.sso.callback');
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return redirect()->route('pms.ski.index');
});

Route::middleware('auth')->prefix('pms')->name('pms.')->group(function () {
    Route::get('/ski', [SKIController::class, 'index'])->name('ski.index');
    Route::get('/pa', [PAController::class, 'index'])->name('pa.index');
    Route::resource('/ski/post', SKIController::class);
    Route::get('/ski/ski-new/{template:id}', [SKIController::class, 'ski_new'])->name('ski.ski_new');
    // Route::resource('/ski/create', SKIController::class);
    Route::resource('/ski/ski-new/tugas/post', SkiTugasController::class);
    Route::resource('/ski/ski-new/sk-individu/post', SkiSkController::class);
});
