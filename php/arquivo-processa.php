<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO usuarios (nome, email, senha, created) VALUES ('$nome', '$email', '$senha', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)) {
    header("Location: cadastrofinal.html");
} else {
    header("Location: cadastrofinal.html");
}

?>