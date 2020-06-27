	<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');

Route::group(['middleware' => 'jwt.auth'], function(){
  
	//Ruta para obtener datos por axios del user logueado
  Route::get('auth/user', 'AuthController@user');
  
  Route::post('auth/logout', 'AuthController@logout');

});

Route::group(['middleware' => 'jwt.refresh'], function(){
  Route::get('auth/refresh', 'AuthController@refresh');
});




//Documentos
Route::post('/document/create', 'DocumentsController@store');
 Route::get('/document/edit/{id}', 'DocumentsController@edit');
 Route::post('/document/update/{id}', 'DocumentsController@update');
 Route::delete('/document/delete/{id}', 'DocumentsController@delete');
 Route::get('/documents', 'DocumentsController@index');


//Usuarios
Route::post('/dashboard/usuario/create', 'UsersController@store');
 Route::delete('/dashboard/usuario/delete/{id}', 'UsersController@delete');
 Route::get('/dashboard/usuarios', 'UsersController@index');
 Route::get('/dashboard/usuario/edit/{id}', 'UsersController@edit');
 Route::post('/dashboard/usuario/update/{id}', 'UsersController@update');



//Perfil
 Route::get('/dashboard/usuario/perfil/{id}', 'UsersController@edit');
 Route::post('/dashboard/foto/{id}', 'DocumentsController@foto');
 Route::post('/dashboard/fotoTest/{id}', 'DocumentsController@fotoTest');
 Route::get('/dashboard/ultimo', 'DocumentsController@ultimo');
 Route::post('/dashboard/update/{id}/{id1}', 'DocumentsController@update');


//mensajes
 Route::get('/dashboard/mensajes', 'MessagesController@index'); 
 Route::get('/dashboard/mensajes/enviados', 'MessagesController@enviados'); 
 Route::post('/dashboard/mensajes/create', 'MessagesController@store');
 Route::get('/dashboard/mensajes/user', 'MessagesController@create');
 Route::post('/dashboard/mensajes/update/{id}', 'MessagesController@update');
 Route::get('/dashboard/mensajes/numero/{id}', 'MessagesController@numero');

//test
 Route::post('/dashboard/test/create', 'TestsController@store');
 Route::get('/dashboard/tests/status', 'StatusController@index');
 Route::delete('/dashboard/tests/delete/{id}', 'StatusController@delete');
 Route::post('/dashboard/tests/create', 'StatusController@store');
 Route::get('/dashboard/status/index/{id}', 'StatusController@llamado');
 Route::post('/dashboard/testCasa/create/{id}', 'TestsController@TestCasa');
 Route::delete('/dashboard/status/delete/{id}/{num}', 'StatusController@borrar');
 Route::post('/dashboard/test/update/{id}', 'TestsController@update');


//Resultados
 Route::get('/dashboard/tests/index/{id}', 'TestsController@index');
 Route::get('/dashboard/tests/buscar/{id}', 'TestsController@buscar');
 Route::delete('/dashboard/test/delete/{id}', 'TestsController@delete');
 Route::get('/dashboard/tests/3', 'TestsController@casa');
 Route::get('/dashboard/dibujo/{id}', 'TestsController@traerDibujo');

//citas
 Route::post('/dashboard/citas/create', 'AppointmentsController@store');
 Route::get('/dashboard/citas', 'AppointmentsController@index'); 
 Route::get('/dashboard/citas1', 'AppointmentsController@index1'); 
 Route::get('/dashboard/citas/{id}', 'AppointmentsController@user'); 
 Route::delete('/dashboard/citas/delete/{id}', 'AppointmentsController@delete');

 //Historias
 Route::post('/dashboard/historias/create', 'HistoriesController@store');
 Route::get('/dashboard/historias/{id}', 'HistoriesController@busqueda'); 
 Route::get('/dashboard/historia/{id}', 'HistoriesController@historia'); 
