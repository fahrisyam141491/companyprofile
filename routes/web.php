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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'CPController@index');

Route::get('admin','AdminController@index')->name('adminIndex');


//about 
Route::get('admin/about','AdminController@about')->name('adminAbout');
Route::get('admin/about/create','AdminController@createAbout')->name('adminCreateAbout');
Route::post('admin/about/save','AdminController@saveAbout')->name('saveAbout');
Route::get('admin/about/edit/{id}','AdminController@editAbout')->name('adminEditAbout');
Route::post('admin/about/update/{id}','AdminController@updateAbout')->name('adminUpdateAbout');
Route::get('admin/about/delete/{id}','AdminController@deleteAbout')->name('adminDeleteAbout');

//services
Route::get('admin/services','AdminController@services')->name('adminServices');
Route::get('admin/services/create','AdminController@createServices')->name('adminCreateServices');
Route::post('admin/services/save','AdminController@saveServices')->name('saveServices');
Route::get('admin/services/edit/{id}','AdminController@editServices')->name('adminEditServices');
Route::post('admin/services/update/{id}','AdminController@updateServices')->name('adminUpdateServices');
Route::get('admin/services/delete/{id}','AdminController@deleteServices')->name('adminDeleteServices');

//team
Route::get('admin/team','AdminController@team')->name('adminTeam');
Route::get('admin/team/create','AdminController@createTeam')->name('adminCreateTeam');
Route::post('admin/team/save','AdminController@saveTeam')->name('saveTeam');
Route::get('admin/team/edit/{id}','AdminController@editTeam')->name('adminEditTeam');
Route::post('admin/team/update/{id}','AdminController@updateTeam')->name('adminUpdateTeam');
Route::get('admin/team/delete/{id}','AdminController@deleteTeam')->name('adminDeleteTeam');

//contact
Route::get('admin/contact','AdminController@contact')->name('adminContact');
Route::get('admin/contact/create','AdminController@createContact')->name('adminCreateContact');
Route::post('admin/contact/save','AdminController@saveContact')->name('saveContact');
Route::get('admin/contact/edit/{id}','AdminController@editContact')->name('adminEditContact');
Route::post('admin/contact/update/{id}','AdminController@updateContact')->name('adminUpdateContact');
Route::get('admin/contact/delete/{id}','AdminController@deleteContact')->name('adminDeleteContact');

//berita
Route::get('admin/berita','AdminController@berita')->name('adminBerita');
Route::get('admin/berita/create','AdminController@createBerita')->name('adminCreateBerita');
Route::post('admin/berita/save','AdminController@saveBerita')->name('saveBerita');
Route::get('admin/berita/edit/{id}','AdminController@editBerita')->name('adminEditBerita');
Route::post('admin/berita/update/{id}','AdminController@updateBerita')->name('adminUpdateBerita');
Route::get('admin/berita/delete/{id}','AdminController@deleteBerita')->name('adminDeleteBerita');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
