<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HWCategoryController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\HardwareController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ContactInfoController;

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

Route::get('/', function () {
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
});

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

Route::resource('/hwcategories', HWCategoryController::class);
Route::resource('/manufacturers', ManufacturerController::class);
Route::resource('/hardwares', HardwareController::class);
Route::resource('/usersinfos', UserInfoController::class);
Route::resource('/purchases', PurchaseController::class);
Route::resource('/notes', NoteController::class);
Route::resource('/contactinfos', ContactInfoController::class);
