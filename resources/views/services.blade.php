@extends('layout')

@section('titulo', $titulo) 

@section('conteudo')
<h1>Conheça nossos serviçoes</h1>

<ul>
  @foreach ($services as $service )
   <li> {{$service['name']}}
        {{$service['description']}} , <br>  
 </li>
      
  @endforeach
</ul>

@endsection



