<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicite Um Transporte</title>
    <link rel="stylesheet" href="../css/SoliciteUmTransporte.css"/>
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
<!--  -->
<div class="CC">
  <div class="Titulo"> <p>Solicite um transporte</p> </div>

  <div class="bloco"> <!-- Bloco de cima com ligação à página de doação -->
    <p class="tb">RESUMO DA DOAÇÃO</p>
    <!-- Itens adicionados dinamicamente aqui -->
</div>


<div class="container">
    <p class="titulo2">ENDEREÇO</p>
    <form class="formulario" method="POST" action="processarendereco.php">
      <div class="d1">
        <label for="rua">RUA:</label>
        <input type="text" id="rua" name="rua" class="campo">
        <label for="numero">NÚMERO:</label>
        <input type="text" id="numero" name="numero" class="campo pequeno">
      </div>

      <div class="d3">
        <label for="cidade">CIDADE:</label>
        <input type="text" id="cidade" name="cidade" class="campo">
        <label for="bairro">BAIRRO:</label>
        <input type="text" id="bairro" name="bairro" class="peque">
      </div>
      <div class="d2">
        <label for="cep">CEP:</label>
        <input type="text" id="cep" name="cep" class="campo">
      </div>
      <p class="nota">
        *Confirmando hoje, nosso transporte irá buscar as doações no dia: <strong id="data"></strong></p>
        <script>
            // Obtém a data de hoje
            var dataHoje = new Date();
        
            // Adiciona 1 dia à data
            dataHoje.setDate(dataHoje.getDate() + 1);
        
            // Formata a data para o formato desejado (exemplo: dd/mm/yyyy)
            var dia = dataHoje.getDate().toString().padStart(2, '0');
            var mes = (dataHoje.getMonth() + 1).toString().padStart(2, '0'); // Mês é zero-indexado
            var ano = dataHoje.getFullYear();
        
            var dataFormatada = dia + '/' + mes + '/' + ano;
        
            // Define o conteúdo da tag <strong> com a data formatada
            document.getElementById('data').textContent = dataFormatada;
        </script>
        <script>
    // Função para exibir os itens selecionados no resumo
    function mostrarResumo() {
        const itensSelecionados = JSON.parse(localStorage.getItem('itensSelecionados')) || [];
        const resumoContainer = document.querySelector('.bloco');

        itensSelecionados.forEach((item, index) => {
            const itemElement = document.createElement('p');
            itemElement.className = 'cb';
            itemElement.textContent = `${index + 1}. ${item}`;
            resumoContainer.appendChild(itemElement);
        });
    }

    // Executa a função ao carregar a página
    document.addEventListener('DOMContentLoaded', mostrarResumo);
</script>

      <button type="submit" class="buton">CONFIRMAR DOAÇÃO</button>
    </form>
  </div>
</div>
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