<?php
$id = $_GET['id'];

include('conexao.php');


    $select = $conexao->prepare("SELECT * FROM tb_produto WHERE id=$id");

    $delete->execute();

    $produto = $select->fetch();

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>
<form action ="update.php" method="POST">

    <label>ID</label>
    <input type="text" name="nome"  readonly value = "<?php echo $produto['id'];?>"><br><br>

    <label>Produto</label>
    <input type="text" name="nome" value = "<?php echo $produto['nome'];?>"><br><br>

    <label>Quantidade</label>
    <input type="numer" name="quantidade" value = "<?php echo $produto['quantidade'];?>"><br><br>

    <label>Preço</label>
    <input type="number" name="preco" step="0.01" value = "<?php echo $produto['preco'];?>"><br><br>

    <input type="submit" value="Salvar">
</form>
    <br>
    <a href="produtos.php">Ver Produtos </a>

</body>
</html>


<?php
$conexao = null;
?> 