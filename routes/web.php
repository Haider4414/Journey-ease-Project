<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\StripePaymentController;
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

Route::get('/',[MainController::class,'index']);
Route::get('/About',[MainController::class,'About']);
Route::get('/myprofile',[MainController::class,'myprofile']);
Route::post('/updatecustomerprofile',[MainController::class,'updatecustomerprofile']);
Route::get('/OurRoom',[MainController::class,'OurRoom']);
Route::get('/Gallery',[MainController::class,'Gallery']);   
Route::get('/Blog',[MainController::class,'Blog']);
Route::get('/mybookings',[MainController::class,'mybookings']);
Route::get('/ContactUs',[MainController::class,'ContactUs']);
Route::get('/singleVehical/{id}',[MainController::class,'singleVehical']);
Route::get('/changebooking/{status}/{id}',[MainController::class,'changebooking']);
Route::get('/deletebooking/{id}/{status}',[MainController::class,'deletebooking']);
Route::get('/singleRoom/{id}',[MainController::class,'singleRoom']);
Route::get('/login',[MainController::class,'login']);
Route::get('/register',[MainController::class,'register']);
Route::post('/registerUser',[MainController::class,'registerUser']);
Route::post('/loginUser',[MainController::class,'loginUser']);
Route::post('/booking',[MainController::class,'booking']);
Route::get('/logout',[MainController::class,'logout']);
Route::get('/search',[MainController::class,'search']);
Route::post('/sendEmail',[MainController::class,'sendEmail']);


Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});









//......Admin routing.....

Route::get('/dashboard',[AdminController::class,'index']);
Route::get('/users/{type}',[AdminController::class,'users']);
Route::get('/changeUserStatus/{status}/{id}',[AdminController::class,'changeUserStatus']);
Route::get('/changehotelStatus/{status}/{id}',[AdminController::class,'changehotelStatus']);
Route::get('/hotels',[AdminController::class,'hotels']);
Route::get('/singleHotel/{id}',[AdminController::class,'singleHotel']);
Route::get('/vehicals',[AdminController::class,'vehicals']);
Route::get('/profile',[AdminController::class,'profile']);
Route::post('/updateprofile',[AdminController::class,'updateprofile']);








// Seller Routes
Route::get('/seller',[SellerController::class,'index']);
Route::get('/hotel',[SellerController::class,'singleHotel']);
Route::get('/bookings/{type}',[SellerController::class,'bookings']);
Route::get('/changebookingstatus/{id}',[SellerController::class,'changebookingstatus']);
Route::get('/sellerProfile',[SellerController::class,'profile']);
Route::get('/changeStatus/{status}/{id}',[SellerController::class,'changeStatus']);
Route::get('/sellervehicals',[SellerController::class,'vehicals']);
Route::get('/drivers',[SellerController::class,'drivers']);
Route::post('/updatesellerprofile',[SellerController::class,'updatesellerprofile']);
Route::post('/addhotel',[SellerController::class,'addhotel']);
Route::post('/updatehotel',[SellerController::class,'updatehotel']);
Route::post('/addrooms',[SellerController::class,'addrooms']);
Route::post('/updaterooms',[SellerController::class,'updaterooms']);
Route::post('/addnewVehicle',[SellerController::class,'addnewVehicle']);
Route::post('/updateVehicle',[SellerController::class,'updateVehicle']);
Route::get('/deletevehicle/{id}',[SellerController::class,'deletevehicle']);
Route::get('/deleteroom/{id}',[SellerController::class,'deleteroom']);
Route::post('/registerdriver',[SellerController::class,'registerdriver']);








Route::get('/driver',[DriverController::class,'index']);
Route::get('/driverBookings/{type}',[DriverController::class,'bookings']);
Route::get('/changebookstatus/{id}',[DriverController::class,'changebookstatus']);
Route::get('/driverProfile',[DriverController::class,'profile']);





