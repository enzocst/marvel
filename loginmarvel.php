<?php
session_start();
include_once("conexaomarvel.php");
?>
<html>

<head>
    <style>
    body {
        font-family: Arial,
    }

    h1 {
        text-align: center;
        font-size: 40px;
        margin-top: 50px;
    }

    form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top: 50px;
    }

    label {
        font-size: 20px;
        margin-bottom: 10px;
    }

    input[type="text"],
    input[type="password"] {
        width: 300px;
        height: 30px;
        font-size: 18px;
        padding-left: 10px;
        margin-bottom: 20px;
    }

    input[type="submit"],
    input[type="reset"] {
		padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        width: 150px;
        height: 40px;
        font-size: 18px;
        margin-bottom: 20px;
		cursor:pointer;
    }

    .mensagem {
        color: red;
        font-size: 20px;
        text-align: center;
    }
    </style>
    <title> Cadastro de usuários</title>

</head>
<?php

include('menumarvel.php');

$mensg1="";
$login="";
$senha="";
//isset verifica se login e senha existentem ou se eles não possui o valor igual a NULL
//informa se as variáveis foram iniciadas, retornando true or false
if((isset($_POST['login'])) && (isset($_POST['senha']))){
	//busca no banco de dados
	$resultado_select = "SELECT login, senha FROM admin WHERE login='".$_POST['login']."' and senha = '".$_POST['senha']."'";
    $resultado_usuario = mysqli_query($conn, $resultado_select);
    $resultado = mysqli_fetch_assoc($resultado_usuario);
	//verifica se login e senha são iguais	
	if(isset($resultado)){
	$_SESSION['login'] = $resultado['login'];
	 //estou redirecionando ao realizar o login        
	header("Location: indexmarvel.php");
	//se não forem iguais, exibe a mensagem
	}else{
	$mensg1 = "Usuário ou senha inválidos";
	}
	
}
?>

<body>

    <h1>Login</h1>

    <form action="" method="post">

        <!-- DADOS DE LOGIN -->


        <label for="login">User:</label> <br>


        <input type="text" name="login" id="login"> <br>

        <label for="senha">Senha:</label> <br>
        <!--password é a máscara para ficar as bolinhas-->
        <input type="password" name="senha" id="senha">

        <?php echo $mensg1; ?>

        <br />
        <input type="submit" value="Entrar">
        <input type="reset" value="Limpar">
    </form>

</body>

</html>