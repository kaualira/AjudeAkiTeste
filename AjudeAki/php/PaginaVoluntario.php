<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituições Parceiras</title>
    <link rel="stylesheet" href="../css/PaginaVoluntario.css"/>
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
            <a href="#" class="nav-link">
                <div class="seuperfil">
                    <img src="../imgs/navbar/PerfilBranco.png" alt="perfil" class="perfil">
                    <span class="item-text">SEU PERFIL</span>
                </div>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <img src="../imgs/navbar/home.png" alt="home" class="home">
                <span class="item-text">HOME</span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
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
            <a href="#" class="nav-link">
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
 <p class="Titulo">Página de Voluntariado</p>


 <img src="../imgs/InstituiçõesParceiras/AcolherEProteger.jpeg" class="imagem">
 <div class="form">
    <p class="titulo2">DIAS DISPONIVEIS</p>
    <form action="ProcessaAgendamento.php" method="POST">
 <input type="date" id="data" name="data" min="2024-10-01" max="2024-12-31"> 
 <select id="horario" name="horario">
        <option value="07:00">07:00</option>
        <option value="08:00">08:00</option>
        <option value="09:00">09:00</option>
        <option value="10:00">10:00</option>
        <option value="11:00">11:00</option>
        <option value="12:00">12:00</option>
        <option value="13:00">13:00</option>
        <option value="14:00">14:00</option>
        <option value="15:00">15:00</option>
        <option value="16:00">16:00</option>
        <option value="17:00">17:00</option>
        <option value="18:00">18:00</option>
    </select>
 </div>
 <button type="submit"  class="botao1">Enviar Solitação</button>
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

