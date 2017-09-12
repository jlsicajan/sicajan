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

Route::get('/ideas/', ['as'   => 'ideas', 'uses' => 'Admin\IdeasController@index']);
Route::get('/knowledge/', ['as'   => 'knowledge', 'uses' => 'Admin\KnowledgeController@index']);

//SAVE DATA
Route::post('/save/semester', ['as'   => 'save.semester.data', 'uses' => 'Admin\SemesterController@save']);
Route::post('/save/knowledge', ['as'   => 'learn.save', 'uses' => 'Admin\KnowledgeController@save']);

//DATATABLE
Route::get('/datatable/semester', 'Admin\SemesterController@getSemesters')->name('datatable.semesters');
