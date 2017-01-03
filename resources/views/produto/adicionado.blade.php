<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * retorna mensagem para o usuário confirmando se o produto foi adicionado
 */
?>
@extends('layout/principal')

@section('titulo', 'Produto adicionado')
        
@section('conteudo')
    <div class="alert alert-success">
        <strong>Sucesso!</strong> O produto {{ $produto }} foi adicionado.
    </div>
        
@stop