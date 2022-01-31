<?php
session_start();

if ($_SESSION['auth'] != true){
    $message = "Você precisa está autenticado para realizar uma compra.";
    echo "<script type='text/javascript'>alert('$message');";
    echo "javascript:window.location='../../index.php';</script>";
} else {
    switch($_POST['teste']) {
        case "prod1":
            $test = [
                'nomeProduto' => "Tênis Oakley Stratus Masculino",
                'valor' => "R$ 299,99"
            ];
            break;
        case "prod2":
            $test = [
                'nomeProduto' => "Tênis Nike Downshifter 11 Masculino",
                'valor' => "R$ 229,99"
            ];
            break;
    }
    $_SESSION['cliente'] = $test;

    $message = "Produto adicionado ao carrinho.";
    echo "<script type='text/javascript'>alert('$message');";
    echo "javascript:window.location='../../index.php';</script>";
    }
