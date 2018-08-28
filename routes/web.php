<?php

Route::get('/login-event', function () {
    return view('auth.login');
});
Route::post('login-event', [
    'uses' => 'Auth\LoginController@login',
    'as'   => 'login'
]);
Route::post('logout', [
    'uses' => 'Auth\LoginController@logout',
    'as'   => 'logout'
]);


Route::get('/', 'FrontendController@event')->name('eonesia');
Route::get('pendaftaran/test-drive', 'DopdownController@getData')->name('getData');
Route::post('select-kabupaten', ['as'=>'select-kabupaten','uses'=>'DopdownController@selectKabupaten']);
Route::post('select-dealereo', ['as'=>'select-dealereo','uses'=>'DopdownController@selectDealereo']);

Route::post('pendaftaran/post', [
	'uses' => 'FrontendController@registerTestdrive',
	'as'   => 'registerTestdrive'
]);

Route::group(['namespace' => 'Backend', 'prefix' => 'backend','middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::post('kabupaten-select', ['as'=>'kabupaten-select','uses'=>'MemberController@kabupatenSelect']);
    Route::resource('dealer', 'DealereoController', ['except' => [
        'create', 'show'
     ]]);

     Route::resource('customers', 'MemberController');
     Route::resource('users', 'UserController');
     Route::resource('role', 'RoleController', ['except' => [
        'create', 'show'
     ]]);
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
    Route::get('cetakLaporanExcel', [
        'uses' => 'CetakController@cetakLaporanExcel',
        'as'   => 'cetak.laporan.excel'
    ]);
    Route::post('cetakLaporanPostExcel', [
        'uses' => 'CetakController@cetakLaporanPostExcel',
        'as'   => 'cetak.laporan-post.excel'
    ]);

    Route::get('cetakLaporanPdf', [
        'uses' => 'CetakController@cetakLaporanPdf',
        'as'   => 'cetak.laporan.pdf'
    ]);
    Route::post('cetakLaporanPostPdf', [
        'uses' => 'CetakController@cetakLaporanPostPdf',
        'as'   => 'cetak.laporan-post.pdf'
    ]);

    });





