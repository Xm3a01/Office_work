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


Route::get('/home', function () {
});
Route::get('/home-d', function () {

    return view('layouts.defult');
});
route::get('/', function(){
    return view('pages.home');
});


//test Route

route::get('/datas/{id}', 'Test@select');

route::get('/search/test', function(){
    return view('test.search');
});

route::get('/result', 'Test@search');


route::get('/contact', function(){
    return view('pages.contact');
});
route::get('/owner', function(){
    return view('pages.searchjob');
});

route::get('/', function(){
    return view('pages.uncompleteCV');
});
