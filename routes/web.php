<?php


//whole Wedsite url
// Route::get('/','BrowseController@index');


 Route::get('/', function () {
   return view('welcome');
 });

 Route::get('tests','Test@index');
 Route::get('two', 'Test@testtow');
 Route::post('tests/one', 'Test@store')->name('one.store');
 Route::post('tests/two', 'Test@store2')->name('two.store');


 Auth::routes();

 Route::get('/home', 'HomeController@index')->name('home');

 Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// route::get('/search/test', function(){
//     return view('test.search');
// });

// Route::get('/home', function () {
// });
// Route::get('/home-d', function () {

//     return view('layouts.defult');
// });
// route::get('/', function(){
//     return view('pages.home');
// });


// //test Route

// route::get('/datas/{id}', 'Test@select');

 route::get('/home', function(){
  return view('pages.home');
});

// route::get('/result', 'Test@search');

 
