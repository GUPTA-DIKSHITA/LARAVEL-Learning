<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Page1Controller;
use App\Http\Controllers\PagesecondController;
use App\Http\Controllers\PagethirdController;
use App\Http\Controllers\PagefourthController;
use App\Http\Controllers\PagefifthController;
use App\Http\Controllers\PagesixthController;
use App\Http\Controllers\PageseventhController;
use App\Http\Controllers\PageeighthController;
use App\Http\Controllers\PageninthController;
use App\Http\Controllers\AdminloginController;
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

Route::get('/form', [FormController::class, 'index']);
Route::post('/form', [FormController::class, 'register']);
Route::get('/form/page1', [Page1Controller::class, 'index']);
Route::post('/form/page1', [Page1Controller::class, 'register']);
Route::get('/form/page2', [PagesecondController::class, 'index']);
Route::post('/form/page2', [PagesecondController::class, 'store']);
Route::get('/form/page3', [PagethirdController::class, 'index']);
Route::post('/form/page3', [PagethirdController::class, 'store']);
Route::get('/form/page4', [PagefourthController::class, 'index']);
Route::post('/form/page4', [PagefourthController::class, 'store']);
Route::get('/form/page5', [PagefifthController::class, 'index']);
Route::post('/form/page5', [PagefifthController::class, 'store']);
Route::get('/form/page6', [PagesixthController::class, 'index']);
Route::post('/form/page6', [PagesixthController::class, 'store']);
Route::get('/form/page7', [PageseventhController::class, 'index']);
Route::post('/form/page7', [PageseventhController::class, 'store']);
Route::get('/form/page8', [PageeighthController::class, 'index']);
Route::post('/form/page8', [PageeighthController::class, 'store']);
Route::get('/form/page9', [PageninthController::class, 'index']);

Route::get('/admin_login', [AdminloginController::class, 'index']);
Route::post('/admin_login', [AdminloginController::class, 'store']);
Route::get('/admin_view_data', [AdminloginController::class, 'viewdata']);
Route::get('/admin_view_response/{customer_id}', [AdminloginController::class, 'viewresponse']);
Route::get('/admin_logout', [AdminloginController::class, 'adminlogout']);