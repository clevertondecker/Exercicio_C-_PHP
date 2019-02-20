<!DOCTYPE html>
<html>
<head>
  <title> Validation</title>
</head>
<body>

<?php

echo "redirect";

session_start();

if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:menu.php');
  } else {
     header('location:../index.php');
    exit; 
  }
 
$logado = $_SESSION['login'];

?>


</body>
</html>