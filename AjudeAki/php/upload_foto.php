<?php
session_start();
include('conexao.php');

// Verifica se o usuário está logado
if (!isset($_SESSION['nome'])) {
    header('Location: login.php');
    exit();
}

// Verifica se o arquivo foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['foto'])) {
    $foto = $_FILES['foto'];

    // Verifica erros no upload
    if ($foto['error'] === UPLOAD_ERR_OK) {
        // Define o diretório e o nome do arquivo
        $diretorio = 'uploads/';
        $extensao = pathinfo($foto['name'], PATHINFO_EXTENSION);
        $nome_arquivo = uniqid('foto_', true) . '.' . $extensao;
        $caminho_arquivo = $diretorio . $nome_arquivo;

        // Move o arquivo para o diretório
        if (move_uploaded_file($foto['tmp_name'], $caminho_arquivo)) {
            // Atualiza o caminho da foto no banco de dados
            $nome = $_SESSION['nome'];
            $query = "UPDATE usuarios SET foto = ? WHERE nome = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ss", $caminho_arquivo, $nome);
            if ($stmt->execute()) {
                // Redireciona de volta para o perfil
                header('Location: perfil.php');
                exit();
            } else {
                echo "Erro ao salvar no banco de dados: " . $conn->error;
            }
        } else {
            echo "Erro ao mover o arquivo.";
        }
    } else {
        echo "Erro no upload: " . $foto['error'];
    }
} else {
    echo "Nenhum arquivo enviado.";
}
?>
