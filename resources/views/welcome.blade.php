<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Super Inox Uberaba</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles e scripts -->        
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--
        <script language="javascript" src="caminho para o arquivo"></script>
        -->        
    </head>    
    <body>
        <div class="container"> 
            <header>
                <img src="Logo.png" class="logo">
                <h1>Super Inox Uberaba</h1>
                <nav class="navbar navbar-inverse">
                    <h1>Menu Principal</h1>
                    <ul class="nav navbar-nav">
                        <li>Home</li>
                        <li>Sobre</li>
                        <li>Produtos</li>
                        <li>Contato</li>
                    </ul>
                </nav>
            </header>
            <section>
                <article id="produtosDestaque">
                    os produtos vão aqui
                    <?php
                         $produtos = DB::select('select * from produtos');
                         foreach ($p as $produto){
                             echo $p->produto;
                         }
                    ?>
                </article>                
            </section>
            <footer class="footer">
                <p>Copyright &copy 2017 - Super Inox Uberaba</p>
            </footer>
        </div>
    </body>
</html>
