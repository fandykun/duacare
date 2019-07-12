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

//Page
Route::get('/', 'PagesController@getHomePage');
Route::get('/about', 'PagesController@getAboutPage');
Route::get('/duacare-loyal-donature', 'PagesController@getDLDPage');
Route::get('/organizer', 'PagesController@getOrganizerPage');
Route::get('/news', 'PagesController@getNewsPage');
Route::get('/news/search', 'PagesController@getNewsBySearch')->name('search.news');
Route::get('/news/{id}/{title}', 'PagesController@getNewsDetailPage');
Route::get('/contact', 'PagesController@getContactPage');

// Authentication Routes...

//Admin
Route::prefix('/admin')->group(function () {
	Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('/login', 'Auth\LoginController@login');
	Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

	Route::group(['middleware' => ['auth']], function () {
		Route::get('/', 'AdminController@getDashboardPage');

		//Event
		Route::get('/event', 'EventController@index');
		Route::get('/event/create', 'EventController@create');
		Route::post('/event/create', 'EventController@store')->name('event.store');

		//News
		Route::get('/news', 'NewsController@index');
		Route::get('/news/create', 'NewsController@create');
		Route::post('/news/create', 'NewsController@store')->name('news.store');

		//Organizer
		Route::get('/organizer', 'OrganizerController@index');

		//DLD
		Route::get('/dld', 'DldController@index');

		//Testimony
		Route::get('/testimony', 'TestimonyController@index');

		//Financial report
		Route::get('/financial-report', 'FinancialReportController@index');

		//Slider
		Route::get('/slider', 'SliderController@index');
	});
});
