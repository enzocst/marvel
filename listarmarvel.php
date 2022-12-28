<html>
    <head> <title> Listar Filmes </title></head>
    <body>
    <h1> Filmes cadastrados </h1>
    <?php 
    $busca ="";
        $mysqli = new mysqli("localhost",
        "root","","marvel");
        if($resultado_sel = $mysqli->query("SELECT id, nome, ano, genero, classificacao_indicativa, 
        duracao, diretor FROM informacoes WHERE nome like '".$busca."%'")){
            echo'<table border="1">';
            echo'<tr>';
            echo'<td>Id</td>';
            echo'<td>Nome</td>';
            echo'<td>Ano</td>';
            echo'<td>Gênero</td>';
            echo'<td>Classificação indicativa</td>';
            echo'<td>Duração</td>';
            echo'<td>Diretor</td>';
            echo'<td>Excluir</td>';
            echo'<td>Editar</td>';
            echo'</tr>';

            while($row = mysqli_fetch_assoc($resultado_sel)){
                echo'<tr>';
                echo'<td>'.$row['id'].'</td>';
                echo'<td>'.$row['nome'].'</td>';
                echo'<td>'.$row['ano'].'</td>';
                echo'<td>'.$row['genero'].'</td>';
                echo'<td>'.$row['classificacao_indicativa'].'</td>';
                echo'<td>'.$row['duracao'].'</td>';
                echo'<td>'.$row['diretor'].'</td>';
                echo "<td> <a href='deletarmarvel.php?tipo=2&id=".$row['id']."'>
                <img src='imagens/excl.png' width='20' height='20' title='Excluir'/>
                </td>";
                echo "<td> <a href='editarmarvel.php?tipo=2&id=".$row['id']."'>
                <img src='imagens/editar.png' width='20' height='20' title='Editar'/>
                </td>";
                echo'</tr>';
            }
            echo'</table>';
        }
    ?>
</body>
    </html>