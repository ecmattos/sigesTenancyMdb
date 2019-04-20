<?php

Route::get('/', function () {
    return view('welcome');
});


#Auth::routes(['verify' => true]);

Route::get('login', 'Api\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Api\Auth\LoginController@login');
Route::post('logout', 'Api\Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Api\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Api\Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Api\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Api\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Api\Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Api\Auth\ResetPasswordController@reset')->name('password.update');

// Email Verification Routes...
Route::get('email/verify', 'Api\Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Api\Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Api\Auth\VerificationController@resend')->name('verification.resend');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tenant/{client}', 'TenantController@switch')->name('tenant.switch');

#Route::resource('clients', 'Api\ClientController');

Route::get('clients', 'Api\ClientsController@create')->name('clients.create');
Route::post('clients', 'Api\ClientsController@store')->name('clients.store');

