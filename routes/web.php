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



Route::group(['middleware' => ['web']], function(){

	// category 
	Route::resource('categories', 'CategoryController', ['except'=> ['create']]);


	// blog 
	Route::get('blog', ['as'=> 'blog.index', 'uses'=>'BlogController@getIndex']);
	Route::get('blog/{slug}', ['as'=>'blog.single', 'uses'=>'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');

	// pages and posts
	Route::get('about', 'PagesController@getAbout');
	Route::get('contact', 'PagesController@getContact' );
	Route::get('/', 'PagesController@getIndex');
	Route::resource('posts', 'PostController');

}
);

// Auth controller - login and registration

Auth::routes();
Route::get('dashboard', 'DashboardController@getIndex');
Route::get('logout', function(){
   Auth::logout();
   return Redirect::to('login');
});
