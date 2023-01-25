@extends('layouts.main')

@section('title','Produtos')

@section('content')


  @if($busca != '')
     <P>O usuário está buscando por: {{ $busca }}</P>
  @endif


@endsection

