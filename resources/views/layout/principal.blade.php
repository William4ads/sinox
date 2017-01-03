<?php

/* 
 william To change this license header, choose License Headers in Project Properties.
 william To change this template file, choose Tools | Templates
 william and open the template in the editor.
 * 
 * arquivo que armazenará o layout principal do site
 */
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <link href="/css/app.css" rel="stylesheet">
        <link href="/css/custom.css" rel="stylesheet">
        <title>@yield('titulo')</title>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="/produtos">
                            Estoque Laravel
                        </a>
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/produtos">Listagem</a></li>
                        <li><a href="/produtos/novo">Novo</a></li>
                    </ul>
                </div>
            </nav>
            
            @yield('conteudo')
            
            <footer class="footer">
                <p>© Aprendendo Laravel.</p>
            </footer>            
        </div>
    </body>
</html>