<?php


//whole Wedsite url
// Route::get('/','BrowseController@index');


<<<<<<< HEAD
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('tests','Test@index');
// Route::get('two', 'Test@testtow');
// Route::post('tests/one', 'Test@store')->name('one.store');
// Route::post('tests/two', 'Test@store2')->name('two.store');
=======
>>>>>>> 033482827b8ff222c625e4a20441ce9dd2fc86b6


// Auth::routes();

<<<<<<< HEAD
// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
=======

// //test Route

// Route::get('tests','Test@index');
// Route::get('two', 'Test@testtow');
// Route::post('tests/one', 'Test@store')->name('one.store');
// Route::post('tests/two', 'Test@store2')->name('two.store');
// route::get('/datas/{id}', 'Test@select');
>>>>>>> 033482827b8ff222c625e4a20441ce9dd2fc86b6

// route::get('/search/test', function(){
//     return view('test.search');
// });

<<<<<<< HEAD
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

// route::get('/search/test', function(){
//     return view('test.search');
// });

// route::get('/result', 'Test@search');

 
=======
// route::get('/result', 'Test@search');


// route::get('/about', function(){
//     return view('pages.about');
// });
// route::get('/owner', function(){
//     return view('pages.login');
// });


Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'], 
    'middleware' => 'setlocale'], function() {
 
Route::get('/', function () {
     return view('welcome');
});
     
Auth::routes();

Route::get('home', 'TestController@index')->name('user.home');

Route::get('admins', 'AdminController@index')->name('admin.dashboard');
Route::get('admins/add', 'AdminController@store')->name('admin.add');
Route::get('admins/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('admins/login/submit', 'Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('owners', 'OwnerController@index')->name('owner.dashboard');
Route::get('owners/login', 'Auth\OwnerLoginController@showloginForm')->name('owner.login');
Route::post('owners/login/submit', 'Auth\OwnerLoginController@login')->name('owner.login.submit');
Route::get('owners/register', 'Auth\OwnerRegisterController@showRegistrationForm')->name('owner.register');

});
>>>>>>> 033482827b8ff222c625e4a20441ce9dd2fc86b6
