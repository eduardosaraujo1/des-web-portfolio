<?php
$nome = $_POST['nome'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['preco'];
try{
    //CONECTA AO BANCO
    require('conexao.php');
    
    
    require('upload.php');
    
    //CRIA A QUERY DE INSERT
    $sql = "INSERT INTO tb_produto(nome,quantidade, preco, foto)
    VALUES (:nome,:quantidade,:preco, :foto)";


//PREPARA A QUERY PARA SER EXECUTADA
$inserir = $conexao->prepare($sql);

echo $arquivo;
//PASSA OS VALORES PARA AS REFERENCIAS NA QUERY
$inserir->bindParam(':nome',$nome);
$inserir->bindParam(':quantidade',$quantidade);
$inserir->bindParam(':preco',$preco);
$inserir->bindParam(':foto',$arquivo);

//EXECUTA A QUERY (SALVA OS DADOS NO BANCO)
$inserir->execute();


//REDIRECIONA PARA OUTRA PAGINA
header('Location: produtos.php');

}

catch(PDOException $e){
    echo "Error: " .$e->getMessage();
}
//FECHA A CONEXAO COM O BANCO
$conexao = null;