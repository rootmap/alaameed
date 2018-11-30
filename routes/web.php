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


Route::get('/','IndexController@index');
Route::get('/main','IndexController@index');
Route::get('/about','IndexController@AboutUs');
Route::get('/download','IndexController@download');
Route::get('/contact','IndexController@contact');
Route::post('/contact','IndexController@sendContactQuery');
Route::get('/clients','IndexController@clients');
Route::get('/gallery','IndexController@gallery');
Route::get('/services','IndexController@services');
Route::get('/services/{id}','IndexController@services');

Route::get('/profile','IndexController@profile');
Route::get('/projects','IndexController@projects');
Route::get('/projectsdetails/{id}','IndexController@projectsdetails');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/login', 'IndexController@login');

Route::group(['middleware' => 'auth'], function () {

// Route::post('logout', 'LoginController@logout');

Route::get('/logout',
    [
       'uses' => 'IndexController@logout',
       'as'   => 'logout'
    ]);

// Admin Panel
//site setting
Route::get('admin/site/dashboard','SiteSettingController@dashboard');
Route::get('admin/site/setting','SiteSettingController@index');
Route::post('admin/site/setting/save','SiteSettingController@store');
Route::post('admin/site/setting/update/{id}','SiteSettingController@update');
//slider
Route::get('admin/slider','SliderController@index');
Route::post('admin/slider/save','SliderController@store');
Route::get('admin/slider/edit/{id}','SliderController@show');
Route::post('admin/slider/update/{id}','SliderController@update');
Route::get('admin/slider/delete/{id}','SliderController@destroy');

//About Us 
Route::get('admin/about','PageDataController@index');
Route::post('admin/about/save','PageDataController@store');
Route::get('admin/about/edit/{id}','PageDataController@show');
Route::post('admin/about/update/{id}','PageDataController@update');
Route::get('admin/about/delete/{id}/{pid}','PageDataController@destroy');
//business Unit 
Route::get('admin/business','PageDataController@business');
Route::post('admin/business/save','PageDataController@store');
Route::get('admin/business/edit/{id}','PageDataController@show');
Route::post('admin/business/update/{id}','PageDataController@update');
Route::get('admin/business/delete/{id}/{pid}','PageDataController@destroy');



//About Us 
Route::get('admin/content','PageDataController@content');
Route::post('admin/content/save','PageDataController@contentsave');
Route::post('admin/content/update/{id}','PageDataController@contentupdate');

//international Unit 
Route::get('admin/service','PageDataController@service');
Route::post('admin/service/save','PageDataController@store');
Route::get('admin/service/edit/{id}','PageDataController@show');
Route::post('admin/service/update/{id}','PageDataController@update');
Route::get('admin/service/delete/{id}/{pid}','PageDataController@destroy');
//gallery 
Route::get('admin/gallery','DownloadController@index');
Route::post('admin/gallery/save','DownloadController@store');
Route::get('admin/gallery/edit/{id}','DownloadController@show');
Route::post('admin/gallery/update/{id}','DownloadController@update');
Route::get('admin/gallery/delete/{id}','DownloadController@destroy');



//download 
Route::get('admin/download','DownloadController@downloads');
Route::post('admin/download/save','DownloadController@savefile');
Route::get('admin/download/edit/{id}','DownloadController@showfile');
Route::post('admin/download/update/{id}','DownloadController@updatefile');
Route::get('admin/download/delete/{id}','DownloadController@destroyfile');

Route::get('admin/profile','PageDataController@profile');
Route::post('admin/profile/save','PageDataController@store');
Route::post('admin/profile/update/{id}','PageDataController@update');


Route::get('admin/projects','PageDataController@projects');

});

