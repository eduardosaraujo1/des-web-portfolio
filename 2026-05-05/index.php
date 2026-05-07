<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Novo Produto</h1>
<form action ="insert.php" method="POST" enctype="multipart/form-data">
    
    <label>Produto</label>
    <input type="text" name="nome"><br><br>

    <label>Quantidade</label>
    <input type="numer" name="quantidade"><br><br>

    <label>Preço</label>
    <input type="number" name="preco" step="0.01"><br><br>

    <label>Foto:</label>
            <input type="file" name="arquivo"><br><br>

    <input type="submit" value="Salvar">
</form>

    <br>
    <a href="produtos.php">Ver Produtos </a>




</body>
</html>