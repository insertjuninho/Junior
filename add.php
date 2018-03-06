<?php 
	$nomeprod = strip_tags($_POST['nomeprod']);
	$codprod = strip_tags($_POST['codprod']);
	$preco = strip_tags($_POST['preco']);
	$categoria = strip_tags($_POST['categoria']);
	$caracteristica = strip_tags($_POST['caracteristica']);
	$tipo = strip_tags($_POST['tipo']);
	$marca = strip_tags($_POST['marca']);
	$quantidade = strip_tags($_POST['quantidade']);
	$modelo = strip_tags($_POST['modelo']);
	$fabricante = strip_tags($_POST['fabricante']);

	include "banco.php";

	$query = "insert into produto(nomeprod, codprod, tipo, marca, fabricante, categoria, modelo, quantidade, preco,caracteristica ) 
	values('$nomeprod', '$codprod', '$tipo', '$marca', '$fabricante', '$categoria', '$modelo', '$quantidade', '$preco', '$caracteristica')";

	mysqli_query($con, $query);

	header("Location: admin.php");
?>