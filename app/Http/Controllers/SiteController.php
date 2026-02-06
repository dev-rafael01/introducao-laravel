<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController
{
    //
    public function home (){
        $mostraRodape = true;

        $userType = 'editor';
        return view('home' , ['mostraRodape' => $mostraRodape, 'userType' => $userType]);
    }

    public function services(){
        $titulo ='Meu Site - Serviços ' . date('d/m/y');
          $services = [

            ['name' => 'Estagiario |', 'description' => ' Auxiliar Programadores'],
            ['name' => 'Programador Front-End |', 'description' => ' Criar interface pro usuario'],
            ['name' => 'Programador Bank-end |', 'description' => ' Cuida da parte invisivel do site'],
            ['name' => 'Gestor |', 'description' => ' Gerenciar servicos'],
        ];

        return view('services' , ['titulo' => $titulo, 'services' => $services]);

      
    }

    public function contato(){
        $titulo = 'Meu Site - Contato';
        $dataAtual = date('d/m/Y');
        return view('contato', ['dataAtual' => $dataAtual, 'titulo' => $titulo]);
    }
}
