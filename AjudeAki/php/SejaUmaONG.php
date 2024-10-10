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
    <nav>
        <div id="logo">
            <img src="../imgs/navbar/semfundo.png" alt="Logo">
        </div>
        <div id="lista">
            <div id="perfil">
                <a href="#">
                    <img src="../imgs/navbar/PerfilBranco.png" alt="Perfil">
                    <p>MEU PERFIL</p>
                </a>
            </div>
            <div id="itens">
                <ul>
                    <li>
                        <a href="../html/index.html" id="itembotao">
                            <img src="../imgs/navbar/home.png" alt="">
                            <p>HOME</p>
                        </a>
                    </li>
                    <li>
                        <a href="../html/InstituiçõesParceiras.html" id="itembotao">
                            <img src="../imgs/navbar/instituições.png" alt="">
                            <p>INSTITUÍÇÕES PARCEIRAS</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" id="itembotao">
                            <img src="../imgs/navbar/dinheiro.png" alt="">
                            <p>DOAR EM DINHEIRO</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" id="itembotao">
                            <img src="../imgs/navbar/voluntário.png" alt="">
                            <p>SEJA UM VOLUNTÁRIO</p>
                        </a>
                    </li>
                </ul>
                <div id="voluntario">
                    <div id="texto">
                        <p>AINDA NÃO É UMA ONG PARCEIRA?</p>
                    </div>
                    <div id="botao">
                        <a href="#" id="botao">
                            CLIQUE AQUI
                        </a>
                    </div>
                </div>
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
            <input type="text" id="tel" name="tel">
        </div>
        <div class="d3">
            <label for="cnpj">CNPJ</label>
            <input type="text" id="cnpj" name="cnpj">
        </div>
    </div>

    <p class="Titulo2">Conte um pouco sobre sua ong</p>

    <div class="d4">
            <textarea id="mensagem" name="mensagem" ></textarea>
        </div>
    <p class="Titulo3"> Daremos seguimento por meio do e-mail da instituição, aguarde os próximos passos!</p>
    <button type="submit"  class="botao">Salvar</button>
    </form>
