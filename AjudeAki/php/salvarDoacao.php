<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include('conexao.php');

// Teste inicial: verificar se dados estão chegando
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    print_r($_POST); // Ver o que está sendo enviado
    exit;
}

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if (isset($_POST['categorias']) && !empty($_POST['categorias'])) {
    // Iterar sobre as categorias e inseri-las no banco
    foreach ($_POST['categorias'] as $categoria) {
        // Escapar a string para evitar SQL Injection
        $categoria = $conn->real_escape_string($categoria);

        // Query para inserir no banco
        $sql = "INSERT INTO doacoesmaterias (categoria) VALUES ('$categoria')";

        if ($conn->query($sql) === TRUE) {
            echo "Categoria '$categoria' inserida com sucesso!<br>";
        } else {
            echo "Erro ao inserir categoria '$categoria': " . $conn->error . "<br>";
        }
    }

    $conn->close();
} else {
    echo "Nenhuma categoria foi selecionada.";
}
?>
