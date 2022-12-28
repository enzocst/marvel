<?php
session_start();
include_once("conexaomarvel.php");
$id =                       filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome =                     filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$ano =                      filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_NUMBER_INT);
$genero =                   filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
$classificacao_indicativa = filter_input(INPUT_POST, 'classificacao_indicativa', FILTER_SANITIZE_NUMBER_INT);
$duracao =                  filter_input(INPUT_POST, 'duracao', FILTER_SANITIZE_NUMBER_INT);
$diretor =                  filter_input(INPUT_POST, 'diretor', FILTER_SANITIZE_STRING);

$resultado_usuario = "UPDATE informacoes SET nome='$nome', ano='$ano', genero='$genero', classificacao_indicativa='$classificacao_indicativa', duracao='$duracao', diretor='$diretor' WHERE id = '$id' ";
$result_usuario = mysqli_query($conn, $resultado_usuario);

header("Location:editarmarvel.php?id=$id");

?>