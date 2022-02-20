<?php

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

// CLIENT ****************************
// Route::get('/', 'controllerPage@getHome');
// Route::get('/about', 'controllerPage@getAbout');
// Route::get('/login', 'controllerPage@getLogin');
// Route::get('/forgot-password', 'controllerPage@getForgotPassword');
// Route::get('/register', 'controllerPage@getRegister');
// Route::get('/email-authentication', 'controllerPage@getEmailAuthentication')->name('email-authentication');
// Route::get('/tour-list', 'controllerPage@getTourList');
// Route::get('/tour-list/tour-detail/{id}', 'controllerPage@getTourDetail');
// Route::get('/hotel-list', 'controllerPage@getHotelList');
// Route::get('/hotel-list/hotel-detail/{id}', 'controllerPage@getHotelDetail');
// Route::get('hotel-list/listTourFilter', 'controllerPage@listTourFilter');
// Route::get('/blog-list', 'controllerPage@getBlogList');
// Route::get('/profile-hotel-management', 'controllerHotel@getProfileHotel');
// Route::get('/update-profile-hotel', 'controllerHotel@getHotelRoom');
Route::get('/profile', 'controllerUser@showProfile');
Route::get('/change-password', 'controllerUser@changePassword');
Route::get('/history', 'controllerUser@historyRoom');
// Route::get('/list-hotel', 'controllerUser@hotelProfile');
// Route::get('/addHotelProfile', 'controllerUser@showHotelProfile');
// Route::get('/update-profile-hotel/{id}', 'controllerHotel@getHotelRoom');
Route::post('/updateUser','controllerUser@updateUser');

Route::get('/', 'controllerPage@getHome');
Route::get('/about', 'controllerPage@getAbout');
Route::get('/login', 'controllerPage@getLogin');
Route::get('/forgot-password', 'controllerPage@getForgotPassword');
Route::get('/register', 'controllerPage@getRegister');
Route::get('/email-authentication', 'controllerPage@getEmailAuthentication')->name('email-authentication');
Route::get('/tour-list', 'controllerPage@getTourList');
Route::get('tour-list/listTourFilter', 'controllerPage@listTourFilter');
Route::post('/listTourFilter','controllerPage@listTourFilter');
Route::get('/tour-list/tour-detail/{id}', 'controllerPage@getTourDetail');
Route::get('/hotel-list', 'controllerPage@getHotelList');
Route::get('hotel-list/listHotelFilter', 'controllerPage@listHotelFilter');
Route::post('/listHotelFilter','controllerPage@listHotelFilter');
Route::get('/hotel-list/hotel-detail/{id}', 'controllerPage@getHotelDetail');
Route::get('/blog-list', 'controllerPage@getBlogList');
Route::get('/blog-detail/{id_news}', 'controllerPage@getBlogDetail');
Route::get('/profile-hotel-management', 'controllerHotel@getProfileHotel');
Route::get('/update-profile-hotel', 'controllerHotel@getHotelRoom');

Route::get('/contact', 'controllerPage@getContactPage');
Route::get('/notification', 'controllerPage@getNotificationPage');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

Route::post('/actionChangePasss','controllerUser@actionChangePasss');





// END CLIENT ****************************


// ACTION ****************************

Route::post('/actionLogin','controllerUser@checkLogin');
Route::post('/actionRegister','controllerUser@register');
Route::post('/verifyEmail','controllerUser@checkRegister');
Route::post('/resendEmail','controllerUser@resendEmail');
Route::get('/logout','controllerUser@logout');
Route::post('/payment','controllerClient@payment');
Route::post('/actionPayment','controllerClient@actionPayment');
Route::post('/profile-hotel-management', 'controllerHotel@postProfileHotel');
Route::post('/update-profile-hotel', 'controllerHotel@postHotelRoom');
Route::get('/actioncomment','controllerClient@actionComment');
Route::get('/actionMessage','controllerClient@actionMessage');
Route::post('/resetPassword','controllerClient@resetPassword');



// END ACTION ****************************


// ADMIN ****************************

// ADMIN **************************

// LOGINADMIN **************************
Route::get('/adminlogin', function () {
    return view('admin/login');
});
//Route::get('/admin/tour', function () {
//    return view('admin/tour');
//});

Route::post('/checkLoginAdmin', 'controllerAdmin@checkLogin');
Route::get('/logoutAdmin', 'controllerAdmin@logout');


Route::group(['middleware' =>'adminLogin'],function (){
Route::get('/admin', function () {
    return view('admin/home');
});
Route::group(['prefix' => 'hotel'], function () {
    Route::get('/', 'controllerHotel@index');
    Route::get('/addHotel', 'controllerHotel@create');
    Route::post('/addHotel', 'controllerHotel@store');
    Route::get('/editHotel/{id_hotel}', 'controllerHotel@show');
    Route::post('/updateHotel', 'controllerHotel@edit');
    Route::get('/delete/{id_hotel}', 'controllerHotel@destroy');
});
Route::group(['prefix' => 'tourDay'], function () {
    Route::get('/', 'tourDayController@index');
    Route::get('/addTourDay', 'tourDayController@create');
    Route::post('/addTourDay', 'tourDayController@store');
    Route::get('/editTourDay/{id_tour_day}', 'tourDayController@show');
    Route::post('/updateTourDay', 'tourDayController@edit');
    Route::get('/delete/{id_tour_day', 'tourDayController@destroy');
});
Route::group(['prefix' => 'room'], function () {
    Route::get('/', 'controllerHotel@indexRoom');
    Route::get('/{id}', 'controllerHotel@getRoomIdHotel');
    Route::get('/addRoom/{id_hotel}', 'controllerHotel@createRoom');
    Route::post('/addRoom', 'controllerHotel@storeRoom');
    Route::get('/editRoom/{id_room}', 'controllerHotel@showRoom');
    Route::post('/updateRoom', 'controllerHotel@editRoom');
    Route::get('/delete/{id_room}', 'controllerHotel@destroyRoom');
});
Route::group(['prefix' => 'tour'], function () {
    Route::get('/', 'controllerTour@index');
    Route::get('/addTour', 'controllerTour@create');
    Route::post('/addTour', 'controllerTour@store');
    Route::get('/editTour/{id_tour}', 'controllerTour@show');
    Route::post('/updateTour', 'controllerTour@edit');
    Route::get('/delete/{id_tour}', 'controllerTour@destroy');
});
Route::group(['prefix' => 'news'], function () {
    Route::get('/', 'controllerNews@index');
    Route::get('/addNews', 'controllerNews@create');
    Route::post('/addNews', 'controllerNews@store');
    Route::get('/editNews/{id_news}', 'controllerNews@show');
    Route::post('/updateNews', 'controllerNews@edit');
    Route::get('/delete/{id_news}', 'controllerNews@destroy');
});
Route::group(['prefix' => 'destination'], function () {
    Route::get('/', 'controllerDestination@index');
    Route::get('/addDestination', 'controllerDestination@create');
    Route::post('/addDestination', 'controllerDestination@store');
    Route::get('/editDestination/{id_destination}', 'controllerDestination@show');
    Route::post('/updateDestination', 'controllerDestination@edit');
    Route::get('/delete/{id_destination}', 'controllerDestination@destroy');
});
Route::group(['prefix' => 'comment'], function () {
    Route::get('/', 'controllerComment@index');
    Route::get('/editComment/{id_comment}', 'controllerComment@show');
    Route::post('/updateComment', 'controllerComment@edit');
    Route::get('/delete/{id_comment}', 'controllerComment@destroy');
});
Route::group(['prefix' => 'bookHotel'], function () {
    Route::get('/', 'controllerBookHotel@index');
    Route::get('/delete/{id_booking}', 'controllerBookHotel@destroy');
});
Route::group(['prefix' => 'bookTour'], function () {
    Route::get('/', 'controllerBookTour@index');
    Route::get('/delete/{id_booking}', 'controllerBookTour@destroy');
});
Route::group(['prefix' => 'user'], function () {
    Route::get('/', 'controllerUser@index');
    Route::get('/editUser/{id_user}', 'controllerUser@show');
    Route::post('/updateUser', 'controllerUser@edit');
    Route::get('/delete/{id_user}', 'controllerUser@destroy');
});
});



Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

// END CLIENT ****************************
