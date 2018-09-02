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

Route:: get('bicis',function(){
    return view('contenido.bicis');
});
Route:: get('componentes',function(){
    return view('contenido.componentes');
});
Route:: get('accesorios',function(){
    return view('contenido.accesorios');
});
Route:: get('vender',function(){
    return view('contenido.vender');
});
Route:: get('comunidad',function(){
    return view('contenido.comunidad');
});

Route:: get('nosotros',function(){
    return view('contenido.nosotros');
});

Route:: get('contacto',function(){
    return view('contenido.contacto');
});


Route::group(['prefix' => 'formulario'],function(){
    Route::resource('resumen','FormularioController');
      
    Route::get('formulario/{id}/destroy',[
        'uses' =>'FormularioController@destroy',
        'as'=> 'admin.formulario.destroy'
    ]);
    Route::get('resumen',[
        'uses' =>'FormularioController@resumen',
        'as'=> 'contenido.resumen'
    ]);
    });

Route::resource('formulario', 'FormularioController');
//Route::get('/register', 'HomeController@index')->name('home');