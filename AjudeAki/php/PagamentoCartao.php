<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagamento - AjudeAKI</title>
  <link rel="stylesheet" href="../css/PagamentoCartao.css"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Phudu:wght@400;700&display=swap" rel="stylesheet">
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
  <main>
    <h2>PAGAMENTO VIA CARTÃO DE DÉBITO</h2>
    <!--As informações ficam salvas aqui-->
    <section class="a">
        <h3>RESUMO DA DOAÇÃO</h3>
        <div class="linha">
          <span>Instituição Amélia Rodrigues:</span>
          <strong>R$ 000,00</strong>
        </div>
        <div class="linha">
          <span>Modo de pagamento:</span>
          <strong>Cartão de Débito</strong>
        </div>
      </section>
    <div class="b">
        <p>Dados do Cartão</p>
    </div>

    <!-- As caixas, que inferno de resolver saporra -->
    <form class="c">
      <div class="linha-unica">
        <label for="nome">Nome impresso:</label>
        <input type="text" id="nome" placeholder="Nome no cartão" required>
      </div>
      <div class="linha-multipla">
        <div>
          <label for="numero">Número do cartão:</label>
          <input type="text" id="numero" placeholder="Número do cartão" required>
        </div>
        <div>
          <label for="validade">Data de validade:</label>
          <input type="text" id="validade" placeholder="MM/AA" required>
        </div>
        <div>
          <label for="cvv">CVV:</label>
          <input type="text" id="cvv" placeholder="CVV" required>
        </div>
      </div>
      <button type="submit">FINALIZAR</button>
    </form>
  </main>

</body>
</html>