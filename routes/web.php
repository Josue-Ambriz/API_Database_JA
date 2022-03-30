<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hwcategoryController;
use App\Http\Controllers\manufacturerController;
use App\Http\Controllers\hardwareController;
use App\Http\Controllers\userinfoController;
use App\Http\Controllers\purchaseController;
use App\Http\Controllers\noteController;
use App\Http\Controllers\contactinfoController;

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

URL::forceScheme('https');

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/hwcategories', function () {
    return view('hwcategories');
});

Route::get('/manufacturers', function () {
    return view('manufacturers');
});

Route::get('/hardwares', function () {
    return view('hardwares');
});

Route::get('/usersinfos', function () {
    return view('usersinfos');
});

Route::get('/purchases', function () {
    return view('purchases');
});

Route::get('/notes', function () {
    return view('notes');
});

Route::get('/contactinfos', function () {
    return view('contactinfos');
});*/

Route::get('/db-test', function () {
    try {         
         echo \DB::connection()->getDatabaseName();     
    } catch (\Exception $e) {
          echo 'None';
    }
});

Route::get('/db-migrate', function () {
    Artisan::call('migrate');
    echo Artisan::output();
});

Route::get('/db-migrate-refresh', function () {
    Artisan::call('migrate:refresh');
    echo Artisan::output();
});

Route::resource('/hwcategories', hwcategoryController::class);
Route::resource('/manufacturers', manufacturerController::class);
Route::resource('/hardwares', hardwareController::class);
Route::resource('/usersinfos', userinfoController::class);
Route::resource('/purchases', purchaseController::class);
Route::resource('/notes', noteController::class);
Route::resource('/contactinfos', contactinfoController::class);
