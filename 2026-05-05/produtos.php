<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>produtos</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .w-100 {
            width: 100%;
        }
    </style>
</head>
<body>
    <nav>
        <span class="brand">Minha Loja</span>
        <ul class="navitems">
            <li class="navitem"><a href="loja.php">Loja</a></li>
            <li class="navitem"><a href="index.php">Novo Produto</a></li>
            <li class="navitem"><a href="#">Gerenciar produtos</a></li>
        </ul>
    </nav>
    <div class="w-100">
        <?php
        require('conexao.php');
        $select = $conexao->query("SELECT*FROM tb_produto");
        echo "<table border = '1'>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Foto</th>";
        echo "<th>Nome</th>";
        echo "<th>Quantidade</th>";
        echo "<th>Preço</th>";
        echo "<th>Ações</th>";
        echo "</tr>";
        while($produto = $select->fetch(PDO::FETCH_ASSOC))
        {
        
            echo "<tr>";
            echo "<td> {$produto['id']} </td>";
            echo "<td> <img src='{$produto['foto']}' style='width:60px'> </td>";
            echo "<td> {$produto['nome']} </td>";
            echo "<td> {$produto['quantidade']} </td>";
            echo "<td> {$produto['preco']} </td>";
            echo "<td><a href= 'editar.php? id={$produto['id']}'>Editar</a> |
                <a href= 'delete.php? id={$produto['id']}'>Excluir</a>
                </td>";
            echo "</tr>";
        }
        echo "</table>";
        //FECHA A CONEXAO
        $conexao = null;
        ?>
        
    </div>
</body>
</html>

