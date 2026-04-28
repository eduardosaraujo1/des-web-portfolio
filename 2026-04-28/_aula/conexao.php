<?php
$servename = "localhost";
$username = "admin";
$password = "admin";

try {
    $conexao = new PDO("mysql:host=$servename", $username, $password);

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $sql = "
    CREATE DATABASE IF NOT EXISTS banco;
    USE banco;
    CREATE TABLE IF NOT EXISTS tb_produto(
        id INT PRIMARY KEY AUTO_INCREMENT,
        nome VARCHAR(100) NOT NULL,
        quantidade INT NOT NULL,
        preco DECIMAL(10,2) NOT NULL
    );
    ";

    $conexao->exec($sql);
    // echo "Banco de dados criado com sucesso<br>";
} catch (\PDOException $e) {
    echo ($sql ?? "Query desconhecida") . "<br>" . $e->getMessage();
}
