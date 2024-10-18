<?php
session_start();


$conexao = mysqli_connect("localhost", "root", "", "projeto1");
if (!$conexao) {
    die("Erro de conexão: " . mysqli_connect_error());
}

if (isset($_POST['id_feedback'])) {
    $id_feedback = $_POST['id_feedback'];

    $sql = "DELETE FROM feedback_Aluno WHERE id_feedback = $id_feedback";
    $query = mysqli_prepare($conexao, $sql);
    

    
        if (mysqli_stmt_execute($query)) {
            $_SESSION['message'] = "Feedback excluído com sucesso!";
        } else {
            $_SESSION['message'] = "Erro ao excluir o feedback: " . mysqli_error($conexao);
        }
    }


mysqli_close($conexao);


header("Location: exibir2.php");
exit();
?>
