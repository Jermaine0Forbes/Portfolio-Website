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

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/contact/preview', 'ContactController@preview')->name('preview');

Route::post('/contact', 'ContactController@send')->name('contact.submit');


Route::post('/', 'AddressController@store');

Route::get('/test', 'TestController@index')->name('test');

Auth::routes();

Route::prefix('admin')->group(function() {

// SKILLS
Route::get('/skills', 'AdminController@skills')->name('admin.skills');
Route::post('/skills', 'AdminController@skillsStore')->name('admin.skills.submit');

// PORTFOLIO
Route::get('/portfolio', 'AdminController@portfolioIndex')->name('admin.portfolio');
Route::get('/portfolio/{id}', 'AdminController@portfolioPage')->name('admin.portfolio.page');
Route::post('/portfolio/{id}', 'AdminController@portfolioPageStore')->name('admin.portfolio.page.submit');

// ABOUT
Route::get('/about', 'AdminController@about')->name('admin.about');
Route::post('/about', 'AdminController@aboutStore')->name('admin.about.submit');

// LOGIN
Route::get('/login', 'AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'AdminLoginController@login')->name('admin.login.submit');

// DASHBOARD
Route::get('/', 'AdminController@index')->name('admin.dashboard');

// LOGOUT
Route::post('/logout', 'AdminLoginController@logout')->name('admin.logout');

// REGISTER
Route::get('/register', 'AdminController@showRegisterForm')->name('admin.register');
Route::post('/register', 'AdminController@register')->name('admin.register.submit');



  // Password reset routes
  Route::post('/password/email', 'AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});

// Route::get('/home', 'HomeController@index')->name('home');
