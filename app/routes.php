<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',array('as' => 'home' , 'uses' => 'DashboardController@index'));


Route::get('dashboard',array('as' => 'dashboard' , 'uses' => 'DashboardController@dashboard'));

Route::get('about_us',array('as' => 'about' , 'uses' => 'DashboardController@about'));

Route::get('contact',array('as' => 'contact' , 'uses' => 'DashboardController@contact'));

Route::get('project/{id}',array('as' => 'contact' , 'uses' => 'DashboardController@project'));

Route::get('contact',array('as' => 'contact' , 'uses' => 'DashboardController@contact'));