<?php
session_start();
include('conexao.php');

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Obtém os dados do formulário
$nome = $_POST['nome'];
$valor = $_POST['valor'];
$metodo_pagamento = "Cartão de Débito";  // Método de pagamento fixo

// Valida os dados
if (!empty($nome) && !empty($valor)) {
    // Insere os dados na tabela, incluindo o método de pagamento
    $stmt = $conn->prepare("INSERT INTO doacoes (nome, valor, metodo_pagamento) VALUES (?, ?, ?)");
    $stmt->bind_param("sds", $nome, $valor, $metodo_pagamento);

    if ($stmt->execute()) {
        // Redireciona para a página de confirmação
        header("Location: ../html/DoacaoRealizada.html");
        exit();
    } else {
        echo "Erro ao salvar a doação: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "Preencha todos os campos!";
}

// Fecha a conexão
$conn->close();
?>
