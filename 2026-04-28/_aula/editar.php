<?php

require('conexao.php');

$id = $_GET['id'];

$select = $conexao->prepare("SELECT * FROM tb_produto where id=$id");

$select->execute();

$produto = $select->fetch();


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produtos</title>
</head>

<body>
    <h1>Editar Produto</h1>
    <form action="update.php" method="post">
        <label>ID</label>
        <input type="text" name="id" readonly value="<?php echo $produto["id"] ?>"><br><br>
        <label for="nome">Produto</label>
        <input type="text" name="nome" id="nome" value="<?php echo $produto["nome"] ?>"><br><br>
        <label for="quantidade">Quantidade</label>
        <input type="number" id="quantidade" name="quantidade" value="<?php echo $produto["quantidade"] ?>"><br><br>
        <label for="preco">Preço</label>
        <input type="number" id="preco" name="preco" step="0.01" value="<?php echo $produto["preco"] ?>"><br><br>

        <input type="submit" value="Salvar">
    </form>
    <br>
</body>

</html>

<?php

$conexao = null;

?>