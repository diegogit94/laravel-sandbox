<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommerceController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ChecklistController;

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

Auth::routes();

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/commerces', [CommerceController::class, 'index'])->name('commerces.index');

Route::get('/sites', [SiteController::class, 'index'])->name('sites.index');

Route::get('/checklists', [ChecklistController::class, 'index'])->name('checklists.index');

Route::get('/sandbox', function (){
    return view('charts');
});