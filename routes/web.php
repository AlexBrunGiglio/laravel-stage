<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', 'PageController@index');
// Route::get('/testeur', 'PageController@index')->name('testeur');

Route::view('/', 'welcome');
// Route::redirect('/test', '/');

Route::view('/alpha', 'home');
// Route::middleware(['first'])->group(function (){
//     Route::get('/', function () {
        
//     });

// });

// Route::get('/{name}', function ($name = null) {
//     return $name;
// });

// Route::get('/{name?}', function ($name = 'Alex') {
//     return $name;
// });

// Route::get('/{name}', function ($name) {
//     return $name;
// })->where('name', '[a-z]+');

