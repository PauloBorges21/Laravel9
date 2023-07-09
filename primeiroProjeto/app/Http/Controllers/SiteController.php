<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index()
    {
        // return view('bemvindo');
        return 'bemVindo';
    }

    public function bemvindo()
    {
        $nome = 'Pedros';
        $idade = '33';
        $sobrenome ='Borges';
        $data_nasc = '21/11/1921';
        $data = [
            'nome' => $nome,
            'idade' => $idade,
            'sobrenome'=>$sobrenome,
            'data_nasc'=>$data_nasc,
            'html'=> '<b style="color: #ef4444">Negrito</b>'
        ];
        return view('bemvindo', $data);
    }

    public function usuarios(Request $request)
    {
        $data = ['qtn' => $request->qnt];
        return view('usuarios',$data);
    }

    public function sair()
    {
        return view('sair');
    }
}
