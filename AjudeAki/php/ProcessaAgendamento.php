<?php
session_start();
include("conexao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $data = $_POST['data'];
    $horario = $_POST['horario'];
 
    $sql = "INSERT INTO agendamentos (data, horario) VALUES ('$data', '$horario')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../html/SolicitacaoVoluntario.html");
        exit(); 
    } else {
        echo "Erro: " . $conn->error;
    }

    $conn->close();
}
?>
