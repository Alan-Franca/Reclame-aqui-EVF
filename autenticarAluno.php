<?php
session_start(); // Inicia a sessão
include('conexao.php');

if (isset($_POST['nome']) && isset($_POST['senha'])) { 

    $nome = $mysqli->real_escape_string($_POST['nome']);
    $senha = $mysqli->real_escape_string($_POST['senha']);
    
    $sql_code = "SELECT * FROM alunos WHERE nome = '$nome' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {
        $usuario = $sql_query->fetch_assoc();

        $_SESSION['senha'] = $usuario['senha'];
        $_SESSION['nome'] = $usuario['nome'];

        if ($nome == 'ADM' && $senha == '123') { 
            header("Location: painelADM.php");
        } else {
            header("Location: painel.php");
        }
    } else {
        $_SESSION['mensagem_login'] = "Falha ao logar! Nome ou senha incorretos.";
        header("Location: Max - Teste.php");
        
    }
}
?>