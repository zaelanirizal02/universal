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
use App\Models\Artikel;
use Illuminate\Http\Request;

Route::get('/', 'Indexcontroller@index');


Route::group(['prefix' => 'blog','middleware' => 'auth'], function (){
  Route::get('/', 'BlogController@index')->middleware('auth');
  Route::get('/dasboard', 'BlogController@dasboard');


  Route::get('/create', 'BlogController@create');
  Route::post('/', 'BlogController@store');


  Route::get('/{id}', 'BlogController@show')->name('linkartikel');

  Route::get('/{id}/edit', 'BlogController@edit')->name('ngeditartikel');
  Route::put('/{id}', 'BlogController@update');

  Route::delete('/{id}', 'BlogController@destroy');

});



Auth::routes();
Route::get('/blogUser', 'BlogUserController@index');
Route::get('/{id}', 'BlogController@show')->name('link');


//organisasi
Route::get('/organisasi/home', 'OrganisasiController@index');

Route::get('/organisasi/create', 'OrganisasiController@create');
Route::post('/organisasi', 'OrganisasiController@store');
Route::get('/organisasi/dashboard', 'OrganisasiController@dashboard');

Route::get('/organisasi/{id}', 'OrgainsasiController@show')->name('linkorganisasi');

Route::get('/organisasi/{id}/edit', 'OrganisasiController@edit')->name('ngeditorganisasi');

Route::put('/organisasi/{id}', 'OrganisasiController@update');

Route::delete('/organisasi/{id}', 'OrganisasiController@destroy');



//profile
Route::get('/profile/home', 'ProfileController@index');

Route::get('/profile/create', 'ProfileController@create');
Route::post('/profile', 'ProfileController@store');

Route::get('/profile/{id}', 'ProfileController@show')->name('linkprofile');

Route::get('/profile/{id}/edit', 'ProfileController@edit')->name('ngeditprofile');
Route::put('/profile/{id}', 'ProfileController@update');

Route::delete('/profile/{id}', 'ProfileController@destroy');


//uks
Route::get('/uks/home', 'UksController@index');

Route::get('/uks/create', 'UksController@create');
Route::post('/uks', 'UksController@store');

Route::get('/uks/{id}', 'UksController@show')->name('linkuks');

Route::get('/uks/{id}/edit', 'UksController@edit')->name('ngedituks');
Route::put('/uks/{id}', 'UksController@update');

Route::delete('/uks/{id}', 'UksController@destroy');




//Santri
Route::get('/santri/home', 'SantriController@index');
Route::get('/santri/export_excel', 'SantriController@export_excel');
Route::post('/santri/import_excel', 'SantriController@import_excel');

Route::get('/santri/create', 'SantriController@create');
Route::post('/santri', 'SantriController@store');
Route::get('/santri/{id}', 'SantriController@show')->name('linksantri');
Route::get('/santri/{id}', 'SantriController@edit')->name('ngeditsantri');
Route::put('/santri/{id}'. 'SantriController@update');
Route::delete('santri/{id}', 'SantriController@destroy');
//dashboard

Route::get('/dashboard/home', 'AdminController@index');
Route::get('/dashboard/organisasi', 'AdminController@organisasi');
Route::get('/dashboard/artikel', 'AdminController@artikel');
Route::get('/dashboard/santri', 'AdminController@santri');
Route::get('/dashboard/uks', 'AdminController@uks');
Route::get('/dashboard/profile', 'AdminController@profile');
