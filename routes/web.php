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

// Route::get('../public/index.php', function () {
//    return  view('welcome');
// });

// Route::get('/welcome2', function () {
//    return  view('admin.about');
// });

// // Route::get('/welcome/3', function () {
// //    return  view('admin.1.1');
// // });

// // Route::get('/welcome4','WelcomeController@welcome');


// // Route::get('/welcome5',function(){
// // 	return view('welcome');
// // });

// // Route::get('/welcome6','WelcomeController@welcome');

// // Route::get('/welcome7',function(){
// // 	return view('students.create');
// // });

// Route::get('/students/create', 'StudentsController@create');
// Route::get('/students', 'StudentsController@index');


Route::get('/employees','EmployeesController@index');
Route::post('/employees','EmployeesController@store');
Route::get('/employees/create','EmployeesController@create');
Route::get('/employees/{id}/edit','EmployeesController@edit');

Route::get('/posts','PostsController@index');
Route::post('/posts','PostsController@store');
Route::get('/posts/create','PostsController@create');
Route::get('/posts/{id}/edit','PostsController@edit');


Route::get('/comments','CommentsController@index');
Route::post('/comments','CommentsController@store');
Route::get('/comments/create','CommentsController@create');
Route::get('/comments/{id}/edit','CommentsController@edit');

Route::get('/roles','RolesController@index');
Route::post('/roles','RolesController@store');
Route::get('/roles/create','RolesController@create');
Route::get('/roles/{id}/edit','RolesController@edit');


