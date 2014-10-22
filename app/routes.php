	
<?php
Route::get('/', function()
{return View::make('layouts.master');
});
Route::get('login', function()
{
	return View::make('auth.login');

});
Route::get('create', function()
{
	return View::make('contents.create');
});

// Authentication Routes
Route::get('login', 'AuthController@loginPage');
Route::post('login', 'AuthController@login');
Route::get('signup', 'AuthController@signupPage');
Route::post('signup', 'AuthController@signup');
Route::get('logout', 'AuthController@logout');

 Route::resource('/user', 'UserController');
Route::controller('/', 'HomeController');
Route::get('contents/search', ['as' => 'contents.search', 'uses' => 'ContentController@search']);
Route::resource('contents', 'ContentController');


