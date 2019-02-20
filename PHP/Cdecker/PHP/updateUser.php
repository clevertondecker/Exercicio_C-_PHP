<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html"; charset="iso-8859-1">
	<link rel="stylesheet" media="screen" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" media="screen" href="../bootstrap/css/style.css">
	<title> Atualizar Usuários </title>
</head>
<body>

<P> <h1 class="header"> Selecione um usuário para editar: </b></h1>
<hr/>

<form name="f_editar" method="post" action="updateUser.php">

<div class="container"> 
	<table border="1">
		<tr>

			<td>Codigo</td>
		    <th>Nome</th>
		    <th>Sobrenome</th>
		    <th>E-mail</th>
		    <th>User</th>
			<td>Selecionar</td>
		</tr>

		<?php

		// Edita usuários selecionados
		$n1=$_GET["idUser"];
		include "conexao.inc";
		if (isset($_POST['sel'])) {
			foreach ($_POST['sel'] as $codigo) {   //verifica vetor 
		   	header("Location:saveUpdate.php?idUser=$codigo&idsession=$n1");


		}
		
		}   //verifica se o formulario já foi preenchido (true/ false)


		$sql="SELECT * FROM usuarios ORDER BY id"; // seleciona todos  os usuarios

		$res=mysqli_query($con, $sql); //conexao,comando.

		while($vregistro=mysqli_fetch_row($res)){  // Para cada registro selecionado cria uma linha no vetor $registro.
			$vid=$vregistro[0];
			$vnome=$vregistro[1];
			$vsobrenome=$vregistro[2];
			$vemail=$vregistro[3];
			$vuser=$vregistro[4];

			echo "<tr>";
			echo "<td>$vid</td>
				<td>$vnome</td>
				<td>$vsobrenome</td>
				<td>$vemail</td>
				<td>$vuser</td>";
			echo "<td align=center>
				<input type=radio value=$vid name=sel[]></td>";
				echo "</tr>";
		} // fim while




		mysqli_close($con);
		?>


	</table>
	</br>

	<input type="submit" value="Editar" name="bt_editar"/>
</form>	
</div>

</br></br></br></br></br>
</br> <a href="menu.php"><button> Voltar</button></a>


 <div>
	<p class="rodape"><small>Cdecker Systems Enterprise</small></p>	
</div>

</body>
</html>