<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Loja App Esport</title>
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #16819C; margin-right: auto">
    <div class="container-fluid">
        <a class="navbar-brand" style="color: whitesmoke;" href="index.php">App Esport</a>
        <form class="d-flex" id="search">
            <input class="form-control me-2" type="search" placeholder="Procurar produtos" aria-label="Search">
            <button class="btn" style="color: whitesmoke;" type="submit"><i class="bi bi-search"></i></button>
        </form>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="resource/carrinhoCliente.php"><i class="bi bi-cart" id="car"></i>Carrinho</a>
            </li>

            <li class="nav-item">
                <?php
                    if (isset($_SESSION['auth']) && $_SESSION['auth'] == true) {
                        echo "<a class='nav-link active' aria-current='page' href='resource/perfilCliente.php' id='icon'>";
                        echo "<i class='bi bi-person' id='perfil'></i>Meu perfil</a>";

                        echo "<li class='nav-item'>";
                            echo "<a class='nav-link active' aria-current='page' href='resource/php/logoutCliente.php'>";
                            echo "<i class='bi bi-box-arrow-right' id='logout'></i>Logout</a>";
                        echo "</li>";
                    } else {
                        echo "<a class='nav-link active' aria-current='page' href='resource/loginCliente.php'>";
                        echo "<i class='bi bi-person' id='login'></i>Login</a>";
                    }
                ?>
            </li>
        </ul>
    </div>
</nav>
<p class="presentation">Novos Produtos em destaque</p>

<div class="row row-cols-1 row-cols-md-4 g-4" style="margin: 0 auto">
    <div class="col">
        <div class="card" style="width: 18rem; margin-top: 100px">
            <img src="https://static.netshoes.com.br/produtos/tenis-oakley-stratus-masculino/06/PFN-1494-006/PFN-1494-006_detalhe1.jpg?ts=1604588518?ims=280x280" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Tênis Oakley Stratus Masculino</h5>
                <p class="card-text">FRETE GRÁTIS</p>
                <p class="card-price">R$ 299,99</p>
                <p class="card-parcel">4x de R$ 74,99 <br>SEM JUROS</p>
                <form action="resource/php/adicionaCarrinho.php" method="post">
                    <button type="submit" class="btn btn-primary" name="teste" value="prod1">Comprar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card" style="width: 18rem; margin-top: 100px">
            <img src="https://static.netshoes.com.br/produtos/tenis-nike-downshifter-11-masculino/26/HZM-5208-026/HZM-5208-026_detalhe1.jpg?ts=1630603834?ims=280x280" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Tênis Nike Downshifter 11 Masculino</h5>
                <p class="card-text">FRETE GRÁTIS</p>
                <p class="card-price">R$ 229,99</p>
                <p class="card-parcel">4x de R$ 57,50 <br>SEM JUROS</p>
                <form action="resource/php/adicionaCarrinho.php" method="post">
                    <button type="submit" class="btn btn-primary" name="teste" value="prod2">Comprar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card" style="width: 18rem; margin-top: 100px">
            <img src="https://static.netshoes.com.br/produtos/tenis-adidas-coreracer-masculino/05/NQQ-4635-205/NQQ-4635-205_detalhe1.jpg?ts=1637759889?ims=280x280" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Tênis Adidas Coreracer Masculino</h5>
                <p class="card-text">FRETE GRÁTIS</p>
                <p class="card-price">R$ 169,99</p>
                <p class="card-parcel">4x de R$ 42,50 <br>SEM JUROS</p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card" style="width: 18rem; margin-top: 100px;">
            <img src="https://static.netshoes.com.br/produtos/mochila-nike-elemental-20/26/HZM-1925-026/HZM-1925-026_detalhe1.jpg?ts=1565012481?ims=280x280" class="card-img-top" alt="...">
            <div class="card-body" style="width: 278px">
                <h5 class="card-title">Mochila Nike Elemental 2.0</h5>
                <p class="card-text">FRETE GRÁTIS</p>
                <p class="card-price">R$ 99,99</p>
                <p class="card-parcel">4x de R$ 24,99 <br>SEM JUROS</p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card" style="width: 18rem; margin-top: 100px;">
            <img src="public/img/imagem1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Bola de futebol Campo Adidas Teltar 18 Official Mata-Mata Copa do Mundo FIFA
                    - Branco+Vermelho</h5>
                <p class="card-text">FRETE GRÁTIS</p>
                <p class="card-price">R$ 199,99</p>
                <p class="card-parcel">4x de R$ 49,99 <br>SEM JUROS</p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card" style="width: 18rem; margin-top: 100px;">
            <img src="public/img/imagem2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Bola de Futebol Campo Adidas UEFA Champions League Pro Official Match Ball Istanbul 20</h5>
                <p class="card-text">FRETE GRÁTIS</p>
                <p class="card-price">R$ 199,99</p>
                <p class="card-parcel">4x de R$ 49,99 <br>SEM JUROS</p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card" style="width: 18rem; margin-top: 100px;">
            <img src="public/img/imagem3.jpg" class="card-img-top" alt="...">
            <div class="card-body" style="width: 200px">
                <h5 class="card-title">Bola de Basquete Wilson NBA Authentic Series Outdoor</h5>
                <p class="card-text">FRETE GRÁTIS</p>
                <p class="card-price">R$ 199,99</p>
                <p class="card-parcel">4x de R$ 49,99 <br>SEM JUROS</p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card" style="width: 18rem; margin-top: 100px;">
            <img src="public/img/imagem4.jpg" class="card-img-top" alt="...">
            <div class="card-body" style="width: 200px">
                <h5 class="card-title">Bola de Basquete Spalding NBA Game Ball - Bola Officieal NBA</h5>
                <p class="card-text">FRETE GRÁTIS</p>
                <p class="card-price">R$ 120,99</p>
                <p class="card-parcel">4x de R$ 30,24 <br>SEM JUROS</p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card" style="width: 18rem; margin-top: 100px;">
            <img src="public/img/imagem5.jpg" class="card-img-top" alt="...">
            <div class="card-body" style="width: 200px">
                <h5 class="card-title">Bola de Vólei Mikasa MVA200 Official</h5>
                <p class="card-text">FRETE GRÁTIS</p>
                <p class="card-price">R$ 150,99</p>
                <p class="card-parcel">4x de R$ 37,74 <br>SEM JUROS</p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card" style="width: 18rem; margin-top: 100px;">
            <img src="public/img/imagem6.jpg" class="card-img-top" alt="...">
            <div class="card-body" style="width: 200px">
                <h5 class="card-title">Camisa Paris Saint-Germain Away - Masculina</h5>
                <p class="card-text">FRETE GRÁTIS</p>
                <p class="card-price">R$ 150,99</p>
                <p class="card-parcel">4x de R$ 37,74 <br>SEM JUROS</p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card" style="width: 18rem; margin-top: 100px;">
            <img src="public/img/imagem7.jpg" class="card-img-top" alt="...">
            <div class="card-body" style="width: 200px">
                <h5 class="card-title">Camisa Los Angeles Lakers N° 23 James</h5>
                <p class="card-text">FRETE GRÁTIS</p>
                <p class="card-price">R$ 80,99</p>
                <p class="card-parcel">4x de R$ 20,25 <br>SEM JUROS</p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>

    <div class="col" style="margin-right: auto">
        <div class="card" style="width: 18rem; margin-top: 100px;">
            <img src="public/img/imagem8.jpg" class="card-img-top" alt="...">
            <div class="card-body" style="width: 200px">
                <h5 class="card-title">Camisa de Vôlei do Brasil 2019/20 Amarela - S/N° - Masculina</h5>
                <p class="card-text">FRETE GRÁTIS</p>
                <p class="card-price">R$ 85,99</p>
                <p class="card-parcel">4x de R$ 21,49 <br>SEM JUROS</p>
                <a href="#" class="btn btn-primary">Comprar</a>
            </div>
        </div>
    </div>


</div>


<footer class="bg-light text-center text-lg-start" style="margin-right: auto">
    <div class="text-center p-3" style="background-color: #16819C; color: white;">
        © 2021 Copyright: Lucas e Davi
    </div>
</footer>

</body>
</html>