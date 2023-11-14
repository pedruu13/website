<?php

$host = "";
$usuario = "";
$senha = "";
$nome_do_banco = "";


$conn = new mysqli("");


if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}


$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM usuarios WHERE username = '$username' AND senha = '$password'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  
    echo "Login bem-sucedido!";
} else {
    
    echo "Nome de usuário ou senha incorretos.";
}


$conn->close();
?>
