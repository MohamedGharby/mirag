<?php

use App\Http\Controllers\admin\AdminCompanyController;
use App\Http\Controllers\admin\AdminHomeController;
use App\Http\Controllers\admin\AdminInvestmentsController;
use App\Http\Controllers\admin\AdminLatestController;
use App\Http\Controllers\admin\AdminLatestImagesController;
use App\Http\Controllers\admin\AdminMessagesController;
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\admin\ProjectImagesController;
use App\Http\Controllers\admin\SuperAdminController;
use App\Http\Controllers\web\AboutController;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\web\ExpertController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\InvestmentController;
use App\Http\Controllers\web\LatestController as WebLatestController;
use App\Http\Controllers\web\ProjectsController;
use App\Models\Latest;
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
    //users routes
    Route::get("/super-admin" , [SuperAdminController::class , 'index']);
    Route::get("/user/delete/{userId}" , [AdminUserController::class , 'delete']);
    Route::post("/user/add" ,[AdminUserController::class , "store"]);
    Route::post("/user/edit" ,[AdminUserController::class , "update"]);
    //end users routes
    //  messeges routes
    Route::get("/messages" , [AdminMessagesController::class , "index"]);
    Route::get("/messages/{msgId}" , [AdminMessagesController::class , "show"]);
    Route::get("/messages/delete/{msgId}" , [AdminMessagesController::class ,"delete"]);
    //end messages routes
    //projects routes
    Route::get("/projects" , [ProjectController::class , "index"]);
    Route::post("/projects" , [ProjectController::class , "store"]);
    Route::get("/projects/create" , [ProjectController::class , "create"]);
    Route::get("/projects/delete/{project}" , [ProjectController::class , "delete"]);
    Route::get("/projects/edit/{project}" , [ProjectController::class , "edit"]);
    Route::get("/projects/toggle/{project}" , [ProjectController::class , "bestToggle"]);
    Route::put("/projects/{project}" , [ProjectController::class , "update"]);
    //end projects routes
    //project images routes
    Route::get("/project/images/{projectId}" , [ProjectImagesController::class , "show"]);
    Route::post("/project/images" , [ProjectImagesController::class , "store"]);
    Route::delete("/images/{image}" , [ProjectImagesController::class , "delete"]);
    //end project images routes
    // news routes
    Route::get("/news" , [AdminLatestController::class , "index"]);
    Route::get("/news/create" ,[AdminLatestController::class , "create"]);
    Route::get("/news/delete/{latest}", [AdminLatestController::class , "delete"]);
    Route::post("/news/add" , [AdminLatestController::class , "store"]);
    Route::get("news/edit/{latest}" , [AdminLatestController::class , "edit"]);
    Route::put("news/edit/{latest}" , [AdminLatestController::class , "update"]);
    //end news routes
    //news images routes
    Route::get("news/images/{latestId}" , [AdminLatestImagesController::class , "show"] );
    Route::post("/news/images" , [AdminLatestImagesController::class , "store"]);
    Route::delete("/news/images/{imgId}", [AdminLatestImagesController::class , "delete"]);
    //end news images routes
    //companies routes
    Route::get("/companies", [AdminCompanyController::class , "index"]);
    Route::post("/companies/add" , [AdminCompanyController::class , "store"]);
    Route::post("/companies/edit", [AdminCompanyController::class , "update"]);
    Route::get("/companies/delete/{company}", [AdminCompanyController::class , "delete"]);
    //end companies Routes
    //investments Routes
    Route::get("/investments/{companyId}" , [AdminInvestmentsController::class , "index"]);
    Route::post("/investments/add" , [AdminInvestmentsController::class , "store"]);
    Route::put("/investments/edit" , [AdminInvestmentsController::class , "update"]);
    Route::get("/investments/delete/{investment}" , [AdminInvestmentsController::class , "delete"]);
    //end investments routes

    
});
