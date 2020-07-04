<?php session_start();
if(isset($_SESSION['user'])){
  require 'views/contenido.view.php';
}else{
  header('Location:login.php');
  
}
  
  
?>