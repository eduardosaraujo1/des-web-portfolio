<?php
$id = $_GET['id'];

include('conexao.php');


try {
    $delete = $conexao->prepare("DELETE FROM tb_produto WHERE id=$id");

    $delete->execute();

    header('Location: produtos.php');
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
