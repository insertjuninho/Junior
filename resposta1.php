<?php 
	$usuario = strip_tags($_POST['usuario']);
	$email = strip_tags($_POST['email']);
	$senha = md5($_POST['senha']);
	$nome = strip_tags($_POST['nome']);
	$endereco = strip_tags($_POST['endereco']);
	$cep = strip_tags($_POST['cep']);
	$telefoneFixo = strip_tags($_POST['telresid']);
	$telefoneCel = strip_tags($_POST['cel']);

	include "banco.php";

	$query = "insert into login (usuario, email, senha, nome, endereco, cep, telresid, cel)";

	mysqli_query($con, $query);

	header("Location:perfil.php");

?>
