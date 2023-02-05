<html>

<head>
    <?php
    include("conexaomarvel.php");
        $grupo = selectAllPessoa();
	session_start();
		if (empty($_SESSION['login'])){
		header("Location: loginmarvel.php");
	}
	?>
    <style>
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 20px auto;
        padding: 20px;
        background-color: #f2f2f2;
        border-radius: 10px;
    }

    label {
        font-size: 16px;
    }

    input[type="text"],
    input[type="number"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"],
    input[type="reset"] {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 20px;
    }

    input[type="submit"]:hover,
    input[type="reset"]:hover {
        background-color: #3e8e41;
    }

    h1 {
        text-align: center;
        margin-bottom: 40px;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
    }

    a {
        font-size: 16px;
        color: blue;
        text-decoration: none;
        float: right;
    }
    </style>
    <title> MARVEL </title>
</head>
<?php

    echo "Administrador logado: " . $_SESSION['login']."";    
    ?>
&nbsp;&nbsp;<a href="sairmarvel.php">Sair</a>

<body>
    <?php
            include('menumarvel.php');
        ?>
    <h1> Tela de cadastro </h1>
    <form method="POST" action="gravainfomarvel.php">
        <label> Nome: </label>
        <input type="text" name="nome" placeholder="Digite o nome do filme." /> <br />
        <label> Ano: </label>
        <input type="number" name="ano" placeholder="Digite o ano." /> <br />
        <label> Gênero: </label>
        <input type="text" name="genero" placeholder="Digite o gênero." /> <br />
        <label> Classificação indicativa: </label>
        <input type="number" name="classificacao_indicativa" placeholder="Digite a classificação indicativa." /> <br />
        <label> Duração (em minutos): </label>
        <input type="number" name="duracao" placeholder="Digite a duração." /> <br />
        <label> Diretor: </label>
        <input type="text" name="diretor" placeholder="Digite o nome do diretor." /> <br />
        <input type="submit" value="Cadastrar" />
        <input type="reset" value="Limpar" />
    </form>
    <?php
include('listarmarvel.php');
?>
    <br>
    <img src="imagens/wikimarvel.png" alt="wikimarvelucm" style=" max-width: 200px; max-height: 200px;">
</body>


</html>