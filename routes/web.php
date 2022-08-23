<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\EventController;

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

Route::get('/', function () {
    return "<br><br><br><center><h1><b>Hotel Management System</b></h1></center>";
});

///customer controller

///add or signup
Route::get('/customer/add', [CustomerController::class, 'addCustomer'])->name('customer.add');
Route::post('/customer/add', [CustomerController::class, 'addCustomerSubmit'])->name('customer.add.submit');

///login
Route::get('/customer/login',[CustomerController::class,'login']);
Route::post('/customer/login',[CustomerController::class,'loginsubmit'])->name('customer.login.submit');

///panel
Route::get('/customer/panel',[CustomerController::class,'customerPanel'])->name('customer.panel')->middleware('customerAuthorized');

//logout
Route::get('/customer/logout', [CustomerController::class, 'cusotmerLogout'])->name('customer.logout');

///profile
Route::get('/customer/profile', [CustomerController::class, 'customerProfile'])->name('customer.profile')->middleware('customerAuthorized');

//edit profile
Route::get('/customer/profile/edit/{id}',[CustomerController::class,'customerProfileEdit'])->name('customer.profile.edit')->middleware('customerAuthorized');
Route::post('/customer/profile/edit',[CustomerController::class,'customerProfileEditSubmit'])->name('customer.profile.edit.submit')->middleware('customerAuthorized');


///room book
Route::get('/customer/room/book', [CustomerController::class, 'customerRoomBook'])->name('customer.room.book')->middleware('customerAuthorized');
Route::post('/customer/room/book', [CustomerController::class, 'customerRoomBookSubmit'])->name('customer.room.book.submit')->middleware('customerAuthorized');

/// book room list
Route::get('/customer/room/book/list', [CustomerController::class, 'customerRoomBookList'])->name('customer.room.book.list')->middleware('customerAuthorized');

///Delete room book
Route::get('/customer/room/book/delete/{id}',[CustomerController::class,'customerRoomBookDelete'])->name('customer.room.book.delete')->middleware('customerAuthorized');

//edit room book
Route::get('/customer/room/book/edit/{id}',[CustomerController::class,'customerRoomBookEdit'])->name('customer.room.book.edit')->middleware('customerAuthorized');
Route::post('/customer/room/book/edit',[CustomerController::class,'customerRoomBookEditSubmit'])->name('customer.room.book.edit.submit')->middleware('customerAuthorized');


///review
Route::get('/customer/review', [CustomerController::class, 'customerReview'])->name('customer.review')->middleware('customerAuthorized');
Route::post('/customer/review', [CustomerController::class, 'customerReviewSubmit'])->name('customer.review.submit')->middleware('customerAuthorized');

/// review list
Route::get('/customer/review/list', [CustomerController::class, 'customerReviewList'])->name('customer.review.list')->middleware('customerAuthorized');



//RoomCategories
Route::get('/customer/rooms',[CustomerController::class,'rooms'])->name('customer.rooms')->middleware('customerAuthorized');

//gymreserve
Route::get('/customer/gym/add',[CustomerController::class,'addGym'])->name('customer.gym.add')->middleware('customerAuthorized');
Route::post('/customer/gym/add',[CustomerController::class,'addGymSubmit'])->name('customer.gym.add.submit')->middleware('customerAuthorized');

//gymlist
Route::get('/customer/gym/list',[CustomerController::class,'gymList'])->name('customer.gym.list')->middleware('customerAuthorized');


//edit gym
Route::get('/customer/gym/edit/{id}',[CustomerController::class,'customerGymEdit'])->name('customer.gym.edit')->middleware('customerAuthorized');
Route::post('/customer/gym/edit',[CustomerController::class,'customerGymEditSubmit'])->name('customer.gym.edit.submit')->middleware('customerAuthorized');


///Delete gym
Route::get('/customer/gym/delete/{id}',[CustomerController::class,'customerGymDelete'])->name('customer.gym.delete')->middleware('customerAuthorized');




//spareserve
Route::get('/customer/spa/add',[CustomerController::class,'addSpa'])->name('customer.spa.add')->middleware('customerAuthorized');
Route::post('/customer/spa/add',[CustomerController::class,'addSpaSubmit'])->name('customer.spa.add.submit')->middleware('customerAuthorized');

//spalist
Route::get('/customer/spa/list',[CustomerController::class,'spaList'])->name('customer.spa.list')->middleware('customerAuthorized');


//edit spa
Route::get('/customer/spa/edit/{id}',[CustomerController::class,'customerSpaEdit'])->name('customer.spa.edit')->middleware('customerAuthorized');
Route::post('/customer/spa/edit',[CustomerController::class,'customerSpaEditSubmit'])->name('customer.spa.edit.submit')->middleware('customerAuthorized');


///Delete spa
Route::get('/customer/spa/delete/{id}',[CustomerController::class,'customerSpaDelete'])->name('customer.spa.delete')->middleware('customerAuthorized');


//orderfood
Route::get('/customer/orderfood',[CustomerController::class,'orderFood'])->name('customer.orderfood')->middleware('customerAuthorized');


///Question
Route::get('/customer/ques', [CustomerController::class, 'customerQues'])->name('customer.ques')->middleware('customerAuthorized');
Route::post('/customer/ques', [CustomerController::class, 'customerQuesSubmit'])->name('customer.ques.submit')->middleware('customerAuthorized');

/// Question list
Route::get('/customer/ques/list', [CustomerController::class, 'customerQuesList'])->name('customer.ques.list')->middleware('customerAuthorized');

///Event
Route::get('/customer/event', [EventController::class, 'Event'])->name('customer.event');
Route::post('/customer/event', [EventController::class, 'EventSubmit'])->name('customer.event.submit');

/// Event list
Route::get('/customer/review/list', [EventController::class, 'EventList'])->name('customer.event.list')->middleware('customerAuthorized');
 


///mail sending
//Route::get('/customer/mail',[CustomerController::class,'mailSend']);
Route::get('/send/mail',[CustomerController::class,'mailSend']);

//manager login

Route::get('/manager/login',[ManagerController::class,'login']);
Route::post('/manager/login',[ManagerController::class,'loginsubmit'])->name('manager.login.submit');

//manager logout
Route::get('/manager/logout',[ManagerController::class,'logout'])->name('manager.logout');

//manager dashboard
Route::get('/manager/dashboard',[ManagerController::class,'managerDashboard'])->name('manager.panel');

//manager category
Route::get('/manager/addcategory',[ManagerController::class,'addCategory'])->name('manager.panel.addcategory');
Route::post('/manager/addcategory',[ManagerController::class,'addCategorySubmit'])->name('manager.panel.addcategory');

//manager category show
Route::get('/manager/categorylist',[ManagerController::class,'categoryList'])->name('manager.panel.categorylist');

//manager rooms
Route::get('/manager/addrooms',[ManagerController::class,'addRooms'])->name('manager.panel.addrooms');
Route::post('/manager/addrooms',[ManagerController::class,'addRoomsSubmit'])->name('manager.panel.addrooms');

//manager rooms show
Route::get('/manager/roomslist',[ManagerController::class,'roomsList'])->name('manager.panel.roomslist');


//manager add notice
Route::get('/manager/addnotice',[ManagerController::class,'addNotice'])->name('manager.panel.addnotice');
Route::post('/manager/addnotice',[ManagerController::class,'addNoticeSubmit'])->name('manager.panel.addnotice');


//manager add event
Route::get('/manager/addevent',[EventController::class,'Event'])->name('manager.panel.addevent');
Route::post('/manager/addevent',[EventController::class,'EventSubmit'])->name('manager.panel.addevent');



