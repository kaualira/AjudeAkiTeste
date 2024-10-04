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

 <p class="Titulo">Página de Voluntariado</p>


 <img src="../imgs/InstituiçõesParceiras/AcolherEProteger.jpeg" class="imagem">
 <div class="form">
    <p class="titulo2">DIAS DISPONIVEIS</p>

 <label for="data">data:</label>
 <input type="date" id="data" name="data" min="2024-10-01" max="2024-12-31"> 
 <label for="data"> Horário:</label>
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
 <button type="submit"  class="botao">Enviar Solitação</button>

