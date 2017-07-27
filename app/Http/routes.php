<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


//Route::get('/listusers', [
//    'as' => 'listusers', 'uses' => 'UserController@index'
//]);


//Usuarios
Route::resource('users', 'UserController');

//Auxiliares
Route::get('/search', [
    'as' => 'searchusers', 'uses' => 'UserController@getsearch'
]);

Route::post('/search', [
    'as' => 'searchusers', 'uses' => 'UserController@postsearch'
]);

Route::get('/materias', [
    'as' => 'materias', 'uses' => 'MateriaController@index'
]);

Route::get('help/{id}', [
    'as' => 'help', 'uses' => 'HelpController@index'
]);


//Encuesta A
Route::get('survey/a/', [
    'as' => 'iaenc', 'uses' => 'AEncController@index'
]);

Route::get('survey/a/{id}', [
    'as' => 'eaenc', 'uses' => 'AEncController@edit'
]);

Route::patch('survey/a/{id}', [
    'as' => 'saenc', 'uses' => 'AEncController@save'
]);


Route::get('survey/a/{id}/changestate', [
    'as' => 'csaenc', 'uses' => 'AEncController@grabarshow'
]);

Route::patch('survey/a/{id}/changestate', [
    'as' => 'caenc', 'uses' => 'AEncController@grabar'
]);

Route::get('survey/a/{id}/imprimir', [
    'as' => 'paenc', 'uses' => 'AEncController@imprimir'
]);

Route::post('survey/a/{id}', [
    'as' => 'naenca', 'uses' => 'AEncController@create'
]);

Route::delete('survey/a/{id}', [
    'as' => 'baenc', 'uses' => 'AEncController@borrar'
]);


//Encuesta B


Route::get('/survey/b', [
    'as' => 'ibenc', 'uses' =>'BEncController@index'
]);


Route::post('survey/b/{id}', [
    'as' => 'nbenc', 'uses' => 'BEncController@create'
]);

Route::post('survey/b/{id}/save', [
    'as' => 'sbenc', 'uses' => 'BEncController@save'
]);

Route::delete('survey/b/{id}', [
    'as' => 'bbenc', 'uses'=> 'BEncController@borrar'
]);

Route::get('survey/b/{id}/imprimir', [
    'as' => 'pbenc', 'uses' => 'BEncController@imprimir'
]);

//Encuesta C
Route::get('/survey/c', [
    'as' => 'icenc', 'uses' =>'CEncController@index'
]);

Route::post('survery/c/{id}', [
    'as' => 'ncenc', 'uses' => 'CEncController@create'
]);

Route::post('survey/c/{id}/save', [
    'as' => 'scenc', 'uses' => 'CEncController@save'
]);

Route::delete('survey/c/{id}', [
    'as' => 'cbenc', 'uses'=> 'CEncController@borrar'
]);

Route::get('survey/c/{id}/imprimir', [
    'as' => 'pcenc', 'uses' => 'CEncController@imprimir'
]);