<?php
require_once "conexao.php";

/*INSERIR DADOS*/ 
if (!empty($_POST)) {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];

    // Usando consulta preparada para evitar injeção de SQL
    $stmt = $conexao->prepare("INSERT INTO formulario (nome, idade, cpf) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $nome, $idade, $cpf);

    if ($stmt->execute()) {
        echo "<h2>Usuário Cadastrado</h2>";
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Dados não recebidos.<br>";
}

/*DELETAR DADOS*/
if(isset($_POST['action']) && $_POST['action'] == 'delete'){
    $sqlSelect = "DELETE FROM formulario WHERE id=$id";
    
}
?>
