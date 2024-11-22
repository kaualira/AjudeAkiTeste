<?php
session_start();
include('conexao.php');

// Verifica se o usuário está logado
if (!isset($_SESSION['nome'])) {
    header('Location: login.php');
    exit();
}

// Obtém os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$nova_senha = $_POST['nova_senha'];

// Atualiza os dados no banco de dados
$usuario_atual = $_SESSION['nome'];
$sql = "UPDATE usuarios SET nome = ?, email = ?, cpf = ?, rg = ?" . (!empty($nova_senha) ? ", senha = ?" : "") . " WHERE nome = ?";
$stmt = $conn->prepare($sql);

if (!empty($nova_senha)) {
    $senha_criptografada = md5($nova_senha);
    $stmt->bind_param("ssssss", $nome, $email, $cpf, $rg, $senha_criptografada, $usuario_atual);
} else {
    $stmt->bind_param("sssss", $nome, $email, $cpf, $rg, $usuario_atual);
}

if ($stmt->execute()) {
    $_SESSION['nome'] = $nome; // Atualiza o nome na sessão
    header('Location: perfil.php');
    exit();
} else {
    echo "Erro ao atualizar perfil: " . $stmt->error;
}
?>
