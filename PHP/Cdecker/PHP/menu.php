<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" media="screen" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" media="screen" href="../bootstrap/css/style.css">

	
<?php 
session_start();
if (isset($_SESSION['login']) && !empty($_SESSION['login'])) {
} else { 
header('location:../index.html');
}
?>

</head>

<body>

<?php
echo "<h1 class=header>Menu Principal </h1>";
echo "<hr/>";
?>

<h3 class="p"> Opções :</h3>

</br> <a class="btn" href="listaUsuario.php"><button> Registro </button></a></br>
</br> <a class="btn" href="updateUser.php"><button> Atualizar Usuário </button></a></br>
</br> <a class="btn" href="excluir.php"><button> Remover Usuário </button></a>



</br></br></br>

</br> <a class="btn" href="Logout.php"><button> Logout </button></a>

<div>
	<p class="rodape"><small>Cdecker Systems Enterprise</small></p>	
</div>
</body>



</html>