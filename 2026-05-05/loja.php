<?php
require('conexao.php');

$select = $conexao->query("SELECT*FROM tb_produto");
?>

<!DOCTYPE html>
<!-- ABREVIAÇÕES EMMET:
 
form.classeNova#ides
<form class="classeNova" id="ides"> </form>

form.card>input#nome
<form>
    <input id="nome" />
</form>

F1, Remove Tag
(selecionar código), F1, Wrap with abreviation
 -->
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <span class="brand">Minha Loja</span>
        <ul class="navitems">
            <li class="navitem"><a href="#">Loja</a></li>
            <li class="navitem"><a href="index.php">Novo Produto</a></li>
            <li class="navitem"><a href="produtos.php">Gerenciar produtos</a></li>
        </ul>
    </nav>
    <main class="mx-4">
        <div class="product-grid my-2">
            <?php while ($produto = $select->fetch(PDO::FETCH_ASSOC)): ?>
                <form action="#" class="card center">
                    <img src="<?= $produto['foto'] ?>" alt="" class="foto-produto">
                    <span class="bold block font-big"><?= $produto['nome'] ?></span>
                    <span class="block"> <span>Quantidade:</span> <?= $produto['quantidade'] ?></span>
                    <span class="block bold">R$ <?= number_format($produto['preco'], 2, ',', '.') ?></span>
                    <button class="btn my-2 w-100">Comprar</button>
                </form>
            <?php endwhile; ?>
        </div>
    </main>
</body>

</html>