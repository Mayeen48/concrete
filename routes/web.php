<?php


//Route::get('/', function () {
//    return view('frontEnd.welcome');
//});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getPackage/{id}', 'Packages@packageCallByType');

Route::post('/inquiry', 'Packages@inquiry')->name('inquiry');
Route::post('/airTicket', 'Packages@airTicket')->name('airTicket');


Route::post('/contact', 'ContactController@contactStore')->name('contact');
Route::get('/slideDetails/{id}', 'SlideController@slideShow')->name('slideDetails');



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
Route::post('/galleryStore', 'galleryController@galleryStore')->name('galleryStore');
Route::get('/galleryDelete/{id}', 'galleryController@galleryDelete')->name('galleryDelete');


Route::get('/testimonial', 'TestimonialController@testimonial')->name('testimonial');
Route::post('/testimonialStore', 'TestimonialController@store')->name('testimonialStore');
Route::get('/testimonialDelete/{id}', 'TestimonialController@testimonialDelete')->name('testimonialDelete');

Route::get('/hcr', 'HcrController@hcr')->name('hcr');
Route::post('/hcrSetup', 'HcrController@hcrSetup')->name('hcrSetup');

Route::get('/contacts', 'ContactController@contacts')->name('contacts');
Route::get('/ContactStatus/{id}', 'ContactController@ChengeStatus')->name('ContactStatus');
Route::get('/ContactDelete/{id}', 'ContactController@ContactDelete')->name('ContactDelete');


Route::get('/slideSetup', 'SlideController@slideSetup')->name('slideSetup');
Route::post('/slideStore', 'SlideController@slideStore')->name('slideStore');
Route::get('/slideDelete/{id}', 'SlideController@slideDelete')->name('slideDelete');