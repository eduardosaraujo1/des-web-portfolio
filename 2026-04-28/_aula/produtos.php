<?php
require 'conexao.php';

try {
    $stmt = $conexao->query("
        SELECT id, nome, quantidade, preco
        FROM tb_produto
    ");
} catch (PDOException $th) {
    echo "Erro: " . $th->getMessage();
} finally {
    $conexao = null;
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>

<body>
    <table border=1>
        <thead>
            <th>ID</th>
            <th>PRODUTO</th>
            <th>QUANTIDADE</th>
            <th>PRECO</th>
            <th>AÇÕES</th>
        </thead>
        <tbody>
            <?php if (isset($stmt) && $stmt->rowCount() > 0): ?>
                <?php while ($produto = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td><?= $produto['id'] ?></td>
                        <td><?= $produto['nome'] ?></td>
                        <td><?= $produto['quantidade'] ?></td>
                        <td>R$<?= number_format($produto['preco'], 2, ',', '.') ?></td>
                        <td>
                            <a href="editar.php?id=<?= $produto['id'] ?>">Editar</a>
                            <a href="delete.php?id=<?= $produto['id'] ?>" style="color:red">Excluir</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan=5>Nenhum resultado encontrado.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <br><br>
    <a href=".">Voltar</a>
</body>

</html>