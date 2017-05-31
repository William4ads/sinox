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

 <h2>Produtos</h2>
    <ol>
        <li>
            <a href="/produto/novo">
                <figure>
                    <img src="/img/Inox_tubo1.jpg" alt="Super Inox">
                    <figcaption>Colheres em Inox</figcaption>
                </figure>
            </a>
        </li>
    </ol>

@stop   <!--marca o fim da section--> 
        