<?php 
    session_start();
	if(isset($_COOKIE['email']) or isset($_SESSION['email']) or isset($_COOKIE['adm']) or isset($_SESSION['adm'])){
		if(isset($_SESSION['email']) and isset($_SESSION['adm'])){
			$email = $_SESSION['email'];
			$adm = $_SESSION['adm'];
		}
		if(isset($_COOKIE['email']) and isset($_COOKIE['adm'])){
			$email = $_COOKIE['email'];
			$adm = $_COOKIE['adm'];
		}
	}else{
		header("Location: index.php");
	}
	include "banco.php";
	$query = "select * from login where email = '$email' and senha = '$senha' limit 1";
	$consulta = mysqli_query($con, $query);
	 
	while($login = mysqli_fetch_array($consulta)){
		$adm = $l['adm'];
  	  }
	header("Location:index.php");

?>