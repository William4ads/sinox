<?php

/* 
 william To change this license header, choose License Headers in Project Properties.
 william To change this template file, choose Tools | Templates
 william and open the template in the editor.
 * 
 * Formulário para cadastrar produdos novos
 */
?>
@extends('layout/principal')

@section('titulo', 'Lista de Produtos')
    
@section('conteudo')
    <h1>Produto Novo</h1>
    <form action="/produtos/adiciona" method="post">
        <!--Esse input é um mecanismo de proteção do laravel contra CSRF (Cross-site request forgery
            Sempre que usarmos o method post devemos utilizar esse input abaixo para pegar uma chave
            de segurança
        -->
        <input type="hidden" name="_token" value="{{{csrf_token()}}}"/>
        
        <div class="form-group">
            <label>Nome</label>
            <input name="produto" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Descricao</label>
            <input name="descricao" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Valor</label>
            <input class="form-control"/>
        </div>
        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" class="form-control"/>
        </div>
        <button type="submit" class="btn
            btn-primary btn-block">Submit</button>
    </form>
@stop

