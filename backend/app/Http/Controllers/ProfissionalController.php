<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profissional;

class ProfissionalController extends Controller
{
    public function listarProfissionais(request $request){
        $listaProfissionais = Profissional::all();

        return reponse()->json($listaProfissionais);
    }

public function criarProfissional(request $request){
    $newProfissional = new Profissional();
    $newProfissional->nome = $request->nome;
    $newProfissional->github = $request->githhub;
    $result = $newProfissional->save();

    return response()->json($newProfissional);
}
}
