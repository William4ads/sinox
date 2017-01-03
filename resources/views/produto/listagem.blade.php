<?php 

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * 
 * Sem o blade para imprimir as variáveis usamos
 * <?= variavel ?>
 * 
 * condicional ternário
 * {{ condicao ? ’valor_se_true’ : ’valor_se_false’}}
 */
?>
@extends('layout/principal')

@section('titulo', 'Lista de Produtos')
    
@section('conteudo')

    @if(empty($produtos))
        <div class="alert alert-danger">
            Você não tem nenhum produto cadastrado.
        </div>
    @else    
        <h1>Listagem dos produtos</h1>
        <table class="table table-striped table-bordered table-hover"> 
            <!-- utilizando o blade podemos usar o '@' para marcar o código PHP-->
            @foreach ($produtos as $p)
            <tr>
                <td> {{ $p->id }} </td>
                <td> {{ $p->produto }} </td>
                <td> {{ $p->descricao }} </td>
                <td> <a href='/produtos/mostra/{{$p->id }}'>
                        <span class="glyphicon glyphicon-search"></span> 
                    </a></td>
            </tr>
            @endforeach 
        </table>
    @endif    
@stop   <!--marca o fim da section--> 
        