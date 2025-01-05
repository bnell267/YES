<?php
include_once('config.php');

//if(!isset($_GET['senha'])){
if(empty($_POST['senha'])){header('Location:vazionot.php');}else{
$senha=$_POST['senha'];
$chave=$_POST['chave'];
$passw=mysqli_query($conexao,"SELECT * FROM testenv where senha='$senha'");
$passwandchave=mysqli_query($conexao,"SELECT * FROM testenv where chave='$chave' AND senha='$senha'");
if(mysqli_num_rows($passw)<1){header("Location:outro.php");}
elseif(mysqli_num_rows($passwandchave)>=1){

//echo($_REQUEST);
SESSION_START();

$_SESSION['senha']=$senha;
//$_SESSION['id']=$id;


//if(isset($_SESSION['senha'])){
header("Location:pagini.php");}


else{

  header("Location:unautorized.php");}
  
  
  
  
  
  }
   
  










?>



