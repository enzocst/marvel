<?php
//session_start();
include_once("conexaomarvel.php");
include('menumarvel.php');	
	
?>

<html >
	<head>
		<title>Lista de filmes</title>
	</head>

	<body>
	  
	  
	 <h1>Pesquisar filmes</h1>
		
		<form method="POST" action="">
			<label>Nome:</label>
			<input type="text" name="nome" placeholder="Qual filme está procurando?"><br><br>
			<input name="pesquisar" type="submit" value="Pesquisar">
		</form><br><br>
	  </form>
		
		<?php
		
		$pesquisar = filter_input(INPUT_POST, 'pesquisar', FILTER_SANITIZE_STRING);
		if($pesquisar){
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			//as porcentagens ao lado da variável nome, é para que sejam exibidas todos os
			//cadastros. Caso tenham 3 pessoas com Maria no nome, vai aparecer. Sem as porcentagens,
			//irá aparecer apenas 1 por vez.
			$Usuario = "SELECT * FROM informacoes WHERE nome LIKE '%$nome%'";
			$usuario = mysqli_query($conn, $Usuario);
			
            echo'<table border="5">';
            echo'<tr>';
            echo'<td>Id</td>';
            echo'<td>Nome</td>';
            echo'<td>Ano</td>';
            echo'<td>Gênero</td>';
            echo'<td>Classificação indicativa</td>';
            echo'<td>Duração</td>';
            echo'<td>Diretor</td>';
            echo'</tr>';

            while($row = mysqli_fetch_assoc($usuario)){
                echo'<tr>';
                echo'<td>'.$row['id'].'</td>';
                echo'<td>'.$row['nome'].'</td>';
                echo'<td>'.$row['ano'].'</td>';
                echo'<td>'.$row['genero'].'</td>';
                echo'<td>'.$row['classificacao_indicativa'].'</td>';
                echo'<td>'.$row['duracao'].'</td>';
                echo'<td>'.$row['diretor'].'</td>';

				if (!empty($_SESSION['login'])){ 
                echo "<td><a href='excluir.php?tipo=2&id=" . $row['id'] . "'><img src='imagens/del.png' width='20' height='20' title='Excluir' /></td>";
                echo "<td><a href='editar.php?tipo=2&id=". $row['id'] ."'/><img src='imagens/edit.png' width='20' height='20' title='Alterar' /></td>";
                }
            }
            }
            echo'</table>';
		    ?>
			  		
<tr>
<td><a href="indexmarvel.php"><input type="button" value="Cadastrar" ></a></td>

<td><a href="indexmarvel.php"><input type="button" value="Voltar" ></a></td>
</tr>

</table>
    </body>
</html>