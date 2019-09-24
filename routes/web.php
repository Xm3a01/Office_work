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

<<<<<<< HEAD
 
=======
>>>>>>> 4c923670b3564016e953055b0be4f515cd63df60

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('tests','Test@index');
Route::get('two', 'Test@testtow');
Route::post('tests/one', 'Test@store')->name('one.store');
Route::post('tests/two', 'Test@store2')->name('two.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD

Route::get('/home', function () {
=======
Route::get('/home-d', function () {
>>>>>>> 4c923670b3564016e953055b0be4f515cd63df60
    return view('layouts.defult');
});
route::get('/', function(){
    return view('pages.home');
});
<<<<<<< HEAD

route::get('/data/{select}', 'Test@select');

route::get('/search', function(){
    return view('test.search');
});

=======
route::get('/about', function(){
    return view('pages.about');
});
route::get('/owner', function(){
    return view('pages.login');
});
>>>>>>> 4c923670b3564016e953055b0be4f515cd63df60
