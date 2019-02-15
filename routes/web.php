<?php



Route::group(['middleware' => ['web']], function(){

	// 	TAG & CATEGORY
	Route::resource('categories', 'CategoryController', ['except'=> ['create']]);
	Route::resource('tags', 'TagController', ['except'=> ['create']]);


	// BLOG 
	Route::get('blog', ['as'=> 'blog.index', 'uses'=>'BlogController@getIndex']);
	Route::get('blog/{slug}', ['as'=>'blog.single', 'uses'=>'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');

	// ALL POST
	Route::resource('posts', 'PostController');

	// COMMENTS
	route::post('comments/{post_id}', ['as'=>'comments.store', 'uses'=>'CommentsController@store']);

	// ALL PAGES
	Route::get('contact', 'PagesController@getContact');
	Route::post('contact', 'PagesController@postContact');
	
	Route::get('about', 'PagesController@getAbout');
	Route::get('contact', 'PagesController@getContact' );
	Route::get('/', 'PagesController@getIndex');

	}
);

// Auth controller - login and registration

Auth::routes();
Route::get('dashboard', 'DashboardController@getIndex');
Route::get('logout', function(){
   Auth::logout();
   return Redirect::to('login');
});
