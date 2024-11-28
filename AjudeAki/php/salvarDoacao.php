<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();

    // Conexão com o banco de dados
    require_once 'conexao.php';

    // Obtém os dados do formulário
    $usuario_id = intval($_POST['usuario_id']);
    $valor = $_POST['valor']; // Pegue o valor diretamente

    // Validar se o valor é numérico e não vazio
    if (empty($valor) || !is_numeric(str_replace(',', '.', $valor))) {
        echo "Valor da doação inválido.";
        exit;
    }
    
    $metodo_pagamento = $_POST['metodo_pagamento'];

    // Validar os dados
    if (!in_array($metodo_pagamento, ['Pix', 'Cartão de Débito'])) {
        die("Método de pagamento inválido.");
    }

    if ($valor <= 0) {
        die("Valor da doação inválido.");
    }

    // Inserir no banco de dados
    $stmt = $pdo->prepare("INSERT INTO doacoes (usuario_id, valor, metodo_pagamento) VALUES (?, ?, ?)");
    $stmt->execute([$usuario_id, $valor, $metodo_pagamento]);

    // Redirecionar para a página de confirmação
    header("Location: ../html/DoacaoRealizada.html");
    exit();
}
?>
