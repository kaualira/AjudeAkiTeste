<?php
session_start();
include('conexao.php');


// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Coleta os dados do formulário
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];

// Insere os dados no banco
$sql = "INSERT INTO enderecos (rua, numero, cidade, bairro, cep) 
        VALUES ('$rua', '$numero', '$cidade', '$bairro', '$cep')";

if ($conn->query($sql) === TRUE) {
    // Redireciona para a página de listagem após o cadastro
    header("Location: ../html/DoacaoRealizada.html");
    exit();
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>