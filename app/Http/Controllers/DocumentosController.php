<?php

namespace App\Http\Controllers;

use App\Models\Documentos;
use App\Models\Fisica;
use App\Models\Matr_doc;
use App\Models\Matricula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DocumentosController extends Controller
{
    public function redirect(Request $request){
        $dados = $request->all();
        if ( empty($dados['data']) )
            return redirect()->back();

        return redirect( route('documentos.index'))->with('codigo', $dados['data']);
    }

    public function index(){
        $fisica = Fisica::where('CODEXT', Session::get('codigo'))->first();
        $matriculas = Matricula::where('FISICA', $fisica->CODIGO)->first();
        $matr_doc = Matr_doc::where([
                ['MATRICULA', $matriculas->CODIGO],
                ['APRESENTADO', 0]
        ])->get();
        $documentos = new Documentos();
        return view( 'index', compact('fisica', 'matr_doc', 'documentos'));
    }
}
