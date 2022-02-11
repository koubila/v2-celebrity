<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StarController;
use App\Http\Controllers\BackOfficeController;

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

Route::get('/', [StarController::class,'show']);
Route::get('/backOffice', [BackOfficeController::class, 'show']);
Route::post('/delete', [BackOfficeController::class, 'deleteStar']);

Route::get('/addStar', [BackOfficeController::class, 'showAddStar']);

Route::post('/addStar', [BackOfficeController::class, 'addStar']);

Route::get('/update/{id}', [BackOfficeController::class, 'showUpdateStar']);

Route::post('/update/{id}', [BackOfficeController::class, 'updateStar']);


