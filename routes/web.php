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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/skills', 'SkillController@index')->name('skills');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/test', 'TestController@index')->name('test');

Auth::routes();

Route::prefix('admin')->group(function() {
  Route::get('/login', 'AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout', 'AdminLoginController@logout')->name('admin.logout');
  Route::get('/register', 'AdminLoginController@showRegisterForm')->name('admin.register');
  Route::post('/register', 'AdminLoginController@register')->name('admin.register.submit');
  Route::get('/about', 'AdminController@about')->name('admin.about');
  Route::post('/about', 'AdminController@aboutStore')->name('admin.about.submit');

  // Password reset routes
  Route::post('/password/email', 'AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});

// Route::get('/home', 'HomeController@index')->name('home');
