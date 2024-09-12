<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('paginas/index');
});

//definindo caminho da pasta cadastrar
Route::get('/cadastrar', function (){
    return view('paginas/cadastrar');
});

//definindo rota para conusltar
Route::get('/consultar', function(){
    return view('paginas/consultar');
});
