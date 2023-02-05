<html>

<head>
    <title>Cadastro de usuários</title>
    <style>
    #geral {
        width: 50%;
        margin: 0 auto;
        text-align: center;
		font-family: Arial;
    }
	body{
		font-family: Arial;
	}
	h1{
		color: #000080;
	}

    form {
        padding: 10px 20px;
        background-color: #f2f2f2;
        border-radius: 5px;
        box-shadow: 2px 2px 10px #ccc;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: none;
        box-shadow: 2px 2px 10px #ccc;
    }

    input[type="submit"] {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        border: none;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #555;
    }
    </style>
    <?php

include('menumarvel.php');

?>
</head>
<?php


	if(isset($_GET['msg'])){
		if ($_GET['msg'] == 1)
			echo "<script>alert('Email enviado com Sucesso!');</script>";
		//echo "<script language='javascript' type='text/javascript'>alert('Email enviado com Sucesso!');</script>";
		else
			echo "<script>alert('Erro ao enviar o email!');</script>";
		
		
	}
 
	  

$nome="";
$email="";
$assunto="";
$mensagem="";




?>

<body>
    <div id="geral">

        <?php
if (!empty($_SESSION['login'])){ 
    echo "Usuario: ". $_SESSION['login']."     ";    
?>
        <a href="sairmarvel.php">Sair</a>
        <?php
}  
?>
        <h1>Entre em contato conosco</h1>
        <form method="POST" action="enviaemailmarvel.php">
            <label>Nome</label>
            <input type="text" name="nome" placeholder="Nome completo"><br><br>

            <label>Email</label>
            <input type="email" name="email" placeholder="Seu melhor e-mail"><br><br>
            <label>Assunto</label>
            <input type="text" name="assunto" placeholder="Seu melhor e-mail"><br><br>
            <label>Mensagem</label>
            <textarea name="mensagem" rows="4" cols="50"></textarea><br><br>

            <input type="submit" value="Enviar"><br><br>
        </form>

    </div>


</body>

</html>