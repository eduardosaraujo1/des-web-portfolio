<?php
    $arquivo = null;
    if (isset($_FILES["arquivo"])) {
        $nome = $_POST["nome"];
        
        // DIR em que a imagem será salva
        $pasta =  "images/";

        // recupera a extensão da imagem
        $extensao = strtolower(pathinfo($_FILES["arquivo"]["name"], PATHINFO_EXTENSION));

        // define o caminho definitivo da imagem (onde será salva)
        $arquivo = $pasta . $nome . "." . $extensao;

        // verifica se é uma imagem
        $info = getimagesize($_FILES["arquivo"]["tmp_name"]);

        // se for imagem
        if ($info !== false) {
            // mostra que é uma imagem e sua extensão
            echo "É uma imagem do tipo: " . $info["mime"];

            // verifica se existe uma imagem com o mesmo nome e extensão
            if (file_exists($arquivo)) {
                echo "<br>Erro: Já existe um arquivo com esse nome.";
            } else {
                // se não existir, salve imagem no caminho definitivo
                if (move_uploaded_file($_FILES["arquivo"]["tmp_name"], $arquivo)) {
                    echo "<br>Imagem salva em: " . $arquivo;
                } else {
                    echo "<br>Erro ao salvar a imagem.";
                }
            }

        } else {
            echo "O arquivo não é uma imagem.";
        }
    }
?>