<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/cadastro.css"
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Cadastre-se já</title>
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #16819C; margin-right: auto">
    <div class="container-fluid">
        <a class="navbar-brand" style="color: whitesmoke;" href="../index.php">App Esport</a>
    </div>
</nav>


<?php
if (!empty($_SESSION['error'])) {
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>";
    foreach($_SESSION['error']as $errors) {
        echo $errors . '<br>';
    }
    unset($_SESSION['error']);

    echo "</div>";
}
?>

<h2 class="titulo">Cadastro</h2>
<form action="php/verificaCadastro.php" method="post">
    <div class="form-group row-cols-lg-1" id="formcadastro">
        <div class="form-group col-md-6 mb-4">
            <label>Nome
                <input type="text" name="name" class="input-dados form-control" placeholder="Nome">
            </label>
            <label>Sobrenome
                <input type="text" name="lastname" class="input-dados form-control" placeholder="Sobrenome">
            </label>
            <label>Endereço de email
                <input type="email" name="email" class="input-dados form-control" placeholder="Seu email">
            </label>
            <label>CPF
                <input type="text" name="cpf" class="input-dados form-control" placeholder="Seu CPF">
            </label>
        </div>

        <div class="form-group col-md-6 mb-4">
            <label class="label-senha">Senha
                <input type="password" name="password" class="input-dados form-control" placeholder="Senha">
            </label>
            <label>Confirme a senha
                <input type="password" name="confirmed_password" class="input-dados form-control" placeholder="Senha">
            </label>
            <label>Rua
                <input type="text" name="rua" class="input-dados form-control" placeholder="Sua Rua">
            </label>
            <label>Cidade
                <input type="text" name="cidade" class="input-dados form-control" placeholder="Sua Cidade">
            </label>
        </div>

        <div class="form-group col-md-6 mb-4">
            <label>Estado
                <input type="text" name="estado" class="input-dados form-control" placeholder="Seu estado: MG">
            </label>
            <label>Bairro
                <input type="text" name="bairro" class="input-dados form-control" placeholder="Seu Bairro">
            </label>
            <label>Complemento
                <input type="text" name="complemento" class="input-dados form-control" placeholder="Seu complemento">
            </label>
            <label>Número
                <input type="text" name="numero" class="input-dados form-control" placeholder="Seu número">
            </label>
        </div>

        <div class="form-group col-md-6 mb-4">
            <label>Número celular
                <input type="text" name="celular" class="input-dados form-control" placeholder="Seu número de celular">
            </label>
        </div>

    </div>
    <div class="col text-center">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>
<footer id="sticky-footer" class="flex-shrink-0 py-4 text-white-50">
    <div class="text-center" style="background-color: #16819C; color: white;">
        © 2021 Copyright: Lucas e Davi
    </div>
</footer>
</body>
</html>
