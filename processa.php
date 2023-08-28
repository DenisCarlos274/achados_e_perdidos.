<?php 
include_once("conexao.php");


$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "Nome: $senha <br>";

"$result_usuario = INSERT INTO test (nome,senha, created) VALUES ('$nome','$senha, NOW())";
mysqli_query($conn, $
?>