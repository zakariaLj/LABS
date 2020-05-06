<?php

use Illuminate\Support\Facades\Route;
use App\Logo;
use App\Carousel;
use App\Video;
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


// Route de la page labs
Route::get('/', function () {
    $logo = Logo::find(1);
    $carousels = Carousel::all();
    $video = Video::find(1);
    return view('pageHome',compact('logo','carousels','video'));
});
Route::get('/service', function () {
    $logo = Logo::find(1);
return view('pageService',compact('logo'));
});
Route::get('/blog', function () {
return view('pageBlog');
});
Route::get('/contact', function () {
    $logo = Logo::find(1);
return view('pageContact',compact('logo'));
});
Route::get('/element', function () {
return view('pageElement');
});
// -------------------------------------------------------------

// Route la page Admin

Route::get('/admin', function () {
return view('admin');
});


// -------------------------------------------------------------

// Route Auth

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

// -------------------------------------------------------------

// Route::resource('Menu','MenuController');
// Route Link
Route::resource('/Menu/Liens','LienController');
//Route Logo
Route::get('/Menu/Logo','LogoController@index')->name('logo.index');
Route::get('/Menu/Logo/Logo.edit','LogoController@edit')->name('logo.edit');
Route::post('/Menu/Logo/Logo.edit','LogoController@update')->name('logo.update');

//Route Carousel

Route::resource('/Carousel','CarouselController');

// Route video

Route::get('/Videoplay/index','VideoController@index')->name('video.index');
Route::get('/Videoplay/edit','VideoController@edit')->name('video.edit');
Route::post('/Videoplay/edit','VideoController@update')->name('video.update');