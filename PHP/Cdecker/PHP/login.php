<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="iso-8859-1">
	<title> PHP Connect</title>
</head>
<body>



<?php

include "conexao.inc"; 
session_start();

//$user="cleverton";
//$passwd="132567";
$login=$_POST['f_user'];
$senha=$_POST['f_senha'];



$sql= "SELECT * FROM usuarios WHERE user='$login' AND senha='$senha'";
$res=mysqli_query($con, $sql); //faz conexao e executa comando;

//Mostra qnt de registro da tabela.
$linha=mysqli_num_rows($res);


//Mostra qnt de registro da tabela.
if($linha > 0 ) {

$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:menu.php');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);

  echo "Erro ao autenticar";
  echo "</br> </br> <a href='../index.html'><button> Voltar</button></a>";
   
  }

mysqli_close($con);

?>

</body>
</html>


