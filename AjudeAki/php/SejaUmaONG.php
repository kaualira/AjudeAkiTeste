<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seja uma ONG parceira </title>
    <link rel="stylesheet" href="../css/SejaUmaONG.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Phudu:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
</head>

<body>
<nav class="navbar">
        <div class="blocologo">
            <img src="../imgs/navbar/semfundo.png" alt="Logo">
        </div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="../php/perfil.php" class="nav-link">
                    <div class="seuperfil">
                        <img src="../imgs/navbar/PerfilBranco.png" alt="perfil" class="perfil">
                        <span class="item-text">SEU PERFIL</span>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a href="../html/index.html" class="nav-link">
                    <img src="../imgs/navbar/home.png" alt="home" class="home">
                    <span class="item-text">HOME</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../html/InstituiçõesParceiras.html" class="nav-link">
                    <img src="../imgs/navbar/instituições.png" alt="instituicoes" class="instituicoes">
                    <span class="item-text">INSTITUIÇÕES PARCEIRAS</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <img src="../imgs/navbar/dinheiro.png" alt="dinheiro" class="dinheiro">
                    <span class="item-text">DOAÇÕES EM DINHEIRO</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="../html/SejaUmVoluntario.html" class="nav-link">
                    <img src="../imgs/navbar/voluntário.png" alt="voluntário" class="voluntario">
                    <span class="item-text">SEJA UM VOLUNTÁRIO</span>
                </a>
            </li>
        </ul>
        <div class="caixapergunta">
            <p>AINDA NÃO É UMA ONG PARCEIRA?</p>
            <div class="botao">
                <a href="#" id="botao">
                    CLIQUE AQUI
                </a>
            </div>
        </div>
    </nav>

    <p class="Titulo">Seja nossa ONG parceira</p>
    <p class="Titulo2">NOS INFORME SOBRE SOBRE SUA ONG</p>
    <form action="SalvarOng.php" method="POST">
    <div class="form">
        <div class="d1">
            <label for="nome">Nome da ONG:</label>
            <input type="text" id="nome" name="nome">
        </div>
        <div class="d2">
            <label for="email">E-mail:</label>
            <input type="text" id="email" name="email" class="emaill">
            <label for="email">Tel:</label>
            <input type="text" id="tel" name="tel" class="tel">
        </div>
        <div class="d3">
            <label for="cnpj">CNPJ:</label>
            <input type="text" id="cnpj" name="cnpj">
        </div>
    </div>

    <p class="Titulo2">Conte um pouco sobre sua ong</p>

    <div class="d4">
            <textarea id="mensagem" name="mensagem" ></textarea>
        </div>
    <p class="Titulo3"> Daremos seguimento por meio do e-mail da instituição, aguarde os próximos passos!</p>
    <button type="submit"  class="buton">Salvar</button>
    </form>

    <footer>
    <div class="footer-cote"></div>
    <div class="footer-content">
        <p class="p1">©2024 AjudeAKI</p>
        <ul class="p2">
            <li>Tell: (11)999999999</li>
            <li>Email: AjudeAKI@gmail.com</li>
            <li>Instagram: @ajudeaki_</li>
        </ul>
    </div>
</footer>
</body>
</html>
