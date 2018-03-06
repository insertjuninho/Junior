<?php
  include "login.php";
session_start();
?>
<!doctype html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
      <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
      <link rel="stylesheet" href="css/layout.css">
      <link rel="stylesheet" href="css/slider.css">
      <link rel="stylesheet" href="css/produtos.css">
      <link rel="stylesheet" href="css/galeria.css">
      <link rel="stylesheet" href="css/vitrine/docs.theme.min.css">
      <link rel="stylesheet" href="css/vitrine/owl.carousel.min.css">
      <link rel="stylesheet" href="css/vitrine/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/logo/docs.theme.min.css">
      <link rel="stylesheet" href="css/logos/owl.carousel.min.css">
      <link rel="stylesheet" href="css/logos/owl.theme.default.min.css">
      <link rel="shortcut icon" href="icone/nasa.png" type="image/x-icon" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="js/jquery.min.js"></script>
      <script src="js/owl.carousel.js"></script> 
      <title>ACCIO</title>
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
                  <input type="search" name="search" placeholder="Pesquisar">
               </form>
            </div>
            <span id="login" class="navbar-text ml-5" style="font-size:1.2em;">
               <div class="dropdown">
            <i class="fas fa-user-circle fa-2x" data-toggle="dropdown"></i>
            <div class="dropdown-menu">
              <a class="dropdown-item btn-dark" data-toggle="modal" data-target="#myModal" href="#">Login</a>
              <a class="dropdown-item btn-dark" href="cadastro.php">Cadastrar-se</a>
            </div>
          </div>      
                   <?php
                     if(empty($_SESSION['email']) and empty($_COOKIE['email'])){
                        echo "";
                     }else{
                        if(isset($_SESSION['email'])){
                           $email = $_SESSION['email'];
                        }else{
                           $email = $_COOKIE['email'];
                        }
                        echo "$email";
                     }
                        
                   ?>
               </span> 
            <div class="user"> 
            <?php 
              if(isset($_SESSION['email']) or isset($_COOKIE['email'])){
               ?>    
               <a  href="destroys.php"><i class="fas fa-sign-in-alt" style="color: #000;"></i></a>
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
                  <input type="search" name="search" placeholder="Pesquisar">
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
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb" style="background-color: #e5e5e5">
            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
            <li class="breadcrumb-item"><a href="#">Informática</a></li>
            <li class="breadcrumb-item"><a href="#">Computadores</a></li>
            <li class="breadcrumb-item active" aria-current="page">Item</li>
         </ol>
      </nav>
      <div class="container" style="background-color: #fff;">
         <div class="row">
                        <!-- galeris de Imagens -->
            <div class="col-md-7">
               <section class="gallery">
                <div class="carousel">
                    <input type="radio" id="image1" name="gallery-control" checked>
                    <input type="radio" id="image2" name="gallery-control">
                    <input type="radio" id="image3" name="gallery-control">
                    <input type="radio" id="image4" name="gallery-control">
                    <input type="checkbox" id="fullscreen" name="gallery-fullscreen-control">
                    <div class="wrap mt-4">
                     <figure>
                         <label for="fullscreen">
                             <img src="img/produtos/530.jpg" alt="image1">
                         </label>
                     </figure>
                     <figure>
                         <label for="fullscreen">
                             <img src="img/produtos/531.jpg" alt="image2">
                         </label>
                     </figure>
                     <figure>
                         <label for="fullscreen">
                             <img src="img/produtos/532.jpg" alt="image3">
                         </label>
                     </figure>
                     <figure>
                         <label for="fullscreen">
                             <img src="img/produtos/533.jpg" alt="image4">
                         </label>
                     </figure>
        </div>
        <div class="thumbnails">
            <div class="slider">
                <div class="indicator"></div>
            </div>
            <label for="image1" class="thumb" style="background-image: url(img/produtos/530.jpg)"></label>
            <label for="image2" class="thumb" style="background-image: url(img/produtos/531.jpg)"></label>
            <label for="image3" class="thumb" style="background-image: url(img/produtos/532.jpg)"></label>
            <label for="image4" class="thumb" style="background-image: url(img/produtos/533.jpg)"></label>
        </div>
    </div>
</section>

            </div>
            <div class="col-md-5 mt-3" style="border:0px solid gray">
               <!-- Datos del vendedor y titulo del producto -->
               <h3>Gabinete NZXT Phantom 530 - CA-PH530-W1</h3>
               <p><span class="font-weight-bold">Código:</span> CA-PH530-W1</p>
               <!-- Precios -->
               <h6 class="title-price"><small>A VISTA</small></h6>
               <h3  class="text-danger" style="margin-top:0px;">R$ 750</h3>
               <p>Ou parcele em até 6x sem juros</p>
               <!-- Detalles especificos del producto -->
               <div class="form-group col-md-4">
                  <label for="exampleFormControlSelect1">Cor:</label>
                  <select required class="form-control" id="exampleFormControlSelect1">
                     <option>Branco</option>
                     <option>Preto</option>
                     <option>Vermelho</option>
                  </select>
               </div>
               <div class="form-group col-md-4">
                  <label for="exampleInputPassword1">Quantidade:</label>
                  <input required min="1" type="number" class="form-control" id="exampleInputNumber1" value="1">
               </div>
               <!-- Botones de compra -->
               <div class="section" style="padding-bottom:20px;">
                  <a ype="submit" class="btn btn-warning btn-block">Comprar</a>
                  <button type="submit" class="btn btn-outline-warning btn-block">Add Carinho <span><i class="fas fa-cart-plus"></i></span></button>
               </div>
            </div>

            <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active text-dark" data-toggle="tab" href="#home">Detalhes</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" data-toggle="tab" href="#menu1">Conteudo da Caixa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" data-toggle="tab" href="#menu2">Envio</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <p style="padding:15px; font-size: 18px;"> 
                  O Phantom 530 apresenta um design novo e elegante, mantendo a sua forma assimétrica clássica;
                  Phantom 530 vem atualizado com recursos altamente solicitados, como uma lateral em acrílico de exibição;
                  Vem com 2 de novo fans padrão da NZXT com design inovador, 120 e 200 milímetros FN V2, com o desempenho atualizado e operação mais silenciosa;
                  Muito espaço para gerenciamento de cabo combinado com sete furos de roteamento e mais de 20 pontos de amarração faz o gerenciamento muito mais clean;
               </p>

               <ul style="font-size: 16px;">
                  <li><b>Marca:</b>
                    <P>NZXT</P>
                  </li>

                  <li><b>Modelo:</b>
                    <P>CA-PH530-W1</P>
                  </li>


                  <li><b>Baias:</b>
                    <P>External 5.25" x 3</P>
                    <P>Internal 3.5" /2.5": 6</P>
                    <P>Internal 2.5": 1 + 6</P>
                  </li>

                  <li><b>Refrigeração:</b>
                    <P>Front 2x140mm/ 120mm or 1x200mm(incluso)</P>
                    <P>Rear 1x140mm (incluso 120mm)</P>
                    <P>Bottom 2x120mm</P>
                    <P>Side 1x140mm</P>
                    <P>Top 2x200mm/ 140mm or 3x120mm</P>
                    <P>Interior 1x120mm/140mm</P>
                  </li>
                  <li><b>Espaço Interno:</b>
                    <P>CPU Cooler 183mm</P>
                    <P>VGA Card 282mm (With Cage & Pivot Fan), 310mm (With Cage), 444mm (Without Cage)</P>
                  </li>

                  <li><b>Cable Management:</b>
                    <P>26mm (Lowest Point)/ 34mm (Highest Point)</P>
                  </li>

                  <li><b>Dimensões:</b>
                    <P>235mm x 572mm x 543mm</P>
                  </li>

                  <li><b>Material:</b>
                    <P>Steel, Plastic</P>
                  </li>

                  <li><b>Suporte a Placas Mãe:</b>
                    <P>ITX, Micro-ATX, ATX, EATX (322x272mm)</P>
                  </li>

                  <li><b>Slots de Expanção:</b>
                    <P>8</P>
                  </li>

                  <li><b>Externos:</b>
                    <P>1 x Audio / Mic</P>
                    <P>2 x USB 3.0</P>
                  </li>

                  <li><b>Controlador de Fan:</b>
                    <P>Rear IO LED Switch</P>
                  </li>

                  <li><b>Peso:</b>
                    <P>10.5 kg</P>
                  </li>
               </ul>
    </div>
    <div id="menu1" class="tab-pane fade pb-5 mr-5" style="padding:15px; font-size: 18px;">
      <h3>Descrição do Conteudo Incluso na Embalagem</h3>
     <ul> 
     <li>Gabinete NZXT Phantom 530</li>  
      <li>2x Coolers 120mm/200mm</li>  
      <li>Manual de Instruções</li>  
      <li>Kit de Parafusos</li> 
       </ul>     
    </div>
    <div id="menu2" class="container tab-pane fade pb-5"><br>
      <h3>Insira o CEP do endereço que deseja receber o produto.</h3>
      <p style="font-size: 16px;">Assim você poderá calcular o frete e conhecer os serviços disponíveis.</p>
       <div class="form-group col-md-2">
    <input min="0" type="number" class="form-control" id="cep" placeholder="_ _ _ _ _ - _ _ _">
  </div>
    </div>
  </div>
     </div>
  </div>
      <hr>

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