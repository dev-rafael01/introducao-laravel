@extends('layout')

@section('titulo', $titulo) 

@section('conteudo')
<h1>Conheça nossos serviçoes</h1>

<ul>
    {{-- @for ($i = 0; $i < count($services); $i++)
   <li> {{$services[$i]['name']}} - {{$services[$i]['description']}} --> {{$i}} <li>
    @endfor
       --}}
    

  @foreach ($services as $service )
   <li> {{$service['name']}}
        {{$service['description']}} , <br>  
   </li>
      
  @endforeach
</ul>

@endsection



