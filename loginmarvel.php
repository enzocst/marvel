<?php
session_start();
include_once("conexaomarvel.php");
?>
<html >
<head>
<title> Cadastro de usuários</title>

</head>
<?php


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

      <h2> Área de login</h2> 

<form action="" method="post" >

<!-- DADOS DE LOGIN -->

 
    <label for="login">Login: </label> <br>
  
   
    <input type="text" name="login" id="login"> <br>
   
    <label for="senha">Senha: </label> <br>
  <!--password é a máscara para ficar as bolinhas-->
       <input type="password" name="senha" id="senha">
  
  <?php echo $mensg1; ?> 
  
<br />
<input type="submit" value="Entrar">
<input type="reset" value="Limpar">
<a href="inicio.php">
</form>

</body>

</html>