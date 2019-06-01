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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('admin/logout', function(){
    Auth::logout();
    return redirect('/admin/login')->with('success','Logout Successful');
});

Route::get('/','HomeController@showLandingPage');


Route::get('/artist/registration','HomeController@showArtistRegistrationForm');
Route::get('/artist/registration/{type}','HomeController@showArtistRegistrationForm');
Route::get('/recruiter/registration','HomeController@showRecruiterRegistrationForm');

Route::post('/artist/registration','HomeController@registerArtist');
Route::post('/signup/recruiter','HomeController@registerRecruiter');

Route::get('/login-after-registration/{id}','HomeController@loginAfterRegistration');

Route::get('/artist/listing/{user_type}','HomeController@viewArtistListingPage');

Route::get('/artist/detail/{id}','HomeController@viewArtistDetailPage');

Route::get('artist/signup','HomeController@showArtistLogin');
Route::get('/get/location','HomeController@getLocation');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin/login', 'AdminController@login');
Route::get('/admin/email', 'AdminController@email');
Route::post('/send-enquiry', 'ContactUsController@createContactUs');


Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/chk-mobile-duplicate','HomeController@checkMobileNumber');

Route::post('/verify/number','HomeController@verifyMobileNumber');
Route::post('/verify/otp','HomeController@verifyOtp');

Route::get('/artist/filter','HomeController@artistFilter');


Route::get("/make/mobile-number-unique","HomeController@makeMobileNumberUnique");

//Paytm Route

Route::get("/paytm/test","HomeController@testPaytm");
Route::get("/paytm/pay","HomeController@payPaytm");
Route::post('/come-back','HomeController@comeBack');

