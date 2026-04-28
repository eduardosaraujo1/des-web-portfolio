<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <h1>Novo Produto</h1>
    <form action="insert.php" method="post">
        <label for="nome">Produto</label>
        <input type="text" name="nome" id="nome"><br><br>
        <label for="quantidade">Quantidade</label>
        <input type="number" id="quantidade" name="quantidade"><br><br>
        <label for="preco">Preço</label>
        <input type="number" id="preco" name="preco" step="0.01"><br><br>

        <input type="submit" value="Salvar">
    </form>
    <br>
    <a href="produtos.php">Ver produtos</a>
</body>

</html>