<?php
$servidor = "localhost";
$usuario = "root";
$senha="";
$dbname = "marvel";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$conn){
    die("Houve um erro: ".mysqli_connect_error());
}

function selectAllPessoa(){
    $banco = abrirBanco();
    $sql = "SELECT * FROM informacoes ORDER BY nome";
    $resultado = $banco->query($sql);
    $banco->close();
    while ($row = mysqli_fetch_array($resultado)) {
        $grupo[] = $row;
    }
    return $grupo;
}

function selectIdPessoa($id){
    $banco = abrirBanco();
    $sql = "SELECT * FROM informacoes WHERE id =".$id;
    $resultado = $banco->query($sql);
    $banco->close();
    $pessoa = mysqli_fetch_assoc($resultado);
    return $pessoa;
}

function abrirBanco(){
    $conexao = new mysqli("localhost", "root", "", "marvel");
    return $conexao;
}

function formatoData($data){
    $array = explode("-", $data);
    // $data = 2016-04-14
    // $array[0]= 2016, $array[1] = 04 e $array[2]= 14;
    $novaData = $array[2]."/".$array["1"]."/".$array[0];
    return $novaData;
}


?>