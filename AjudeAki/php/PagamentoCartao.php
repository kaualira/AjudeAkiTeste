<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagamento - AjudeAKI</title>
  <link rel="stylesheet" href="../css/PagamentoCartao.css"/>
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
  <main>
    <h2>PAGAMENTO VIA CARTÃO DE DÉBITO</h2>
    <!--As informações ficam salvas aqui-->
    <section class="a">
        <h3>RESUMO DA DOAÇÃO</h3>
        <div class="linha">
          <span>Instituição Amélia Rodrigues:</span>
          <strong id="resumo-valor">R$ 000,00</strong>
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
    <form class="c" action="salvardoacaocartao.php" method="POST">
      <div class="linha-unica">
        <label for="nome">Nome impresso:</label>
        <input type="text" id="nome" name="nome" required>
      </div>
      <div class="linha-multipla">
        <div>
          <label for="numero">Número do cartão:</label>
          <input type="text" id="numero"  required>
        </div>
        <div>
          <label for="validade">Data de validade:</label>
          <input type="text" id="validade"  required>
        </div>
        <div>
          <label for="cvv">CVV:</label>
          <input type="text" id="cvv" required>
        </div>
        <input type="text" id="valor" name="valor"  id="resumo-valor" style="display: none;">
      </div>
      <button type="submit">FINALIZAR</button>
    </form>
  </main>
  <script>
  document.addEventListener('DOMContentLoaded', function() {
    const doacaoValor = localStorage.getItem('doacaoValor'); // Recupera o valor do localStorage
    const resumoValor = document.getElementById('resumo-valor'); // Elemento do resumo visível
    const valorInput = document.getElementById('valor'); // Campo de input invisível no formulário

    // Atualiza o resumo visível e o input do formulário se houver valor salvo
    if (doacaoValor) {
      resumoValor.textContent = `R$ ${doacaoValor}`; // Atualiza o resumo visível
      valorInput.value = doacaoValor; // Atualiza o campo invisível
    }
  });
</script>

</body>
</html>