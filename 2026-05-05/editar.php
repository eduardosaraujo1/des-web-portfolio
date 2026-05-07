<?php
$id = $_GET['id'];

include('conexao.php');


$select = $conexao->prepare("SELECT * FROM tb_produto WHERE id=$id");

$select->execute();

$produto = $select->fetch();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <span class="brand">Minha Loja</span>
        <ul class="navitems">
            <li class="navitem"><a href="loja.php">Loja</a></li>
            <li class="navitem"><a href="#">Novo Produto</a></li>
            <li class="navitem"><a href="produtos.php">Gerenciar produtos</a></li>
        </ul>
    </nav>
    <main class="mx-4">
        <h1>Novo Produto</h1>
        <form action="update.php" method="POST">
            <label>ID</label>
            <input class="input" type="text" name="id" readonly value="<?php echo $produto['id']; ?>"><br><br>

            <label>Produto</label>
            <input class="input" type="text" name="nome" value="<?php echo $produto['nome']; ?>"><br><br>

            <label>Quantidade</label>
            <input class="input" type="numer" name="quantidade" value="<?php echo $produto['quantidade']; ?>"><br><br>

            <label>Preço</label>
            <input class="input" type="number" name="preco" step="0.01" value="<?php echo $produto['preco']; ?>"><br><br>
            <input type="submit" class="btn" value="Salvar">
        </form>
        <br>
    </main>




</body>

</html>
<?php
$conexao = null;
?>