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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/semester/{number}', ['as'   => 'semester',
                                  'uses' => 'Admin\SemesterController@index']);
Route::get('/ideas/', ['as'   => 'ideas',
                                  'uses' => 'Admin\IdeasController@index']);

//SAVE DATA
Route::post('/save/semester', ['as'   => 'save.semester.data',
                             'uses' => 'Admin\SemesterController@save']);

//AJAX FOR DATATABLES
Route::get('/ajax/semester', ['uses' => 'Admin\SemesterController@ajax', 'as' => 'semester.data.ajax']);