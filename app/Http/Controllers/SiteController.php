<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteController
{
    //
    public function home (){
        return view('home');
    }

    public function services(){
        return view('services');
    }

    public function contato(){
        $dataAtual = date('d/m/Y');
        return view('contato', ['dataAtual' => $dataAtual]);
    }
}
