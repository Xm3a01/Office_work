<?php



Route::get('/', function () {return redirect(app()->getLocale());});

Route::group(['prefix' => '{locale}','where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => 'setlocale'], 
    function() {

     Route::get('/', function () {return view('welcome');});   
     Auth::routes();
     Route::get('home', 'UserController@index')->name('users.home');
     Route::get('users/logout', 'Auth\LoginController@logout')->name('users.logout');

     Route::get('owners', 'OwnerController@index')->name('owner.dashboard');
     Route::get('owners/login', 'Auth\OwnerLoginController@showloginForm')->name('owner.login');
     Route::post('owners/login/submit', 'Auth\OwnerLoginController@login')->name('owner.login.submit');
     Route::get('owners/register', 'Auth\OwnerRegisterController@showRegistrationForm')->name('owner.register');

});



Route::group(['prefix' => 'dashboard' , 'middleware' => 'auth:admin'] , function(){
//about browes
    Route::get('/', 'Dashboard\Admin\AdminController@index')->name('admin.dashboard');
    Route::get('abouts/company','Dashboard\Admin\AboutController@create')->name('about.company');
    Route::get('abouts/whyus','Dashboard\Admin\AboutController@createwhyUs')->name('about.whyus');
    Route::get('abouts/contactus','Dashboard\Admin\AboutController@createContact')->name('about.contactus');
    Route::get('abouts/partner','Dashboard\Admin\AboutController@createPartner')->name('about.partner');
    Route::get('abouts/team','Dashboard\Admin\AboutController@createTeam')->name('about.team');
//about store
    Route::resource('abouts','Dashboard\Admin\AboutController')->only(['store']);

//owners job
    // Route::get('jobs/role','Dashboard\Admin\BrowseController@role_index')->name('owners.job_role');
    // Route::get('jobs/level','Dashboard\Admin\BrowseController@level_index')->name('owners.job_level');

    Route::resource('admins','Dashboard\Admin\AdminController')->except(['delete','create']);
    Route::resource('owners','Dashboard\Admin\OwnerController');
    Route::resource('jobs','Dashboard\Admin\JobController')->except('create');
    Route::resource('locations','Dashboard\Admin\LocationController');
    Route::resource('roles','Dashboard\Admin\RoleController');
    Route::resource('specials','Dashboard\Admin\SpecializationController');
    Route::resource('subspecials','Dashboard\Admin\SubSpecialController');
    Route::resource('experiences','Dashboard\Admin\ExperienceController');
    Route::resource('levels','Dashboard\Admin\LevelController');
    Route::resource('users','Dashboard\Admin\UserController');
    Route::get('jobs/create/{id}','Dashboard\Admin\JobController@create')->name('jobs.create');
    Route::get('cities','Dashboard\Admin\LocationController@cityIndex')->name('cities.index');
    Route::get('cities/{id}/edit','Dashboard\Admin\LocationController@cityEdit')->name('cities.edit');
    Route::get('cities/create','Dashboard\Admin\LocationController@cityCreate')->name('cities.create');
    Route::delete('cities/{id}','Dashboard\Admin\LocationController@cityDestroy')->name('cities.destroy');


});

Route::group(['prefix' => 'admins'], function(){
    Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('login/submit', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

});

