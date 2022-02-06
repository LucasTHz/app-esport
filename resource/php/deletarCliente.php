<?php
namespace Resource\php;
include '../../vendor/autoload.php';
session_start();

$id = $_SESSION['id'];

$cliente = new Cliente();
$cliente->delete($id);
unset($_SESSION['auth']);
$message = "Conta excluída com sucesso.";
echo "<script type='text/javascript'>alert('$message');";
echo "javascript:window.location='../../index.php';</script>";
