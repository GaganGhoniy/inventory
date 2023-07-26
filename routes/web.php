<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


/* Route::get('/', function () {
    return view('index.index');
});*/

Auth::routes();
Route::middleware('auth')->group(function () {
    /* Dashboard */
    Route::get('/',                                     'DashboardController@index')->name('dashboard.index');
    Route::get('dashboard/cryptocurrency',              'DashboardController@cryptocurrency')->name('dashboard.cryptocurrency');
    Route::get('dashboard/campaign',                    'DashboardController@campaign')->name('dashboard.campaign');
    Route::get('dashboard/ecommerce',                   'DashboardController@ecommerce')->name('dashboard.ecommerce');

    Route::prefix('/users')->group(function () {
        Route::get('profile',                'UserController@profile')->name('users.profile');
        Route::get('user',                'UserController@user')->name('users.user');
        Route::get('role',                'UserController@role')->name('users.role');
        Route::get('reviewer',                'UserController@reviewer')->name('users.reviewer');
        Route::get('add-reviewer',                'UserController@add_reviewer')->name('users.addreviewer');
        Route::get('edit-reviewer/{id}',                'UserController@edit_reviewer')->name('users.editreviewer');
    });
    Route::prefix('/master')->group(function () {
        Route::get('kategori',                'MasterController@kategori')->name('master.kategori');
        Route::get('merk',                'MasterController@merk')->name('master.merk');
        Route::get('supliyer',                'MasterController@supliyer')->name('master.supliyer');
        Route::get('barang',                'MasterController@barang')->name('master.barang');
    });

    Route::prefix('/transaksi')->group(function () {
        Route::get('barang-masuk',                'MasterController@barangMasuk')->name('transaksi.masuk');
        Route::get('barang-keluar',                'MasterController@barangKeluar')->name('transaksi.keluar');
    });

    Route::prefix('/laporan')->group(function () {
        Route::get('laporan-barang-masuk',                'MasterController@laporanBarangMasuk')->name('laporan.masuk');
        Route::get('laporan-barang-keluar',                'MasterController@laporanBarangKeluar')->name('laporan.keluar');
        Route::get('laporan-barang-transaksi',                'MasterController@laporanBarangTransaksi')->name('laporan.transaksi');
        Route::get('laporan-barang-persediaan',                'MasterController@laporanBarangPersediaan')->name('laporan.persediaan');
        Route::get('laporan-barang-restok',                'MasterController@laporanBarangRestok')->name('laporan.restok');
    });


    Route::prefix('/api')->group(function () {
        Route::post('control', 'API\ApiController@store');

        Route::post('simpan-plot-user', 'API\ApiController@simpanPlotUser');

        Route::put('simpan-peran', 'API\ApiController@simpanPeran');
        // Route::delete('hapus-user', 'API\ApiController@hapusUser');

        Route::put('simpan-user', 'API\ApiController@simpanUser');
        Route::delete('hapus-user', 'API\ApiController@hapusUser');

        Route::put('simpan-kategori', 'API\ApiController@simpanKategori');
        Route::delete('hapus-kategori', 'API\ApiController@hapusKategori');

        Route::put('simpan-merk', 'API\ApiController@simpanMerk');
        Route::delete('hapus-merk', 'API\ApiController@hapusMerk');

        Route::put('simpan-supliyer', 'API\ApiController@simpanSupliyer');
        Route::delete('hapus-supliyer', 'API\ApiController@hapusSupliyer');

        Route::put('simpan-barang', 'API\ApiController@simpanBarang');
        Route::delete('hapus-barang', 'API\ApiController@hapusBarang');

        Route::put('simpan-barang-masuk', 'API\ApiController@simpanBarangMasuk');

        Route::put('simpan-barang-keluar', 'API\ApiController@simpanBarangKeluar');
        Route::put('simpan-status-barang-keluar', 'API\ApiController@simpanStatusBarangKeluar');

        Route::post('get-stok', 'API\ApiController@getStok');

        Route::post('set-filter', 'API\ApiController@setFilter');
    });
    /* Apps */

    Route::get('authentication/login',                  'AuthenticationController@login')->name('authentication.login');
    Route::get('authentication/register',               'AuthenticationController@register')->name('authentication.register');
    Route::get('authentication/forgotpassword',         'AuthenticationController@forgotpassword')->name('authentication.forgotpassword');
    Route::get('authentication/error404',               'AuthenticationController@error404')->name('authentication.error404');


});
