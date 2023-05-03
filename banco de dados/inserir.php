<?php
    include("conecta.php");

    $id_conta  = $_POST["id_conta"];
    $nome_conta       = $_POST["nome_conta"];
    $senha_conta      = $_POST["senha_conta"];

    $comando = $pdo->prepare("INSERT INTO id_conta VALUES($id_conta,'$nome_conta',$senha_conta)" );
    $resultado = $comando->execute();

    // Para voltar no formulário:
    header("Location: cadastro.html");


?>