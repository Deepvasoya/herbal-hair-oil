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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/admin', function () {
    return redirect()->route('admin.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/order', 'OrderController@userorder')->name('userorder');

  //Admin
  Route::prefix('admin')->group(function () {
    Route::get('login', [App\Http\Controllers\Backend\LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [App\Http\Controllers\Backend\LoginController::class, 'login']);
    Route::post('logout', [App\Http\Controllers\Backend\LoginController::class, 'logout'])->name('admin.logout');

    Route::get('dashboard', [App\Http\Controllers\Backend\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('leads', [App\Http\Controllers\Backend\LeadController::class, 'index'])->name('admin.leads');

    Route::delete('leads/{id}/delete', [App\Http\Controllers\Backend\LeadController::class, 'leadsdelete'])->name('leads.delete');

    Route::get('profile', [App\Http\Controllers\Backend\ProfileController::class, 'index'])->name('admin.profile');
    Route::post('profile', [App\Http\Controllers\Backend\ProfileController::class, 'profileupdate'])->name('admin.profileupdate');
});