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

//as rotas utilizando o padrao mvc
Route::get('/cadastrar', [\App\Http\Controllers\registrarAtividadeController::class, 'index']);
Route::get('/cadastrar/salvar', [\App\Http\Controllers\registrarAtividadeController::class, 'store']);
Route::get('/consultar',[\App\Http\Controllers\registrarAtividadeController::class, 'consultar']);
