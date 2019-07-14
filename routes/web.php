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

Route::post('/dld/submit', 'DldController@submitDLD')->name('submit.dld');
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
		Route::get('/event/show/{id}', 'EventController@getEvent');
		Route::put('/event', 'EventController@updateEvent')->name('event.update');
		Route::delete('/event', 'EventController@deleteEvent')->name('event.delete');
		Route::get('/event/export', 'EventController@exportEvent')->name('event.export');

		//News
		Route::get('/news', 'NewsController@readNewsPage');
		Route::get('/news/v1/{id}', 'NewsController@getNews');
		Route::get('/news/create', 'NewsController@create');
		Route::post('/news/create', 'NewsController@store')->name('news.store');
		Route::put('/news', 'NewsController@updateNews')->name('news.update');
		Route::delete('/news', 'NewsController@deleteNews')->name('news.delete');
		Route::get('/news/export', 'NewsController@exportNews')->name('news.export');

		//Organizer
		Route::get('/organizer', 'OrganizerController@index');
		Route::get('/organizer/show/{id}', 'OrganizerController@getOrganizer');
		Route::put('/organizer', 'OrganizerController@updateOrganizer')->name('organizer.update');
		Route::delete('/organizer', 'OrganizerController@deleteOrganizer')->name('organizer.delete');
		Route::get('/organizer/export', 'OrganizerController@exportOrganizer')->name('organizer.export');

		//DLD
		Route::get('/dld', 'DldController@index');
		Route::get('/dld/show/{id}', 'DldController@getDLD');
		Route::put('/dld', 'DldController@updateDLD')->name('dld.update');
		Route::delete('/dld', 'DldController@deleteDLD')->name('dld.delete');
		Route::get('/dld/export', 'DldController@exportDLD')->name('dld.export');

		//Testimony
		Route::get('/testimony', 'TestimonyController@index');
		Route::get('/testimony/show/{id}', 'TestimonyController@getTestimony');
		Route::put('/testimony', 'TestimonyController@updateTestimony')->name('testimony.update');
		Route::delete('/testimony', 'TestimonyController@deleteTestimony')->name('testimony.delete');
		Route::get('/testimony/export', 'TestimonyController@exportTestimony')->name('testimony.export');

		//Financial report
		Route::get('/financial-report', 'FinancialReportController@index');
		Route::get('/financial-report/show/{id}', 'FinancialReportController@getFinancialReport');
		Route::put('/financial-report', 'FinancialReportController@updateFinancialReport')->name('financialReport.update');
		Route::delete('/financial-report', 'FinancialReportController@deleteFinancialReport')->name('financialReport.delete');
		Route::get('/financial-report/export', 'FinancialReportController@exportFinancialReport')->name('financialReport.export');

		//Slider
		Route::get('/slider', 'SliderController@index');
		Route::get('/slider/show/{id}', 'SliderController@getSlider');
		Route::put('/slider', 'SliderController@updateSlider')->name('slider.update');
		Route::delete('/slider', 'SliderController@deleteSlider')->name('slider.delete');
		Route::get('/slider/export', 'SliderController@exportSlider')->name('slider.export');
	});
});
