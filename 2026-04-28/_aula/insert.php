<?php
if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header('Location: produtos.php');
    die();
}

$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

try {
    require 'conexao.php';

    $sql = "INSERT INTO tb_produto(nome, quantidade, preco) 
            VALUES (:nome, :quantidade, :preco)";
    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":quantidade", $quantidade);
    $stmt->bindParam(":preco", $preco);
    $stmt->execute();

    header("Location: produtos.php");
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
} finally {
    $conexao = null;
}
