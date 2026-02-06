@extends('layout')



@section('conteudo')
<h1>Seja bem vindo(a) </h1>

@if($userType == 'admin')
@include('painel_admin')
@endif


{{-- @if($userType == 'admin')
<span style="color:red"> admin </span>
@elseif ($userType == 'editor')
<span style="color:blue ">editor</span>
@else
<span style="color: green">user</span>
@endif --}}

@endsection