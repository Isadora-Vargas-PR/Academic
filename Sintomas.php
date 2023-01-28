<?php
include("conexao.php");

$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados['AddSintomas'])) {
    var_dump($dados);


        if(!isset($dados['Testou_Positivo'])){
            $dados['Testou_Positivo'] = false;
        }

        if(!isset($dados['Febre'])){
            $dados['Febre'] = false;
        }

        if(!isset($dados['Tosse'])){
            $dados['Tosse'] = false;
        }

        if(!isset($dados['Dificuldade_Respirar'])){
            $dados['Dificuldade_Respirar'] = false;
        }

        if(!isset($dados['Contato_Suspeito'])){
            $dados['Contato_Suspeito'] = false;
        }

        if(!isset($dados['Contato_Confirmado'])){
            $dados['Contato_Confirmado'] = false;
        }

        if(!isset($dados['Grupo_Risco'])){
            $dados['Grupo_Risco'] = false;
        }

    $query_sintomas = "INSERT INTO tb_registro (Testou_Positivo, Febre, Tosse, Dificuldade_Respirar, Contato_Suspeito,
         Contato_Confirmado, Faixa_Etaria, Grupo_Risco, Impacto_Escolar) VALUES (:Testou_Positivo, :Febre, :Tosse, :Dificuldade_Respirar, 
         :Contato_Suspeito, :Contato_Confirmado, :Faixa_Etaria, :Grupo_Risco, :Impacto_Escolar )";

    $cad_sintomas = $conn->prepare($query_sintomas);
    $cad_sintomas->bindParam(':Testou_Positivo', $dados['Testou_Positivo']);
    $cad_sintomas->bindParam(':Febre', $dados['Febre']);
    $cad_sintomas->bindParam(':Tosse', $dados['Tosse']);
    $cad_sintomas->bindParam(':Dificuldade_Respirar', $dados['Dificuldade_Respirar']);
    $cad_sintomas->bindParam(':Contato_Suspeito', $dados['Contato_Suspeito']);
    $cad_sintomas->bindParam(':Contato_Confirmado', $dados['Contato_Confirmado']);
    $cad_sintomas->bindParam(':Faixa_Etaria', $dados['Faixa_Etaria']);
    $cad_sintomas->bindParam(':Grupo_Risco', $dados['Grupo_Risco']);
    $cad_sintomas->bindParam(':Impacto_Escolar', $dados['Impacto_Escolar']);

    $cad_sintomas->execute();

    if($cad_sintomas->rowCount()) {
        echo "Sintomas cadastrados com sucesso!";
    }else{
        echo "Erro: Sintomas não cadastrados!";
    }
}


?>