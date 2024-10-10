<?php
session_start();

include("conexao.php");
// Obter os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$cnpj = $_POST['cnpj'];
$mensagem = $_POST['mensagem'];

// Preparar e executar a inserção
$sql = "INSERT INTO ong (nome, email, tel, cnpj, mensagem) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $nome, $email, $tel, $cnpj, $mensagem);

if ($stmt->execute()) {
    header("Location: ../html/SolicitacaoONG.html");
    exit(); 
} else {
    echo "Erro ao salvar dados: " . $stmt->error;
}

// Fechar a conexão
$stmt->close();
$conn->close();
?>