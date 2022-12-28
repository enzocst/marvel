<?php
    session_start();
    include_once("conexaomarvel.php");
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    if(!empty($id)){
        $excluir = "DELETE FROM informacoes WHERE id='$id'";
        $resultado = mysqli_query($conn, $excluir);
    }
    header("Location:indexmarvel.php");
?>