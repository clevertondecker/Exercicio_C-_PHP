<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="iso-8859-1">
	<link rel="stylesheet" media="screen" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" media="screen" href="../bootstrap/css/style.css">
	<title> Concluir edição :</title>
</head>
<body>

<?php

include "conexao.inc";

$id=$_GET["idUser"];
$idget=$_POST['f_id'];
$nome=$_POST['f_nome'];
$sobrenome=$_POST['f_sobrenome'];
$email=$_POST['f_email'];
$user=$_POST['f_user'];
$senha=$_POST['f_senha'];

		if (isset($_POST['f_btsalvar'])) {
			$sql="UPDATE usuarios SET nome='$nome',sobrenome='$sobrenome', email='$email', user='$user', senha='$senha' WHERE id=$idget";
			$res=mysqli_query($con, $sql);
			$linhas=mysqli_affected_rows($con);


if ($linhas == 1) {
	echo "Registro gravado com sucesso </br></br>";
	header('location:updateUser.php');

} else {
	echo "ID do usuário inválido </br></br>";
}		
}

?>

<?php echo "<p class=p>Entre com os novos dados do usuario ID $id</p>" ?>

<form name="f_update" method="post" action="saveUpdate.php">

<label>ID</label><br/>
<input type="text" name="f_id" value="<?php echo $id; ?>" maxlength="5" /><br/><br/>


<label>Nome</label><br/>
<input type="text" name="f_nome" value="<?php echo $nome; ?>" maxlength="45" /><br/><br/>

<label> Sobrenome:</label><br/>
<input type="text" name="f_sobrenome" value="<?php echo $sobrenome;?>" maxlength="45"/><br/>

<label> E-mail:</label><br/>
<input type="text" name="f_email"  value="<?php echo $email; ?>" maxlength="45"/><br/>

<label> User:</label><br/>
<input type="text" name="f_user" value="<?php echo $user;?>" maxlength="45"/><br/>

<label>Senha:</label><br/>
<input type="password" name="f_senha" value="<?php echo $password; ?>" maxlength="45"/><br/><br/>


<input type="submit" name="f_btsalvar" value="Salvar"/>
</form>

</br> <a href="menu.php"><button> Voltar</button></a>


 <div>
	<p class="rodape"><small>Cdecker Systems Enterprise</small></p>	
</div>

</body>
</html>