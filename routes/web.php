<?php


//whole Wedsite url
Route::get('/','BrowseController@index');




Auth::routes();


//test Route

Route::get('tests','Test@index');
Route::get('two', 'Test@testtow');
Route::post('tests/one', 'Test@store')->name('one.store');
Route::post('tests/two', 'Test@store2')->name('two.store');
route::get('/datas/{id}', 'Test@select');

route::get('/search/test', function(){
    return view('test.search');
});

route::get('/result', 'Test@search');


route::get('/about', function(){
    return view('pages.about');
});
route::get('/owner', function(){
    return view('pages.login');
});

// route::get('/', function(){
//     return view('pages.uncompleteCV');
// });
