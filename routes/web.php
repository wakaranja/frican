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

Route::get('/newreport', [
  'uses'=>'ReportController@create',
  'as'=>'new_report'
]);

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

Route::get('/dashboard_reports', [
  'uses'=>'ReportController@dashboard_reports',
  'as'=>'dashboard_reports'
]);

Route::post('/create_report',[
    'uses'=>'ReportController@store',
    'as'=>'create_report'
]);

Route::get('/edit_report/{id}',[
  'uses'=>'ReportController@edit',
  'as'=>'edit_report'
]);

Route::post('/update_report/{id}',[
  'uses'=>'ReportController@update',
  'as'=>'update_report'
]);

Route::get('/news', [
  'uses'=>'NewsController@index',
  'as'=>'news'
]);

Route::get('/createnews',[
  'uses'=>'NewsController@create',
  'as'=>'createnews'
]);

Route::get('/partners', [
  'uses'=>'PartnerController@index',
  'as'=>'partners'
]);

Route::get('/experts', [
  'uses'=>'ExpertController@index',
  'as'=>'experts'
]);

Route::get('/newevent', function() {
  return view('events.newevent');
})->middleware('auth');

Route::post('/create_event',[
    'uses'=>'EventController@store',
    'as'=>'create_event'
])->middleware('auth');

Route::get('/events',[
          'uses'=>'EventController@index',
          'as'=>'events'
]);

Route::get('/pastevents',[
          'uses'=>'EventController@pastevents',
          'as'=>'pastevents'
]);

Route::get('/allevents',[
          'uses'=>'EventController@allevents',
          'as'=>'allevents'
]);

Route::get('/adminevents',[
          'uses'=>'EventController@adminevents',
          'as'=>'adminevents'
])->middleware('auth');

Route::get('/event/{id}',[
  'uses'=>'EventController@show',
  'as'=>'event'
]);

Route::get('/edit_event/{id}',[
    'uses'=>'EventController@edit',
    'as'=>'edit_event'
])->middleware('auth');

Route::post('/update_event/{id}',[
    'uses'=>'EventController@update',
    'as'=>'update_event'
])->middleware('auth');

Route::get('/get_event_image/{id}',[
    'uses'=>'EventimageController@show',
    'as'=>'get_event_image'
])->middleware('auth');


Route::post('/add_event_image',[
    'uses'=>'EventimageController@store',
    'as'=>'add_event_image'
])->middleware('auth');

Route::get('/delete_event/{id}',[
    'uses'=>'EventController@destroy',
    'as'=>'delete_event'
])->middleware('auth');

Route::get('/africapolicy', [
  'uses'=>'DashboardController@index',
  'as'=>'dashboard'
])->middleware('auth');

Route::post('/eventsubscribe/{id}',[
  'uses'=>'EventController@eventsubscribe',
  'as'=>'eventsubscribe'
]);

Auth::routes();

Route::get('/home', 'HomeController@index');
