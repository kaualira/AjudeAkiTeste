<?php
session_start();
include('conexao.php');

// Verificar conexão
if ($conn->connect_error) {
    die(json_encode(['success' => false, 'message' => 'Erro na conexão com o banco de dados.']));
}

// Receber os dados JSON
$data = json_decode(file_get_contents('php://input'), true);
$resumo = $data['resumo'] ?? '';

// Validar dados
if (empty($resumo)) {
    echo json_encode(['success' => false, 'message' => 'Resumo está vazio.']);
    exit;
}

// Inserir no banco de dados
$stmt = $conn->prepare("INSERT INTO doacoes2 (resumo) VALUES (?)");
$stmt->bind_param("s", $resumo);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Resumo salvo com sucesso.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Erro ao salvar resumo.']);
}

// Fechar conexões
$stmt->close();
$conn->close();
?>
