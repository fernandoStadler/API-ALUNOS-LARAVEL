<?php

namespace App\Http\Controllers;

use App\Models\Alunos;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
    //

    public function index(){
        return Alunos::all();
    }

    public function store(Request $req){
        return Alunos::create([
            "NAME" => $req->name,
            "RA" => $req->ra,
            "CURSO" => $req->curso,
            "ATIVO" => $req->ativo
        ]);

        return response ("Inserido com sucesso", 200);
    }
    public function update(Request $req){
       $alunos = Alunos::find($req->id);

       $alunos->name = $req->name;
       $alunos->ra = $req->ra;
       $alunos->curso = $req->curso;
       $alunos->ativo = $req->ativo;

       $alunos->save();

       return response("Gravado com sucesso",200);
    }
    public function delete(Request $req){
       $alunos = Alunos::find($req->id);
       $alunos->delete();

       return response("Registro excluido com sucesso",200);
    }
}
