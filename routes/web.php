<?php

use App\Http\Controllers\web\AboutController;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\InvestmentController;
use App\Http\Controllers\web\LatestController as WebLatestController;
use App\Http\Controllers\web\ProjectsController;
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

//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', [HomeController::class , "index"]);
Route::get('/about', [AboutController::class , "index"]);
Route::get('/contact', [ContactController::class , 'index']);
Route::post('/contact/message' , [ContactController::class , 'sendMessage']);
Route::get('/projects' , [ProjectsController::class , 'index']);
Route::get('/projects/{projectId}' , [ProjectsController::class , 'show']);
Route::get('/latests', [WebLatestController::class , 'index']);
Route::get('/latests/{latestId}', [WebLatestController::class , 'show']);
Route::get('/investments', [InvestmentController::class , 'index']);


