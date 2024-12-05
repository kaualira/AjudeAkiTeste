

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagamento</title>
    <link rel="stylesheet" href="../css/PagamentoPix.css"/>
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
    <div class="container">
        <p  class="titulo11">Pagamento via Pix</p>
        
        <div class="resumo-doacao">
        <form id="formPix" method="POST" action="salvarDoacao.php">
            <p class="tt2">RESUMO DA DOAÇÃO</p>
            <p class="tt3">Instituição: Coração Solidário</p>
            
            <p class="tt4">Valor da doação: 
    <span>R$</span> 
    <input type="text" class="dindin" name="valor" id="valorDoacao" placeholder="0,00" required value="">
</p>
               <!-- Campo oculto com o ID do usuário -->
        <input type="hidden" name="usuario_id" value="<?php echo $usuario_id; ?>">

<!-- Campo oculto para definir o método de pagamento -->
<input type="hidden" name="metodo_pagamento" value="Pix">
          
        </div>
        <div class="LE">
        <div class="pixlogo">
            <img src="../imgs/PagamentoPix/pixLogo.png" alt="QR Code Pix">
        </div>
        <div class="qr-code">
            <img src="../imgs/PagamentoPix/qrCode.jpg" alt="QR Code Pix">
        </div>
        <p class="b1"> Escaneie o código para </p>
        <p class="b1">finalizar o pagamento</p>
        </div>
        <div class="LD">
        <p class="pix-code">
            <strong class="b"> Ou copie e cole o código em seu banco</strong><br>
            ndqwxbqnwhxqbwixbakcbxjqbcjxqbsjcbqebcqbejcbajcbjaecbjwvcgjwdhcbadhbcjwbdcbadjcbjw
        </p>
  
        <button type="submit" name="confirmar_pagamento" class="button">Já fiz o pagamento</button>
    </div>
    </div>
</form>
<script>
    // Recupera o valor da doação do localStorage
    window.onload = function() {
        const valorDoacao = localStorage.getItem('doacaoValor');
        if (valorDoacao) {
            // Preenche o campo com o valor recuperado
            document.getElementById('valorDoacao').value = valorDoacao;
        }
    };
</script>
</body>
</html>