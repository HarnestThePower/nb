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




Route::group(['middleware'=>'auth'],function(){


		Route::get('/', function () {
		  	return view('frontpage');
		  });

				//key and its uses
		Route::get('/notebooks',['as'=>'notebooks.index', 'uses'=>'NotebooksController@index']);

		Route::any('/notebooks/store','NotebooksController@store');

		Route::get('/notebooks/create',['as'=>'notebooks.create','uses'=>'NotebooksController@create']);

		Route::get('/notebooks/{notebooks}','NotebooksController@show')->name('notebooks.show');

		Route::get('/notebooks/edit/{notebooks}','NotebooksController@edit')->name('notebooks.edit');

		Route::put('/notebooks/{notebooks}','NotebooksController@update');

		Route::delete('/notebooks/{notebooks}','NotebooksController@destroy');

		//	Route::resource('notebooks','NotebooksController');
		Route::resource('notes','NotesController');

		//Route::get('/note/{notebookId}/createNotes','NotesController@createNote')-->name('notes.createNote');
		Route::get('notes/create',['as'=>'notes.createNote','uses'=>'NotesController@createNote']);
		Route::get('/notes/edit/{notebooks}','NotesController@edit')->name('notes.edit');


	});



Auth::routes();

