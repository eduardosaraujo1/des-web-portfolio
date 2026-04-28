<?php
if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    header('Location: produtos.php');
    die();
}

$id = $_POST['id'];
$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];

try {
    require 'conexao.php';

    $sql = "UPDATE tb_produto SET 
                nome=:nome,
                quantidade=:quantidade,
                preco=:preco 
            WHERE id=:id";
    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(":id", $id);
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
