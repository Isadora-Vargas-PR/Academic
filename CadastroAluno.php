<?php
include("conexao.php");

$nome = $_POST['Nome_Aluno'];
$instituicao = $_POST['Instituicao_Aluno'];
$matricula = $_POST['Matricula'];
$ano = $_POST['Ano'];
$turno = $_POST['Turno'];
$email = $_POST['Email'];
$senha = $_POST['Senha'];

$sql = "INSERT INTO tb_aluno(Nome_Aluno, Instituicao_Aluno, Matricula, Ano, Turno, Email, Senha) VALUES ('$nome', $instituicao, '$matricula', $ano, '$turno', '$email',  '$senha')";

    if (mysqli_query($conexao, $sql)) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro" . mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);

    //quando o usuário clicar em "submit" acessar o MenuADM.html
?>