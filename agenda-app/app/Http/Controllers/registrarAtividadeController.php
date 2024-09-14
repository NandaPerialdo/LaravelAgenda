<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registrarEvento;

class registrarAtividadeController extends Controller
{
    public function index()
    {
        $dados = registrarEvento::all();//coletar todos os dados do banco
        return view ('paginas.cadastrar')->With('dados', $dados);
    }//fim do metodo

    public function store(Request $request)
    {
        $data = $request->input('dataEvento');//coletando dado do input dataEvento
        $descricao = $request->input('descricao');

        $model = new RegistrarEvento();
        $model->dataEvento = $data;
        $model->descricao = $descricao;

        $model->save();//salva no banco de dados
        return redirect('/cadastrar');
    }//fim do metodo store

    public function consultar(){

        $ids = registrarEvento::all();
        return view('paginas.consultar', compact('ids'));
    }//fim do metodo



}//fim da classe
