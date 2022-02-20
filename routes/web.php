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
    return view('home');
});

Route::get('/Dashboard', function () {
    return view('dashboard.index',['page'=>'Index']);
});
Route::get('/Accounts', function () {
    return view('dashboard.accounts',['page'=>'Accounts']);
});
Route::get('/Transactions', function () {
    return view('dashboard.transactions',['page'=>'Transactions']);
});
Route::get('/Stats', function () {
    return view('dashboard.stats',['page'=>'Stats']);
});
Route::get('/Settings', function () {
    return view('dashboard.settings',['page'=>'Settings']);
});

?>