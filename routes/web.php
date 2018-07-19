<?php

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

Route::post('logout', [
    'uses' => 'Auth\LoginController@logout',
    'as'   => 'logout'
]);

Route::get('/', 'FrontendController@event')->name('eonesia');
Route::get('pendaftaran/test-drive', 'DopdownController@getData')->name('getData');
Route::post('select-ajax', ['as'=>'select-ajax','uses'=>'DopdownController@selectAjax']);

Route::post('pendaftaran/post', [
	'uses' => 'FrontendController@registerTestdrive',
	'as'   => 'registerTestdrive'
]);

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace' => 'Backend', 'prefix' => 'backend'], function() { 
    Route::resource('penyelenggara', 'DealereoController');    
    Route::resource('member', 'MemberController');
    Route::resource('kota', 'RoleController');
    Route::resource('admin-kota', 'UserController'); 
    Route::resource('lokasi-kota', 'LocationController'); 
    //profile 
    Route::get('editpassword/{id}', 'ProfileController@editpassword')->name('editpassword');
    Route::put('updatepassword/{id}', 'ProfileController@updatepassword')->name('updatepassword'); 
    Route::get('profile/{name}', 'ProfileController@profile')->name('profile');
    Route::put('updateprofile/{id}', 'ProfileController@updateprofile')->name('updateprofile');
    Route::get('profilepassword/{name}', 'ProfileController@profilepassword')->name('profilepassword');
    //verifikasi kode
    Route::post('search/getkode/', [
        'uses' => 'VerifikasiController@getkode',
        'as'   => 'search'
    ]); 
    Route::put('verifikasi/kode/', [
        'uses' => 'VerifikasiController@verifikasiKode',
        'as'   => 'verifikasiKode'
    ]); 
    //cetak laporan
    Route::get('cetakLaporan', [
        'uses' => 'CetakController@cetakLaporan',
        'as'   => 'cetak.laporan'
    ]);
    Route::post('cetakLaporanPost', [
        'uses' => 'CetakController@cetakLaporanPost',
        'as'   => 'cetak.laporan-post'
    ]);

    });





