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

Route::get('/', 'SiteController@index');

Route::get('/newpost', function() {
  return view('posts.newpost');
});

Route::get('/newreport', function() {
  return view('reports.newreport');
});

Route::get('/createnews', function() {
  return view('news.createnews');
});

Route::post('/create_post',[
    'uses'=>'PostController@store',
    'as'=>'create_post'
]);

Route::get('/posts', [
  'uses'=>'PostController@index',
  'as'=>'posts'
]);

Route::get('/post/{id}',[
  'uses'=>'PostController@show',
  'as'=>'post'
]);

Route::get('/centres',[
  'uses'=>'CentreController@index',
  'as'=>'centres'
]);

Route::get('/report/{id}',[
  'uses'=>'ReportController@show',
  'as'=>'report'
]);

Route::get('/reports', [
  'uses'=>'ReportController@index',
  'as'=>'reports'
]);

Route::post('/create_report',[
    'uses'=>'ReportController@store',
    'as'=>'create_report'
]);

Route::get('/news', [
  'uses'=>'NewsController@index',
  'as'=>'news'
]);

Route::get('/partners', [
  'uses'=>'PartnerController@index',
  'as'=>'partners'
]);



Auth::routes();

Route::get('/home', 'HomeController@index');
