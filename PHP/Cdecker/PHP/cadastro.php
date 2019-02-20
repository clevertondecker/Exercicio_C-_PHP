<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="iso-8859-1">
	<link rel="stylesheet" media="screen" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" media="screen" href="../bootstrap/css/style.css">
	<title> PHP Connect</title>
</head>
<body>



<?php

include "conexao.inc"; 

$nome=$_POST['f_nome'];
$sobrenome=$_POST['f_sobrenome'];
$email=$_POST['f_email'];
$user=$_POST['f_user'];
$passwd=$_POST['f_senha'];

$sql="INSERT INTO usuarios  VALUES (DEFAULT,'$nome', '$sobrenome', '$email', '$user', '$passwd');";
$res=mysqli_query($con, $sql); // conexao, comando.
$linhas=mysqli_affected_rows($con);


if ($linhas == 1) {
	echo "Registro gravado com sucesso";
} else {
	echo "Falha ao persistir dados";
}

echo "<br/><br/><br/>";
echo "</br> <a href='HTML/cadastro.html'><button> Voltar P/ Cadastro </button></a>";
echo "<a href='index.html'><button> Voltar Menu login</button></a>";


mysqli_close($con);
?>

</body>
</html>


