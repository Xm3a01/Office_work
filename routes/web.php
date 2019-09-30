<?php



 
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


Route::get('/admin/met', function(){
    return view('dashboard.users.myaccount');
});
