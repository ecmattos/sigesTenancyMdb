<?php

use App\Tenant\Manager;

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
Route::resource('projects', 'Api\Tenant\ProjectsController');
Route::resource('materialUnits', 'Api\Tenant\MaterialUnitsController');


Route::get('/test', function() {
    dd(app(Manager::class)->getTenant());
});