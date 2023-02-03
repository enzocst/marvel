<html>
    <head> <title> Listar Filmes </title></head>
    <body>
    <?php
    include('menumarvel.php');
    ?>
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
                echo'</tr>';
            }
            echo'</table>';
        }
    ?>
    <img src="imagens/Ordo.png" alt="wikimarvelucm" style=" max-width: 200px; max-height: 200px;">
    <br>
    <a href="gerarPDFmarvel.php">Gerar pdf da lista acima</a>
</body>
    </html>