<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" http-equiv="Content-Type" content="text/html">
	<link rel="stylesheet" media="screen" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" media="screen" href="../bootstrap/css/style.css">
	
	<title> Remover usuario: </title>
</head>

<body>

<h1 class="header"> Remover Usuários</h1>
<hr/>

<form name="f_excluir" method="post" action="excluir.php">

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
		// Remove usuários selecionados
		include "conexao.inc";
		if (isset($_POST['sel'])) {
			foreach ($_POST['sel'] as $codigo) {   //verifica vetor 
			$sql="DELETE FROM usuarios WHERE id=$codigo";	
			$res=mysqli_query($con, $sql);
		}
		
		}   //verifica se o formulario já foi preenchido (true/ false)


		$sql="SELECT * FROM usuarios ORDER BY id"; // seleciona todos os usuarios

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
				<input type=checkbox value=$vid name=sel[]></td>";
				echo "</tr>";
		} // fim while




		mysqli_close($con);
		?>


	</table>
	</br>

	<input type="submit" value="Excluir"  name="bt_excluir"/>
	</div>

</form>	
	
</br></br> </br> </br> </br> </br> </br>  
</br> <a href="menu.php"><button> Voltar</button></a>


 <div>
	<p class="rodape"><small>Cdecker Systems Enterprise</small></p>	
</div>

</body>
</html>