<?php

use App\Http\Controllers\Auth\RegCtrl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
Use App\Http\Controllers\UserAuth;
use App\Http\Controllers\Transactions;

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
Route::get('/register',[RegCtrl::class,'index'])->name('register');
Route::post('/register',[RegCtrl::class,'store']);
Route::get('/', function () {
    return view('home');
});

Route::get('/Dashboard', function () {
    return view('dashboard.index',['page'=>'Index']);
})->middleware('loginrequired');

Route::get('/Accounts', [AccountController::class,'index'])->middleware('loginrequired');
Route::post('/Accounts/Create', [AccountController::class,'create'])->middleware('loginrequired');

Route::get('/Stats', function () {
    return view('dashboard.stats',['page'=>'Stats']);
})->middleware('loginrequired');
Route::get('/Settings', function () {
    return view('dashboard.settings',['page'=>'Settings']);
})->middleware('loginrequired');


Route::get("login",[UserAuth::class,'login'])->name('login');
Route::get("check",[UserAuth::class,'check_user']);
Route::get("/Profile",[UserAuth::class,'profile'])->middleware('loginrequired');
Route::get("/logout",[UserAuth::class,'logout']);

Route::get('/Transactions/add',[Transactions::class, 'index'])->middleware('loginrequired');

Route::get('/confirm', [Transactions::class, 'insert'])->middleware('loginrequired');

Route::get('/Transactions', [Transactions::class, 'show'])->middleware('loginrequired');
?>
