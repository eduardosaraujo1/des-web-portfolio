<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Produto</title>
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
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <label>Produto</label>
            <input required class="input" type="text" name="nome"><br><br>
            <label>Quantidade</label>
            <input required class="input" type="number" name="quantidade"><br><br>
            <label>Preço</label>
            <input required class="input" type="number" name="preco" step="0.01"><br><br>
            <label>Foto:</label>
            <input required type="file" name="arquivo"><br><br>
            <input type="submit" class="btn" value="Salvar">
        </form>
        <br>
    </main>




</body>

</html>