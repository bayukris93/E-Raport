<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siswaController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

// Route::get('/', 'LoginController@login')->name('login');
Route::get('/', function () {
    return view('auth.teslogin');
    
});
Route::post('/', 'Auth\LoginController@login')->name('login');

Route::group(['middleware' => ['auth', 'cekRoles:admin']], function () {
    //mapel
    Route::get('mapel/tambahmapel', 'mapelController@tambahMapel')->name('tambahMapel');
    Route::post('mapel/simpanmapel', 'mapelController@simpanMapel')->name('simpanMapel');
    Route::get('mapel/editmapel{id}', 'mapelController@editMapel')->name('editMapel');
    Route::patch('mapel/updatemapel{id}', 'mapelController@updateMapel')->name('updateMapel');
    Route::delete('mapel/delete{id}', 'mapelController@delete')->name('hapusMapel');

    Route::get('siswa', 'siswaController@tampilSiswa')->name('siswa');
    Route::get('siswa/tambah', 'siswaController@tambah')->name('tambahSiswa');
    Route::post('siswa/simpan', 'siswaController@simpan')->name('simpanSiswa');
    Route::get('siswa/edit{id}', 'siswaController@edit')->name('editSiswa');
    Route::patch('siswa/update{id}', 'siswaController@update')->name('updateSiswa');
    Route::delete('siswa/delete{id}', 'siswaController@delete')->name('hapusSiswa');
    
    Route::get('/guru', 'guruController@tampilguru')->name('guru');
    Route::get('guru/tambah', 'guruController@tambahGuru')->name('tambahGuru');
    Route::post('guru/simpan', 'guruController@store')->name('simpanGuru');
    Route::get('guru/edit{id}', 'guruController@editGuru')->name('editGuru');
    Route::patch('guru/update{id}', 'guruController@updateGuru')->name('updateGuru');
    Route::delete('guru/delete{id}', 'guruController@delete')->name('hapusGuru');
    Route::get('siswa/input{id}', 'siswaController@inputnilai')->name('inputnilai');
    Route::post('siswa/simpaninput{id}', 'siswaController@simpanNilai')->name('simpanimput');
    Route::post('siswa/simpaninput{id}', 'siswaController@simpanNilai')->name('simpanimput');





    
});

Route::group(['middleware' => ['auth', 'cekRoles:admin,siswa']], function () {
    Route::get('dashboard', 'dashController@dashboard')->name('dashboard');
    Route::get('mapel', 'mapelController@mapel')->name('mapel');
    Route::get('siswa/nilai', 'siswaController@tampilnilai')->name('nilai');
    Route::get('logout', 'Auth\LoginController@Logout')->name('logout');
    
});
