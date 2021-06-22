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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware'=>['auth','role:1']],function(){
    Route::get('beranda','BerandaController@index');
    //siswa
    Route::get('siswa','SiswaController@index');
    Route::get('siswa/add','SiswaController@add');
    Route::post('siswa/add','SiswaController@store');
    Route::get('siswa/{id}/delete','SiswaController@delete');


    //kandidat
    Route::get('kandidat','KandidatController@index');
    Route::get('kandidat/detail/{id}','KandidatController@show');
    Route::DELETE('kandidat/{id}','SiswaController@DELETE');
    Route::get('kandidat/add','KandidatController@add');
    Route::post('kandidat/add','KandidatController@store');
    Route::get('kandidat/{id}','KandidatController@edit');
    Route::put('kandidat/{id}','KandidatController@update');
    Route::get('kandidat/{id}/delete','KandidatController@delete');

    //pemilihan
    Route::get('pemilihan','PemilihanController@index');
    Route::get('pemilihan/vote/{id}','PemilihanController@voting');

    //grafik
    Route::get('grafik','GrafikController@index');

    //Voting
    Route::get('voting','VotingController@index');

    //Periode
    Route::get('set_periode','PeriodeController@index');
    Route::post('set_periode','PeriodeController@set_periode');
    Route::get('periode','PeriodeController@periode');

});
Route::get('periode','PeriodeController@periode');
Route::get('voting','VotingController@index');
Route::get('pemilihan','PemilihanController@index');
Route::get('pemilihan/vote/{id}','PemilihanController@voting');

Route::get('grafik','GrafikController@index');
Route::get('logout',function(){
    Auth::logout();
    return redirect('/');
});

Auth::routes();

Route::get('/home','BerandaController@home');
