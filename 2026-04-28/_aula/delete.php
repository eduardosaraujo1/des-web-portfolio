<?php

$id = $_GET['id'] ?? null;

if (empty($id)) {
    header('Location: produtos.php');
    die();
}

try {
    require 'conexao.php';

    $delete = $conexao->prepare("DELETE FROM tb_produto WHERE id=:id");
    $delete->execute(['id' => $id]);

    header('Location: produtos.php');
} catch (PDOException $th) {
    echo "Erro: " . $th->getMessage();
} finally {
    $conexao = null;
}
