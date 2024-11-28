<?php
session_start();
include('conexao.php');

// Verifica se o usuário está logado
if (!isset($_SESSION['nome'])) {
    header('Location: login.php');
    exit();
}

// Exibe os dados recebidos do formulário para depuração
var_dump($_POST);

// Obtém os dados do formulário, incluindo as novas colunas
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$telefone = $_POST['telefone'];  // Novo campo
$data_nascimento = $_POST['data_nascimento'];  // Novo campo
$bairro = $_POST['bairro'];  // Novo campo
$cidade = $_POST['cidade'];  // Novo campo
$cep = $_POST['cep'];  // Novo campo

// Atualiza os dados no banco de dados
$usuario_atual = $_SESSION['nome'];

$sql = "UPDATE usuarios SET 
            nome = '$nome', 
            email = '$email', 
            cpf = '$cpf', 
            rg = '$rg', 
            telefone = '$telefone', 
            data_nascimento = '$data_nascimento', 
            bairro = '$bairro', 
            cidade = '$cidade', 
            cep = '$cep' 
        WHERE nome = '$usuario_atual'";


// Prepara a query
$stmt = $conn->prepare($sql);

// Verifica se a preparação da query falhou
if ($stmt === false) {
    die('Erro na preparação da query: ' . $conn->error);
}

// Associa os parâmetros
$stmt->bind_param("ssssssssss", $nome, $email, $cpf, $rg, $telefone, $data_nascimento, $bairro, $cidade, $cep, $usuario_atual);

// Executa a query
if ($stmt->execute()) {
    $_SESSION['nome'] = $nome; // Atualiza o nome na sessão
    header('Location: perfil.php'); // Redireciona para o perfil
    exit();
} else {
    echo "Erro ao atualizar perfil: " . $stmt->error; // Exibe erro caso haja falha
}
