<?php
session_start();

$nome = $_POST['nome'];
$senha = $_POST['senha'];

$conexao = mysqli_connect("localhost", "root", "", "projeto1");

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

$sql_verificacao = "SELECT * FROM Alunos WHERE nome = '$nome'";
$resultado = mysqli_query($conexao, $sql_verificacao);

if (mysqli_num_rows($resultado) > 0) {
    $_SESSION['mensagem_cadastro'] = "Erro, já existe uma pessoa com esse nome";
} else {
    $sql = "INSERT INTO Alunos (nome, senha) VALUES ('$nome', '$senha')";
    
    if (mysqli_query($conexao, $sql)) {
        $_SESSION['mensagem_cadastro'] = "Aluno cadastrado com sucesso!";
    } else {
        $_SESSION['mensagem_cadastro'] = "Erro: " . mysqli_error($conexao);
    }
}

mysqli_close($conexao);

header("Location: Max - Teste.php");
exit;
?>