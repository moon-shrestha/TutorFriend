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



/*Route::get('/users/{id}', function($id){
    return ' This is user ' .$id;
});*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/about', function(){
    return view('pages.about');
});*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/searchhome', 'PagesController@searchhome');
Route::get('/tutors', 'PostsController@create');
Route::any('/search', 'SearchController@filter')->name('search');
Route::any('/advancesearch', 'SearchController@advancesearch')->name('advancesearch');

Route::any('/connect', 'PhpMailerController@sendEmail')->name('connect');

Route::resource('posts', 'PostsController');
Auth::routes();

Route::get('/profile', 'ProfileController@index');
Route::get('/myprofile', 'PagesController@editprofile');
route::any('/profileupdate', 'PagesController@saveProfile')->name('profileupdate');

Route::post('/sendbasicemail','MailController@basic_email');