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
/*
    Route::get('/', function () {
        return view('welcome');
    });
*/

Auth::routes();

Route::get('/home', 'SponController@index');

  Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/events', 'AdminController@events')->name('admin.events');
  });

  Route::prefix('brand')->group(function() {
    Route::get('/login', 'Auth\BrandLoginController@showLoginForm')->name('brand.login');
    Route::post('/login', 'Auth\BrandLoginController@login')->name('brand.login.submit');
    Route::post('/logout', 'Auth\BrandLoginController@logout')->name('brand.logout');
    Route::get('/', 'BrandController@index')->name('brand.dashboard');
    Route::get('/events', 'BrandController@events')->name('brand.events');
    Route::get('/register', 'BrandController@showRegisterForm')->name('brand.register');
    Route::post('/register', 'BrandController@store')->name('brand.store');
  });


  Route::get('/', 'SponController@index')->name('home');
 
  Route::get('event', 'SponController@event')->name('event');
  Route::get('spotlight', 'SponController@spotlight')->name('spotlight');
  Route::get('about', 'SponController@about')->name('about');
  Route::get('contact', 'SponController@contact')->name('contact');
  Route::get('submitevent', 'SponController@submitEvent')->name('submitevent')->middleware('auth');

 Route::resource('events', 'SubmitEventController'); 