<?php
//CREDENCIAIS DE ACESSO AO SGBD
$servername = "localhost";
$username = "root";
$password = "";

try{
    //OBJETO CONEXAO
    $conexao = new PDO ("mysql:host =$servername", $username,$password);

    //LANÇA AS EXECOES (ERROS DURANTE A CONEXÃO)
    $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //QUERY PARA CRIAR BANCO E A TABELA
    $sql = "CREATE DATABASE IF NOT EXISTS banco;
            USE banco;
            CREATE TABLE IF NOT EXISTS tb_produto(
            id int PRIMARY KEY AUTO_INCREMENT, 
            nome varchar(100) not null,
            quantidade int not null,
            preco decimal(10,2) NOT NULL,
            foto varchar(100) NOT NULL)";


         //EXECUTA A QUERY
         $conexao->exec($sql);
         //echo "Banco de dados criado com sucesso<br>";

        
        }

        //RETORNA A EXCESSAO (ERROS) DURANTE A CONEXAO
        catch(PDOException $e){
            echo $sql . "<br>" .$e->getMessage();
                }
        ?>