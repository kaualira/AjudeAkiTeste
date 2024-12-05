<?php
session_start();
include('conexao.php');

// Verifica se o usuário está logado
if (!isset($_SESSION['nome'])) {
    header('Location: login.php');
    exit();
}

// Exibe os dados recebidos do formulário para depuração (remova isso em produção)
var_dump($_POST);

// Obtém os dados do formulário e verifica se estão definidos
$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$cpf = $_POST['cpf'] ?? null;
$rg = $_POST['rg'] ?? null;
$telefone = $_POST['telefone'] ?? null;
$data_nascimento = $_POST['data_nascimento'] ?? null;
$bairro = $_POST['bairro'] ?? null;
$cidade = $_POST['cidade'] ?? null;
$cep = $_POST['cep'] ?? null;

// Valida se os campos obrigatórios estão preenchidos
if (!$nome || !$email || !$cpf || !$rg || !$telefone || !$data_nascimento || !$bairro || !$cidade || !$cep) {
    
}

// Atualiza os dados no banco de dados
$usuario_atual = $_SESSION['nome'];

// Query com placeholders para evitar SQL Injection
$sql = "UPDATE usuarios SET 
            nome = ?, 
            email = ?, 
            cpf = ?, 
            rg = ?, 
            telefone = ?, 
            data_nascimento = ?, 
            bairro = ?, 
            cidade = ?, 
            cep = ? 
        WHERE nome = ?";

// Prepara a query
$stmt = $conn->prepare($sql);

// Verifica se a preparação da query falhou
if ($stmt === false) {
    die('Erro na preparação da query: ' . $conn->error);
}

// Associa os parâmetros à query
$stmt->bind_param(
    "ssssssssss",
    $nome,
    $email,
    $cpf,
    $rg,
    $telefone,
    $data_nascimento,
    $bairro,
    $cidade,
    $cep,
    $usuario_atual
);

// Executa a query
if ($stmt->execute()) {
    $_SESSION['nome'] = $nome; // Atualiza o nome na sessão
    header('Location: perfil.php'); // Redireciona para o perfil
    exit();
} else {
    echo "Erro ao atualizar perfil: " . $stmt->error; // Exibe erro caso haja falha
}

// Fecha a conexão
$stmt->close();
$conn->close();
?>
