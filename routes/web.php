<?php

Route::get('/login', function() {
    return view('errors.404');
})->name('login');


Route::post('/admin/login', 'Auth\LoginController@loginadmin')->name('login.admin');
Route::post('/sales/login', 'Auth\LoginController@loginsales')->name('login.sales');
Route::get('/admin/login', 'Auth\LoginController@adminform')->name('login.admin');;
Route::get('/sales/login', 'Auth\LoginController@salesform')->name('login.sales');;
Route::post('/admin/logout', 'Auth\LoginController@adminlogout')->name('admin.logout');
Route::post('/sales/logout', 'Auth\LoginController@saleslogout')->name('sales.logout');
Route::post('/sales/register', 'Auth\RegisterController@salesregister')->name('register.sales');
Route::get('/sales/register', 'Auth\RegisterController@salesregisterform')->name('register.sales');

// verifikasi by email/link
Route::get('/verification/code/{kode}',[
    'uses' => 'FrontendController@verifikasiByUrl',
    'as' => 'verifikasiurl'
]);

Route::get('/cari-sales','Select2Controller@loadSales')->name('cari-sales');
// Route::get('/cari-sales/s/','Select2Controller@loadOldSales')->name('old-sales');

Route::get('/', 'FrontendController@event')->name('eonesia');
Route::get('/register/successful', 'FrontendController@successfulRegister')->name('successful-register');
Route::get('register', 'DopdownController@getData')->name('getData');
Route::post('select-kabupaten', ['as'=>'select-kabupaten','uses'=>'DopdownController@selectKabupaten']);
Route::post('select-kecamatan', ['as'=>'select-kecamatan','uses'=>'DopdownController@selectKecamatan']);
Route::post('select-kelurahan', ['as'=>'select-kelurahan','uses'=>'DopdownController@selectKelurahan']);
Route::post('select-sales', ['as'=>'select-sales','uses'=>'DopdownController@selectSales']);
// Route::post('select-seri', ['as'=>'select-seri','uses'=>'MotorController@selectSeri']);

Route::post('register/post', [
	'uses' => 'FrontendController@registerTestdrive',
	'as'   => 'registerTestdrive'
]);

Route::group(['namespace' => 'Backend', 'prefix' => 'backend','middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');

    // Route::post('kabupaten-select', ['as'=>'kabupaten-select','uses'=>'MemberController@kabupatenSelect']);
    Route::get('customers/kode/{kode}', 'MemberController@detailCustomer')->name('detail.customer');
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

    //undian
    Route::get('undian','HadiahController@index')->name('hadiah.index');
    Route::get('undian/{id}/edit/','HadiahController@edit')->name('hadiah.edit');
    Route::put('undian/{id}/update/','HadiahController@update')->name('hadiah.update');
    Route::delete('undian/delete/{id}/post/','HadiahController@destroy')->name('hadiah.destroy');
    Route::post('undian','HadiahController@undiPemenang')->name('undi-pemenang');
    Route::post('store-undian','HadiahController@storePemenang')->name('store-pemenang');
    Route::post('all-pemenang','HadiahController@allPemenang')->name('all-pemenang');

    });




