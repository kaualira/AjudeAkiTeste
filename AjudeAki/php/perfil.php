<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/perfil.css"/>
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
                        <a href="#" id="itembotao">
                            <img src="../imgs/navbar/home.png" alt="">
                            <p>HOME</p>
                        </a>
                    </li>
                    <li>
                        <a href="#" id="itembotao">
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
<?php
session_start(); // Iniciar a sessão
include 'conexao.php';

if (!isset($_SESSION['id_usuario'])) {
    echo "Você não está logado!";
    exit;
}

$id_usuario = $_SESSION['id_usuario']; // ID do usuário logado

// Consulta SQL e exibição dos dados (como no exemplo anterior)
$sql = "SELECT nome, email, cpf, rg, data_criacao FROM usuarios WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_usuario);
$stmt->execute();
$stmt->bind_result($nome, $email, $cpf, $rg, $data_criacao);

if ($stmt->fetch()) {
    echo "<h1 class='titulo'>Dados Pessoais</h1>";
    echo "<div class= 'D1'>";

echo "<p><strong>Nome Completo:</strong> <input type='text' name='nome' class='forms' value='$nome' ></p>";
echo "<div class='linha'>
        <p><strong>Email:</strong> <input type='email' name='email' class='forms' value='$email'></p>
        <p><strong>Tel:</strong> <input type='text' name='telefone' class='forms' value='$'></p>
      </div>";

echo "<div class='linha2'>
        <p><strong>CPF:</strong> <input type='text' name='cpf' class='forms' value='$cpf'></p>
         <p><strong>RG:</strong> <input type='text' name='rg' class='forms' value='$rg'></p>
    </div>";



} else {
    echo "<p>Usuário não encontrado.</p>";
}

$stmt->close();
$conn->close();
?>
