<?php
session_start();
include_once("conexaomarvel.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM informacoes WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario       = mysqli_fetch_assoc($resultado_usuario);

?>

<html>

<head>
    <title> Alterar Filmes </title>
    <style>
    h1 {
        text-align: center;
        font-size: 40px;
        margin-top: 50px;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 50px;
    }

    label,
    input[type="text"],
    input[type="number"],
    input[type="submit"],
    input[type="reset"] {
        font-size: 20px;
        margin: 10px;
        padding: 10px;
    }

    input[type="text"],
    input[type="number"] {
        width: 50%;
    }

    input[type="submit"],
    input[type="reset"] {
        width: 20%;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 10px;
        cursor: pointer;
    }

    input[type="reset"] {
        background-color: #4CAF50;
        margin-left: 10px;
    }
    </style>
</head>

<body>
    <h1> Tela de edição </h1>
    <form method="POST" action="alterarmarvel.php">
        <input type="hidden" name="id" value="<?php echo $row_usuario['id'];?>" />
        <label> Nome: </label>
        <input type="text" name="nome" value="<?php echo $row_usuario['nome'];?>" /><br>
        <label> Ano: </label>
        <input type="number" name="ano" value="<?php echo $row_usuario['ano'];?>" /><br>
        <label> Gênero: </label>
        <input type="text" name="genero" value="<?php echo $row_usuario['genero'];?>" /><br>
        <label> Classificação indicativa: </label>
        <input type="number" name="classificacao_indicativa"
            value="<?php echo $row_usuario['classificacao_indicativa'];?>" /><br>
        <label> Duração (em minutos): </label>
        <input type="number" name="duracao" value="<?php echo $row_usuario['duracao'];?>" /><br>
        <label> Diretor: </label>
        <input type="text" name="diretor" value="<?php echo $row_usuario['diretor'];?>" /><br>
        <input type="submit" value="Atualizar" />
        <input type="reset" value="Limpar" />
    </form>
    <?php
include('listarmarvel.php');
?>
</body>

</html>