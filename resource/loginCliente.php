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
    <link rel="stylesheet" href="../public/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Login | App Esport</title>
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
    echo $_SESSION['error'];
    unset($_SESSION['error']);

    echo "</div>";
}
?>

<form action="php/verificaLogin.php" method="POST" class="form-login">
    <fieldset>
        <legend>Login</legend>
            <div class="form-group mb-3 col-sm-3" id="email-cliente">
                <label for="formGroupExampleInput">Email</label>
                <input type="text" class="form-control" name="email" id="formGroupExampleInput" placeholder="appesport@gmail.com">
            </div>
            <div class="form-group mb-4 col-sm-3">
                <label for="formGroupExampleInput2">Senha</label>
                <input type="password" class="form-control" name="password" id="formGroupExampleInput2" placeholder="Outro input">
            </div>
        <div class="form-group col-sm-3">
            <input type="submit" value="Entrar" name="enviar" class="btn btn-primary">
        </div>
        <small>Não possui conta? <a href="cadastrarCliente.php">Cadastre-se aqui</a></small>
    </fieldset>
</form>

</body>
<!--<footer class="bg-light text-center text-lg-start" style="margin-right: auto;">-->
<!--    <div class="text-center p-3" style="background-color: #16819C; color: white;">-->
<!--        © 2021 Copyright: Lucas e Davi-->
<!--    </div>-->
<!--</footer>-->
</html>
