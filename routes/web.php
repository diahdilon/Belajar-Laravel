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
// */
// Route::get('/', function () {
//         return view('index');
// });

// Route::get('/about', function () {
//         return view('about');
// });

 route::get('/', 'PagesController@home');
 route::get('/about', 'PagesController@about');

 route::get('/data', 'DataController@index');

 //longsors
 route::get('/longsors', 'longsorsController@index');



