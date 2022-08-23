<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\EventController;

/*|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//-----------Category------------

Route::post('/manager/login',[ManagerController::class,'loginsubmit']);

Route::post('/manager/addcategory',[ManagerController::class,'addCategorySubmit']);

Route::get('/manager/categorylist',[ManagerController::class,'categoryList']);

Route::get('/manager/category/edit-info/{id}',[ManagerController::class,'editCategoryInfo']);

Route::post('/manager/category/edit-submit',[ManagerController::class,'editCategorySubmit']);

Route::get('/manager/deletecategory/{id}',[ManagerController::class,'deleteCategory']);

//---------Event-------

Route::post('/customer/event', [EventController::class, 'EventSubmit']);
Route::get('/customer/event/list', [EventController::class, 'EventList']);
Route::get('/customer/event/delete/{id}', [EventController::class, 'deleteEvent']);
Route::get('/customer/event/edit-info/{id}',[EventController::class, 'editEventInfo']);
Route::post('/customer/event/edit-submit',[EventController::class, 'editEventSubmit']);

//---------Room-------

Route::post('/manager/addrooms',[ManagerController::class,'addRooms']);
Route::get('/manager/room/list',[ManagerController::class,'roomsList']);
Route::get('/manager/room/delete/{id}',[ManagerController::class,'deleteRoom']);
Route::get('/manager/room/edit-info/{id}',[ManagerController::class,'editRoomInfo']);
Route::post('/manager/room/edit-submit',[ManagerController::class,'editRoomSubmit']);

//---------Notice-------

Route::post('/manager/addnotice',[ManagerController::class,'addNotice']);
Route::get('/manager/notice/list',[ManagerController::class,'noticeList']);
Route::get('/manager/notice/delete/{id}',[ManagerController::class,'deleteNotice']);
Route::get('/manager/notice/edit-info/{id}',[ManagerController::class,'editNoticeInfo']);
Route::post('/manager/notice/edit-submit',[ManagerController::class,'editNoticeSubmit']);
