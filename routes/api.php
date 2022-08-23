<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\ManagerController;
/*|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/manager/categorylist',[ManagerController::class,'categoryList']);
Route::post('/manager/addcategory',[ManagerController::class,'addCategory']);

Route::get('/manager/roomslist',[ManagerController::class,'roomsList']); 
Route::post('/manager/addrooms',[ManagerController::class,'addRooms']); 

Route::post('/manager/addnotice',[ManagerController::class,'addNotice']);

Route::post('/manager/addevent',[EventController::class,'Event']);