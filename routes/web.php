<?php

use Illuminate\Support\Facades\Route;
use App\Logo;
use App\Carousel;
use App\Video;
use App\Presentation;
use App\Testimoniale1;
use App\Testimoniale;
use App\Service;
use App\Teamer;
use App\Team;
use App\Titre;
use App\Ready;
use App\Contact;


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
    $presentation = Presentation::find(1);
    $testimoniale1 = Testimoniale1::find(1);
    $testimoniales = Testimoniale::all();
    $servicesPage = Service::paginate(9);
    $services = Service::all();
    $teamer = Teamer::find(1);
    $titre = Titre::find(1);
    $teams = Team::all();
    $ready = Ready::find(1);
    $contact = contact::find(1);

    return view('pageHome',compact('logo',
    'carousels',
    'video',
    'presentation',
    'testimoniale1',
    'testimoniales',
    'servicesPage',
    'services',
    'teamer',
    'teams',
    'titre',
    'ready',
'contact',));
})->name('home');
Route::get('/service', function () {
    $logo = Logo::find(1);
return view('pageService',compact('logo'));
});
Route::get('/blog', function () {
    $logo = Logo::find(1);
return view('pageBlog',compact('logo'));
});
Route::get('/contact', function () {
    $logo = Logo::find(1);
return view('pageContact',compact('logo'));
});
Route::get('/element', function () {
    $logo = Logo::find(1);
return view('pageElement',compact('logo'));
});
// -------------------------------------------------------------

// Route la page Admin

Route::get('/admin', function () {
    $messages = Message::all();
return view('admin',compact('messages'));
});

Route::get('/Message/mail','MessageController@index')->name('message.index');
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

// Route presentation

Route::get('Presentation/index','PresentationController@index')->name('presentation.index');
Route::get('Presentation/edit','PresentationController@edit')->name('presentation.edit');
Route::post('Presentation/edit','PresentationController@update')->name('presentation.update');

// Route Testimoniale1 -> Titre
Route::get('/Testimoniales/Titre/index','Testimoniale1Controller@index')->name('testimoniale1.index');
Route::get('/Testimoniales/Titre/edit','Testimoniale1Controller@edit')->name('testimoniale1.edit');
Route::post('/Testimoniales/Titre/edit','Testimoniale1Controller@update')->name('testimoniale1.update');

// Route Testimoniales 

Route::resource('/Testimoniales/Testimoniale','TestimonialeController');

//route Service

Route::resource('/Service','ServiceController');

// Route Teams -> Titre
Route::get('/Teams/Titre/index','TitreController@index')->name('titre.index');
Route::get('/Teams/Titre/edit','TitreController@edit')->name('titre.edit');
Route::post('/Teams/Titre/edit','TitreController@update')->name('titre.update');

//Route Teams->team

Route::get('Teams/Ceo/index','TeamerController@index')->name('ceo.index');
Route::get('Teams/Ceo/edit','TeamerController@edit')->name('ceo.edit');
Route::post('Teams/Ceo/edit','TeamerController@update')->name('ceo.update');

Route::resource('Teams/Team','TeamController');

// Route Reader

Route::get('Ready/index','ReadyController@index')->name('ready.index');
Route::get('Ready/edit','ReadyController@edit')->name('ready.edit');
Route::post('Ready/edit','ReadyController@update')->name('ready.update');

// Route contact

Route::get('Contact/index','ContactController@index')->name('contact.index');
Route::get('Contact/edit','ContactController@edit')->name('contact.edit');
Route::post('Contact/edit','ContactController@update')->name('contact.update');

//ROute Messages: Mails

Route::post('TemplateHome/Contact','MessageController@store')->name('message.store');