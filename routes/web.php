<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('index');
// });



Auth::routes(['verify' => true]);

Route::get('/', function () {
    return redirect('dashboard');
});
// homepage route
Route::get('/home', 'HomeController@index')->name('home');

// dashboard admin route
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::resource('/employee', 'EmployeeController');
Route::resource('/transaction', 'TransactionController');
Route::resource('/inventory', 'InventoryController');
Route::resource('/request', 'RequestController');
Route::resource('/menu', 'MenuController');
