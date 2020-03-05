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


Route::get('/welcome', function(){

	return view('welcome');

});

Route::get('/about', function(){

	return view('about');

});


Route::get('/', function(){

	// $name = request('name');

	// return $name;

	return view('welcome');	

	// return view('test', [
	// 	'name' => request('name')
	// ]);

});


Route::get('/posts/{slug}', 'PostsController@show');


// Route::get('/posts/{post}', function($post){

// 	$posts = [
// 		'my-first-post' => 'hello, this is my first blog',
// 		'my-second-post' => 'jaja my second blog'
// 	];

// 	if (!array_key_exists($post, $posts)){

// 		abort(404, 'wat item not found');
// 	};

// 	return view('posts', [
// 		'post' => $posts[$post]
// 	]);
// });


// Route::get('/test', function(){

// 	return view('test');
// });
