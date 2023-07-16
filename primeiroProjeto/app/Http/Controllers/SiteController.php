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
        $sobrenome = 'Borges';
        $data_nasc = '21/11/1921';
        $receita = [
                'farinha',
                'ovos',
                'farinha2',
                'ovos2'
        ];

        $data = [
            'nome' => $nome,
            'idade' => $idade,
            'sobrenome' => $sobrenome,
            'data_nasc' => $data_nasc,
           'html' => '<b style="color: #ef4444">Negrito</b>',
            'ingredientes' => $receita

        ];
        return view('bemvindo', $data);
    }

    public function usuarios(Request $request)
    {
        $data = ['qtn' => $request->qnt];
        return view('usuarios', $data);
    }

    public function sair()
    {
        return view('sair');
    }

    public function exercicios(){
        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Alessandro',
                'birth' => '29/01/90',
                'idade' => 29],

            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Bonieky',
                'birth' => '10/11/1933',
                'idade' => 90],

            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Maria',
                'birth' => '01/01/2020',
                'idade' => 2]
        ];
        $dados['pessoas'] = $pessoas;
        $numero = '';
        $url = 'https://i.pravatar.cc/150?img='.$numero;
        $dados['url'] = $url;

        return view('exercicios', $dados);
    }
}
