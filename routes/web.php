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

use App\Pustakawan;

Route::get('/', 'PagesController@index');
Route::get('/anggota', 'AnggotaController@index');
Route::get('/pustakawan', 'PustakawanController@index');
Route::get('/kategori', 'KategoriController@index');
Route::get('/peminjaman', 'PeminjamanController@index');
Route::get('/peminjaman/{peminjaman}/kembali', 'PeminjamanController@kembali');
Route::put('/peminjaman/{peminjaman}/kembali','PeminjamanController@updatekembali');

Route::get('/buku/belumkembali', function()
{
   $blmkembali = DB::select('call belumKembali');
   dd($blmkembali);
});

Route::get('/anggota/dendasemua', function()
{
   $dendasemua = DB::select('call dendaAnggota');
   dd($dendasemua);
});

Route::get('/anggota/peminjamterbanyak', function()
{
   $pinjambnyk = DB::select('call peminjamTerbanyak');
   dd($pinjambnyk);
});

Route::get('/peminjaman/pinjamhariini', function()
{
   $pinjamhrini = DB::select('call pinjamHariIni');
   dd($pinjamhrini);
});

Route::get('/pustakawan/pustakawangabut', function()
{
   $pustakawangabut = DB::select('call pustakawanGabut');
   dd($pustakawangabut);
});

Route::get('/buku/stockkosong', function()
{
   $stockkosong = DB::select('call stockBukuKosong');
   dd($stockkosong);
});

Route::get('/pustakawan/{pustakawan}/banyakpelayanan', function($id)
{
   $banyakpelayanan = DB::select("SELECT banyakPelayanan($id)");
   dd($banyakpelayanan);
});

Route::get('/kategori/{kategori}/bukuperkategori', function($id)
{
   $bukuperkategori = DB::select("SELECT bukuPerKategori($id)");
   dd($bukuperkategori);
});

Route::get('/peminjaman/{peminjaman}/hitungbataskembali', function($id)
{
   $hitungbataskembali = DB::select("SELECT hitungBatasKembali($id)");
   dd($hitungbataskembali);
});

Route::get('/anggota/{anggota}/hitungbuku', function($id)
{
   $hitungbuku = DB::select("SELECT hitungBuku($id)");
   dd($hitungbuku);
});

Route::get('/peminjaman/{peminjaman}/hitungdenda', function($id)
{
   $hitungdenda = DB::select("SELECT hitungDenda($id)");
   dd($hitungdenda);
});

Route::get('/buku/hitungbukutelat', function()
{
   $hitungbukutelat = DB::select("SELECT hitungBukuTelat()");
   dd($hitungbukutelat);
});


Route::resource('anggota', 'AnggotaController');
Route::resource('buku', 'BukuController');
Route::resource('pustakawan', 'PustakawanController');
Route::resource('kategori', 'KategoriController');
Route::resource('peminjaman', 'PeminjamanController');

