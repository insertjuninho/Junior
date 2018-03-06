<?php
   include "login.php";

?>
<!doctype html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
      <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
      <link rel="stylesheet" href="css/layout.css">
      <link rel="stylesheet" href="css/slider.css">
      <link rel="stylesheet" href="css/vitrine/docs.theme.min.css">
      <link rel="stylesheet" href="css/vitrine/owl.carousel.min.css">
      <link rel="stylesheet" href="css/vitrine/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/logo/docs.theme.min.css">
      <link rel="stylesheet" href="css/logos/owl.carousel.min.css">
      <link rel="stylesheet" href="css/logos/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="js/jquery.min.js"></script>
      <script src="js/owl.carousel.js"></script> 
   </head>
   <body style="background-color: #efefef;">
      <button onclick="topFunction()" id="myBtn" title="Go to top"><img src="rocket.png"></button>
      <nav class="navbar navbar-expand-lg navbar-danger bg-warning">
         <a href="index.php">
         <img class="navbar-brand" src="css/logo.png" alt="logo"></a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span><i class="fas fa-bars"></i></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item">
               </li>
            </ul>
            <div>
               <form class="search">
                  <input type="text" name="search" placeholder="Pesquisar">
               </form>
            </div>
            <span id="login" class="navbar-text ml-5" style="font-size:1.2em;">
               <i class="fas fa-user-circle" data-toggle="modal" data-target="#myModal" href="#"></i>        
                   <?php
                     if (empty($_SESSION['email'])){
                        echo "Entre ou <p>Cadastre-se</p>";
                     }else{
                        echo "$usuario";
                        }   
                   ?>
               </span>  
            <div class="user"> 
            <?php 
              if(isset($_SESSION['usuario'])){
               ?>    
               <a  href="logout.php"><i class="fas fa-sign-in-alt" style="color: #000;"></i></a>a>
            <?php
               }
            ?>  
               <a  href="perfil.php"><i class="fas fa-shopping-cart" style="color: #000;"></i></a>
            </div>
            <li id="respons" class="nav-item">
               <a class="btn btn-dark btn-block" data-toggle="modal" data-target="#myModal" href="">Login</a>
             </li>
            <li id="respons" class="nav-item">
               <a class="btn btn-dark btn-block" href="cadastro.php">Cadastrar-se</a>
            </li>
            <div class="pesq">
               <form>
                  <input type="text" name="search" placeholder="Pesquisar">
               </form>
            </div>
         </div>
      </nav>
      <nav id="sticky" class="navbar navbar-expand-sm bg-dark navbar-dark">
         <ul class="navbar-nav">
            <li class="nav-item">
            <li class="nav-item dropdown">
               <a class="nav-link dropdown" href="#" id="navbardrop" data-toggle="dropdown">INFORMÁTICA</a>           
               <div class="dropdown-menu">
                  <a class="dropdown-item btn-dark" href="categorias/informatica/hardwere.php">Hardwere</a>
                  <a class="dropdown-item btn-dark" href="categorias/informatica/perifericos.php">Perifericos</a>
                  <a class="dropdown-item btn-dark" href="categorias/informatica/computadores.php">Computadores</a>
                  <a class="dropdown-item btn-dark" href="categorias/informatica/notebooks.php">Notebooks</a>
                  <a class="dropdown-item btn-dark" href="categorias/informatica/acessorios.php">Acessórios</a>
               </div>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown" href="#" id="navbardrop" data-toggle="dropdown">ELETRÔNICOS</a>           
               <div class="dropdown-menu">
                  <a class="dropdown-item btn-dark" href="categorias/eletronicos/smartphones.php">Smartphones</a>
                  <a class="dropdown-item btn-dark" href="categorias/eletronicos/smatwatches.php">Smartwatches</a>
                  <a class="dropdown-item btn-dark" href="categorias/eletronicos/drones.php">Drones</a>
                  <a class="dropdown-item btn-dark" href="categorias/eletronicos/componetes.php">Componentes</a>
               </div>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown" href="#" id="navbardrop" data-toggle="dropdown">GAMES</a>           
               <div class="dropdown-menu">
                  <a class="dropdown-item btn-dark" href="categorias/games/consoles.php">Consoles</a>
                  <a class="dropdown-item btn-dark" href="categorias/games/jogos.php">Jogos</a>
                  <a class="dropdown-item btn-dark" href="categorias/games/acessorios.php">Acessórios</a>
               </div>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown" href="#" id="navbardrop" data-toggle="dropdown">LEITURA</a>           
               <div class="dropdown-menu">
                  <a class="dropdown-item btn-dark" href="categorias/leitura/hqs.php">HQs</a>
                  <a class="dropdown-item btn-dark" href="categorias/leitura/mangas.php">Mangás</a>
                  <a class="dropdown-item btn-dark" href="categorias/leitura/livros.php">Livros</a>
                  <a class="dropdown-item btn-dark" href="categorias/leitura/ebooks.php">E-books</a>
               </div>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown" href="#" id="navbardrop" data-toggle="dropdown">VESTÚARIO</a>           
               <div class="dropdown-menu">
                  <a class="dropdown-item btn-dark" href="categorias/vestuario/masculino.php">Masculino</a>
                  <a class="dropdown-item btn-dark" href="categorias/vestuario/feminino.php">Feminino</a>
                  <a class="dropdown-item btn-dark" href="categorias/vestuario/calcados.php">Calçados</a>
                  <a class="dropdown-item btn-dark" href="categorias/vestuario/acessorios.php">Acessórios</a>
               </div>
            </li>
         </ul>
      </nav>
      <div class="menu">
         <div>
            <button class="btn btn-dark btn-lg btn-block" type="button" data-toggle="modal" data-target="#catagorias">Categorias</button>
            <div class="modal fade" id="catagorias">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                     </div>
                     <div class="modal-body">
                        <a href="celulares.php"><button class="btn btn-default btn-lg btn-block ">Smartphones</button></a>
                        <a href="informatica.php"><button class="btn btn-default btn-lg btn-block">Informática</button></a>
                        <a href="eletronicos.php"><button class="btn btn-default btn-lg btn-block">Eletrônicos</button></a>
                        <a href="games.php"><button class="btn btn-default btn-lg btn-block">Games</button></a>
                        <a href="livros.php"><button class="btn btn-default btn-lg btn-block">Livros</button></a>
                        <a href="moda.php"><button class="btn btn-default btn-lg btn-block">Moda</button></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
         <div class="container pt-4 pb-4">    
      <div class="row content">

    <div class="col-md-8 col-sm-8 text-left"> 
      <div class="container">
    
    <div class="col-sm-12 text-left"> 
      <h4 style="padding-bottom: 5%" >QUEM SOMOS</h4>
      <p>Fundada no ano de 2018, a ACCIO é uma empresa que trabalha com os mais variados produtos, atuando principalmente no setor de informática e equipamentos eletrônicos em geral, área bastante competitiva e em constante crescimento, onde qualidade, variedade, garantia e eficiência são critérios importantíssimos para total satisfação, confiança e preferência de nossos consumidores.</p>

      <p>Procuramos acima de tudo oferecer o que há de melhor, os melhores fornecedores, os mais atualizados produtos, o mais atencioso dos atendimentos, juntamente com os preços mais competitivos e atraentes do mercado para que nosso público encontre não apenas variedade e qualidade, mas também uma empresa que se preocupa com a felicidade e total satisfação de seus clientes e por que não, amigos!</p>
      <hr>    
    </div>

  </div>
</div>
</div>
</div>
   <hr>
   </div>  
   <footer>
      <?php
         include "footer.inc";
         ?>
   </footer>
         <script type="text/javascript" src="js/index.js"></script>
         <script type="text/javascript" src="js/logos.js"></script>
         <script type="text/javascript" src="js/vitrine.js"></script>

         <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>  
   </body>
</html>
