<?php
session_start();
require '../../config/connectDataBase.php';
require 'Cliente.php';

$nome = $_POST['name'];
$email = $_POST['email'];
$id = $_SESSION['id'];
$error = [];

if (empty($nome))
    $error[] = "O campo nome é obrigatório.";

if (empty($email))
    $error[] = "O campo email é obrigatório.";

if (strlen($email) < 8 || !strstr($email, '@'))
    $error[] = "Favor digitar o seu email corretamente.";

// conexão com o banco e verificação se o email já não pertence a outro cliente
try {
    $test = new connectDataBase();
    $conexao = $test->getConnection();
    $sql = "SELECT * from cliente WHERE email = '$email' and id != '$id'";
    $resultado = mysqli_query($conexao, $sql);
    $conexao->close();

    if ($resultado->fetch_array())
        $error[] = "Endereço de email já existe.";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

// faço a alteração dos dados e redireciono para o perfil do cliente
if (empty($error)) {
    $cliente = new Cliente();
    $cliente->update($id);
    $message = "Sucesso na alteração dos dados!";
    echo "<script type='text/javascript'>alert('$message');";
    echo "javascript:window.location='../perfilCliente.php';</script>";
} else {
    $_SESSION['error'] = $error;
    header ("location: ../perfilCliente.php");
}
