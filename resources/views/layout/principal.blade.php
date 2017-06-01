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
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles e scripts --> 
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--
        <script language="javascript" src="caminho para o arquivo"></script>
        --> 
        <title>@yield('titulo')</title>
    </head>    
    <body>
        <div class="container"> 
            <header>
                <div id="logo">
                    <img class="logo" src="img/Logo2.png">
                    <h1>Super Inox Uberaba</h1>
                </div>                
                <nav>                    
                    <ul class="menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="/sobre">Sobre</a></li>                        
                        <li><a href="/contato">Contato</a></li>
                    </ul>
                </nav>                
            </header>          

                @yield('conteudo')
                       
           <footer>
                <p>Copyright &copy 2017 - Super Inox Uberaba</p>
           </footer>
        </div>
    </body>
</html>