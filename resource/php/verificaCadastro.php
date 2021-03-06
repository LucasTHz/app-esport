<?php
namespace Resource\php;
include '../../vendor/autoload.php';

use Config\connectDataBase;
use Exception;

session_start();

$nome = $_POST['name'];
$sobrenome = $_POST['lastname'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$password = $_POST['password'];
$confirmed_password = $_POST['confirmed_password'];
$rua = $_POST['rua'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$bairro = $_POST['bairro'];
$complemento = $_POST['complemento'];
$numero = $_POST['numero'];
$celular = $_POST['celular'];

$error = [];

function validaCPF($cpf): bool
{
    // Extrai somente os números
    $cpf = preg_replace('/[^0-9]/is', '', $cpf);

    // Verifica se foi informado todos os digitos corretamente
    if (strlen($cpf) != 11) {
        return false;
    }

    // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }

    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;
}

if (empty($nome))
    $error[] = "O campo nome é obrigatório.";


if (empty($sobrenome))
    $error[] = "O campo sobrenome é obrigatório.";


if (empty($email))
    $error[] = "O campo email é obrigatório.";


if (empty($password))
    $error[] = "O campo senha é obrigatório.";

if (empty($celular))
    $error[] = "O campo número de celular é obrigatório";


if (empty($confirmed_password))
    $error[] = "Você precisa confirmar a sua senha.";


if (strlen($email) < 8 || !strstr($email, '@')) {
    $error[] = "Favor digitar o seu email corretamente.";
}


if (strlen($password) < 8 || strlen($password) > 16)
    $error[] = "Favor digitar uma senha com 8 caracteres minimo e 16 caracteres no maximo.";


if (strcmp($confirmed_password, $password) != 0)
    $error[] = "As senhas não se conferem.";

if (strlen($estado) != 2) {
    $error[] = "Estado inválido. Ex: MG";
}

// verificação se o email, cpf e celular já existe no banco de dados
try {
    $test = new connectDataBase();
    $conexao = $test->getConnection();

    $sql = "SELECT * from cliente WHERE email = '$email'";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado->fetch_array())
        $error[] = "Endereço de email já existe.";

    $sql = "SELECT * from cliente WHERE celular = '$celular'";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado->fetch_array())
        $error[] = "Número de celular já existe.";

    $sql = "SELECT * from cliente WHERE cpf = '$cpf'";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado->fetch_array())
        $error[] = "CPF já existe.";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

// chamo a função que faz a verificação do cpf
if (!validaCPF($cpf)) {
    $error[] = "CPF inválido.";
}

// realiza a criação do cliente no banco de dados ou redireciona para a tela de cadastro
// com os erros encontrados
if (empty($error)) {
    $teste = new Cliente();
    $teste->store();
} else {
    $_SESSION['error'] = $error;
    header("location: ../cadastrarCliente.php");
}




