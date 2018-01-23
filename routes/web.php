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

Route::get('/home', 'HomeController@index');

  Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
  });


  Route::get('/', 'SponController@index')->name('home');
 
  Route::get('event', 'SponController@event')->name('event');
  Route::get('spotlight', 'SponController@spotlight')->name('spotlight');
  Route::get('about', 'SponController@about')->name('about');
  Route::get('contact', 'SponController@contact')->name('contact');
  Route::get('submitevent', 'SponController@submitEvent')->name('submitevent');

 Route::resource('events', 'SubmitEventController'); 