<?php 
session_start();
 if(empty($_SESSION['email'])){
  // header("location:index.php");
  }
   $email = $_SESSION['email'];
   $senha = $_SESSION['senha'];

   echo "email:$email";
 ?>