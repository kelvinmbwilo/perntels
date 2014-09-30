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

Route::get('planning', array('as' => 'planning', 'uses' => 'DashboardController@planning'));

Route::get('civil', array('as' => 'civil', 'uses' => 'DashboardController@civil'));


Route::get('telecommunications',array('as' => 'telecoms' , 'uses' => 'DashboardController@telecoms'));

Route::get('links_installations',array('as' => 'links' , 'uses' => 'DashboardController@telecoms_links'));

Route::get('2g_3g',array('as' => '2g_3g' , 'uses' => 'DashboardController@telecoms_2g'));

Route::get('fiber',array('as' => 'fiber' , 'uses' => 'DashboardController@telecoms_fiber'));