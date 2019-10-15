<?php
use App\Country;

Route::get('test' , function(){
    $all = Country::all();
    return view('test.search',compact('all'));
});

Route::get('search' , 'SearchController@index')->name('search');

Route::get('/', function () {return redirect(app()->getLocale());});

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

    Route::resource('admins','Dashboard\Admin\AdminController')->except(['delete','create']);
    Route::resource('companies','Dashboard\Admin\OwnerController');
    Route::resource('jobs','Dashboard\Admin\JobController')->except('create');
    Route::resource('locations','Dashboard\Admin\LocationController');
    Route::resource('roles','Dashboard\Admin\RoleController');
    Route::resource('specials','Dashboard\Admin\SpecializationController');
    Route::resource('subspecials','Dashboard\Admin\SubSpecialController');
    Route::resource('experiences','Dashboard\Admin\ExperienceController');
    Route::resource('levels','Dashboard\Admin\LevelController');
    Route::resource('user/cv','Dashboard\Admin\UserController');
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


Route::group(['prefix' => '{locale}','where' => ['locale' => '[a-zA-Z]{2}'], 'middleware' => 'setlocale'], 
function() {
    
     Route::get('/','Browse\BrowseController@home_page')->name('home');  
     Route::post('users/register', 'Auth\RegisterController@showRegistrationForm')->name('users.register');
     Auth::routes();
     Route::get('users/logout', 'Auth\LoginController@userLogout')->name('users.logout');
     Route::post('users/register/submit', 'Auth\RegisterController@create')->name('users.register.submit');
     Route::get('my_cv','Dashboard\User\UserController@myCv')->name('web.mycv');
     Route::resource('users', 'Dashboard\User\UserController');

     Route::get('owners/login', 'Auth\OwnerLoginController@showloginForm')->name('owner.login');
     Route::post('owners/login/submit', 'Auth\OwnerLoginController@login')->name('owner.login.submit');
     Route::post('owners/register/submit', 'Auth\OwnerRegisterController@create')->name('owners.register.submit');
     Route::get('owners/register', 'Auth\OwnerRegisterController@showRegistrationForm')->name('owner.register');
     Route::get('owners/logout', 'Auth\OwnerLoginController@ownerLogout')->name('owners.logout');
     Route::resource('owners', 'Dashboard\Owner\OwnerController');
    
     Route::get('/','Browse\BrowseController@home_page')->name('home');
     Route::get('contact','Browse\BrowseController@contact')->name('web.contact');
     Route::get('job/owner','Browse\BrowseController@jobOwner')->name('job.owner');
     Route::get('single/job','Browse\BrowseController@jobsingle')->name('single.job');

});

Route::view('test' , 'pages.contact')->name('test');