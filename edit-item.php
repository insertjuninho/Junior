<?php 
   $id = base64_decode($_GET['id']);

  include "banco.php";

  $query = "select * from produto where id = $id limit 1";

  $consulta = mysqli_query($con, $query);

  $total = mysqli_num_rows($consulta);
  if ($total == 0){
    header("Location:index.php");
  }

  while($p = mysqli_fetch_assoc($consulta)){
    $codprod = $p['codprod'];
    $categoria = $p['categoria'];
    $tipo = $p['tipo'];
    $nomeprod = $p['nomeprod'];
    $modelo = $p['modelo'];
    $fabricante = $p['fabricante'];
    $quantidade = $p['quantidade'];
    $preco = $p['preco'];
  }
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>ACCIO</title>
  </head>
  <body style="background-image:url(fundo2.jpg); ">
    
    <a href="admin.php"><header class="btn btn-warning" style="width: 100%; display: inline-block;">
      
      <img class="logo" src="css/logo.png" alt="logo"> 
  </header></a>
     <div id="main" class="container bg-light mt-3">
  <h3 class="page-header">Adicionar Item</h3>
  <form method="post" action="edit-item2.php">
    <div class="row">
    <div class="form-group col-md-4">
        <label for="exampleInputEmail1">Codigo do Produto</label>
        <input type="number" min="0" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor" value="<?php echo $codprod ?>"  name="codProd">
      </div>
    <div class="form-group col-md-4">
        <label for="exampleInputEmail1">Categoria</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor" value="<?php echo $categoria ?>"  name="categoria">
      </div>
  </div>
  <div class="row">
      <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Tipo</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor" value="<?php echo $tipo ?>"  name="tipo">
      </div>
    <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Nome</label>
        <input type=text" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor" value="<?php echo $nomeprod ?>"  name="nomeprod">
      </div>
    <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Modelo</label>
        <input type=text" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor" value="<?php echo $modelo ?>"  name="modelo">
      </div>
    <div class="form-group col-md-3">
        <label for="exampleInputEmail1">Fabricante</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor" value="<?php echo $fabricante ?>"  name="fabricante">
      </div>
  </div>
  <div class="row">
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Quantidade</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor" value="<?php echo $quantidade ?>"  name="quantidade">
      </div>
    <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Preço</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor" value="<?php echo $preco ?>"  name="preco">
     </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-dark">Salvar</button>
    <a href="admin.php" class="btn btn-default text-dark">Cancelar</a>
    </div>
  </div>

  </form>
 </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>