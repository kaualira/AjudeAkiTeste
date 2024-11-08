<?php
session_start();
include("conexao.php");

// Verifica se o método da requisição é POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? null;
    $nome = $_POST['nome'] ?? null;
    $cpf = $_POST['cpf'] ?? null;
    $rg = $_POST['rg'] ?? null;
    $senha = $_POST['senha'] ?? null;
    $confirmar_senha = $_POST['senhaa'] ?? null;

    // Verifica se as senhas são iguais
    if ($senha === $confirmar_senha) {
    // Criptografa a senha
    $senha_criptografada = md5($senha);

        // Verifica se o e-mail já existe no banco de dados
        $sql_check_user = "SELECT COUNT(*) AS total FROM usuarios WHERE email = ?";
        $stmt_check_user = $conn->prepare($sql_check_user);
        $stmt_check_user->bind_param("s", $email);
        $stmt_check_user->execute();
        $result_check_user = $stmt_check_user->get_result();
        $row_check_user = $result_check_user->fetch_assoc();

        if ($row_check_user['total'] == 1) {
            $_SESSION['usuario_existe'] = true;
            header('Location: cadastro.php');
            exit;
        }

        // Insere o novo usuário no banco de dados
        $sql_insert_user = "INSERT INTO usuarios (nome, cpf, rg, email, senha) VALUES (?, ?, ?, ?, ?)";
        $stmt_insert_user = $conn->prepare($sql_insert_user);
        $stmt_insert_user->bind_param("sssss", $nome, $cpf, $rg, $email, $senha_criptografada);
        

                    // Redireciona para a página de login após o cadastro
                    header('Location: ../html/index.html');
                    exit;
                } else {
                    echo "Erro ao realizar o cadastro: " . $conn->error;
                }
            } else {
                // As senhas não coincidem
                echo "As senhas não coincidem. Por favor, tente novamente.";
            }
        
        

$conn->close();  // Fechando a conexão
header('Location: cadastro.php');
exit;
