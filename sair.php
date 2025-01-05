<?php

//if(!isset($_POST['sair'])){header('Location:cadlogin.php');}
SESSION_START();
//SESSION_ARRAY();
SESSION_DESTROY();
header('Location:precad.php');
?>