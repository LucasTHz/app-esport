<?php
namespace Resource\php;
include '../../vendor/autoload.php';

session_start();

use Config\connectDataBase;

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT id, email, password FROM cliente WHERE email = '$email'";
$conn = new connectDataBase();
$conn = $conn->getConnection();
$result = $conn->query($query);
$conn->close();

foreach ($result as $row) {
    $db_email = $row['email'];
    $db_password = $row['password'];
    $db_id = $row['id'];
}


// faço a verificação da senha com a hash armazenada no banco
if (password_verify($password, $db_password)) {
    $message = "Login realizado com sucesso.";
    $_SESSION['auth'] = true;
    $_SESSION['id'] = $db_id;

    // redireciona para a home com uma mensagem de sucesso!
    echo "<script type='text/javascript'>alert('$message');";
    echo "javascript:window.location='../../index.php';</script>";
} else {
    $_SESSION['error'] = "Email ou senha inválidos.";
    echo "<script type='text/javascript'>";
    echo "javascript:window.location='../loginCliente.php';</script>";
}






