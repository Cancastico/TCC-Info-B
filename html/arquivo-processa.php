<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);

$user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_EMAIL);

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

$key = filter_input(INPUT_POST, 'key', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO usuarios (name, user, email, key) VALUES ('$nome', '$user', '$email', '$key' NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)) {
    header("Location: cadastro.html ");
} else {
    header("Location: cadastro.html");
}

?>