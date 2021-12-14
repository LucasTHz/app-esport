<?php
    $host = "us-cdbr-east-04.cleardb.com";
    $user = "bb5d3b57d53ec3";
    $password = "1151642e";

    $link = mysqli_connect($host, $user, $password);

    if (!$link) {
        echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
     
    echo "Sucesso: Sucesso ao conectar-se com a base de dados MySQL." . PHP_EOL;
     
    mysqli_close($link);
