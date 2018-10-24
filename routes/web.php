<?php


//Route::get('/', function () {
//    return view('frontEnd.welcome');
//});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getPackage/{id}', 'Packages@packageCallByType');

Route::post('/inquiry', 'Packages@inquiry')->name('inquiry');
Route::post('/airTicket', 'Packages@airTicket')->name('airTicket');


Auth::routes();
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::get('/countrySetup', 'CountryController@countrySetup');
Route::post('/countrySetup', 'CountryController@countryStore');
Route::get('/countryDelete/{id}', 'CountryController@countryDelete');

Route::get('/districtSetup', 'DistrictController@districtSetup');
Route::post('/districtSetup', 'DistrictController@districtStore');
Route::get('/districtDelete/{id}', 'DistrictController@districtDelete');


Route::get('/packagesSetup', 'PackageController@packageSetup');
Route::get('/packagesShow', 'PackageController@packageShow');
Route::get('/packagesDetailsForm', 'PackageController@packagesDetailsForm');


Route::get('/tour/{id}','AjaxController@tour');
Route::get('/hajjOmra/{id}','AjaxController@hajjAndOmra');
Route::get('/airTicketing/{id}','AjaxController@airTicketing');
Route::get('/HotelBooking/{id}','AjaxController@hotelBooking');
Route::get('/visaProcessing/{id}','AjaxController@visaProcessing');
Route::get('/getDistrict/{id}','AjaxController@getDistrict');


Route::get('/deletePackageSingle/{id}','PackageController@deletePackageSingle');
Route::get('/deletePackageFull/{id}','PackageController@deletePackageFull');

Route::post('/packageStore', 'PackageController@packageStore');
Route::post('/packageDetailsStore', 'PackageController@packageDetailsStore');
Route::get('/packageDetails/{id}', 'PackageController@packageDetails');

Route::get('/inquiriesShow', 'PackageController@inquiriesShow');
Route::get('/deleteInquiries/{id}', 'PackageController@deleteInquiries');
Route::get('/ChengeStatus/{id}', 'PackageController@ChengeStatus');
Route::get('/teamCreate', 'TeamController@teamCreate');
Route::get('/teamShow', 'TeamController@teamShow');
Route::get('/teamDelete/{id}', 'TeamController@teamDelete');

Route::post('/teamStore', 'TeamController@teamStore')->name('teamStore');
Route::get('/ticketRequest', 'PackageController@ticketRequest');
Route::get('/ChengeTicketStatus/{id}', 'PackageController@ChengeTicketStatus');
Route::get('/deleteTicketRequest/{id}', 'PackageController@deleteTicketRequest');


Route::get('/gallery', 'galleryController@index');
Route::post('/galleryStore', 'galleryController@galleryStore');

