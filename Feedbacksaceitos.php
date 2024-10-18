<?php
session_start();
// Conectar ao banco de dados
$conexao = mysqli_connect("localhost", "root", "", "projeto1");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recuperar os dados enviados
    $id_professor = $_POST['id_professor'];
    $nome_professor = $_POST['nome_professor'];
    $feedback = $_POST['feedback'];
    $id_feedback = $_POST['id_feedback'];

    // Inserir na tabela feedback_aceitos
    $sql1 = "INSERT INTO feedback_aceitos (id_professor, id_feedback, nome_professor, feedback) 
                   VALUES ($id_professor, $id_feedback, '$nome_professor', '$feedback')";
    mysqli_query($conexao, $sql1);

    // Excluir da tabela feedback_aluno
    $sql2 = "DELETE FROM feedback_aluno WHERE id_feedback = $id_feedback";
    mysqli_query($conexao, $sql2);

    // Mensagem de sucesso
    $_SESSION['message'] = "Feedback aceito com sucesso";
}

// Fechar a conexão
mysqli_close($conexao);

// Redirecionar para a página exibir2.php
header("Location: exibir2.php");
exit();
?>
