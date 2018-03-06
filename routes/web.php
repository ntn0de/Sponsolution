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
Route::post('events/changeStatus', array('as' => 'changeStatus', 'uses' => 'SponController@changeStatus')); 

  Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/events', 'AdminController@events')->name('admin.events');
    Route::get('/brands', 'AdminController@brands')->name('admin.brands');
    Route::get('/users', 'AdminController@users')->name('admin.users');
    // Password reset routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
  });

  Route::prefix('brand')->group(function() {
    Route::get('/login', 'Auth\BrandLoginController@showLoginForm')->name('brand.login');
    Route::post('/login', 'Auth\BrandLoginController@login')->name('brand.login.submit');
    Route::post('/logout', 'Auth\BrandLoginController@logout')->name('brand.logout');
    Route::get('/', 'BrandController@index')->name('brand.dashboard');
    Route::get('/test', 'BrandController@test')->name('brand.test');
    Route::get('/register', 'BrandController@showRegisterForm')->name('brand.register');
    Route::post('/register', 'BrandController@store')->name('brand.store');
    // Password reset routes
    Route::post('/password/email', 'Auth\BrandForgotPasswordController@sendResetLinkEmail')->name('brand.password.email');
    Route::get('/password/reset', 'Auth\BrandForgotPasswordController@showLinkRequestForm')->name('brand.password.request');
    Route::post('/password/reset', 'Auth\BrandResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\BrandResetPasswordController@showResetForm')->name('brand.password.reset');
  });


  Route::get('/', 'SponController@index')->name('home');
 
  Route::get('event', 'SponController@event')->name('event');
  Route::get('spotlight', 'SponController@spotlight')->name('spotlight');
  Route::get('about', 'SponController@about')->name('about');
  Route::get('contact', 'SponController@contact')->name('contact');
  Route::get('submitevent', 'SponController@submitEvent')->name('submitevent')->middleware('auth');

 Route::resource('events', 'SubmitEventController'); 