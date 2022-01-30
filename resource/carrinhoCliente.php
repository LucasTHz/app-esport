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
    <link rel="stylesheet" href="../public/css/carrinho.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Carrinho | App Esport</title>
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #16819C; margin-right: auto">
    <div class="container-fluid">
        <a class="navbar-brand" style="color: whitesmoke;" href="../index.php">App Esport</a>
        <legend>Carrinho</legend>
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
</body>
</html>
