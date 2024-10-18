<?php

session_start();
$usuario = $_SESSION['nome'];
$senha = $_SESSION['senha'];
$feedback = $_POST['feedback'];
$id_professor = $_POST['id_professor'];


$conexao = mysqli_connect("localhost", "root", "", "projeto1");


$sql = "SELECT id_aluno FROM alunos WHERE nome = '$usuario' AND senha = $senha";
$resultado = mysqli_query($conexao, $sql);

$row = mysqli_fetch_assoc($resultado);
$id_aluno = $row['id_aluno'];


$sql = "INSERT INTO feedback_Aluno (feedback, id_aluno, id_professor) VALUES ('$feedback', '$id_aluno', '$id_professor')";

if (mysqli_query($conexao, $sql)) {
    $_SESSION['message'] = "Feedback enviado com sucesso";
} else {
    $_SESSION['message'] = "Erro ao enviar feedback: " . mysqli_error($conexao);
}


mysqli_close($conexao);
header("Location: teste.php");
exit();

?>
