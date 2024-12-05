<?php
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Phudu:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <img src="../imgs/LoginCadastro/FundoLogin2.jpg" class="fundoo">
    <img src="../imgs/LoginCadastro/semfundo.png" alt="" class="back">
   
    <h1 class="titulo"> Faça seu login</h1>
    <div class="fundo">
        <form action="logar.php" method="POST">

            <div class="cadastro1">
                <img src="../imgs/LoginCadastro/PerfilBranco.png" class="perfil">
                <input type="text" name="email" class="forms" placeholder="Email" required>
                <input type="password" name="senha" class="forms" placeholder="Senha" required>
                <button class='botao1'>Entrar </button>
                <h1 class="text"> ou
                <a href="cadastro.php">cadastre-se aqui</a></h1>
            </div>
    </div>
    </form>