<?php
session_start();
include('conexao.php');

// Verifica se o usuário está logado
if (!isset($_SESSION['nome'])) {
    header('Location: login.php');
    exit();
}

// Busca as informações do usuário no banco de dados
$email = $_SESSION['nome'];
$query = "SELECT * FROM usuarios WHERE nome = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

// Verifica se o usuário foi encontrado
if ($result->num_rows === 1) {
    $usuario = $result->fetch_assoc();
} else {
    echo "Erro: usuário não encontrado.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil </title>
    <link rel="stylesheet" href="../css/perfil.css" />
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
   
</head>
<body>
    <div class="container">
        <main class="profile-content">
        <p class="Titulo">Perfil</p>
            <div class="profile-header">
            <div class="photo">
    <img src="uploads/<?= htmlspecialchars($usuario['foto'] ?? 'default-profile.png'); ?>" alt="Foto do usuário">
    <form action="upload_foto.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="foto" accept="image/*">
        <div class="photo">
    <img 
        src="<?= htmlspecialchars($usuario['foto'] ?? 'uploads/default-profile.png'); ?>" 
        alt="Foto do usuário" 
        style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover;">
</div>
</div>
            </div>

                <div class="info">
                    <h2><?= htmlspecialchars($usuario['nome']); ?></h2>
                    <p><?= $usuario['idade'] ?? '00'; ?> anos</p>
                    <div class="stats">
                        <p>00 Doações Materiais</p>
                        <p>R$ 00,00 Doações em Dinheiro</p>
                        <p>00 Trabalho Voluntário</p>
                    </div>
                </div>
            </div>

            <form method="POST" action="atualizarperfil.php">
                <p class="Titulo2"> Dados Pessoais</p>
                <div class="d1">
                    <label>Nome Completo:</label>
                    <input type="text" name="nome" value="<?= htmlspecialchars($usuario['nome']); ?>" required>
                </div>
                <div class="d2">
                    <label>E-mail:</label>
                    <input type="email" name="email"  class="emaill"  value="<?= htmlspecialchars($usuario['email']); ?>" required>
                    <label>CPF:</label>
                    <input type="text" name="cpf" value="<?= htmlspecialchars($usuario['cpf']); ?>" required>
                </div>
                <div class="d3">
                    <label>Telefone:</label>
                    <input type="text" name="telefone" value="<?= htmlspecialchars($usuario['telefone'] ?? ''); ?>" required>
                    <label>Data de Nascimento:</label>
                    <input type="date" name="data_nascimento" value="<?= htmlspecialchars($usuario['data_nascimento'] ?? ''); ?>" required>
                </div>
                <p class="Titulo3">Endereço</p>
                <div class="d4">
                    <label>Rua:</label>
                    <input type="text" name="rua" value="<?= htmlspecialchars($usuario['rua'] ?? ''); ?>">
                    <label>Número:</label>
                    <input type="text" name="numero" class="nun"   value="<?= htmlspecialchars($usuario['numero'] ?? ''); ?>">
                </div>
                <div class="d6">
                    <label>Bairro:</label>
                    <input type="text" name="bairro" value="<?= htmlspecialchars($usuario['bairro'] ?? ''); ?>">
                    <label>Cidade:</label>
                    <input type="text" name="cidade" value="<?= htmlspecialchars($usuario['cidade'] ?? ''); ?>">
                </div>
                <div class="d5">
                    <label>CEP:</label>
                    <input type="text" name="cep" value="<?= htmlspecialchars($usuario['cep'] ?? ''); ?>">
                </div>

                <div class="container">
    <button type="submit" class="bbb">Salvar Alterações</button>
</div>
            </form>
        </main>
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