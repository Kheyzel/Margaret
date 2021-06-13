<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('frontend.index');
// });

// Frontend
Route::get('/', ['as' => 'frontend.index', 'uses' => 'FrontendController@index']);


// Backend
Route::group(['middleware' => 'auth'], function () {
Route::get('/dashboard', ['as' => 'backend.index', 'uses' => 'BackendController@index']);
// About Us
Route::get('/about-us', ['as' => 'about-us.index', 'uses' => 'AboutUsController@index']);
// Mission
Route::get('/about-us/mission/create', ['as' => 'about-us.createMission', 'uses' => 'MissionController@create']);
Route::post('/about-us/mission/store', ['as' => 'about-us.storeMission', 'uses' => 'MissionController@store']);
Route::get('/about-us/mission/{id}/edit', ['as' => 'about-us.editMission', 'uses' => 'MissionController@edit']);
Route::put('/about-us/mission/{mission}', ['as' => 'about-us.updateMission', 'uses' => 'MissionController@update']);
Route::delete('/about-us/mission/{mission}', ['as' => 'about-us.destroyMission', 'uses' => 'MissionController@destroy']);
// Vision
Route::get('/about-us/vision/create', ['as' => 'about-us.createVision', 'uses' => 'VisionController@create']);
Route::post('/about-us/vision/store', ['as' => 'about-us.storeVision', 'uses' => 'VisionController@store']);
Route::get('/about-us/vision/{id}/edit', ['as' => 'about-us.editVision', 'uses' => 'VisionController@edit']);
Route::put('/about-us/vision/{vision}', ['as' => 'about-us.updateVision', 'uses' => 'VisionController@update']);
Route::delete('/about-us/vision/{vision}', ['as' => 'about-us.destroyVision', 'uses' => 'VisionController@destroy']);
// What We Do
Route::get('/what-we-do', ['as' => 'whatwedo.index', 'uses' => 'GalleryController@index']);
Route::get('/what-we-do/create', ['as' => 'whatwedo.create', 'uses' => 'GalleryController@create']);
Route::post('/what-we-do/store',  ['as' => 'whatwedo.store', 'uses' => 'GalleryController@store']);
Route::delete('/what-we-do/{gallery}', ['as' => 'whatwedo.destroy', 'uses' => 'GalleryController@destroy']);
// Programs & Services
Route::get('/programs-and-services', ['as' => 'program.index', 'uses' => 'ProgramController@index']);
Route::get('/programs-and-services/create', ['as' => 'program.create', 'uses' => 'ProgramController@create']);
Route::post('/programs-and-services/store', ['as' => 'program.store', 'uses' => 'ProgramController@store']);
Route::get('/programs-and-services/{id}/edit', ['as' => 'program.edit', 'uses' => 'ProgramController@edit']);
Route::put('/programs-and-services/{program}', ['as' => 'program.update', 'uses' => 'ProgramController@update']);
Route::delete('/programs-and-services/{program}', ['as' => 'program.destroy', 'uses' => 'ProgramController@destroy']);
// Organizational Chart
Route::get('/organizational-chart', ['as' => 'organization.index', 'uses' => 'OrganizationController@index']);
Route::get('/organizational-chart/create', ['as' => 'organization.create', 'uses' => 'OrganizationController@create']);
Route::post('/organizational-chart/store', ['as' => 'organization.store', 'uses' => 'OrganizationController@store']);
Route::get('/organizational-chart/{id}/edit', ['as' => 'organization.edit', 'uses' => 'OrganizationController@edit']);
Route::put('/organizational-chart/{organization}', ['as' => 'organization.update', 'uses' => 'OrganizationController@update']);
Route::delete('/organizational-chart/{organization}', ['as' => 'organization.destroy', 'uses' => 'OrganizationController@destroy']);
// Calendar of Activities
Route::get('/calendar-of-activities', ['as' => 'calendar.index', 'uses' => 'CalendarController@index']);
Route::get('/calendar-of-activities/create', ['as' => 'calendar.create', 'uses' => 'CalendarController@create']);
Route::post('/calendar-of-activities/store', ['as' => 'calendar.store', 'uses' => 'CalendarController@store']);
Route::get('/calendar-of-activities/{id}/edit', ['as' => 'calendar.edit', 'uses' => 'CalendarController@edit']);
Route::put('/calendar-of-activities/{calendar}', ['as' => 'calendar.update', 'uses' => 'CalendarController@update']);
Route::delete('/calendar-of-activities/{calendar}', ['as' => 'calendar.destroy', 'uses' => 'CalendarController@destroy']);
// Contact
Route::get('/contact', ['as' => 'contact.index', 'uses' => 'ContactController@index']);
Route::get('/contact/{id}/edit', ['as' => 'contact.edit', 'uses' => 'ContactController@edit']);
Route::put('/contact/{contact}', ['as' => 'contact.update', 'uses' => 'ContactController@update']);
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');
