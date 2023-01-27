<?php
    include("conexao.php");

    $nome = $_POST['Nome_Adm'];
    $codigo = $_POST['Id_Adm'];
    $instituicao = $_POST['Intituicao_Adm'];
    $email = $_POST['Email'];
    $senha = $_POST['Senha'];

    $sql = "INSERT INTO tb_administrador(Nome_Adm, Id_Adm, Intituicao_Adm, Email, Senha) VALUES ('$nome', $codigo, '$instituicao', '$email',  '$senha')";

    if(mysqli_query($conexao, $sql)){
        echo "Usuário cadastrado com sucesso!";
    }
    else{
        echo "Erro" .mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);


    //quando o usuário clicar em "submit" acessar o MenuADM.html
?>