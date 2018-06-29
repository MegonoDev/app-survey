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
Route::get('/', 'FrontendController@event')->name('eonesia');
Route::get('/apievent', 'FrontendController@apievent');
Route::get('/testsms', 'FrontendController@testsms');
Route::get('/updateevent', 'FrontendController@updateevent');
Route::get('pendaftaran/event/{slug}', [
	'uses' => 'FrontendController@pendaftaran',
	'as'   => 'pendaftaran'
]);
Route::post('registereonesia', [
    'uses' => 'FrontendController@registereonesia',
    'as'   => 'pendaftaranevent'
]);  


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace' => 'Backend', 'prefix' => 'backend'], function() {
    Route::resource('event', 'ActivitieController');    
    Route::resource('member', 'MemberController');
    Route::post('search/getkode', [
        'uses' => 'MemberController@getkode',
        'as'   => 'search'
    ]);   
});

