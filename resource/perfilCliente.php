<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Meu perfil | App Esport</title>
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #16819C; margin-right: auto">
    <div class="container-fluid">
        <a class="navbar-brand" style="color: whitesmoke;" href="../index.php">App Esport</a>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="bi bi-cart" id="car"></i>Carrinho</a>
            </li>

            <li class="nav-item">
                <?php
                if (isset($_SESSION['auth']) && $_SESSION['auth'] == true) {
                    echo "<a class='nav-link active' aria-current='page' href='../resource/perfilCliente.php' id='icon'>";
                    echo "<i class='bi bi-person' id='perfil'></i>Meu perfil</a>";

                    echo "<li class='nav-item'>";
                    echo "<a class='nav-link active' aria-current='page' href='php/logoutCliente.php'>";
                    echo "<i class='bi bi-box-arrow-right' id='logout'></i>Logout</a>";
                    echo "</li>";
                } else {
                    echo "<a class='nav-link active' aria-current='page' href='../resource/loginCliente.php'>";
                    echo "<i class='bi bi-person' id='login'></i>Login</a>";
                }
                ?>
            </li>
        </ul>
    </div>
</nav>
<h2 class="my-dados">Meus dados</h2>
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

<form action="php/updateCliente.php" method="post">
    <?php
    include '../vendor/autoload.php';
    use Resource\php\Cliente;
    $test = new Cliente();
    $infos = $test->show($_SESSION['id']);

    $nome = ucwords($infos['nome']);
    $email = $infos['email'];
    $cpf = $infos['cpf'];
    $rua = $infos['rua'];
    $cidade = $infos['cidade'];
    $estado = $infos['estado'];
    $bairro = $infos['bairro'];
    $complemento = $infos['complemento'];
    $numero = $infos['numero'];
    $celular = $infos['celular'];

    echo "<div class='form-group col-md-6 mb-4'>";

    echo "<label class='label-senha'>Nome";
    echo "<input type='text' name='name' class='input-dados form-control' value='$nome'>";
    echo "</label>";

    echo "<label style='margin-left: 20px'>Endereço de email";
    echo "<input type='email' name='email' class='input-dados form-control' value='$email'>";
    echo "</label>";

    echo "<label>CPF";
    echo "<input type='text' name='cpf' class='input-dados form-control' value='$cpf' readonly>";
    echo "</label>";

    echo "<label style='margin-left: 20px'>Rua";
    echo "<input type='text' name='rua' class='input-dados form-control' value='$rua'>";
    echo "</label>";

    echo "<label>Cidade";
    echo "<input type='text' name='cidade' class='input-dados form-control' value='$cidade'>";
    echo "</label>";

    echo "<label style='margin-left: 20px' >Estado";
    echo "<input type='text' name='estado' class='input-dados form-control' value='$estado'>";
    echo "</label>";

    echo "<label>Bairro";
    echo "<input type='text' name='bairro' class='input-dados form-control' value='$bairro'>";
    echo "</label>";

    echo "<label style='margin-left: 20px'>Complemento";
    echo "<input type='text' name='complemento' class='input-dados form-control' value='$complemento'>";
    echo "</label>";

    echo "<label>Número";
    echo "<input type='text' name='numero' class='input-dados form-control' value='$numero'>";
    echo "</label>";

    echo "<label style='margin-left: 20px'>Celular";
    echo "<input type='text' name='celular' class='input-dados form-control' value='$celular'>";
    echo "</label>";

    echo "</div>";
    ?>

    <div>
        <button type="submit" class="btn btn-warning">Salvar alterações</button>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalExemplo">
            Excluir Conta
        </button>
    </div>
</form>

<form action="php/deletarCliente.php" method="post">
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deleção da Conta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Você tem certeza que deseja deletar sua conta? Essa ação é inreversivel!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Confirmar</button>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
