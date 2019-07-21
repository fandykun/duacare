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
Route::get('/updated-activity', 'TelegramBotController@updatedActivity');
// tentang duacare
Route::get('/visi-misi', 'PagesController@getVisiMisiPage');
Route::get('/organizer', 'PagesController@getOrganizerPage');
Route::get('/laporan-keuangan', 'PagesController@getFinanceReportPage');

Route::get('/duacare-loyal-donature', 'PagesController@getDLDPage');

Route::get('/news', 'PagesController@getNewsPage');
Route::get('/news/search', 'PagesController@getNewsBySearch')->name('search.news');
Route::get('/news/{id}/{title}', 'PagesController@getNewsDetailPage');

Route::get('/articles', 'PagesController@getArticlesPage');
Route::get('/articles/search', 'PagesController@getArticlesBySearch')->name('search.articles');
Route::get('/article/{id}/{title}', 'PagesController@getArticlesDetailPage');

Route::get('/contact', 'PagesController@getContactPage');

Route::post('/dld/submit', 'DldController@submitDLD')->name('submit.dld');

Route::get('/event/duacare-goes-to-school', 'PagesController@getDGTSPage');
Route::get('/event/duacare-for-ramadhan', 'PagesController@getDFRPage');
Route::get('/event/beasiswa-duacare', 'PagesController@getBeasiswaPage');
Route::get('/event/duacare-camp', 'PagesController@getCampPage');
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
		Route::get('/event/show/{id}', 'EventController@getEvent');
		Route::get('/event/create', 'EventController@createEventPage')->name('event.create');
		Route::post('/event/create', 'EventController@storeEvent')->name('event.store');
		Route::put('/event', 'EventController@updateEvent')->name('event.update');
		Route::delete('/event', 'EventController@deleteEvent')->name('event.delete');
		Route::get('/event/export', 'EventController@exportEvent')->name('event.export');

		//News
		Route::get('/news', 'NewsController@readNewsPage');
		Route::get('/news/show/{id}', 'NewsController@getNews');
		Route::get('/news/create', 'NewsController@createNewsPage')->name('news.create');
		Route::post('/news/create', 'NewsController@storeNews')->name('news.store');
		Route::put('/news', 'NewsController@updateNews')->name('news.update');
		Route::delete('/news', 'NewsController@deleteNews')->name('news.delete');
		Route::get('/news/export', 'NewsController@exportNews')->name('news.export');

		//Organizer
		Route::get('/organizer', 'OrganizerController@index');
		Route::get('/organizer/show/{id}', 'OrganizerController@getOrganizer');
		Route::get('/organizer/create', 'OrganizerController@createOrganizerPage')->name('organizer.create');
		Route::post('/organizer/create', 'OrganizerController@storeOrganizer')->name('organizer.store');
		Route::put('/organizer', 'OrganizerController@updateOrganizer')->name('organizer.update');
		Route::delete('/organizer', 'OrganizerController@deleteOrganizer')->name('organizer.delete');
		Route::get('/organizer/export', 'OrganizerController@exportOrganizer')->name('organizer.export');

		//DLD
		Route::get('/dld', 'DldController@index');
		Route::get('/dld/show/{id}', 'DldController@getDLD');
		Route::get('/dld/create', 'DldController@createDLDPage')->name('dld.create');
		Route::post('/dld/create', 'DldController@storeDLD')->name('dld.store');
		Route::put('/dld', 'DldController@updateDLD')->name('dld.update');
		Route::delete('/dld', 'DldController@deleteDLD')->name('dld.delete');
		Route::get('/dld/export', 'DldController@exportDLD')->name('dld.export');

		//Testimony
		Route::get('/testimony', 'TestimonyController@index');
		Route::get('/testimony/show/{id}', 'TestimonyController@getTestimony');
		Route::get('/testimony/create', 'TestimonyController@createTestimonyPage')->name('testimony.create');
		Route::post('/testimony/create', 'TestimonyController@storeTestimony')->name('testimony.store');
		Route::put('/testimony', 'TestimonyController@updateTestimony')->name('testimony.update');
		Route::delete('/testimony', 'TestimonyController@deleteTestimony')->name('testimony.delete');
		Route::get('/testimony/export', 'TestimonyController@exportTestimony')->name('testimony.export');

		//Financial report
		Route::get('/financial-report', 'FinancialReportController@index');
		Route::get('/financial-report/show/{id}', 'FinancialReportController@getFinancialReport');
		Route::get('/financial-report/create', 'FinancialReportController@createFinancialReportPage')->name('financialReport.create');
		Route::post('/financial-report/create', 'FinancialReportController@storeFinancialReport')->name('financialReport.store');
		Route::put('/financial-report', 'FinancialReportController@updateFinancialReport')->name('financialReport.update');
		Route::delete('/financial-report', 'FinancialReportController@deleteFinancialReport')->name('financialReport.delete');
		Route::get('/financial-report/export', 'FinancialReportController@exportFinancialReport')->name('financialReport.export');

		//Slider
		Route::get('/slider', 'SliderController@index');
		Route::get('/slider/show/{id}', 'SliderController@getSlider');
		Route::get('/slider/create', 'SliderController@createSliderPage')->name('slider.create');
		Route::post('/slider/create', 'SliderController@storeSlider')->name('slider.store');
		Route::put('/slider', 'SliderController@updateSlider')->name('slider.update');
		Route::delete('/slider', 'SliderController@deleteSlider')->name('slider.delete');
		Route::get('/slider/export', 'SliderController@exportSlider')->name('slider.export');
	});
});
