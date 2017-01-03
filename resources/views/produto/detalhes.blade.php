<?php

/* 
 william To change this license header, choose License Headers in Project Properties.
 william To change this template file, choose Tools | Templates
 william and open the template in the editor.
 */
?>
<!--view para mostrar os detalhes de cada produto
table produtos
    id
    produto
    descricao

Podemos usar
@section('titulo', 'NomeTitulo')
-->

@extends('layout/principal')

@section('titulo') 
    Detalhes dos produtos
@stop

@section('conteudo')
    <h1>Detalhes</h1>
    <ul>
        <!-- abaixo utilizando a forma do blade para mostrar as variáveis -->             
        <li><b>Produto: </b> {{ $p->produto }}</li>
        <li><b>Descrição: </b>{{ $p->descricao }}</li>
    </ul>
@stop
            