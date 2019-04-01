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

Route::get('/pagina_inicial', function () {
    return view('pagina_inicial');
});

Route::get('/homee', function () {
    return view('homee');
});

Route::get('/cadastro', function () {
    return view('funcionario_cadastrar');
});


Route::get('/cadastrosala',function(){
	return view('cadastro_de_sala');
});

Route::get('/alocarfuncionario', function(){
	return view('alocarfuncionario');
});

Route::get('/exibir', function(){
	return view('exibirfuncionarios');
});

Route::get('login', function(){
	return view('Auth\LoginController@login');
});

Route::get('/departamento', function(){
	return view('departamento');
});

Route::get('/departamento', function(){
	return view('departamento');
});

Route::get('logout', 'Auth\LoginController@logout');
Route::get('login', 'Auth\LoginController@showLoginForm');

Route::resource('departamentos', 'DepartamentoController');
Route::resource('funcionarios', 'FuncionarioController');
Route::resource('salas', 'SalaController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
