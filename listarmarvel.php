<html>

<head>
    <title> Listar Filmes </title>
    <style>
    body {
        background-color: #f2f2f2;
        font-family: Arial, sans-serif;
        text-align: center;
    }

    h1 {
        color: #000080;
        margin-top: 50px;
    }

    table {
        margin: auto;
        border-collapse: collapse;
        width: 60%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #000080;
        color: white;
    }

    img {
        display: block;
        margin: auto;
        margin-top: 50px;
    }

    a {
        color: #000080;
        text-decoration: none;
        margin-top: 20px;
        display: block;
    }
    </style>
</head>

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
    <a href="gerarPDFmarvel.php">Gerar pdf da lista acima</a>
</body>

</html>