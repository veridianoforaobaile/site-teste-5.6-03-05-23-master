<?php
    include("conecta.php");
    // Para pegar o texto dos inputs:
    $id_conta  = $_GET["M"];
    

    $comando = $pdo->prepare("DELETE FROM nome_conta WHERE id_conta=$id_conta");

    $resultado = $comando->execute();

    // Para voltar no formulário:
    header("Location: cadastro.html");
?>