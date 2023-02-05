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