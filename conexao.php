<?php
    $localhost = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "CRUD";
    $conexao = new mysqli($localhost, $usuario, $senha, $db);

    if ($conexao -> connect_error){
        die("<h4>NÃO CONECTADO: </h4>" .$conexao -> connect_error);
    } else {
        echo  "<h1>CONECTADO AO BANCO DE DADOS! </h1>";
    }
?>