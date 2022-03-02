<?php

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
    return view('home')->name('home');
});

Route::get('/about-us', function () {
    return view('aboutus')->name('aboutus');
});

Route::get('/team', function () {
    return view('team')->name('team');
});

Route::get('/mediums-hat', function () {
    return view('mediums-hat')->name('mediums-hat');
});

Route::get('/contact', function () {
    return view('contact')->name('contact');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/mon-post', function () {

    $post = Voyager::model('Post')->find(1);
    return view('mavue', ['post' => $post]);
});
