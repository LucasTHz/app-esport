<?php
session_start();

include '../config/connectDataBase.php';
// pego todas as informações que vem do formulario e crio o hash da senha
$nome = $_POST['name'];
$sobrenome = $_POST['lastname'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
$cpf = $_POST['cpf'];
$confirmed_password = $_POST['confirmed_password'];
$rua = $_POST['rua'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$bairro = $_POST['bairro'];
$complemento = $_POST['complemento'];
$numero = $_POST['numero'];
$celular = $_POST['celular'];
$nome = $nome. ' ' .$sobrenome;

// inserção dos dados do cliente
try {
    $sql = "INSERT INTO cliente (nome, password, email, cpf, rua, cidade, estado, bairro, complemento, numero, celular) 
VALUES ('$nome', '$password', '$email', '$cpf', '$rua', '$cidade', '$estado', '$bairro', '$complemento', '$numero', '$celular')";
    $conn = new connectDataBase();
    $conn = $conn->getConnection();
    $conn->query($sql);
    $conn->close();
    $message = "Usuario cadastrado com sucesso.";
    echo "<script type='text/javascript'>alert('$message');";
    echo "javascript:window.location='../../index.php';</script>";
} catch(Exception $e) {
    echo $e->getMessage();
}




