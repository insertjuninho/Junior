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

        <a href="index.php"><header class="btn btn-warning" style="width: 100%;">
      
      <img class="logo" src="css/logo.png" alt="logo"> 
      </header></a>
      <div id="main" class="container mt-5">
          <h2 class="page-header text-danger">ESCRITÓRIO</h2>

          <div class="container">
           <div id="top" class="row mt-5">
            <div class="col-md-3">
              <h3>Itens</h3>
            </div>

            <div class="col-md-6">
              <div class="input-group h2">
                <input class="form-control" id="myInput" type="text" placeholder="Search..">
              </div>    
            </div>  
            <div class="col-md-3">
        <a href="add-item.php" class="btn btn-dark pull-right ml-5">Novo Item</a>
        </div>
           </div>
 
          </div> <!-- /#top -->
 </div>

     <hr>
<div class="container">
     <div id="list" class="row">
 
    <div class="table-responsive col-md-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Fabricante</th>
                    <th>Preço</th>
                    <th class="actions">Ações</th>
                 </tr>
                    <?php 
        include "banco.php";
        $query = "select * from produto";
        $consulta = mysqli_query($con, $query);

        while($p = mysqli_fetch_array($consulta)){
          $id          = $p['id'];
          $idc         = base64_encode($id);
          $nomeprod    = $p['nomeprod'];
          $categoria   = $p['categoria'];
          $quantidade  = $p['quantidade'];
          $fabricante  = $p['fabricante'];
          $preco       = $p['preco'];
          $preco       = number_format($preco, 2, ',','.');
          echo "<tr>
                 <td>$id</td>
                 <td>$nomeprod</td>
                 <td>$categoria</td>
                 <td>$quantidade</td>
                 <td>$fabricante</td>
                 <td>R$ $preco</td>
                 <td class='actions'>
                 <a class='btn btn-success btn-sm' href ='visualizar.php?id=$id'>Visualizar</a>
                 <a class='btn btn-success btn-sm' href ='edit-item.php?id=$id'>Editar</a>
                 <a class='btn btn-success btn-sm' href ='excluir.php?id=$id'>Excluir</a>
                 </td>
                </tr>";
    }
  ?>
  </thead>
           </tbody>
         </table>
 
     </div>
 </div> <!-- /#list -->
 
 
     <div id="bottom" class="row">
    <div class="col-md-12">
         
      <ul class="pagination pagination-sm justify-content-end">
        <li class="page-item disabled"><a class="page-link" href="#">Voltar</a></li>
        <li class="page-item disabled"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Próximo</a></li>
    </ul>
 
    </div>
    </div> <!-- /#bottom -->
    
    </div><!-- /Container -->

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
          <h4 class="modal-title">Excluir Item</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
      <div class="modal-body">
        Deseja realmente excluir este item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark">Sim</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">N&atilde;o</button>
      </div>
    </div>
  </div>
  </form>
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

         <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
</script>
   </body>
</html>
