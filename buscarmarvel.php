<?php

include_once("conexaomarvel.php");

$cursos = $_POST['palavra'];
$cursos = "SELECT * FROM formacao WHERE nome LIKE'%formacao'";
$resultado_formacao = mysqli_query($conn, $formacao);
if (mysqli_num_rows($resultado_formacao) <=0){
    echo "Nenhuma palavra encontrada";
}
else{
    while($rows = mysqli_fetch_assoc($resultado_formacao)){
        echo"<li>".$rows['nome']."</li>";
    }
}
?>