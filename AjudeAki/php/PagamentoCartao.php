<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagamento - AjudeAKI</title>
  <link rel="stylesheet" href="../css/pagamento.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Phudu:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

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