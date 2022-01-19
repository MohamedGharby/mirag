<?php

use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\AdminMessagesController;
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\admin\SuperAdminController;
use App\Http\Controllers\web\AboutController;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\web\ExpertController;
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
Route::get('/team', [ExpertController::class , 'index']);

Route::prefix("dashboard")->middleware(['auth'])->group(function(){
    Route::get("/" , [AdminHomeController::class , 'index']);
    Route::get("/super-admin" , [SuperAdminController::class , 'index']);
    Route::get("/user/delete/{userId}" , [AdminUserController::class , 'delete']);
    Route::post("/user/add" ,[AdminUserController::class , "store"]);
    Route::post("/user/edit" ,[AdminUserController::class , "update"]);
    Route::get("/messages" , [AdminMessagesController::class , "index"]);
    Route::get("/messages/{msgId}" , [AdminMessagesController::class , "show"]);
    Route::get("/messages/delete/{msgId}" , [AdminMessagesController::class ,"delete"]);

});
