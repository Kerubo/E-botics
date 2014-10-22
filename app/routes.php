	
<?php
Route::get('/', function()
{return View::make('layouts.master');
});
 Route::resource('/user', 'UserController');
Route::controller('/', 'HomeController');

