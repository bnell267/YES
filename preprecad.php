
<?php
//print_r($_REQUEST);


include('config.php');
//if(isset($_POST['submit'])){


if(empty($_POST['chave'])){header("Location:prepre.php");}else{
$chave=$_POST['chave'];


$result=mysqli_query($conexao,"SELECT * FROM cad where chave='$chave'");

if(mysqli_num_rows($result)>=1){

SESSION_START();

$_SESSION['chave']=$chave;
//elseif(isset($_SESSION['chave']))
header('Location:cadlogin.php');}

else{
    

  header('Location:precad.php');}
   
}

?>