<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web', 'auth', 'admin']], function () {

	Route::get('/home', 'HomeController@index');

    Route::group(['prefix' => 'admin'], function(){
		Route::resource('users','UsersController');
		Route::get('users/{id}/destroy', [
				'uses' => 'UsersController@destroy',
				'as'   => 'admin.users.destroy'
			]);
		Route::resource('categories', 'CategoriesController');
		Route::get('categories/{id}/destroy', [
				'uses' 	=> 'CategoriesController@destroy',
				'as'	=> 'admin.categories.destroy'
			]);
		Route::resource('tags', 'TagsController');
		Route::get('tags/{id}/destroy', [
				'uses' 	=> 'TagsController@destroy',
				'as'	=> 'admin.tags.destroy'
			]);
		Route::resource('articles', 'ArticlesController');
		Route::get('articles/{id}/destroy', [
				'uses' 	=> 'ArticlesController@destroy',
				'as'	=> 'admin.articles.destroy'
			]);
		Route::get('images', [
				'uses'	=> 'ImagesController@index',
				'as'	=> 'admin.images.index'
			]);
	});
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', [
    		'as' 	=> 'home',
    		'uses'	=> 'FrontController@index'
    	]);

    Route::get('categories/{name}', [
    		'as'	=>	'front.search.category',
    		'uses'	=>	'FrontController@searchCategory'
    	]);

    Route::get('/{slug}', [
    		'uses'	=>	'FrontController@viewArticle',
    		'as'	=>	'front.view.article'
    	]);
});
