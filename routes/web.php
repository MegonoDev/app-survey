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

Route::get('/login-event', function () {
    return view('auth.login');
});
Route::post('login-post', [
    'uses' => 'Auth\LoginController@login',
    'as'   => 'login'
]); 
Route::post('logout', [
    'uses' => 'Auth\LoginController@logout',
    'as'   => 'logout'
]); 


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

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace' => 'Backend', 'prefix' => 'backend'], function() {
    Route::resource('event', 'ActivitieController');    
    Route::resource('member', 'MemberController');
    Route::resource('kota', 'RoleController');
    Route::resource('admin-kota', 'UserController');  
Route::get('editpassword/{id}', 'ProfileController@editpassword')->name('editpassword');
Route::put('updatepassword/{id}', 'ProfileController@updatepassword')->name('updatepassword'); 
Route::get('profile/{name}', 'ProfileController@profile')->name('profile');
Route::put('updateprofile/{id}', 'ProfileController@updateprofile')->name('updateprofile');
Route::get('profilepassword/{name}', 'ProfileController@profilepassword')->name('profilepassword');

    Route::post('search/getkode', [
        'uses' => 'MemberController@getkode',
        'as'   => 'search'
    ]);   
});

